<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="assets\logo\logo_ParkED_with_text.png" alt=""
                width="70px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('resources') ? 'active' : '' }}" href="/resources">Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('information') ? 'active' : '' }}"
                        href="/information">Information</a>
                </li>
            </ul>
        </div>
        <a href="/login" class="btn bg-warning text-white d-none d-lg-block" type="button">Sign In</a>
    </div>
</nav>
