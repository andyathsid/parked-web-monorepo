<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets\logo\logo_ParkED_with_text.png') }}"
                alt="" width="70px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'actives' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('resources') ? 'actives' : '' }}" href="/resources">Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('information') ? 'actives' : '' }}"
                        href="/information">Information</a>
                </li>
                @auth
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/history">History</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                @endauth
                @guest
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/login">Sign In</a>
                    </li>
                @endguest
            </ul>
        </div>
        @guest
            <a href="/login" class="btn bg-warning text-white d-none d-lg-block" type="button">Sign In</a>
        @endguest

        @auth
            <div class="dropdown d-none d-lg-block">
                <button class="btn btn-user-dropdown" type="button" id="userDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{ asset($user->photo) }}" alt="" class="border rounded-circle" width="50px">
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    <li><a class="dropdown-item" href="/history">History</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </div>
        @endauth
    </div>
</nav>
