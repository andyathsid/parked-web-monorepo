import pickle
import numpy as np
from sklearn.preprocessing import MinMaxScaler
from app.utils.mdvr_extraction import process_single_file_for_prediction
from app.utils.model_path import get_model_path

class VoiceMeasurementService:
    def __init__(self):
        self.model = self._load_model()
        
    def _load_model(self):
        """Load the KNN model"""
        model_path = get_model_path('model_vm_mdvr-kcl_knn.bin')
        with open(model_path, 'rb') as f:
            return pickle.load(f)
    
    def preprocess_audio(self, file_path):
        """Preprocess audio by extracting features and scaling"""
        processed_data = process_single_file_for_prediction(file_path)
        if processed_data is not None:
            X_test = processed_data.values
            scaler = MinMaxScaler()
            X_test_scaled = scaler.fit_transform(X_test)
            return X_test_scaled
        else:
            raise Exception('Failed to process the audio file')
    
    def predict(self, preprocessed_data):
        """Make prediction using the loaded model"""
        try:
            probabilities = self.model.predict_proba(preprocessed_data)
            total_probabilities = probabilities.sum(axis=0)
            final_prediction = bool(total_probabilities.argmax())
            return final_prediction, None
        except Exception as e:
            return None, str(e)