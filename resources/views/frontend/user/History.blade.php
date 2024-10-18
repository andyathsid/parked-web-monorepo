@extends('frontend.layout.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <!-- Sidebar starts here -->
            <div class="col-md-3 col-lg-2 me-md-4">
                <div class="d-flex align-items-center mb-4">
                    <h3 class="ms-3 mb-0 ">Acount Name</h3>
                </div>
                <ul class="list-unstyled border-top border-bottom py-3">
                    <li class="mb-2"><a href="/profile" class="text-decoration-none text-black">Biodata</a></li>
                    <li class="mb-2"><a href="/history" class="text-decoration-none text-black">Diagnose History</a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar ends here -->

            <!-- Main content starts here -->
            <div class="col-md-8 col-lg-9">
                <h1 class="text-center mb-4">Diagnosis History</h1>
                <p class="text-center mb-5">Here's a record of your past diagnoses.</p>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Test Type</th>
                                <th scope="col">Result</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-05-15</td>
                                <td>Spiral Test</td>
                                <td><span class="badge bg-warning text-dark">Possible</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">View Details</a></td>
                            </tr>
                            <tr>
                                <td>2023-04-02</td>
                                <td>Voice Analysis</td>
                                <td><span class="badge bg-success">Negative</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">View Details</a></td>
                            </tr>
                            <tr>
                                <td>2023-03-10</td>
                                <td>CT Scan Analysis</td>
                                <td><span class="badge bg-danger">Positive</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">View Details</a></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- Main content ends here -->
        </div>
    </div>
@endsection
