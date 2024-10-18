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
                                <strong class="disclaimer-title">Disclaimer</strong>
                            </h2>
                            <p class="card-text">
                                This prediction tool utilizes machine learning algorithms to detect the likelihood of
                                Parkinson's disease. Please note that while the tool has been trained on relevant
                                data and has achieved an accuracy rate of [insert accuracy]%, the results
                                provided should not be used as a definitive medical diagnosis.
                            </p>
                            <p class="card-text">
                                Users are advised to always consult a qualified healthcare professional to confirm
                                any diagnosis and receive appropriate medical advice. This tool serves only as a
                                supplementary aid for analysis and is not a substitute for clinical evaluations
                                conducted by medical experts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="bg-warning mb-0 mt-5 py-5">
        <h1 class="text-center pt-5 pb-3 sect-2">Let's Get Started</h1>
        <div class="text-center pb-5">
            <a href="/form-diagnosa" class="btn btn-custom btn-lg">Diagnose Now!</a>
        </div>
    </section> --}}
    <section class="bg-warning">
        <h1 class="text-center pt-5 pb-3 sect-2">What to do next when <br> Parkinson's disease is <br>suspected ?</h1>
        <div class="text-center pb-5">
            <a href="/resources" class="btn btn-custom btn-lg">Read Resources</a>
        </div>
    </section>

    <section class=" py-5">
        <h1 class="text-center pb-3 sect-2">Let's Get Started</h1>
        <div class="text-center pb-5">
            <a href="/form-diagnosa" class="btn btn-custom btn-lg bg-warning">Diagnose Now!</a>
        </div>
    </section>
@endsection
