<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParkEd | {{ $tittle }}</title>
    <link href="vendor/bootstrap-5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> --}}
    <link rel="stylesheet" href="vendor/fontawesome-free-6.6.0-web/css/all.css">
    <link rel="icon" type="image/png" href="assets/logo/logo_ParkED.png" sizes="200x200" />
</head>

<body>
    @include('sweetalert::alert')

    @include('frontend.layout.navbar')

    @yield('content')
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                    <h2 class="h5 mb-3">ParkED </h2>
                    <p class="small">Empowering through education and early detection of Parkinson's disease.</p>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h3 class="h6 mb-3">Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-white text-decoration-none">About Parkinson's</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Diagnosis Tools</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Resources</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h3 class="h6 mb-3">Diagnosis Tools</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Spiral Test</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Voice Analysis</a></li>
                        <li><a href="#" class="text-white text-decoration-none">CT Scan Analysis</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="h6 mb-3">Resources</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Educational Articles</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Research News</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Support Groups</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Caregiver Resources</a></li>
                        <li><a href="#" class="text-white text-decoration-none">FAQ</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Glossary</a></li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-3">
            <div class="row">
                <div class="col-md-6 small">
                    &copy; 2023 ParkED. All rights reserved.
                </div>
                <div class="col-md-6 text-md-end small">
                    <a href="#" class="text-white text-decoration-none me-2">Privacy Policy</a>
                    <a href="#" class="text-white text-decoration-none me-2">Terms of Service</a>
                    <a href="#" class="text-white text-decoration-none">Cookie Policy</a>
                </div>
            </div>
    </footer>
    <script src="vendor/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/sweetalert/sweetalert.all.js"></script>

    <script src="assets/js/script.js"></script>

    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     // Menggunakan SweetAlert untuk notifikasi sukses
        //     Swal.fire({
        //         title: 'Selamat Datang!',
        //         text: 'Terima kasih telah mengunjungi ParkED!',
        //         icon: 'success',
        //         confirmButtonText: 'Oke'
        //     });
        // });
    </script>
</body>

</html>
