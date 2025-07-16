from pathlib import Path

def get_model_path(filename):
    app_dir = Path(__file__).parent.parent
    return str(app_dir / "models" / filename)