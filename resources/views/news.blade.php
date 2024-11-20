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
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending now</strong>
                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                        <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                        <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="assets/img/trending/trending_top.jpg" alt="">
                                    <div class="trend-top-cap">
                                        <span>Appetizers</span>
                                        <h2><a href="details.html">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="assets/img/trending/trending_bottom1.jpg" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">Lifestyple</span>
                                            <h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="assets/img/trending/trending_bottom2.jpg" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color2">Sports</span>
                                                <h4><h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="assets/img/trending/trending_bottom3.jpg" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color3">Travels</span>
                                                <h4><a href="details.html"> Welcome To The Best Model Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Riht content -->
                        <div class="col-lg-4">
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right1.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1">Concert</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right2.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color3">sea beach</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right3.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color2">Bike Show</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div> 
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right4.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color4">See beach</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right5.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1">Skeping</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
        <!--   Weekly-News start -->
        <div class="weekly-news-area pt-50">
            <div class="container">
               <div class="weekly-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Weekly Top News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly-news-active dot-style d-flex dot-style">
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img src="assets/img/news/weeklyNews2.jpg" alt="">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    </div>
                                </div> 
                                <div class="weekly-single active">
                                    <div class="weekly-img">
                                            <img src="assets/img/news/weeklyNews1.jpg" alt="">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                            <img src="assets/img/news/weeklyNews3.jpg" alt="">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img src="assets/img/news/weeklyNews1.jpg" alt="">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>           

        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Weekly Top News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="assets/img/news/weekly2News1.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    </div>
                                </div> 
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="assets/img/news/weekly2News2.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Event night</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    </div>
                                </div> 
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="assets/img/news/weekly2News3.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    </div>
                                </div>
                                 <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="assets/img/news/weekly2News4.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Event time</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    </div>
                                </div> 
                                 <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="assets/img/news/weekly2News4.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
        <!-- End Weekly-News -->
        <!-- Start Youtube -->
        <div class="youtube-area video-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-items-active">
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe  src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                             
                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- End pagination  -->
        </main>
</body>
@endsection     