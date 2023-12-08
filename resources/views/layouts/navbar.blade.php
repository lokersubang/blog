<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark border-bottom border-success"
    aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">{{ $appName ?? 'Blog' }}</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-1 text-uppercase">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item px-1 text-uppercase">
                    <a class="nav-link" href="#">Aplikasi</a>
                </li>
                <li class="nav-item px-1 text-uppercase">
                    <a class="nav-link" href="#">Internet</a>
                </li>
                <li class="nav-item px-1 text-uppercase">
                    <a class="nav-link" href="#">Tutorial</a>
                </li>
                <li class="nav-item px-1 text-uppercase">
                    <a class="nav-link" href="#">Game</a>
                </li>
                <li class="nav-item px-1 text-uppercase">
                    <a class="nav-link" href="#">Komputer</a>
                </li>
                @guest
                    <li class="nav-item px-1 text-uppercase">
                        <a class="nav-link" href="{{ route('login') }}"><i class="item-center bi bi-box-arrow-in-right"></i>
                            Login</a>
                    </li>
                @endguest
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i class="bi bi-speedometer"></i>
                                    Dashboard</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square"></i> Artikel</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-card-list"></i> Kategori</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-people-fill"></i> Pengguna</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Setting</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-fill-gear"></i> Profil</a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pencarian..."
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-success" type="button" id="button-addon2">Cari</button>
                    </div>
                @endauth
            </ul>
        </div>
    </div>
</nav>
