

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary"><img src="{{asset('Logo/logo-smk-putih.png')}}" alt="Logo"></h1>
                 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/dashboard" class="nav-item nav-link">Dashboard</a>
                    <a href="service.html" class="nav-item nav-link">Contact</a>
                    
                </div>
                @if (Auth::check())
                      <div class="dropdown d-inline">
                          <!-- Dropdown untuk Dashboard dan Logout -->
                          <a href="#"
                              class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0 dropdown-toggle"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Dashboard <i class="fas fa-caret-down"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-end">
                              @if (Auth::user()->role == 'admin')
                                  <li><a href="{{ route('pages.admin.dashboard') }}" class="dropdown-item"><i
                                              class="fa fa-tachometer-alt me-2"></i> Admin Dashboard</a></li>
                              @elseif (Auth::user()->role == 'user')
                                  <li><a href="#" class="dropdown-item"><i
                                              class="fa fa-user me-2"></i> User Dashboard</a></li>
                              @endif
                              <li>
                                  <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                      @csrf
                                      <button type="submit" class="dropdown-item text-danger">
                                          <i class="fa fa-sign-out-alt me-2"></i>Logout
                                      </button>
                                  </form>
                              </li>
                          </ul>
                      </div>
                  @else
                      <!-- Tombol Get Started jika belum login -->
                      <a href="{{ route('login') }}"
                          class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Bergabung Segera</a>
                  @endif
              </div>
          </nav>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>