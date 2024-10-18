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
                <h1 class="text-center mb-4">Biodata</h1>

                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="dateOfBirth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dateOfBirth" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" required>
                    </div>
                    <div class="mb-3">
                        <label for="occupation" class="form-label">Occupation</label>
                        <input type="text" class="form-control" id="occupation">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
            <!-- Main content ends here -->
        </div>
    </div>
@endsection
