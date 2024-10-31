@extends('frontend.layout.app')

@section('content')
    <form action="/patient-form" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="bg-warning">
            <div class="container">
                <h1 class="text-center py-5 text-bold text-black">Formulir Diagnosis</h1>
        </section>

        <div class="main-content" style="display">
            <div class="container">
                <!-- Diagnosa 1 -->
                <div class="formdiagnosa-diagnosis-section mb-4 mt-4">
                    <h2 class="text-center mb-2">
                        <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#formdiagnosa1" aria-expanded="true" aria-controls="formdiagnosa1">
                            Diagnosis 1
                        </button>
                    </h2>
                    <div class="collapse show" id="formdiagnosa1">
                        <div class="py-5 formdiagnosa-bg-cream">
                            <p class="text-center text-muted mb-4">Analisis Gambar Spiral</p>

                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-md-6 mb-4 mb-md-0">
                                            <img src="assets/img/Spiral.png" alt="Spiral Image"
                                                class="img-fluid rounded mb-3"
                                                style="width: 100%; height: 300px; object-fit: cover;">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="formdiagnosa-diagnosis-content">
                                                <div class="formdiagnosa-diagnosis-text">
                                                    <div class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="formdiagnosa-number-circle text-black">1</span>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing
                                                                elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                                magna
                                                                aliqua.</p>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="formdiagnosa-number-circle text-black">2</span>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing
                                                                elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                                magna
                                                                aliqua.</p>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="formdiagnosa-number-circle text-black">3</span>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing
                                                                elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                                magna
                                                                aliqua.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formdiagnosa-diagnosis-actions">
                                                    <button class="btn btn-warning text-black">Lihat panduan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 formdiagnosa-upload-section">
                                        <div class="formdiagnosa-dropzone text-center p-5 border border-dashed rounded"
                                            id="formdiagnosa-drop-area">
                                            <input type="file" id="formdiagnosa-fileElem" accept="image/*"
                                                onchange="handleFiles(this.files)" style="display:none" name="fileModel1">
                                            <div id="formdiagnosa-preview-container" class="mb-3 formdiagnosa-preview-wrapper"
                                                style="display:none;">
                                                <img id="formdiagnosa-preview-image" src="" alt="Preview"
                                                    style="max-width: 100%; height: auto; object-fit: contain;">
                                            </div>
                                            <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                            <p class="mb-2">Tarik dan letakkan gambar di sini</p>
                                            <button type="button" class="btn btn-warning text-black"
                                                onclick="document.getElementById('formdiagnosa-fileElem').click()">Pilih berkas</button>
                                        </div>
                                        <p class="text-muted small text-center mt-2">JPG, PNG / Max. 60 MB / Min. 224px x
                                            224px</p>
                                        <div class="text-center mt-3">
                                            <button type="button" class="btn btn-warning text-black" id="formdiagnosa-changeFileBtn"
                                                style="display:none;" onclick="changeFile()">Ganti berkas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diagnosa 2 -->
                <div class="formdiagnosa-diagnosis-section mb-4">
                    <h2 class="text-center mb-2">
                        <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#formdiagnosa2" aria-expanded="false" aria-controls="formdiagnosa2">
                            Diagnosis 2
                        </button>
                    </h2>
                    <div class="collapse" id="formdiagnosa2">
                        <div class="py-5 formdiagnosa-bg-orange">
                            <p class="text-center text-muted mb-4">Analisis Suara</p>

                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-md-6 mb-4 mb-md-0">
                                            <img src="assets/img/Voice.png" alt="Voice Analysis"
                                                class="img-fluid rounded mb-3"
                                                style="width: 100%; height: 300px; object-fit: cover;">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="formdiagnosa-diagnosis-content">
                                                <div class="formdiagnosa-diagnosis-text">
                                                    <div class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="formdiagnosa-number-circle text-black">1</span>
                                                            <p class="mb-0">Siapkan lingkungan yang tenang untuk perekaman suara yang jelas.</p>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="formdiagnosa-number-circle text-black">2</span>
                                                            <p class="mb-0">Pilih untuk mengunggah berkas audio atau merekam suara secara langsung.</p>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="formdiagnosa-number-circle text-black">3</span>
                                                            <p class="mb-0">Berbicaralah dengan jelas dan dengan kecepatan normal untuk analisis yang akurat.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formdiagnosa-diagnosis-actions">
                                                    <button class="btn btn-warning text-black">Lihat panduan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 formdiagnosa-upload-section">
                                        <ul class="nav nav-tabs" id="voiceAnalysisTabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="upload-tab" data-bs-toggle="tab"
                                                    data-bs-target="#upload" type="button" role="tab"
                                                    aria-controls="upload" aria-selected="true">Upload Audio</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="record-tab" data-bs-toggle="tab"
                                                    data-bs-target="#record" type="button" role="tab"
                                                    aria-controls="record" aria-selected="false">Record Voice</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="voiceAnalysisTabContent">
                                            <div class="tab-pane fade show active" id="upload" role="tabpanel"
                                                aria-labelledby="upload-tab">
                                                <div class="formdiagnosa-dropzone text-center p-5 border border-dashed rounded"
                                                    id="drop-area-audio">
                                                    <input type="file" id="audioFileElem" accept="audio/*"
                                                        onchange="handleAudioFiles(this.files)" style="display:none"
                                                        name="fileModel2">
                                                    <div id="audio-preview-container" class="mb-3"
                                                        style="display:none;">
                                                        <audio id="audio-preview" controls></audio>
                                                    </div>
                                                    <i class="fas fa-microphone fa-3x text-muted mb-3"></i>
                                                    <p class="mb-2">Tarik dan letakkan berkas audio di sini</p>
                                                    <button type="button" class="btn btn-warning text-black"
                                                        onclick="document.getElementById('audioFileElem').click()">Pilih berkas audio</button>
                                                </div>
                                                <p class="text-muted small text-center mt-2"> WAV / Max. 10 MB / Max.
                                                    30 seconds</p>
                                                <div class="text-center mt-3">
                                                    <button type="button" class="btn btn-warning text-black" id="changeAudioBtn"
                                                        style="display:none;" onclick="changeAudioFile()">Ganti berkas</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="record" role="tabpanel"
                                                aria-labelledby="record-tab">
                                                <div class="text-center p-5 border border-dashed rounded">
                                                    <i class="fas fa-microphone fa-3x text-muted mb-3"></i>
                                                    <p class="mb-3">Klik tombol di bawah untuk mulai merekam</p>
                                                    <a href="record" id="recordButton" class="btn btn-warning"
                                                        name="recordedAudio">
                                                        <i class="fas fa-microphone"></i> Mulai Merekam
                                                    </a>
                                                    <p id="recordingStatus" class="mt-3 d-none">Merekam: <span
                                                            id="recordingTime">00:00</span></p>
                                                    <audio id="audioPlayback" controls class="mt-3 d-none"></audio>
                                                    <br>
                                                    <button id="deleteRecordingBtn" class="btn btn-warning mt-3 d-none"
                                                        onclick="deleteRecording()">Hapus Rekaman</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diagnosa 3 -->
                <div class="formdiagnosa-diagnosis-section mb-4">
                    <h2 class="text-center mb-2">
                        <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#formdiagnosa3" aria-expanded="false" aria-controls="formdiagnosa3">
                            Diagnosis 3
                        </button>
                    </h2>
                    <div class="collapse" id="formdiagnosa3">
                        <div class="py-5 formdiagnosa-bg-cream">
                            <p class="text-center text-muted mb-4">Analisis CT Scan Otak</p>

                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="assets/img/Ctscan.jpg" alt="Brain Image"
                                                class="img-fluid rounded mb-3"
                                                style="width: 100%; height: 300px; object-fit: cover;">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="bg-warning rounded-circle me-2 formdiagnosa-number-circle text-black">1</span>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="bg-warning rounded-circle me-2 formdiagnosa-number-circle text-black">2</span>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="bg-warning rounded-circle me-2 formdiagnosa-number-circle text-black">3</span>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </div>
                                            </div>
                                            <button class="btn btn-warning text-black">Lihat panduan</button>
                                        </div>
                                    </div>

                                    <!-- Input 4: Another Image Upload -->
                                    <div class="mt-4 formdiagnosa-upload-section">
                                        <div class="formdiagnosa-dropzone text-center p-5 border border-dashed rounded"
                                            id="drop-area-3">
                                            <input type="file" id="fileElem3" accept="image/*"
                                                onchange="handleFiles3(this.files)" style="display:none"
                                                name="fileModel3">
                                            <div id="preview-container-3" class="class= mb-3 formdiagnosa-preview-wrapper" style="display:none;">
                                                <img id="preview-image-3" src="" alt="Preview"
                                                    style="max-width: 100%; height: auto; object-fit: contain;">
                                            </div>
                                            <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                            <p class="mb-2">Tarik dan letakkan gambar di sini</p>
                                            <button type="button" class="btn btn-warning text-black"
                                                onclick="document.getElementById('fileElem3').click()">Pilih berkas</button>
                                        </div>
                                        <p class="text-muted small text-center mt-2">JPG, PNG / Max. 60 MB / Min. 224px x
                                            224px</p>
                                        <div class="text-center mt-3">
                                            <button type="button" class="btn btn-warning text-black" id="changeFileBtn3"
                                                style="display:none;" onclick="changeFile3()">Ganti berkas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="bg-warning">
                <h1 class="text-center py-5 text-bold text-black">Selesai!</h1>
                <div class="text-center pb-5">
                    <button type="submit" class="btn btn-custom btn-lg text-black">Kirim!</button>
                </div>
            </section>
        </div>
    </form>
@endsection
