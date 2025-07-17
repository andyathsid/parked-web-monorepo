import tflite_runtime.interpreter as tflite
import numpy as np
from app.utils.model_path import get_model_path

class HandwritingService:
    def __init__(self):
        self.model = self._load_model()
        
    def _load_model(self):
        """Load the TFLite model"""
        model_path = get_model_path('model_hw_newhandpd_aug-ilum_rasnet50.tflite')
        interpreter = tflite.Interpreter(model_path=model_path)
        interpreter.allocate_tensors()
        return interpreter
    
    def predict(self, preprocessed_data):
        """Make prediction using the loaded model"""
        try:
            # Get input and output tensors
            input_index = self.model.get_input_details()[0]['index']
            output_index = self.model.get_output_details()[0]['index']
            
            # Make prediction
            self.model.set_tensor(input_index, preprocessed_data)
            self.model.invoke()
            prediction = self.model.get_tensor(output_index)
            
            # Process result 
            final_prediction = bool(prediction[0][0] >= 0.8)
            return final_prediction, None
            
        except Exception as e:
            return None, str(e)