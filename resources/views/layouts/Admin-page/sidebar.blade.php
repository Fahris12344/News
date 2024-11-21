 
<!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
        <img src="{{ asset('logo/smkLogo.png') }}" alt="SMK Al-Azhar" style="width: 50px;">
        </div>
        <div class="sidebar-brand-text mx-2">AL-Azhar</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin/dashboard">
        <i class="bi bi-window-desktop"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="/admin/news">
        <i class="bi bi-newspaper"></i>
            <span>Berita</span>
        </a>
       
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link" href="/admin/category">
    <i class="bi bi-tag"></i>
            <span>Kategori</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link" href="{{ route('announcement.index') }}">
    <i class="bi bi-megaphone"></i>
            <span>Pengumuman</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/admin/user">
        <i class="bi bi-person-vcard"></i>
            <span>User</span></a>
    </li>

</ul>
<!-- End of Sidebar -->
