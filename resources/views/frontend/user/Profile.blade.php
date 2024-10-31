@extends('frontend.layout.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <!-- Sidebar starts here -->
            <div class="col-md-3 col-lg-2 me-md-4">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="ms-3 mb-0 ">{{ $user->first_name }} {{ $user->last_name }}</h4>
                </div>
                <ul class="list-unstyled border-top border-bottom py-3">
                    <li class="mb-2"><a href="/profile" class="text-decoration-none text-black">Profile User</a></li>
                    <li class="mb-2"><a href="/history" class="text-decoration-none text-black">Diagnose History</a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar ends here -->

            <!-- Main content starts here -->
            <div class="col-md-8 col-lg-9">
                <h1 class="text-center mb-4">Profile User</h1>

                <form action="/update-profile" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3 mb-3 text-center">
                            <img id="imagePreview"
                                src="{{ $user->photo ? Storage::url($user->photo) : asset($user->google_photo) }}"
                                class="img-thumbnail" alt="Profile Picture" style="max-width: 150px; height: auto;">
                        </div>

                        <div class="col-md-9 mb-3">
                            <label for="photo" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control"
                                value="{{ $user->photo ? $user->photo : $user->google_photo }}" id="photo"
                                accept="image/*" onchange="previewImage(event)" name="photo">
                            @error('photo')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="firstName"
                                value="{{ $user->first_name }}" required>
                            @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" value="{{ $user->last_name }}"
                                name="last_name" required>
                            @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    @if ($user->password == null)
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">Password</label>
                                <input type="password" name="first_name" class="form-control" id="firstName" required>
                                @error('first_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="lastName" name="confirm" required>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="firstName" class="form-label">Password</label>
                                <input type="password" name="first_name" class="form-control" id="firstName" required>
                                @error('old_password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="firstName" class="form-label">Password</label>
                                <input type="password" name="first_name" class="form-control" id="firstName" required>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="lastName" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="lastName" name="confirm" required>
                            </div>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" value="{{ $user->email }}"
                            name="email" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="dateOfBirth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required
                            value="{{ $user->tgl_Ulangtahun }}">
                        @error('dateOfBirth')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" rows="3" name="address" required>{{ $user->address }}</textarea>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"
                            value="{{ $user->phone_number }}" required>
                        @error('phoneNumber')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="occupation" class="form-label">Occupation</label>
                        <input type="text" class="form-control" id="occupation" name="occupation"
                            value="{{ $user->occupation }}">
                        @error('occupation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>

            <script>
                function previewImage(event) {
                    const imagePreview = document.getElementById('imagePreview');
                    imagePreview.src = URL.createObjectURL(event.target.files[0]);
                    imagePreview.onload = function() {
                        URL.revokeObjectURL(imagePreview.src); // Free memory
                    }
                }
            </script>

            <!-- Main content ends here -->
        </div>
    </div>
@endsection
