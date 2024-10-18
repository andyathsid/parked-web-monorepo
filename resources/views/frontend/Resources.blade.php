@extends ("frontend.layout.app")

@section('content')
    <section class="bg-warning">
        <h1 class="text-center py-5 sect-2 resource-text-bold-1 resource-fade-in">What to do next when <br> Parkinson's
            disease is <br>suspected ?</h1>
    </section>


    <section>
        <div class="container mt-5">
            <h2 class="text-center mb-4 text-bold resource-fade-in">Therapy</h2>
            <p class="text-center mb-4 resource-fade-in">If you have Parkinson's there are several therapies that you can try
                but remember it must be with the direction of an expert.</p>

            <div class="row mb-1">
                <div class="col-md-4 mb-4 text-decoration-none resource-fade-in" style="animation-delay: 0.2s;">
                    <a href="physiotherapy.html" class="resource-card-link">
                        <div class="card h-90 resource-card">
                            <div class="row g-0">
                                <div class="col-4 col-md-5" style="max-width: 120px;">
                                    <img src="assets/img/physiotherapy.png"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Physiotherapy">
                                </div>
                                <div class="col-8 col-md-7">
                                    <div class="card-body text-black">
                                        <h5 class="card-title">Physiotherapy</h5>
                                        <p class="card-text">This therapy aims to help overcome muscle stiffness and joint
                                            rigidity. The aim is to improve the ability to move and flexibility.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 resource-fade-in" style="animation-delay: 0.4s;">
                    <a href="speechtherapy.html" class="resource-card-link">
                        <div class="card h-100 resource-card">
                            <div class="row g-0">
                                <div class="col-4 col-md-5" style="max-width: 120px;">
                                    <img src="assets/img/speech-therapy.png"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Speech therapy">
                                </div>
                                <div class="col-8 col-md-7">
                                    <div class="card-body text-black">
                                        <h5 class="card-title">Speech therapy</h5>
                                        <p class="card-text">This therapy may be recommended if Parkinson's patients have
                                            difficulty speaking and swallowing saliva or food.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 resource-fade-in" style="animation-delay: 0.6s;">
                    <a href="Psychotherapy.html" class="resource-card-link">
                        <div class="card h-100 resource-card">
                            <div class="row g-0">
                                <div class="col-4 col-md-5" style="max-width: 120px;">
                                    <img src="assets/img/psychoteraphy.jpg"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Psychotherapy">
                                </div>
                                <div class="col-8 col-md-7">
                                    <div class="card-body text-black">
                                        <h5 class="card-title">Psychotherapy</h5>
                                        <p class="card-text">In patients who also experience depression, the doctor will
                                            recommend to undergo therapy with a psychologist.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <h2 class="text-center mb-4 text-bold resource-fade-in" style="animation-delay: 0.8s;">Surgery</h2>
            <p class="text-center mb-4 resource-fade-in" style="animation-delay: 0.8s;">There are 2 medical operations that
                you can do, see your doctor for further consultation.</p>

            <div class="row">
                <div class="col-md-6 mb-4 px-3 resource-fade-in" style="animation-delay: 1s;">
                    <a href="DBS.html" class="resource-card-link">
                        <div class="card h-90 resource-card">
                            <div class="row g-0">
                                <div class="col-4 col-md-4" style="max-width: 120px;">
                                    <img src="assets/img/DBS.jpg"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover"
                                        alt="Deep brain stimulation">
                                </div>
                                <div class="col-8 col-md-8">
                                    <div class="card-body text-black">
                                        <h5 class="card-title">Deep brain stimulation (DBS)</h5>
                                        <p class="card-text">Deep Brain Stimulation (DBS) involves implanting electrodes in
                                            specific brain areas affected by abnormal neural activity, such as Parkinson's
                                            disease. The electrodes send electrical impulses to modify this activity,
                                            reducing symptoms like tremors and rigidity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-4 px-3 resource-fade-in" style="animation-delay: 1.2s;">
                    <a href="GammaKnife.html" class="resource-card-link">
                        <div class="card h-90 resource-card">
                            <div class="row g-0">
                                <div class="col-4 col-md-4" style="max-width: 120px;">
                                    <img src="assets/img/gamma-knife-surgery.jpg"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover"
                                        alt="Gamma knife surgery">
                                </div>
                                <div class="col-8 col-md-8">
                                    <div class="card-body text-black">
                                        <h5 class="card-title">Gamma knife surgery</h5>
                                        <p class="card-text">Gamma knife surgery is performed when the patient is not
                                            eligible for DBS. This procedure uses gamma radiation that is precisely focused
                                            on the problematic area of the brain, for example in patients with essential
                                            tremor or Parkinson's disease who do not respond to treatment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
