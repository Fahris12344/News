<style>
    /* Mengubah warna teks di dalam sidebar menjadi hitam */
    .navbar-nav {
        color: black; /* Mengubah warna teks untuk seluruh navbar */
    }

    .sidebar .nav-item .nav-link {
        color: black; /* Mengubah warna teks untuk setiap item menu */
    }

    .sidebar .sidebar-heading {
        color: black; /* Mengubah warna teks untuk heading sidebar */
    }
    
    .sidebar .sidebar-brand-text {
        color: black; /* Mengubah warna teks untuk brand text */
    }
</style>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-white sidebar accordion" id="accordionSidebar">
    <!-- Sidebar content here -->
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
    <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fa fa-home"></i>
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
            <i class="fa fa-newspaper"></i>
            <span>Berita</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="/pages/admin/category/index">
            <i class="fa fa-bullhorn"></i> 
            <span>Kategori</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('pages.admin.announcement.index')}}">
            <i class="fa fa-user-circle"></i>
            <span>Pengumuman</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/admin/user">
            <i class="fa fa-user-circle"></i>
            <span>User</span></a>
    </li>

</ul>
<!-- End of Sidebar -->
