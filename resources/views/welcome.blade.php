@extends('layouts.landing-page.app')

@section('content')
<style>
    /* Grid layout untuk berita */
    .news-grid {
      display: grid;
      grid-template-columns: 1fr 350px; /* 350px adalah lebar tetap untuk sidebar */
      gap: 24px; /* Jarak antara main content dan sidebar */
      position: relative;
    }
    
    /* Area konten utama (berita besar) */
    .main-content {
      width: 100%;
    }
    
    /* Sidebar (berita kecil) */
    .sidebar {
      width: 100%;
      height: 100%;
    }
    
    /* Styling untuk semua card */
    .card {
      height: 100%;
      transition: transform 0.3s ease;
    }
    
    .card:hover {
      transform: translateY(-5px);
    }
    
    /* Gambar card */
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
    
    /* Responsive untuk tablet dan mobile */
    @media (max-width: 992px) {
      .news-grid {
        grid-template-columns: 1fr; /* Stack menjadi satu kolom */
        gap: 16px;
      }
      
      .sidebar {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 16px;
      }
    }
    
    /* Card body styling */
    .card-body {
      display: flex;
      flex-direction: column;
    }
    
    .card-text {
      flex-grow: 1;
    }
    
    .btn {
      align-self: flex-start;
    }
    </style>
<body class="index-page">
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
          <div class="row">
            <!-- data-aos-delay="200" -->
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
              data-aos="fade-up" data-aos-delay="200">
              <h1>
              Smk Al Azhar
              </h1>
              <p >
              <h2 style="color: white;">Selamat Datang di SMK Al Ahzar Sempu.
                Kami dengan senang hati mempersembahkan
                beberapa Jurusan yang telah meluluskan para murid terbaik kami.
                <br>
              </h2>
              </p>
              <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="daftar-seko/daftar.html" class="btn-get-started scrollto">Daftar</a>
                <!-- <a href="https://github.com/faizinuha/WebSchool.git" class=" btn-watch-video" target="_blank"><i
                    class="bi bi-github"></i><span>Github</span></a> -->
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
              <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnNUepEc401x16udZXJc_U2wAm25pP5h_B4w&s" class="img-fluid animated w-70" alt=""> -->
            </div>
          </div>
        </div>
    
      </section><!-- End Hero -->
      <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="assets/img/trending/sekolah_top.jpg" alt="">
                                    <div class="trend-top-cap">
                                        <span>Pendidikan</span>
                                        <h2><a href="details.html">Acara Peringatan Hari Guru Nasional di SMP Negeri 1 Jakarta</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="assets/img/trending/sekolah1.jpg" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1">Ekstrakurikuler</span>
                                                <h4><a href="details.html">Siswa SMA Berprestasi di Olimpiade Sains Nasional</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="assets/img/trending/sekolah2.jpg" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color2">Event</span>
                                                <h4><a href="details.html">Lomba Cerdas Cermat Antar SMP di Kota Surabaya</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="assets/img/trending/sekolah3.jpg" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color3">Prestasi</span>
                                                <h4><a href="details.html">Peluncuran Program Literasi Nasional di Sekolah</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Content -->
                        <div class="col-lg-4">
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right_sekolah1.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1">Kegiatan</span>
                                    <h4><a href="details.html">Festival Kebudayaan di SMAN 5 Bandung</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right_sekolah2.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color3">Event</span>
                                    <h4><a href="details.html">Pelatihan Dasar Kedisiplinan untuk Siswa Baru</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
        <!-- End Weekly-News -->
        <!-- Start Youtube -->
        <div class="container my-5">
            <h2 class="text-center mb-4 text-muted">Berita Sekolah</h2>
            <div class="row g-4">
                <!-- Video 1 -->
                <div class="col-md-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/spea_vzcv-4?si=IPkI2eRi9ugfJ6Gd" 
                                title="Berita SMK Al Azhar 1" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <p class="mt-2 text-center">Berita SMK Al Azhar 1</p>
                </div>
                <!-- Video 2 -->
                <div class="col-md-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/BTObLptWrpY?si=fFnzCqFxu_MGObdz" 
                                title="Berita SMK Al Azhar 2" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <p class="mt-2 text-center">Berita SMK Al Azhar 2</p>
                </div>
                <!-- Video 3 -->
                <div class="col-md-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/CONfhrASy44" 
                                title="Berita SMK Al Azhar 3" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <p class="mt-2 text-center">Berita SMK Al Azhar 3</p>
                </div>
                <!-- Video 4 -->
                <div class="col-md-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/mF_1XfjpIc4?si=RU1huAqzuh2mC12S" 
                                title="Berita SMK Al Azhar 4" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <p class="mt-2 text-center">Berita SMK Al Azhar 4</p>
                </div>
                <!-- Video 5 -->
                <div class="col-md-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/mF_1XfjpIc4?si=RU1huAqzuh2mC12S" 
                                title="Berita SMK Al Azhar 5" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <p class="mt-2 text-center">Berita SMK Al Azhar 5</p>
                </div>
            </div>
        </div>        
        <!-- End pagination  -->
        </main>
</body>
@endsection