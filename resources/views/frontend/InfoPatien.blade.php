@extends('frontend.layout.app')

@section('content')
    <section>
        <div class="mt-5">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="card text-center border-0">
                        <div class="card-body">
                            <i class="fas fa-exclamation-triangle text-warning mb-3 disclaimer-icon"></i>
                            <h2 class="card-title">
                                <strong class="disclaimer-title">Peringatan</strong>
                            </h2>
                            <p class="card-text">
                                Alat prediksi ini menggunakan algoritma pembelajaran mesin untuk mendeteksi kemungkinan
                                penyakit Parkinson. Perlu diperhatikan bahwa meskipun alat ini telah dilatih dengan
                                data yang relevan dan telah mencapai tingkat akurasi yang tinggi, hasil yang
                                diberikan tidak boleh digunakan sebagai diagnosis medis yang definitif.
                            </p>
                            <p class="card-text">
                                Pengguna disarankan untuk selalu berkonsultasi dengan profesional kesehatan yang berkualifikasi untuk
                                mengkonfirmasi diagnosis dan menerima saran medis yang tepat. Alat ini hanya berfungsi sebagai
                                bantuan tambahan untuk analisis dan bukan pengganti evaluasi klinis yang
                                dilakukan oleh ahli medis.
                            </p>

                            <div class="mt-4">
                                <p class="card-text">
                                    Kami menyediakan tiga metode diagnosa dengan tingkat akurasi berbeda yang dapat Anda pilih:
                                </p>
                                <div class="row justify-content-center">
                                    <div class="col-md-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <i class="fas fa-brain fa-2x text-black mb-3"></i>
                                                <h5 class="card-title">Analisis CT Scan</h5>
                                                <p class="card-text">Deteksi melalui gambar CT Scan otak</p>
                                                <div class="mt-2">
                                                    <span class="badge bg-success">Akurasi 99%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <i class="fas fa-microphone fa-2x text-black mb-3"></i>
                                                <h5 class="card-title">Analisis Suara</h5>
                                                <p class="card-text">Deteksi melalui rekaman suara Anda</p>
                                                <div class="mt-2">
                                                    <span class="badge bg-success">Akurasi 95%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <i class="fas fa-pencil-alt fa-2x black mb-3"></i>
                                                <h5 class="card-title">Analisis Gambar Spiral</h5>
                                                <p class="card-text">Deteksi melalui gambar spiral yang Anda buat</p>
                                                <div class="mt-2">
                                                    <span class="badge bg-success">Akurasi 90%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="card-text mt-3">
                                    <strong><i class="fas fa-info-circle text-warning"></i> Penting:</strong> Anda tidak perlu mengisi semua metode diagnosa. 
                                    Anda dapat memilih minimal satu dari tiga metode yang tersedia sesuai dengan data yang Anda miliki.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-warning">
        <h1 class="text-center pt-5 pb-3 sect-2">Apa yang harus dilakukan selanjutnya <br> ketika penyakit Parkinson <br>dicurigai?</h1>
        <div class="text-center pb-5">
            <a href="/resources" class="btn btn-custom btn-lg text-black">Baca Sumber Daya</a>
        </div>
    </section>

    <section class="py-5">
        <h1 class="text-center pb-3 sect-2">Mari Mulai</h1>
        <div class="text-center pb-5">
            <a href="/form-diagnosa" class="btn btn-custom btn-lg bg-warning text-black">Diagnosa Sekarang!</a>
        </div>
    </section>
@endsection
