@extends ("frontend.layout.app")

@section('content')
    <section class="container my-5">
        <h1 class="text-center mb-4">Diagnosis Result</h1>

        <div class="row">
            <div class="row justify-content-center">
                @if (isset($apiResponse['hw-result']))
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header {{ $apiResponse == true ? 'bg-success' : 'bg-danger' }} text-white">
                                <h5 class="card-title mb-0">Spiral Test</h5>
                            </div>
                            <div class="card-body">
                                <p><strong>Result:</strong> {{ $apiResponse['hw-result'] ? 'True' : 'False' }}</p>
                                <p><strong>Info:</strong> Spiral test information goes here.</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if (isset($apiResponse['vm-result']))
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div
                                class="card-header {{ $apiResponse['vm-result'] == true ? 'bg-success' : 'bg-danger' }} text-white">
                                <h5 class="card-title mb-0">Voice Analysis</h5>
                            </div>
                            <div class="card-body">
                                <p><strong>Result:</strong> {{ $apiResponse['vm-result'] ? 'True' : 'False' }}</p>
                                <p><strong>Info:</strong> Voice analysis information goes here.</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if (isset($apiResponse['ni-result']))
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div
                                class="card-header {{ $apiResponse['ni-result'] == true ? 'bg-success' : 'bg-danger' }} text-white">
                                <h5 class="card-title mb-0">CT Scan Analysis</h5>
                            </div>
                            <div class="card-body">
                                <p><strong>Result:</strong> {{ $apiResponse['ni-result'] ? 'True' : 'False' }}</p>
                                <p><strong>Info:</strong> CT scan analysis information goes here.</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>


            <div class="alert alert-warning mt-4" role="alert">
                <h4 class="alert-heading">Important Note:</h4>
                <p>This diagnosis result is indicative and does not replace a professional medical diagnosis. Please consult
                    with a specialist for further evaluation and appropriate treatment plans.</p>
            </div>

            <div class="text-center mt-4">
                <a href="/resources" class="btn btn-primary">Check Resources</a>
                <a href="#" class="btn btn-outline-secondary">Download Report</a>
            </div>
    </section>
@endsection
