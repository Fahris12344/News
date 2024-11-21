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
     <!-- Header Start -->
     <div class="container-fluid bg-breadcrumb">
         <div class="container text-center py-5" style="max-width: 900px;">
             <h4 class="text-white display-4 mb-4 wow fadeInDown font-jakarta" data-wow-delay="0.1s">
                ALUMNI SMK AL-AZHAR
             </h4>
             <p class="text-white wow fadeInUp" data-wow-delay="0.2s">
                 Alumni sekolah kami telah mencetak banyak prestasi gemilang di berbagai bidang, menjadi bukti nyata
                 komitmen kami terhadap pendidikan berkualitas. Mari bergabung dan jadilah bagian dari cerita sukses ini!
             </p>
         </div>

     </div>
     <!-- Header End -->
     </div>
     <!-- Navbar & Hero End -->
     <!-- Team Start -->
     <div class="container-fluid team pb-5">
         <div class="container pb-5">
             <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                 <h1 class="display-5 mb-4 text-success">TEAM</h1>
                 <p class="mb-0">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum
                     quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                     alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
                 </p>
             </div>
             <div class="row g-4">
                 <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                     <div class="team-item">
                         <div class="team-img">
                             <img src="landing-pages/blog02.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="team-title">
                             <h4 class="mb-0">M.Sofyan Sauri</h4>
                             <p class="mb-0">Product Manager</p>
                         </div>
                         <div class="team-icon">
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-twitter"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-linkedin-in"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                     class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                     <div class="team-item">
                         <div class="team-img">
                             <img src="landing-pages/blog01.jpg" style="width: 500px; height: 240px; object-fit: cover;"
                                 alt="" class="img-fluid" alt="">
                         </div>
                         <div class="team-title">
                             <h4 class="mb-0">Neni Anggriyani</h4>
                             <p class="mb-0">Chief Executive Officer</p>
                         </div>
                         <div class="team-icon">
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-twitter"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-linkedin-in"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                     class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                     <div class="team-item">
                         <div class="team-img">
                             <img src="landing-pages/blog03.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="team-title">
                             <h4 class="mb-0">Rohmathul Hasanah</h4>
                             <p class="mb-0">CTO</p>
                         </div>
                         <div class="team-icon">
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-twitter"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-linkedin-in"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                     class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                     <div class="team-item">
                         <div class="team-img">
                             <img src="landing-pages/blog04.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="team-title">
                             <h4 class="mb-0">Ferdian Nada</h4>
                             <p class="mb-0">Accountant</p>
                         </div>
                         <div class="team-icon">
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-twitter"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                     class="fab fa-linkedin-in"></i></a>
                             <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                     class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Team End -->
 @endsection
