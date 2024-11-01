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
                            <tr class="text-center" style="text-align: center!important">
                                <th scope="col">Tanggal</th>
                                <th scope="col">Tes Mengambar Spiral</th>
                                <th scope="col">Tes Rekaman Suara</th>
                                <th scope="col">Tes DaTScan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($history as $his)
                                <tr class="text-center ">
                                    <td>{{ $his['created_at'] }}</td>
                                    <td>
                                        <span
                                            class="badge text-white {{ $his['hasil_diagnosa1'] !== null ? ($his['hasil_diagnosa1'] ? 'bg-danger' : 'bg-success') : '' }}">
                                            {{ $his['hasil_diagnosa1'] !== null ? ($his['hasil_diagnosa1'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            class="badge  text-white {{ $his['hasil_diagnosa2'] !== null ? ($his['hasil_diagnosa2'] ? 'bg-danger' : 'bg-success') : '' }}">
                                            {{ $his['hasil_diagnosa2'] !== null ? ($his['hasil_diagnosa2'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            class="badge text-white {{ $his['hasil_diagnosa3'] !== null ? ($his['hasil_diagnosa3'] ? 'bg-danger' : 'bg-success') : '' }}">
                                            {{ $his['hasil_diagnosa3'] !== null ? ($his['hasil_diagnosa3'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                        </span>
                                    </td>

                                    <td><button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#resultModal{{ $his['id'] }}">
                                            Lihat Hasil
                                        </button></td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="resultModal{{ $his['id'] }}" tabindex="-1"
                                    aria-labelledby="resultModalLabel{{ $his['id'] }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="resultModalLabel{{ $his['id'] }}">Detail
                                                    Diagnosis</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Tanggal:</strong> {{ $his['created_at'] }}</p>
                                                <p><strong>Tes Menggambar Spiral:</strong>
                                                    {{ $his['hasil_diagnosa1'] !== null ? ($his['hasil_diagnosa1'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                                </p>
                                                <p><strong>Tes Rekaman Suara:</strong>
                                                    {{ $his['hasil_diagnosa2'] !== null ? ($his['hasil_diagnosa2'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                                </p>
                                                <p><strong>Tes DaTScan:</strong>
                                                    {{ $his['hasil_diagnosa3'] !== null ? ($his['hasil_diagnosa3'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
