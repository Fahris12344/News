@extends('layouts.landing-page.app')

@section('content')
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
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover mt-0"
        style="background-image: url('{{ asset('storage/Background-Hubungi%20Kami.jpg') }}'); padding: 50px 0;">
        <div class="container">
        </div>
    </div>

    <!-- Contact Us Section -->
    <div class="contact-us-area default-padding py-5">
        <div class="container">
            <!-- Intro Section -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">Hubungi Kami</h2>
                <p class="text-muted">Butuh bantuan? Jangan ragu untuk menghubungi kami. Tim kami siap melayani Anda dengan
                    senang hati!</p>
            </div>

            <!-- Address and Contact Info Section -->
            <div class="row mb-5">
                <div class="col-lg-4 text-center">
                    <div class="card shadow-sm p-4 border-0">
                        <i class="fas fa-map-marker-alt fa-3x text-success mb-3"></i>
                        <h5 class="fw-bold">Alamat</h5>
                        <p>Jl. Imam Syafi'i No.45, Tugung, Sempu, Banyuwangi, Jawa Timur 68468</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card shadow-sm p-4 border-0">
                        <i class="fab fa-whatsapp fa-3x text-success mb-3"></i>
                        <h5 class="fw-bold">WhatsApp</h5>
                        <a href="https://wa.me/6285335104442" class="text-decoration-none text-dark">+62 853-3510-4442</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card shadow-sm p-4 border-0">
                        <i class="fas fa-envelope fa-3x text-success mb-3"></i>
                        <h5 class="fw-bold">Email</h5>
                        <a href="mailto:smkalazhar.sempubwi@gmail.com"
                            class="text-decoration-none text-dark">smkalazhar.sempubwi@gmail.com</a>
                    </div>
                </div>
            </div>

            <!-- Map and Contact Form Section -->
            <div class="row">
                <!-- Google Map -->
                <div class="col-lg-6 mb-4">
                    <div class="shadow-sm rounded overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.9846373674577!2d114.13522647373497!3d-8.30432468354779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6acb17e63e19d%3A0xf0a7e21e4fcadf5f!2sSMK%20AL-AZHAR%20SEMPU!5e0!3m2!1sid!2sid!4v1731914869984!5m2!1sid!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="card shadow-sm p-4">
                        <h4 class="fw-bold text-center mb-4">Kirim Pesan</h4>
                        <form action="https://hummatech.com/contact/store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control" id="name" name="name" placeholder="Nama Anda"
                                    type="text" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input class="form-control" id="email" name="email" placeholder="Email Anda"
                                        type="email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input class="form-control" id="no_telp" name="no_telp"
                                        placeholder="Nomor Telepon" type="text" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="comments" name="description" rows="5" placeholder="Pesan Anda" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-4 py-2">Kirim Pesan <i
                                        class="fa fa-paper-plane ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
