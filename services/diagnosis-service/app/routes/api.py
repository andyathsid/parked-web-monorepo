from flask import Blueprint, request, jsonify
import os
import tempfile
import requests
from app.services.voice_measurements import VoiceMeasurementService
from app.services.handwriting import HandwritingService
from app.services.neuroimaging import NeuroimagingService
from keras_image_helper import create_preprocessor

api = Blueprint('api', __name__)
vm_service = VoiceMeasurementService()
hw_service = HandwritingService()
ni_service = NeuroimagingService()

def download_file(url):
    """Download file from URL to temporary file"""
    response = requests.get(url)
    if response.status_code == 200:
        with tempfile.NamedTemporaryFile(delete=False) as temp_file:
            temp_file.write(response.content)
            return temp_file.name
    else:
        raise Exception(f"Failed to download file. Status code: {response.status_code}")

def preprocess_image_hw(url):
    """Resize image and prepare as numpy array for model input"""
    preprocessor = create_preprocessor("resnet50", target_size=(224, 224))
    X = preprocessor.from_url(url)
    return X.astype('float32')

def preprocess_image_ni(url):
    """Resize image and prepare as numpy array for VGG16 neuroimaging model"""
    preprocessor = create_preprocessor("vgg16", target_size=(512, 512))
    X = preprocessor.from_url(url)
    return X.astype('float32')

@api.route('/predict', methods=['POST'])
def predict():
    try:
        data = request.get_json()
        result = {}
        
        # Voice Measurements prediction
        if 'vm-url' in data:
            try:
                file_url = data['vm-url']
                file_path = download_file(file_url)
                preprocessed_data = vm_service.preprocess_audio(file_path)
                prediction, error = vm_service.predict(preprocessed_data)
                result.update({
                    'vm-result': prediction,
                    'vm-error': error
                })
            except Exception as e:
                result.update({
                    'vm-result': None,
                    'vm-error': str(e)
                })
            finally:
                if 'file_path' in locals() and os.path.exists(file_path):
                    os.remove(file_path)

        # Handwriting prediction
        if 'hw-url' in data:
            try:
                file_url = data['hw-url']
                preprocessed_data = preprocess_image_hw(file_url)
                prediction, error = hw_service.predict(preprocessed_data)
                result.update({
                    'hw-result': prediction,
                    'hw-error': error
                })
            except Exception as e:
                result.update({
                    'hw-result': None,
                    'hw-error': str(e)
                })

        # Neuroimaging prediction
        if 'ni-url' in data:
            try:
                file_url = data['ni-url']
                preprocessed_data = preprocess_image_ni(file_url)
                prediction, error = ni_service.predict(preprocessed_data)
                result.update({
                    'ni-result': prediction,
                    'ni-error': error
                })
            except Exception as e:
                result.update({
                    'ni-result': None,
                    'ni-error': str(e)
                })
        
        if not result:
            return jsonify({'error': 'No valid URL provided'}), 400
            
        return jsonify(result)
        
    except Exception as e:
        return jsonify({'error': f"Unexpected error: {str(e)}"}), 500