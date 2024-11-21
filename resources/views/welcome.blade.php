   @extends('layouts.landing-page.app')
   @section('content')
       <style>
           .font-jakarta {
               font-family: 'Plus Jakarta Sans', sans-serif;
           }
       </style>

       <!-- Spinner Start -->
       <div id="spinner"
           class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
           <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
               <span class="sr-only">Loading...</span>
           </div>
       </div>
       <!-- Carousel Start -->
       <div class="header-carousel owl-carousel">
           <div class="header-carousel-item">
               <img src="assets/img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
               <div class="carousel-caption">
                   <div class="container">
                       <div class="row gy-0 gx-5">
                           <div class="col-lg-0 col-xl-5"></div>
                           <div class="col-xl-7 animated fadeInLeft">
                               <div class="text-sm-center text-md-end">
                                   <h4 class="text-primary text-uppercase fw-bold mb-4 font-jakarta">MULAI LIHAT BERITA</h4>
                                   <h1 class="display-4 text-uppercase text-white mb-4 font-jakarta">ISI HARI MU DENGAN
                                       BERITA TERBARU HARI INI</h1>
                                   <p class="mb-5 fs-5">"Menjadi Sumber Inspirasi, Membangun Generasi Cerdas, dan Mewujudkan
                                       Pendidikan Berkualitas."</p>
                                   <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                       <h2 class="text-white me-2">Follow us:</h2>
                                       <div class="d-flex justify-content-end ms-2">
                                           <a class="btn btn-md-square btn-light rounded-circle me-2"
                                               href="https://www.facebook.com/smkalazharsempu"><i
                                                   class="fab fa-facebook-f"></i></a>
                                           <a class="btn btn-md-square btn-light rounded-circle mx-2"
                                               href="https://twitter.com/smkalazharsempu"><i class="fab fa-twitter"></i></a>
                                           <a class="btn btn-md-square btn-light rounded-circle mx-2"
                                               href="https://www.instagram.com/smkalazharsempu/"><i
                                                   class="fab fa-instagram"></i></a>
                                           <a class="btn btn-md-square btn-light rounded-circle ms-2"
                                               href="https://www.linkedin.com/in/rijal-annur-3b2083140/?originalSubdomain=id"><i
                                                   class="fab fa-linkedin-in"></i></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="header-carousel-item">
               <img src="assets/img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
               <div class="carousel-caption">
                   <div class="container">
                       <div class="row g-5">
                           <div class="col-12 animated fadeInUp">
                               <div class="text-center">
                                   <h4 class="text-primary text-uppercase fw-bold mb-4 font-jakarta">BERITA SEKOLAH</h4>
                                   <h1 class="display-4 text-uppercase text-white mb-4 font-jakarta">"MENGINSPIRASI DAN
                                       MEMBUKA WAWASAN GENERASI MUDA"</h1>
                                   <p class="mb-5 fs-5">"Informasi Terkini, Inspirasi Tiada Henti – Berita Sekolah untuk
                                       Masa Depan Ceriah!"</p>
                                   <div class="d-flex align-items-center justify-content-center">
                                       <h2 class="text-white me-2">Follow us:</h2>
                                       <div class="d-flex justify-content-end ms-2">
                                           <a class="btn btn-md-square btn-light rounded-circle me-2"
                                               href="https://www.facebook.com/smkalazharsempu"><i
                                                   class="fab fa-facebook-f"></i></a>
                                           <a class="btn btn-md-square btn-light rounded-circle mx-2"
                                               href="https://twitter.com/smkalazharsempu"><i class="fab fa-twitter"></i></a>
                                           <a class="btn btn-md-square btn-light rounded-circle mx-2"
                                               href="https://www.instagram.com/smkalazharsempu/"><i
                                                   class="fab fa-instagram"></i></a>
                                           <a class="btn btn-md-square btn-light rounded-circle ms-2"
                                               href="https://www.linkedin.com/in/rijal-annur-3b2083140/?originalSubdomain=id"><i
                                                   class="fab fa-linkedin-in"></i></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Carousel End -->
       </div>
       <!-- Navbar & Hero End -->


       <!-- Tentang Kami Mulai -->
       <div class="container-fluid about py-5">
           <div class="container py-5">
               <div class="row g-5 align-items-center">
                   <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                       <div>
                           <h4 class="text-primary">Tentang Kami</h4>
                           <h1 class="display-5 mb-4">Kenali SMK Al Azhar, Wujudkan Masa Depan Gemilang</h1>
                           <p class="mb-4">
                               SMK Al Azhar merupakan lembaga pendidikan kejuruan yang berkomitmen untuk mencetak lulusan
                               yang kompeten, berkarakter, dan siap bersaing di dunia kerja. Kami menawarkan pendidikan
                               berkualitas yang berlandaskan nilai-nilai agama dan profesionalisme.
                           </p>
                           <div class="row g-4">
                               <div class="col-md-6 col-lg-6 col-xl-6">
                                   <div class="d-flex">
                                       <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                       <div class="ms-4">
                                           <h4>Konsultasi Karir</h4>
                                           <p>Kami membimbing siswa untuk menentukan pilihan karir yang sesuai dengan minat
                                               dan bakat mereka.</p>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-6 col-lg-6 col-xl-6">
                                   <div class="d-flex">
                                       <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                       <div class="ms-4">
                                           <h4>Pengalaman Bertahun-tahun</h4>
                                           <p>Dengan pengalaman lebih dari satu dekade, kami terus berinovasi dalam
                                               pendidikan kejuruan.</p>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Pelajari
                                       Lebih Lanjut</a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                       <div class="rounded position-relative overflow-hidden">
                           <img src="assets/img/tentang-image1.png" class="img-fluid rounded w-100"
                               alt="Gambar SMK Al Azhar">
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Tentang Kami Selesai -->


       <!-- Layanan Kami Mulai -->
       <div class="container-fluid service pb-5">
           <div class="container pb-5">
               <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                   <h4 class="text-primary">Layanan Kami</h4>
                   <h1 class="display-6 mb-4 font-jakarta">Informasi Terbaik untuk Komunitas Sekolah</h1>
                   <p class="mb-0">
                       Selamat datang di web berita sekolah kami! Kami menyediakan informasi terkini tentang kegiatan,
                       acara, dan pengumuman penting di lingkungan sekolah. Dengan desain modern dan navigasi yang mudah,
                       kami berkomitmen memberikan berita terpercaya untuk siswa, guru, dan orang tua.
                   </p>
               </div>
               <div class="row g-4">
                   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                       <div class="service-item rounded-bottom p-4 text-center border border-primary position-relative">
                           <!-- Tempat Vektor -->
                           <div class="vector-container mb-4">
                               <img src="assets/img/layanan-1.png" alt="Vektor Berita Terkini" class="img-fluid"
                                   style="width: 100px;">
                           </div>
                           <h4 class="text-primary mb-3">Berita Terkini</h4>
                           <p class="mb-3">
                               Dapatkan berita terbaru tentang prestasi siswa, kegiatan sekolah, dan informasi penting
                               lainnya.
                           </p>
                       </div>
                   </div>
                   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                       <div class="service-item rounded-bottom p-4 text-center border border-primary position-relative">
                           <!-- Tempat Vektor -->
                           <div class="vector-container mb-4">
                               <img src="assets/img/layanan-2.png" alt="Vektor Agenda Kegiatan" class="img-fluid"
                                   style="width: 100px;">
                           </div>
                           <h4 class="text-primary mb-3">Agenda Kegiatan</h4>
                           <p class="mb-3">
                               Pantau jadwal acara sekolah seperti lomba, seminar, dan hari penting lainnya agar tidak
                               ketinggalan momen istimewa.
                           </p>
                       </div>
                   </div>
                   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                       <div class="service-item rounded-bottom p-4 text-center border border-primary position-relative">
                           <!-- Tempat Vektor -->
                           <div class="vector-container mb-4">
                               <img src="assets/img/layanan-4.png" alt="Vektor Agenda Kegiatan" class="img-fluid"
                                   style="width: 100px;">
                           </div>
                           <h4 class="text-primary mb-3">Agenda Kegiatan</h4>
                           <p class="mb-3">
                               Pantau jadwal acara sekolah seperti lomba, seminar, dan hari penting lainnya agar tidak
                               ketinggalan momen istimewa.
                           </p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Layanan Kami Selesai -->

       <!-- CSS Tambahan -->
       <style>
           .service-item {
               transition: all 0.3s ease-in-out;
               box-shadow: 0 2px 4px rgba(0, 0, 0, 0.0) !important;
               /* Shadow default */
           }

           .service-item:hover {
               background-color: #f8f9fa;
               box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
               /* Shadow tipis saat hover */
           }

           .vector-container img {
               transition: transform 0.3s ease-in-out;
           }

           .vector-container img:hover {
               transform: rotate(15deg);
           }
       </style>



       <!-- Features Start -->
       <div class="container-fluid feature pb-5">
           <div class="container pb-5">
               <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                   <h4 class="text-primary">Jurusan SMK Alazhar</h4>
                   <h1 class="display-6 mb-4 font-jakarta">Menghubungkan ilmu, kreativitas, dan peluang untuk masa depan yang cerah.
                   </h1>
                   <p class="mb-0">Di SMK Alazhar, kami memberikan pendidikan berkualitas dengan fokus pada keterampilan
                       praktis dan siap menghadapi tantangan dunia industri.</p>
               </div>
               <div class="row g-4">
                   <!-- Card 1: Rekayasa Perangkat Lunak -->
                   <div class="col-md-4 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                       <div class="feature-item p-4">
                           <div class="feature-icon p-4 mb-4">
                               <i class="fas fa-laptop-code fa-4x text-primary"></i>
                           </div>
                           <h4>Rekayasa Perangkat Lunak (RPL)</h4>
                           <p class="mb-4">Belajar pemrograman, pembuatan aplikasi, dan pengembangan perangkat lunak
                               untuk berbagai platform, termasuk aplikasi desktop, web, dan mobile.</p>
                           <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                       </div>
                   </div>
                   <!-- Card 2: Teknik Komputer dan Jaringan -->
                   <div class="col-md-4 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                       <div class="feature-item p-4">
                           <div class="feature-icon p-4 mb-4">
                               <i class="fas fa-network-wired fa-4x text-primary"></i>
                           </div>
                           <h4>Teknik Komputer dan Jaringan (TKJ)</h4>
                           <p class="mb-4">Mengembangkan keterampilan dalam instalasi, perawatan, dan pengelolaan sistem
                               komputer dan jaringan, serta pemecahan masalah perangkat keras dan perangkat lunak.</p>
                           <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                       </div>
                   </div>
                   <!-- Card 3: Teknik Kendaraan Ringan -->
                   <div class="col-md-4 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                       <div class="feature-item p-4">
                           <div class="feature-icon p-4 mb-4">
                               <i class="fas fa-car fa-4x text-primary"></i>
                           </div>
                           <h4>Teknik Kendaraan Ringan (TKR)</h4>
                           <p class="mb-4">Mempelajari teknik perbaikan dan pemeliharaan kendaraan ringan seperti mobil
                               dan sepeda motor, serta keterampilan dalam diagnosis dan perbaikan mesin kendaraan.</p>
                           <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                       </div>
                   </div>
                   <!-- Card 4: Tata Busana -->
                   <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.8s">
                       <div class="feature-item p-4">
                           <div class="feature-icon p-4 mb-4">
                               <i class="fas fa-tshirt fa-4x text-primary"></i>
                           </div>
                           <h4>Tata Busana (TB)</h4>
                           <p class="mb-4">Mengajarkan keterampilan dalam merancang, membuat, dan memperbaiki pakaian,
                               serta keterampilan tata busana untuk industri fashion.</p>
                           <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                       </div>
                   </div>
                   <!-- Card 5: Administrasi Keuangan dan Lembaga -->
                   <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="1s">
                       <div class="feature-item p-4">
                           <div class="feature-icon p-4 mb-4">
                               <i class="fas fa-calculator fa-4x text-primary"></i>
                           </div>
                           <h4>Administrasi Keuangan dan Lembaga (AKL)</h4>
                           <p class="mb-4">Mempersiapkan siswa untuk berkarir di bidang administrasi keuangan,
                               pengelolaan pembukuan, serta administrasi lembaga dan perusahaan.</p>
                           <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Features End -->




       <!-- Blog Start -->
       <div class="container-fluid blog pb-5">
           <div class="container pb-5">
               <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                   <h4 class="text-primary">Berita SMK Al Azhaar</h4>
                   <h1 class="display-6 mb-4  font-jakarta">Informasi Terbaru dari SMK Al-Azhar</h1>
                   <p class="mb-0">Selamat datang di portal berita SMK Al Azhaar. Dapatkan informasi terkini mengenai
                       kegiatan, prestasi, dan acara yang berlangsung di sekolah kami.
                   </p>
               </div>
               <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                   <div class="blog-item p-4">
                       <div class="blog-img mb-4">
                           <img src="assets/img/service-1.jpg" class="img-fluid w-100 rounded" alt="">
                           <div class="blog-title">
                               <a href="#" class="btn">Kegiatan Ekstrakurikuler</a>
                           </div>
                       </div>
                       <a href="#" class="h4 d-inline-block mb-3">Ekstrakurikuler SMK Al Azhaar 2025</a>
                       <p class="mb-4">SMK Al Azhaar kembali mengadakan berbagai kegiatan ekstrakurikuler yang bertujuan
                           untuk mengembangkan minat dan bakat siswa....
                       </p>
                       <div class="d-flex align-items-center">
                           <img src="assets/img/testimonial-1.jpg" class="img-fluid rounded-circle"
                               style="width: 60px; height: 60px;" alt="">
                           <div class="ms-3">
                               <h5>Admin</h5>
                               <p class="mb-0">9 Oktober 2025</p>
                           </div>
                       </div>
                   </div>
                   <div class="blog-item p-4">
                       <div class="blog-img mb-4">
                           <img src="assets/img/service-2.jpg" class="img-fluid w-100 rounded" alt="">
                           <div class="blog-title">
                               <a href="#" class="btn">Prestasi Siswa</a>
                           </div>
                       </div>
                       <a href="#" class="h4 d-inline-block mb-3">Prestasi Siswa SMK Al Azhaar dalam Lomba
                           Nasional</a>
                       <p class="mb-4">Siswa SMK Al Azhaar meraih juara dalam lomba nasional di bidang teknologi dan
                           keahlian komputer....
                       </p>
                       <div class="d-flex align-items-center">
                           <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded-circle"
                               style="width: 60px; height: 60px;" alt="">
                           <div class="ms-3">
                               <h5>Admin</h5>
                               <p class="mb-0">9 Oktober 2025</p>
                           </div>
                       </div>
                   </div>
                   <div class="blog-item p-4">
                       <div class="blog-img mb-4">
                           <img src="assets/img/service-3.jpg" class="img-fluid w-100 rounded" alt="">
                           <div class="blog-title">
                               <a href="#" class="btn">Berita Sekolah</a>
                           </div>
                       </div>
                       <a href="#" class="h4 d-inline-block mb-3">Kunjungan Industri ke Perusahaan Teknologi</a>
                       <p class="mb-4">Siswa SMK Al Azhaar melakukan kunjungan industri ke perusahaan teknologi terkemuka
                           untuk memperluas wawasan mereka....
                       </p>
                       <div class="d-flex align-items-center">
                           <img src="assets/img/testimonial-3.jpg" class="img-fluid rounded-circle"
                               style="width: 60px; height: 60px;" alt="">
                           <div class="ms-3">
                               <h5>Admin</h5>
                               <p class="mb-0">9 Oktober 2025</p>
                           </div>
                       </div>
                   </div>
                   <div class="blog-item p-4">
                       <div class="blog-img mb-4">
                           <img src="assets/img/service-4.jpg" class="img-fluid w-100 rounded" alt="">
                           <div class="blog-title">
                               <a href="#" class="btn">Program Magang</a>
                           </div>
                       </div>
                       <a href="#" class="h4 d-inline-block mb-3">Program Magang di Industri Teknologi</a>
                       <p class="mb-4">SMK Al Azhaar membuka kesempatan bagi siswa untuk mengikuti program magang di
                           berbagai perusahaan teknologi....
                       </p>
                       <div class="d-flex align-items-center">
                           <img src="assets/img/testimonial-1.jpg" class="img-fluid rounded-circle"
                               style="width: 60px; height: 60px;" alt="">
                           <div class="ms-3">
                               <h5>Admin</h5>
                               <p class="mb-0">9 Oktober 2025</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Blog End -->


       <!-- Testimonial End -->
   @endsection
