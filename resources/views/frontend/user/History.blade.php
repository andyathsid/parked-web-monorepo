@extends('frontend.layout.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <!-- Sidebar starts here -->
            <div class="col-md-3 col-lg-2 me-md-4">
                <div class="d-flex align-items-center mb-4">
                    <h3 class="ms-3 mb-0 ">Nama Akun</h3>
                </div>
                <ul class="list-unstyled border-top border-bottom py-3">
                    <li class="mb-2"><a href="/profile" class="text-decoration-none text-black">Biodata</a></li>
                    <li class="mb-2"><a href="/history" class="text-decoration-none text-black">Riwayat Diagnosis</a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar ends here -->

            <!-- Main content starts here -->
            <div class="col-md-8 col-lg-9">
                <h1 class="text-center mb-4">Riwayat Diagnosis</h1>
                <p class="text-center mb-5">Berikut adalah catatan diagnosis Anda sebelumnya.</p>

                <div class="table-responsive">
                    <table class="table table-hover" id="historyTable">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenis Tes</th>
                                <th scope="col">Hasil</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>202-05-15</td>
                                <td>Tes Spiral</td>
                                <td><span class="badge bg-warning text-dark">Kemungkinan</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a></td>
                            </tr>
                            <tr>
                                <td>2023-04-02</td>
                                <td>Analisis Suara</td>
                                <td><span class="badge bg-success">Negatif</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a></td>
                            </tr>
                            <tr>
                                <td>2023-03-10</td>
                                <td>Analisis CT Scan</td>
                                <td><span class="badge bg-danger">Positif</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a></td>
                            </tr>
                            <!-- Tambahkan baris lainnya jika diperlukan -->
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- Main content ends here -->
        </div>
    </div>
@endsection
