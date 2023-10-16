<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="{{ route('welcome') }}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5 text-uppercase text-success"><i class="fa fa-home mr-2"></i>INI BLITAR</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="{{ route('welcome') }}"
                    class="nav-item nav-link {{ request()->routeIs('welcome*') ? 'active' : '' }}">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Telusuri</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ route('halaman.category') }}"
                            class="dropdown-item {{ request()->routeIs('halaman.category*') ? 'active' : '' }}">Kategori</a>
                        <a href="{{ route('halaman.district') }}"
                            class="dropdown-item {{ request()->routeIs('halaman.district*') ? 'active' : '' }}">Kecamatan</a>
                    </div>
                </div>
                <a href="{{ route('halaman.destination') }}"
                    class="nav-item nav-link {{ request()->routeIs('halaman.destination*') ? 'active' : '' }}">Semua
                    Wisata</a>
                <a href="{{ route('halaman.about') }}"
                    class="nav-item nav-link {{ request()->routeIs('halaman.about*') ? 'active' : '' }}">Tentang</a>

            </div>
            @auth
                <a href="{{ route('home') }}" class="btn btn-success py-2 px-4 d-none d-lg-block">Dashboard</a>
            @endauth
            @guest
                <a href="https://wa.me/6285735621003" class="btn btn-success py-2 px-4 d-none d-lg-block">Kontak</a>
            @endguest
        </div>
    </nav>
</div>
