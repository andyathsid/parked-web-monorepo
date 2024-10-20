@extends('frontend.layout.app')

@section('content')
    <section class="py-5 bg-warning">
        <div class="container">
            <h2 class="text-center mb-4 information-text-bold information-fade-in">3 Steps To Use</h2>
            <p class="text-center mb-5 information-fade-in">There are 3 steps to use our predict tools</p>
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0 information-fade-in">
                    <div class="information-card h-100 border-0 bg-light">
                        <div class="card-body text-center py-5 px-4">
                            <div class="mb-4 information-icon-container">
                                <i class="fas fa-sign-in-alt fa-4x text-black"></i>
                            </div>
                            <h4 class="card-title mb-3">Sign In</h4>
                            <p class="card-text fs-5 py-3">Log in or register using an account to ParkED</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0 information-fade-in">
                    <div class="information-card h-100 border-0 bg-light">
                        <div class="card-body text-center py-5 px-4">
                            <div class="mb-4 information-icon-container">
                                <i class="fas fa-clipboard-list fa-4x text-black"></i>
                            </div>
                            <h4 class="card-title mb-3">Fill The Requirements</h4>
                            <p class="card-text fs-5 py-3">Fill out all conditions correctly as directed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 information-fade-in">
                    <div class="information-card h-100 border-0 bg-light">
                        <div class="card-body text-center py-5 px-4">
                            <div class="mb-4 information-icon-container">
                                <i class="fas fa-hourglass-half fa-4x text-black"></i>
                            </div>
                            <h4 class="card-title mb-3">Wait For The Result</h4>
                            <p class="card-text fs-5 py-3">Wait for the results to come out</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New About Project section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 information-fade-in information-text-bold">About Project</h2>
            <div class="row">
                <div class="col-md-6 mb-4 information-fade-in">
                    <div class="information-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="information-icon-container me-3">
                                    <i class="fas fa-brain fa-2x text-black"></i>
                                </div>
                                <h5 class="card-title mb-0">Machine Learning</h5>
                            </div>
                            <p class="card-text">Body text for whatever you'd like to say. Add main takeaway points, quotes,
                                anecdotes, or even a very very short story.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 information-fade-in">
                    <div class="information-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="information-icon-container me-3">
                                    <i class="fas fa-cogs fa-2x text-black"></i>
                                </div>
                                <h5 class="card-title mb-0">Model & Algorithm</h5>
                            </div>
                            <p class="card-text">Body text for whatever you'd like to say. Add main takeaway points, quotes,
                                anecdotes, or even a very very short story.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 information-fade-in">
                    <div class="information-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="information-icon-container me-3">
                                    <i class="fas fa-chart-line fa-2x text-black"></i>
                                </div>
                                <h5 class="card-title mb-0">Accuracy</h5>
                            </div>
                            <p class="card-text">Body text for whatever you'd like to say. Add main takeaway points, quotes,
                                anecdotes, or even a very very short story.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 information-fade-in">
                    <div class="information-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="information-icon-container me-3">
                                    <i class="fas fa-database fa-2x text-black"></i>
                                </div>
                                <h5 class="card-title mb-0">Our Dataset</h5>
                            </div>
                            <p class="card-text">Body text for whatever you'd like to say. Add main takeaway points, quotes,
                                anecdotes, or even a very very short story.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
