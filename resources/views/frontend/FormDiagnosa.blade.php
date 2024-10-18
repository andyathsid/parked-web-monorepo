@extends('frontend.layout.app')

@section('content')
    <div class="main-content">
        <section class="bg-warning">
            <h1 class="text-center py-5 sect-2 text-bold"><br> Diagnoses Form <br><br> </h1>
        </section>
        <div class="container">
            <form action="/patient-form" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Diagnosa 1 -->
                <div class="diagnosis-section mb-4">
                    <h2 class="text-center mb-2">
                        <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#diagnosa1" aria-expanded="true" aria-controls="diagnosa1">
                            Diagnosa 1
                        </button>
                    </h2>
                    <div class="collapse show" id="diagnosa1">
                        <div class="py-5 bg-cream">
                            <h3 class="text-center text-muted mb-4">Upload Image Hasil Gambar</h3>

                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="mt-4">
                                            <div class="dropzone text-center p-5 border border-dashed rounded"
                                                id="drop-area-image">
                                                <div class="upload-form">
                                                    <input type="file" id="fileElem" name="fileImage" accept="image/*"
                                                        onchange="handleImageUpload(this.files)" style="display: none" />
                                                    <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                                    <p class="mb-2">Drag and drop an image here</p>
                                                    <p class="text-muted small mb-3">or</p>
                                                    <button type="button" class="btn btn-warning"
                                                        onclick="document.getElementById('fileElem').click()">
                                                        Select a file
                                                    </button>
                                                </div>
                                                <div id="preview-area" class="mt-3"></div>
                                            </div>
                                            <p class="text-muted small text-center mt-2">
                                                JPG, PNG / Max. 60 MB / Min. 224px x 224px
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Diagnosa 2 -->
                    <div class="diagnosis-section mb-4">
                        <h2 class="text-center mb-2">
                            <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#diagnosa2" aria-expanded="false" aria-controls="diagnosa2">
                                Diagnosa 2
                            </button>
                        </h2>
                        <div class="collapse" id="diagnosa2">
                            <div class="py-5 bg-orange">
                                <h3 class="text-center text-muted mb-4">Voice Upload</h3>

                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="mt-4">
                                                <div class="dropzone text-center p-5 border border-dashed rounded"
                                                    id="drop-area-audio">
                                                    <div class="upload-form">
                                                        <i class="fas fa-microphone-alt fa-3x text-muted mb-3"></i>
                                                        <p class="mb-2">Choose an option</p>
                                                        <div class="d-flex justify-content-center mb-3">
                                                            <button type="button" class="btn btn-primary me-3"
                                                                id="chooseUpload">Upload Audio</button>
                                                            <button type="button" class="btn btn-warning"
                                                                id="chooseRecord">Record Audio</button>
                                                        </div>

                                                        <div id="uploadOption" class="d-none">
                                                            <input type="file" id="fileAudio" accept="audio/*"
                                                                onchange="handleAudioUpload(this.files)"
                                                                style="display: none" name="audioUpload" />
                                                            <!-- Perbaikan di sini -->
                                                            <button type="button" class="btn btn-info"
                                                                onclick="document.getElementById('fileAudio').click()">
                                                                Select a file
                                                            </button>
                                                            <center>
                                                                <audio id="audioUploadPlay" class="mt-3" controls
                                                                    style="display: none;"></audio>
                                                            </center>
                                                        </div>

                                                        <div id="recordOption" class="d-none">
                                                            <button type="button" class="btn btn-warning" id="recordBtn">
                                                                Start Recording
                                                            </button>
                                                            <button type="button" class="btn btn-danger d-none"
                                                                id="stopBtn">
                                                                Stop Recording
                                                            </button>
                                                            <p style="color: red"> belum bisa upload bang ntaar lagi cobanya
                                                                yg ini</p>
                                                            <center>
                                                                <audio id="audioPlayback" class="mt-3" controls
                                                                    style="display: none;"></audio>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p class="text-muted small text-center mt-2">
                                                    Max. 60 MB / Audio file
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Diagnosa 3 -->
                    <div class="diagnosis-section mb-4">
                        <h2 class="text-center mb-2">
                            <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#diagnosa3" aria-expanded="false" aria-controls="diagnosa3">
                                Diagnosa 3
                            </button>
                        </h2>
                        <div class="collapse" id="diagnosa3">
                            <div class="py-5 bg-cream">
                                <h3 class="text-center text-muted mb-4">Form Input Voice</h3>
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <!-- Input Form Section -->
                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="mdvpFo"
                                                        name="mdvpFo" placeholder=" ">
                                                    <label for="mdvpFo">MDVP:Fo (Hz)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="mdvpFhi"
                                                        name="mdvpFhi" placeholder=" ">
                                                    <label for="mdvpFhi">MDVP:Fhi (Hz)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="mdvpFlo"
                                                        name="mdvpFlo" placeholder=" ">
                                                    <label for="mdvpFlo">MDVP:Flo (Hz)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="mdvpJitter"
                                                        name="mdvpJitter" placeholder=" ">
                                                    <label for="mdvpJitter">MDVP:Jitter (%)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="mdvpJitterAbs"
                                                        name="mdvpJitterAbs" placeholder=" ">
                                                    <label for="mdvpJitterAbs">MDVP:Jitter (Abs)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="mdvpRAP"
                                                        name="mdvpRAP" placeholder=" ">
                                                    <label for="mdvpRAP">MDVP:RAP</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="mdvpPPQ"
                                                        name="mdvpPPQ" placeholder=" ">
                                                    <label for="mdvpPPQ">MDVP:PPQ</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="jitterDDP"
                                                        name="jitterDDP" placeholder=" ">
                                                    <label for="jitterDDP">Jitter:DDP</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="mdvpShimmer"
                                                        name="mdvpShimmer" placeholder=" ">
                                                    <label for="mdvpShimmer">MDVP:Shimmer (dB)</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="mdvpShimmerDb"
                                                        name="mdvpShimmerDb" placeholder=" ">
                                                    <label for="mdvpShimmerDb">MDVP:Shimmer</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="shimmerAPQ3"
                                                        name="shimmerAPQ3" placeholder=" ">
                                                    <label for="shimmerAPQ3">Shimmer:APQ3</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="shimmerAPQ5"
                                                        name="shimmerAPQ5" placeholder=" ">
                                                    <label for="shimmerAPQ5">Shimmer:APQ5</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="mdvpAPQ"
                                                        name="mdvpAPQ" placeholder=" ">
                                                    <label for="mdvpAPQ">MDVP:APQ</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="shimmerDDA"
                                                        name="shimmerDDA" placeholder=" ">
                                                    <label for="shimmerDDA">Shimmer:DDA</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="nhr"
                                                        name="nhr" placeholder=" ">
                                                    <label for="nhr">NHR</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="hnr"
                                                        name="hnr" placeholder=" ">
                                                    <label for="hnr">HNR</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="rpde"
                                                        name="rpde" placeholder=" ">
                                                    <label for="rpde">RPDE</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="form-floating-custom">
                                                    <input type="number" class="form-control" id="dfa"
                                                        name="dfa" placeholder=" ">
                                                    <label for="dfa">DFA</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <div class="text-center pb-5">
        <button type="submit" class="btn btn-input btn-lg">Diagnose Now!</button>
    </div>
    </form>

    </div>
    </div>
    </div>
@endsection
