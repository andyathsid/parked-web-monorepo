@extends('frontend.layout.app')

@section('content')
    <section class="py-5 bg-warning">
        <div class="container">
            <h2 class="text-center mb-4 information-text-bold information-fade-in">3 Langkah Penggunaan</h2>
            <p class="text-center mb-5 information-fade-in">Ada 3 langkah untuk menggunakan alat prediksi kami</p>
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0 information-fade-in">
                    <div class="information-card h-100 border-0 bg-light">
                        <div class="card-body text-center py-5 px-4">
                            <div class="mb-4 information-icon-container">
                                <i class="fas fa-sign-in-alt fa-4x text-black"></i>
                            </div>
                            <h4 class="card-title mb-3">Masuk</h4>
                            <p class="card-text fs-5 py-3">Masuk atau daftar menggunakan akun ParkED</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0 information-fade-in">
                    <div class="information-card h-100 border-0 bg-light">
                        <div class="card-body text-center py-5 px-4">
                            <div class="mb-4 information-icon-container">
                                <i class="fas fa-clipboard-list fa-4x text-black"></i>
                            </div>
                            <h4 class="card-title mb-3">Isi Persyaratan</h4>
                            <p class="card-text fs-5 py-3">Isi semua kondisi dengan benar sesuai petunjuk</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 information-fade-in">
                    <div class="information-card h-100 border-0 bg-light">
                        <div class="card-body text-center py-5 px-4">
                            <div class="mb-4 information-icon-container">
                                <i class="fas fa-hourglass-half fa-4x text-black"></i>
                            </div>
                            <h4 class="card-title mb-3">Tunggu Hasil</h4>
                            <p class="card-text fs-5 py-3">Tunggu hingga hasil keluar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Tentang Proyek -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 information-fade-in information-text-bold">Tentang Proyek</h2>
            <div class="row">
                <div class="col-md-6 mb-4 information-fade-in">
                    <div class="information-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="information-icon-container me-3">
                                    <i class="fas fa-brain fa-2x text-black"></i>
                                </div>
                                <h5 class="card-title mb-0">Pembelajaran Mesin</h5>
                            </div>
                            <p class="card-text">Teks isi untuk apa pun yang ingin Anda sampaikan. Tambahkan poin-poin utama,
                                kutipan, anekdot, atau bahkan cerita yang sangat singkat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 information-fade-in">
                    <div class="information-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="information-icon-container me-3">
                                    <i class="fas fa-cogs fa-2x text-black"></i>
                                </div>
                                <h5 class="card-title mb-0">Model & Algoritma</h5>
                            </div>
                            <p class="card-text">Teks isi untuk apa pun yang ingin Anda sampaikan. Tambahkan poin-poin utama,
                                kutipan, anekdot, atau bahkan cerita yang sangat singkat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 information-fade-in">
                    <div class="information-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="information-icon-container me-3">
                                    <i class="fas fa-chart-line fa-2x text-black"></i>
                                </div>
                                <h5 class="card-title mb-0">Akurasi</h5>
                            </div>
                            <p class="card-text">Teks isi untuk apa pun yang ingin Anda sampaikan. Tambahkan poin-poin utama,
                                kutipan, anekdot, atau bahkan cerita yang sangat singkat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 information-fade-in">
                    <div class="information-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="information-icon-container me-3">
                                    <i class="fas fa-database fa-2x text-black"></i>
                                </div>
                                <h5 class="card-title mb-0">Dataset Kami</h5>
                            </div>
                            <p class="card-text">Teks isi untuk apa pun yang ingin Anda sampaikan. Tambahkan poin-poin utama,
                                kutipan, anekdot, atau bahkan cerita yang sangat singkat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
