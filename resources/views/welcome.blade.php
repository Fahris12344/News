@extends('layouts.landing-page.app')

@section('content')
<body class="index-page">

  <main id="main">
    <!-- ======= Berita Section ======= -->
    <section id="berita" class="berita">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Berita Terbaru</h2>
          <p>Berita terkini dari SMK Al Azhar Sempu</p>
        </div>

        <div class="row">
          <!-- Berita Besar -->
          <div class="col-lg-8">
            <div style="width: 200px height: auto" class="card mb-4">
              <img src="foto\foto-1.jpg" class="card-img-top" alt="Berita Besar">
              <div class="card-body">
                <h5 class="card-title">Judul Berita Besar</h5>
                <p class="card-text">Deskripsi lengkap tentang berita besar. Berita ini menjelaskan tentang...</p>
                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>

          <!-- Berita Kecil -->
          <div class="col-lg-3">
            <div class="row">
              <!-- Berita Kecil 1 -->
              <div class="col-12 mb-4">
                <div class="card">
                  <img src="foto\foto-1.jpg" class="card-img-top" alt="Berita Kecil 1">
                  <div class="card-body">
                    <h5 class="card-title">Judul Berita Kecil 1</h5>
                    <p class="card-text">Deskripsi singkat tentang berita kecil 1. Berita ini menjelaskan tentang...</p>
                    <a href="#" class="btn btn-secondary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>

              <!-- Berita Kecil 2 -->
              <div class="col-12 mb-3">
                <div class="card">
                  <img src="foto\foto-1.jpg" class="card-img-top" alt="Berita Kecil 2">
                  <div class="card-body">
                    <h5 class="card-title">Judul Berita Kecil 2</h5>
                    <p class="card-text">Deskripsi singkat tentang berita kecil 2. Berita ini menjelaskan tentang...</p>
                    <a href="#" class="btn btn-secondary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>

              <!-- Berita Kecil 3 -->
              <div class="col-12 mb-4">
                <div class="card">
                  <img src="foto\foto-1.jpg" class="card-img-top" alt="Berita Kecil 3">
                  <div class="card-body">
                    <h5 class="card-title">Judul Berita Kecil 3</h5>
                    <p class="card-text">Deskripsi singkat tentang berita kecil 3. Berita ini menjelaskan tentang...</p>
                    <a href="#" class="btn btn-secondary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Berita Section -->
  </main>

  <footer id="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <p>Ikuti berita terbaru dari kami.</p>
          </div>
        </div>
      </div>
    </div>
  @endsection
