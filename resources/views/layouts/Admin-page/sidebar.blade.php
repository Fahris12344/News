    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/admin/dashboard" style="margin-top: 45px;">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>            
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="/admin/news" aria-expanded="false" aria-controls="ui-basic">
              <i class="bi bi-newspaper" style="font-size:18px;"></i>
              <span class="menu-title" style="margin-left:18px;">Berita</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="{{route('/admin/category')}}" aria-expanded="false" aria-controls="form-elements">
            <i class="bi bi-tags" style="font-size:18px;"></i>
              <span class="menu-title" style="margin-left:18px;">Kategori</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="/admin/announcement" aria-expanded="false" aria-controls="charts">
            <i class="bi bi-megaphone" style="font-size:18px;"></i>
              <span class="menu-title" style="margin-left:18px;">Pengumuman</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="/admin/user" aria-expanded="false" aria-controls="auth">
            <i class="bi bi-person-badge" style="font-size:18px;"></i>
              <span class="menu-title" style="margin-left:18px;">User</span>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="/admin/comment" aria-expanded="false" aria-controls="auth">
            <i class="bi bi-chat-left-dots" style="font-size:18px;"></i>
              <span class="menu-title" style="margin-left:18px;">Komentar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>