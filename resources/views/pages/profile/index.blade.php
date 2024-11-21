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
    <!-- Spinner End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb ">
        <div class="container text-center" style="width: 800px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown font-jakarta" data-wow-delay="0.1s">PROFIL SMK AL-AZHAR</h4>
            <p class="text-white wow fadeInUp" data-wow-delay="0.2s">
                SMK Al-Azhar adalah lembaga pendidikan yang berfokus pada pengembangan keterampilan siswa melalui
                pembelajaran yang berbasis kompetensi dan teknologi terkini.
            </p>
        </div>
    </div>
    <!-- Header End -->

    <!-- Profil Sekolah Start -->
    <div class="container-fluid py-5" style="background-color: #ffffff;">
        <div class="container">

            <!-- Title -->
            <div class="row text-center mb-5">
                <div class="col-md-12">
                    <p class="lead"><strong>
                            <h4></h4>
                        </strong></p>
                </div>
            </div>

            <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-title text-center">
                        <h2 class="text-success">Visi Misi</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <p>
                                Menjadi lembaga pendidikan yang unggul dalam menciptakan lingkungan belajar yang inklusif
                                dan inovatif, membekali setiap siswa dengan pengetahuan, keterampilan, dan karakter yang
                                diperlukan untuk meraih keberhasilan di masa depan.
                            </p>
                            <hr>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Unggul dalam Prestasi Akademik dan Non Akademik
                                    serta menciptakan lulusan yang berkompeten sesuai kebutuhan industri berdasarkan IMTAQ.
                                </li>
                                <li><i class="ri-check-double-line"></i> Menghasilkan Lulusan yang Cerdas, Trampil,
                                    Kompetitif dan Mandiri Sehingga Mempunyai Nilai Juang yang Tinggi.</li>
                                <li><i class="ri-check-double-line"></i> Meningkatkan Mutu Pembelajaran yang mencakup Ilmu
                                    Pengetahuan dan Teknologi Dengan Menjunjung Tinggi Budaya Bangsa dan Budi Pekerti yang
                                    Luhur.</li>
                            </ul>
                        </div>

                        <div class="col-lg-6 pt-4 pt-lg-0 mb-4">
                            <p>
                                Menjadi pusat pembelajaran yang dinamis dan inklusif, mempersiapkan siswa untuk menjadi
                                pemimpin masa depan yang berpikiran kritis, berempati, dan berdaya saing global.
                            </p>
                            <hr>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Meningkatkan Mutu Pembelajaran yang mencakup Ilmu
                                    Pengetahuan dan Teknologi Dengan Menjunjung Tinggi Budaya Bangsa dan Budi Pekerti yang
                                    Luhur.</li>
                                <li><i class="ri-check-double-line"></i> Menanamkan Jiwa Kewirausahaan (Entrepreneurship).
                                </li>
                                <li><i class="ri-check-double-line"></i> Mengembangkan Life Skill (Kecakapan Hidup) Melalui
                                    Kegiatan Ekstrakurikuler, Latihan Berwirausaha dengan Spesifik Yang Bersetandar pada
                                    Kompetensi Keahlian Kerja.</li>
                                <li><i class="ri-check-double-line"></i> Mengembangkan Program Keahlian yang Merupakan
                                    Tuntutan Pasar Kerja, Menanamkan Budaya Kerja dan Sikap Profesional Untuk Menunjang
                                    Hidup Layak Melalui Pengembangan Karir.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section><!-- End About Us Section -->

            <!-- Fasilitas Sekolah -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <h4 class="text-primary mb-4">Fasilitas Sekolah</h4>
                    <p>SMK Al-Azhar memiliki berbagai fasilitas pendukung yang lengkap, termasuk ruang kelas yang nyaman,
                        laboratorium yang modern, dan alat bantu pembelajaran berbasis teknologi. Fasilitas tersebut
                        dirancang untuk memberikan pengalaman belajar yang berkualitas, mendukung pengembangan keterampilan
                        siswa sesuai dengan perkembangan industri.</p>
                </div>
            </div>
            <!-- Fasilitas Sekolah -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <h4 class="text-primary mb-4">Tentang Kami</h4>
                    <p>SMK Al Azhar merupakan lembaga pendidikan kejuruan yang berkomitmen untuk mencetak lulusan yang
                        kompeten, berkarakter, dan siap bersaing di dunia kerja. Kami menawarkan pendidikan berkualitas yang
                        berlandaskan nilai-nilai agama dan profesionalisme.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Profil Sekolah End -->
@endsection
