<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard', request()->only('username','password')) }}">
            <img src="{{ asset('image/hotel.png') }}" alt="Hotelnya Aden Gantenk" width="40" class="me-2">
            <span>Hotelnya Aden Gantenk</span>
        </a>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('dashboard', request()->only('username','password')) }}" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengelolaan', request()->only('username','password')) }}" class="nav-link">Daftar Kamar</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile', request()->only('username','password')) }}" class="nav-link">Profil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
