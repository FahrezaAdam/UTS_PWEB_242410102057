<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2">
    <div class="container-fluid px-4"> 
        
        <a class="navbar-brand d-flex align-items-center text-dark text-decoration-none me-auto" href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/footique_logo.png') }}" alt="Footique Logo" class="brand-logo me-2">
            <span class="brand-name">FOOTIQUE</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center gap-3">
                <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('pengelolaan') }}">Pengelolaan</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('profile') }}">Profil</a></li>
                
                @if(session('username'))
                    <li class="nav-item"><a class="nav-link text-danger fw-semibold" href="{{ route('logout') }}">Logout</a></li>
                @else
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('login') }}">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
