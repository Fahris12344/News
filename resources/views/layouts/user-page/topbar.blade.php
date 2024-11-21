<!-- Navbar start -->
<div class="container-fluid sticky-top px-0">
    <div class="container-fluid bg-light">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl">
                <a href="/" class="navbar-brand mt-3">
                    <p class="text-primary display-6 mb-2" style="line-height: 0;">News</p>
                    <small class="text-body fw-normal" style="letter-spacing: 12px;"></small>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="/berita" class="nav-item nav-link">Berita</a>
                        <a href="/pengumuman" class="nav-item nav-link">Pengumuman</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="#" class="dropdown-item">Kategori 1</a>
                                <a href="#" class="dropdown-item">Kategori 2</a>
                                <a href="#" class="dropdown-item">Kategori 3</a>
                                <a href="#" class="dropdown-item">Kategori 4</a>
                            </div>
                        </div>
                    </div>

                    <div class="navbar-nav ms-auto">
                        @auth
                        <!-- Dropdown untuk pengguna yang sudah login -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> 
                                {{ Auth::user()->name }} <!-- Menampilkan nama pengguna -->
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="/profile"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log</a></li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @endauth
                    
                        @guest
                        <!-- Tombol Login untuk pengguna yang belum login -->
                        <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                        <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                        @endguest
                    </div>
                    
                    
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
