@extends('frontend.layout.app')

@section('content')
    <div class="container my-5">
        <div class="row hero-section animate-on-scroll">
            <div class="col-md-6 hero-content">
                <h1 class="display-4 fw-bold">Learn About Parkinson's Disease Predictor</h1>
                <p class="lead">Discover way to manage</p>
                <a class="btn btn-light btn-ripple" href="/patient-info">Diagnose Now</a>
            </div>
            <div class="col-md-6 hero-image"></div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>What is Parkinson?</h2>
                <h3>Understanding Parkinson's Disease</h3>
                <p>Parkinson's disease is a progressive nervous system disorder that affects movement. Symptoms start
                    gradually, sometimes with a barely noticeable tremor in just one hand. Tremors are common, but the
                    disorder also commonly causes stiffness or slowing of movement. In the early stages of Parkinson's
                    disease, your face may show little or no expression. Your arms may not swing when you walk. Your
                    speech may become soft or slurred. Parkinson's disease symptoms worsen as your condition progresses
                    over time.</p>
            </div>
            <div class="col-md-6">
                <img src="assets/img/Image (2).png" alt="Neurons" class="img-fluid rounded" loading="lazy">
            </div>
        </div>

        <div class="predict-tool-section my-5 py-5 bg-warning animate-on-scroll">
            <div class="container">
                <h2 class="text-center mb-3 text-bold section-title no-animation animate-on-scroll delay-1">Our Predict
                    Tool</h2>
                <p class="text-center mb-5 animate-on-scroll delay-2">Our platform offers three main features to help
                    predict Parkinson's disease</p>

                <div class="row justify-content-center animate-on-scroll delay-3">
                    <div class="col-lg-8">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card h-100 bg-custom">
                                    <img src="assets/img/Spiral.png" class="card-img-top py-2 px-2" alt="Brain Image"
                                        loading="lazy">
                                    <div class="card-body">
                                        <h5 class="card-title">Diagnose 1</h5>
                                        <p class="card-text">Spiral Image Analysis: Using machine learning to analyze handmade spiral images
                                            for early detection of Parkinson's disease</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 bg-custom">
                                    <img src="assets/img/Voice.png" class="card-img-top py-2 px-2" alt="Brain Image"
                                        loading="lazy">
                                    <div class="card-body">
                                        <h5 class="card-title">Diagnose 2</h5>
                                        <p class="card-text">Voice Analysis: Uses machine learning to analyze voice
                                            patterns for early signs of Parkinson desease</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 bg-custom">
                                    <img src="assets/img/CTscan.png" class="card-img-top py-2 px-2" alt="Brain Image"
                                        loading="lazy">
                                    <div class="card-body">
                                        <h5 class="card-title">Diagnose 3</h5>
                                        <p class="card-text">CT Scan Analysis: Using machine learning to analyze brain CT scan images for
                                            first detection of Parkinson's disease </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5 animate-on-scroll">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <div class="rounded-image-container">
                        <img src="assets/img/AI-tools.jpg" alt="Neuron Image" class="neuron-image" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <h2 class="mb-3 section-title">How it Works?</h2>
                    <h3 class="mb-4">Understanding Parkinson's Prediction Tools</h3>
                    <p>Our machine learning models are trained on vast datasets of patient data to identify patterns and
                        markers indicative of Parkinson's disease. By analyzing voice recordings, handwriting samples,
                        and gait patterns, our algorithms can detect subtle changes that may indicate the early stages
                        of the disease. The advantages of using machine learning include higher accuracy, early
                        detection, and the ability to continuously improve as more data is collected.</p>
                </div>
            </div>
        </div>
    </div> <!-- Tutup container di sini -->
@endsection
