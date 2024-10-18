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

    <section class="bg-warning">
        <h1 class="text-center py-5 sect-2">What to do next when <br> Parkinson's disease is <br>suspected ?</h1>
    </section>

    <section>
        <div class="container mt-5">
            <h2 class="text-center mb-4 text-bold">Therapy</h2>
            <p class="text-center mb-4">If you have Parkinson's there are several therapies that you can try but remember it
                must be with the direction of an expert.</p>

            <div class="row mb-5">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="path_to_physiotherapy_image.jpg" class="img-fluid rounded-start"
                                    alt="Physiotherapy">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Physiotherapy</h5>
                                    <p class="card-text">This therapy aims to help overcome muscle stiffness and joint
                                        rigidity. The aim is to improve the ability to move and flexibility of the body.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="path_to_speech_therapy_image.jpg" class="img-fluid rounded-start"
                                    alt="Speech therapy">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Speech therapy</h5>
                                    <p class="card-text">This therapy may be recommended if the patient has difficulty
                                        speaking and swallowing saliva or food.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="path_to_psychotherapy_image.jpg" class="img-fluid rounded-start"
                                    alt="Psychotherapy">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Psychotherapy</h5>
                                    <p class="card-text">In patients who also experience depression, the doctor will
                                        recommend to undergo therapy with a psychologist.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="text-center mb-4 text-bold">Surgery</h2>
            <p class="text-center mb-4">There are 2 medical operations that you can do, see your doctor for further
                consultation.</p>

            <div class="row">
                <div class="col-md-6 mb-4 px-3">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="path_to_dbs_image.jpg" class="img-fluid rounded-start"
                                    alt="Deep brain stimulation">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Deep brain stimulation (DBS)</h5>
                                    <p class="card-text">DBS involves inserting electrodes in the affected areas of the
                                        brain. The electrodes send electrical signals to block or alter the abnormal
                                        activity in the brain that causes the symptoms of Parkinson's disease.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 px-3">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="path_to_gamma_knife_image.jpg" class="img-fluid rounded-start"
                                    alt="Gamma knife surgery">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Gamma knife surgery</h5>
                                    <p class="card-text">Gamma knife surgery is performed when the patient is unable to
                                        undergo DBS. This surgery is performed by emitting gamma rays to the affected part
                                        of the brain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-warning mb-0 mt-5 py-5">
        <h1 class="text-center pt-5 pb-3 sect-2">Let's Get Started</h1>
        <div class="text-center pb-5">
            <a href="/form-diagnosa" class="btn btn-custom btn-lg">Diagnose Now!</a>
        </div>
    </section>
@endsection
