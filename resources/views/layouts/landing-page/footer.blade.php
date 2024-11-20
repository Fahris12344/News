  <!-- Footer -->
  <!-- ======= Footer ======= -->
  <footer id="footer">

      <div class="footer-newsletter">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <!-- <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="#" method="post" class="text-center">
              <a href="https://www.youtube.com/@smkalazharsempu" class="btn btn-primary rounded-2">Subscribe</a>
            </form> -->
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-top">
          <div class="container">
              <div class="row">

                  <div class="col-lg-3 col-md-6 footer-contact">
                      <h3>SMK AL AHZAR</h3>
                      <p>
                          Jl. Imam Syafi'i No.45,<br>
                          Tugung, Sempu, Kec. Sempu,<br>
                          Kabupaten Banyuwangi, Jawa Timur 68468 <br><br>
                          <strong>Phone:</strong> +62 852 3655 3650<br>
                          <strong>Email:</strong> smkalazhar.sempubwi@gmail.com<br>
                      </p>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#about">Visi | Misi</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="jurusan.html">jurusan</a></li>
                          <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                      </ul>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Our Services</h4>
                      <ul>
                          <li><i class="bx bx-chevron-right"></i><a href="https://class.hummatech.com/login"
                                  target="_blank">Hummantech</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="https://acsmultitechnology.com/"
                                  target="_blank">ACS -
                                  Multitechnology</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="404/txt.html">Update Yang akan Datang?</a>
                          </li>
                      </ul>
                  </div>


                  <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
                  <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Ikuti Kami di Medai Lainya</h4>
                      <p>Kalian bisa Follow Media sosial kami tidak ketinggalan Informasi</p>
                      <p id="setime"></p>
                      <div class="social-links mt-3">
                          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                          <a href="https://www.youtube.com/@smkalazharsempu" class="google-plus" target="_blank"><i
                                  class="bx bxl-youtube"></i></i></a>
                          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                      </div>
                  </div>

              </div>
          </div>
      </div>
      <!-- End Footer -->
      <div class="container footer-bottom clearfix">
          <div class="copyright">
              &copy; Copyright <strong><span>Zaki</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
      </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
      <i class="bi bi-arrow-up-short"></i></a>
  <!-- settime -->
  <style>
      .warna {
          position: relative;
          color: aqua;
          left: 50px;
      }
  </style>
  <script>
      var date = new Date();
      var hours = date.getHours();

      var greetings = [
          "Selamat Malam!",
          "Selamat Pagi!",
          "Selamat Siang!",
          "Selamat Sore!",
          "Selamat Malam Semuanya!"
      ];

      var timePeriod = Math.floor(hours / 6); // Divide 24-hour day into 4 segments
      var greeting = greetings[timePeriod]; // Assign greeting based on time period

      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
          'November', 'Desember'
      ];
      var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

      var day = date.getDate();
      var month = date.getMonth();
      var thisDay = date.getDay();
      thisDay = myDays[thisDay];

      var year = date.getFullYear();

      var info = greeting + "<br>" + thisDay + ", " + day + ' ' + months[month] + ' ' + year;
      document.getElementById('setime').innerHTML = info;

      // Tambahkan event listener untuk menampilkan alert saat cursor diarahkan ke elemen tersebut
      document.getElementById('setime').addEventListener('', function() {
          var alertInfo = info.replace("<br>", ", ");
          alert(alertInfo);
      });
  </script>
  <!-- end setime -->
