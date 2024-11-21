

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
              <h1 class="text-primary">
                <img src="{{asset('Logo/logo-smk-putih.png')}}" alt="Logo" style="width: 300px; height: auto;">
            </h1>            
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/profile-school" class="nav-item nav-link {{ request()->is('profile-school') ? 'active' : '' }}">Profile</a>
                <a href="/contact" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                <a href="/alumni" class="nav-item nav-link {{ request()->is('alumni') ? 'active' : '' }}">Alumni</a>
            </div>
            
            @if (Auth::check())
            @if (Auth::user()->role == 'admin')
                <!-- Admin bisa ke admin dashboard atau dashboard biasa -->
                <a href="/admin/dashboard"
                    class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Lihat Berita (Admin)</a>
                <a href="/dashboard"
                    class="btn btn-outline-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Lihat Berita (User)</a>
            @else
                <!-- User biasa -->
                <a href="/dashboard"
                    class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Lihat Seluruh Berita</a>
            @endif
        @else
            <!-- Jika belum login -->
            <a href="/login"
                class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Lihat Seluruh Berita</a>
        @endif
        
              </div>
          </nav>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>