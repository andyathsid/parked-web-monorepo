# 🧠 ParkED

<div align="center">
  <img src="web/public/assets/logo/logo_ParkED_with_text.png" alt="ParkED Logo" width="300"/>
  
  <h2>🩺 AI-Powered Parkinson Screening Tool</h2>
  <p><em>ParkED: Parkinson Early Detection System</em></p>
  
  [![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
  [![Python](https://img.shields.io/badge/Python-3.8+-3776AB?style=for-the-badge&logo=python&logoColor=white)](https://python.org/)
  [![TensorFlow](https://img.shields.io/badge/TensorFlow-2.10+-FF6F00?style=for-the-badge&logo=tensorflow&logoColor=white)](https://tensorflow.org/)
  [![Google Cloud](https://img.shields.io/badge/Google_Cloud-4285F4?style=for-the-badge&logo=google-cloud&logoColor=white)](https://cloud.google.com/)
  [![FastAPI](https://img.shields.io/badge/FastAPI-0.100+-009688?style=for-the-badge&logo=fastapi&logoColor=white)](https://fastapi.tiangolo.com/)

</div>

---

## 🌟 **Platform Overview**

ParkED is an AI-powered platform for early detection of Parkinson's Disease. It combines advanced voice, handwriting, and neuroimaging analysis to deliver rapid, accessible screening via a user-friendly web interface. The system is designed for clinical and research use, enabling scalable, multi-modal Parkinson's screening.

---

## 🏗️ **System Architecture**

ParkED is built as a modular monorepo:

- **Web Frontend (Laravel):** User interface for data input, results, and management.
- **Diagnosis Service (FastAPI):** Backend service for processing and AI inference.
- **Research Modules (Python/TensorFlow):** AI/ML models for voice, handwriting, and neuroimaging analysis.

### 🔄 **Service Interaction Flow**

1. User submits data via the web interface.
2. Web frontend sends data to the diagnosis service API.
3. Diagnosis service loads relevant AI models from research modules.
4. Results are returned to the frontend for display.

---

## 📁 **Repository Structure**

```
web/                       # Laravel frontend application
services/diagnosis-service/ # FastAPI backend for AI inference
research/                  # AI/ML models and experiments
  ├── voice-measurements-detection/
  ├── hand-writing-detection/
  └── datscan-detection/
```

---

## 🚀 **Quick Start Guide**

### 📋 **System Requirements**

```bash
# Required Software
- Python >= 3.8
- Node.js >= 16.x
- Docker (recommended for deployment)
- Composer (for Laravel)
- pip (for Python dependencies)

# Recommended Development Tools
- VSCode or JetBrains IDE
- Git
```

### ⚡ **One-Command Setup**

```bash
# Clone the repository
git clone https://github.com/andyathsid/parked-web-monorepo.git

# Option 1: Development Setup (Recommended)
./scripts/dev-setup.sh  # Coming soon!

# Option 2: Manual Setup (Current)
# See individual README files for detailed instructions
```

### 🔧 **Manual Development Setup**

#### 1️⃣ **Web (Laravel) Setup**

The `web/` directory contains the Laravel 10.x frontend application for ParkED.

##### **Features**
- User authentication (email/password, Google OAuth, email verification)
- Diagnosis form: upload handwriting, audio, neuroimaging files; supports direct audio recording
- AI integration: sends uploaded data to diagnosis API and displays results
- PDF export of diagnosis results
- Admin dashboard and user management
- History tracking
- Resource/information pages

##### **Local Development Setup**
```bash
# Install PHP dependencies
composer install

# Install frontend dependencies
npm install

# Copy environment file and set variables
cp .env.example .env
# Edit .env with your database/API credentials

# Generate app key
php artisan key:generate

# Run migrations and seeders
php artisan migrate --seed

# Create storage symlink
php artisan storage:link

# Start development server
php artisan serve

# Start Vite for frontend assets
npm run dev
```

##### **Docker Setup**
```bash
docker build -t parked-web .
docker run -p 8080:8080 parked-web
```

##### **Environment Variables**
See `.env.example` for all required variables:
- `APP_KEY`, `APP_URL`, `DB_CONNECTION`, `DATABASE_URL`, `API_DIAGNOSIS_URL`, Google OAuth keys, mail settings, etc.

##### **Folder Structure**
```
web/
├── app/                # Controllers, Models, Middleware
├── bootstrap/          # Laravel bootstrap files
├── config/             # Configuration files
├── database/           # Migrations, seeders, factories
├── public/             # Public assets, entry point
├── resources/          # Blade views, CSS, JS
├── routes/             # Route definitions
├── storage/            # Uploaded files, logs, cache
├── tests/              # Unit and feature tests
├── Dockerfile*         # Docker support
├── deploy.sh           # Cloud Run deployment script
├── package.json        # Frontend dependencies
├── composer.json       # PHP dependencies
└── .env*               # Environment configuration
```

##### **Deployment**
- **Cloud Run:** Use `deploy.sh` to build, push, and deploy the Docker image to Google Cloud Run.
- **Manual:** Deploy on any PHP 8.1+ server with Composer and Node.js.

##### **Key Dependencies**
- Laravel 10.x, Sanctum, Socialite, DomPDF, SweetAlert, Guzzle, Vite, Axios

##### **Usage**
- Register/login, verify email, or use Google OAuth.
- Submit diagnosis form with required files.
- View results and download PDF.
- Admins can manage users and view history.

```

#### 2️⃣ **Diagnosis Service (FastAPI) Setup**

The `services/diagnosis-service/` directory contains the FastAPI backend for AI-powered Parkinson's screening.

##### **Overview**
- Receives URLs for voice, handwriting, and neuroimaging files.
- Runs inference using pre-trained models for each modality.
- Returns structured results via REST API.
- Dockerized for cloud deployment (Google Cloud Run).

##### **Features**
- `/api/predict`: Accepts URLs for voice, handwriting, and neuroimaging files. Returns predictions and error messages for each modality.
- `/health`: Health check endpoint.
- Modular services for each modality (voice, handwriting, neuroimaging).
- CORS enabled for all origins (for frontend integration).

##### **Local Development**
```bash
# Install dependencies (recommended: use virtualenv)
uv sync --frozen --no-install-project --no-dev

# Run the FastAPI app
uvicorn main:app --host 0.0.0.0 --port 8080
```

##### **Docker Setup**
```bash
docker build -t diagnosis-service .
docker run -p 8080:8080 diagnosis-service
```

##### **Environment Variables**
- Most configuration is via model files and code. If you use cloud storage or external APIs, set relevant env vars.
- For Google Cloud Run, use `deploy.sh` and optionally `env-to-gcloud-envs.sh` for env var injection.

##### **API Documentation**
- Interactive OpenAPI docs:  
  [/api/docs](https://parked-diagnosis-846001887790.asia-southeast1.run.app/api/docs)

##### **Folder Structure**
```
services/diagnosis-service/
├── app/                # Service modules, models, utils
├── main.py             # FastAPI entrypoint
├── pyproject.toml      # Python dependencies
├── uv.lock             # Locked dependencies
├── Dockerfile          # Docker build
├── deploy.sh           # Cloud Run deployment script
```

##### **Deployment**
- **Cloud Run:** Use `deploy.sh` to build, push, and deploy to Google Cloud Run.
- **Manual:** Run with Docker or Uvicorn on any Python 3.11+ server.

##### **Key Dependencies**
- fastapi, uvicorn, tflite-runtime, scikit-learn, pandas, keras-image-helper, praat-parselmouth, pydub

##### **Usage**
- Send a POST request to `/api/predict` with URLs to your data files.
- Receive structured predictions for each modality.

```

#### 3️⃣ **Research Modules**

The `research/` directory contains the source code, data, and models for the three main AI modalities used in ParkED:

- **Voice Measurements Detection:** Feature extraction and classification for voice-based Parkinson's screening.
- **Handwriting Detection:** Deep learning models for handwriting analysis.
- **Datscan Detection:** Neuroimaging analysis using Datscan images.

Each subfolder contains:
- `data/`: Raw and processed datasets.
- `models/`: Trained model files (e.g., `.h5`, `.keras`, `.bin`).
- `src/`: Jupyter notebooks and scripts for training, evaluation, and feature extraction.

**Usage:**
- Notebooks and scripts are provided for reproducibility and further research.
- Models in `models/` are loaded by the diagnosis service for inference.
- To run experiments or retrain models, open the relevant notebook in each modality's `src/` folder.

**Submodules:**
- `voice-measurements-detection/`
  - Acoustic and MFCC feature extraction.
  - KNN-based classification.
- `hand-writing-detection/`
  - Image preprocessing and augmentation.
  - Deep learning (RasNet50, VGG16).
- `datscan-detection/`
  - Datscan image processing.
  - VGG16-based neuroimaging detection.

**Getting Started:**
- Install Python 3.8+ and required dependencies (see notebooks/scripts for details).
- Open and run the Jupyter notebooks in each `src/` folder to explore data and model training.

---

## 🌐 **Live Deployments**

### 🔴 **Production Services**

| Service                | URL   | Status |
|------------------------|-------|--------|
| **🌐 Web**             | [parked.andyathsid.com](https://parked.andyathsid.com)  | 🟢 Live |
| **📊 Diagnosis Service** | [https://parked-diagnosis....run.app](https://parked-diagnosis-846001887790.asia-southeast1.run.app)  | 🟢 Live |

---

## 🎯 **Key Features**

### 🤖 **AI-Powered Screening**

```typescript
AI Features:
├── 🧠 Voice Measurement (model accuracy: )
│   ├── Acoustic feature extraction
│   ├── MFCC analysis
│   └── KNN-based classification
├── 📸 Handwriting Analysis (model accuracy: )
│   ├── Image preprocessing
│   ├── Deep learning (RasNet50, VGG16)
│   └── Automated scoring
└── 💬 Neuroimaging Analysis (model accuracy: )
    ├── Datscan image processing
    ├── VGG16-based detection
    └── Clinical report generation
```

- Multi-modal input support
- Real-time screening
- Scalable cloud deployment

---

## 💻 **Technology Stack**



### 🎨 **Web Technologies**
- Laravel (PHP)
- JavaScript, CSS, Blade templates

### 🤖 **AI/ML Technologies**
- Python 3.8+
- TensorFlow, Keras, scikit-learn
- FastAPI

### ☁️ **Cloud & DevOps**
- Google Cloud Platform
- Docker



---

## 🚀 **Getting Started**

### 🔥 **For Developers**

- Fork and clone the repository.
- Follow setup instructions for each module.
- Contribute via pull requests.

---

## 📄 **License**

This project is licensed under the **MIT License** - see the [LICENSE](https://choosealicense.com/licenses/mit/) here

```
MIT License - Open Source Freedom
├── ✅ Commercial use
├── ✅ Modification
├── ✅ Distribution
├── ✅ Private use
└── ❌ Liability & Warranty
```

---
