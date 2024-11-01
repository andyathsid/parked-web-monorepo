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
                            <tr class="text-center">
                                <th scope="col">Tanggal</th>
                                <th scope="col">Tes Mengambar Spiral</th>
                                <th scope="col">Tes Rekaman Suara</th>
                                <th scope="col">Tes DaTScan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center ">
                                <td>202-05-15</td>
                                <td><span class="badge bg-success text-dark" style="color: white!important">True</span></td>
                                <td><span class="badge bg-danger text-dark"style="color: white!important">false</span></td>
                                <td><span class="badge bg-danger text-dark"style="color: white!important">false</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Lihat Hasil</a></td>
                            </tr><tr class="text-center ">
                                <td>202-05-15</td>
                                <td><span class="badge bg-success text-dark" style="color: white!important">True</span></td>
                                <td><span class="badge bg-danger text-dark"style="color: white!important">false</span></td>
                                <td><span class="badge bg-danger text-dark"style="color: white!important">false</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Lihat Hasil</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
