@extends('frontend.layout.app')

@section('content')
    <!-- Steps Section -->
    <section class="steps-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="display-4 fw-bold mb-3 information-fade-in">3 Langkah Penggunaan</h2>
                <p class="lead information-fade-in">Ikuti langkah sederhana ini untuk menggunakan platform kami</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4 information-fade-in">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <div class="icon-wrapper">
                            <i class="fas fa-sign-in-alt"></i>
                        </div>
                        <h4>Masuk</h4>
                        <p>Daftar atau masuk ke akun ParkED Anda untuk memulai proses skrining</p>
                    </div>
                </div>
                <div class="col-md-4 information-fade-in" style="animation-delay: 0.2s;">
                    <div class="step-card">
                        <div class="step-number">2</div>
                        <div class="icon-wrapper">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h4>Pilih Metode Skrining</h4>
                        <p>Pilih satu atau lebih metode skrining yang tersedia sesuai kebutuhan Anda</p>
                    </div>
                </div>
                <div class="col-md-4 information-fade-in" style="animation-delay: 0.4s;">
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <div class="icon-wrapper">
                            <i class="fas fa-hourglass-half"></i>
                        </div>
                        <h4>Dapatkan Hasil</h4>
                        <p>Hasil skrining akan segera tersedia setelah proses analisis selesai</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Screening Methods Section -->
    <section class="methods-section py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="display-4 fw-bold mb-3 information-fade-in">Model Prediksi Kami</h2>
                <p class="lead information-fade-in">Tiga model pembelajaran mesin yang dioptimalkan berdasarkan penelitian terkini</p>
            </div>
            <div class="row justify-content-center g-4">
                <!-- Voice Analysis -->
                <div class="col-lg-4 col-md-6 mb-4 information-fade-in">
                    <div class="method-card">
                        <div class="method-icon">
                            <img src="assets/img/Voice.png" alt="Voice Analysis" class="img-fluid">
                        </div>
                        <h4>Analisis Suara</h4>
                        <ul class="method-features">
                            <li><strong>Peneliti:</strong> Toye & Kompalli (2021)</li>
                            <li><strong>Dataset:</strong> MDVR-KCL & Italian Voice Dataset</li>
                            <li><strong>Algoritma:</strong> scikit-learn's KNN Classifier</li>
                            <li><strong>Fitur:</strong> Analisis pitch, jitter, shimmer</li>
                            <li><strong>Metode:</strong> Feature extraction & classification</li>
                        </ul>
                        <div class="accuracy">
                            <span class="accuracy-value">91%</span>
                            <span class="accuracy-label">Akurasi</span>
                        </div>
                    </div>
                </div>

                <!-- Spiral Drawing Analysis -->
                <div class="col-lg-4 col-md-6 mb-4 information-fade-in">
                    <div class="method-card">
                        <div class="method-icon">
                            <img src="assets/img/Spiral.png" alt="Spiral Test" class="img-fluid">
                        </div>
                        <h4>Analisis Gambar Spiral</h4>
                        <ul class="method-features">
                            <li><strong>Peneliti:</strong> Zham et al. (2017) & Sasirekha et al. (2024)</li>
                            <li><strong>Dataset:</strong> Parkinson's Drawing Dataset</li>
                            <li><strong>Algoritma:</strong> TensorFlow/Keras CNN</li>
                            <li><strong>Fitur:</strong> Feature extraction dari gambar spiral</li>
                            <li><strong>Metode:</strong> Deep learning & image processing</li>
                        </ul>
                        <div class="accuracy">
                            <span class="accuracy-value">96%</span>
                            <span class="accuracy-label">Akurasi</span>
                        </div>
                    </div>
                </div>

                <!-- Medical Image Analysis -->
                <div class="col-lg-4 col-md-6 mb-4 information-fade-in">
                    <div class="method-card">
                        <div class="method-icon">
                            <img src="assets/img/CTscan.png" alt="Medical Image Analysis" class="img-fluid">
                        </div>
                        <h4>Analisis Citra Medis</h4>
                        <ul class="method-features">
                            <li><strong>Peneliti:</strong> Shaffi et al. (2023)</li>
                            <li><strong>Dataset:</strong> NTUA Parkinson Dataset</li>
                            <li><strong>Algoritma:</strong> TensorFlow/Keras CNN & KNN</li>
                            <li><strong>Fitur:</strong> Feature extraction dari citra medis</li>
                            <li><strong>Metode:</strong> Hybrid CNN-KNN classification</li>
                        </ul>
                        <div class="accuracy">
                            <span class="accuracy-value">98%</span>
                            <span class="accuracy-label">Akurasi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
