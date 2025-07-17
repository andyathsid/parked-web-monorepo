from fastapi import FastAPI
from fastapi.middleware.cors import CORSMiddleware
from fastapi.responses import JSONResponse
from fastapi import Body
from pydantic import BaseModel, Field
from typing import Optional, Any
import os
import tempfile
import requests
from app.services.voice_measurements import VoiceMeasurementService
from app.services.handwriting import HandwritingService
from app.services.neuroimaging import NeuroimagingService
from keras_image_helper import create_preprocessor

class PredictRequest(BaseModel):
    vm_url: Optional[str] = Field(None, alias="vm-url")
    hw_url: Optional[str] = Field(None, alias="hw-url")
    ni_url: Optional[str] = Field(None, alias="ni-url")

    class Config:
        validate_by_name = True

class PredictResponse(BaseModel):
    vm_result: Optional[Any] = Field(None, alias="vm-result")
    vm_error: Optional[str] = Field(None, alias="vm-error")
    hw_result: Optional[Any] = Field(None, alias="hw-result")
    hw_error: Optional[str] = Field(None, alias="hw-error")
    ni_result: Optional[Any] = Field(None, alias="ni-result")
    ni_error: Optional[str] = Field(None, alias="ni-error")

    class Config:
        allow_population_by_field_name = True

app = FastAPI()

@app.get("/health")
async def health():
    return {"status": "ok"}

# CORS: allow all origins, methods, headers (matches Laravel config)
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=False,
    allow_methods=["*"],
    allow_headers=["*"],
)

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

@app.post("/api/predict", response_model=PredictResponse, response_model_by_alias=True)
async def predict(payload: PredictRequest = Body(..., embed=False)):
    result = {}

    # Voice Measurements prediction
    if payload.vm_url:
        try:
            file_path = download_file(payload.vm_url)
            preprocessed_data = vm_service.preprocess_audio(file_path)
            prediction, error = vm_service.predict(preprocessed_data)
            result.update({
                "vm-result": prediction,
                "vm-error": error
            })
        except Exception as e:
            result.update({
                "vm-result": None,
                "vm-error": str(e)
            })
        finally:
            if 'file_path' in locals() and os.path.exists(file_path):
                os.remove(file_path)

    # Handwriting prediction
    if payload.hw_url:
        try:
            preprocessed_data = preprocess_image_hw(payload.hw_url)
            prediction, error = hw_service.predict(preprocessed_data)
            result.update({
                "hw-result": prediction,
                "hw-error": error
            })
        except Exception as e:
            result.update({
                "hw-result": None,
                "hw-error": str(e)
            })

    # Neuroimaging prediction
    if payload.ni_url:
        try:
            preprocessed_data = preprocess_image_ni(payload.ni_url)
            prediction, error = ni_service.predict(preprocessed_data)
            result.update({
                "ni-result": prediction,
                "ni-error": error
            })
        except Exception as e:
            result.update({
                "ni-result": None,
                "ni-error": str(e)
            })

    if not result:
        return JSONResponse(content={'error': 'No valid URL provided'}, status_code=400)

    return result

if __name__ == "__main__":
    import uvicorn
    uvicorn.run("main:app", host="0.0.0.0", port=5000, reload=True)
