@extends('layouts.user-page.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

@section('content')
<div class="container-fluid mt-5">
    <!-- Berita Terbaru -->
    <h2 class="text-center mb-4">Berita Terbaru</h2>
    <div class="row g-4" id="berita-terbaru">
        <!-- Loop untuk menampilkan 9 berita -->
        @for ($i = 0; $i < 9; $i++)
        <div class="col-md-4 berita-item {{ $i >= 6 ? 'd-none' : '' }}">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300x200?text=Gambar+Berita+Terbaru" class="card-img-top" alt="Gambar Berita">
                <div class="card-body">
                    <h5 class="card-title">Judul Berita Terbaru {{ $i+1 }}</h5>
                    <p class="card-text">Deskripsi singkat tentang berita terbaru {{ $i+1 }}. Berita ini memberikan informasi terkini yang relevan.</p>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <!-- Tombol Show All & Tutup -->
    <div class="text-center mt-4">
        <button id="show-more" class="btn btn-primary me-2">
            <i class="bi bi-arrow-right-circle"></i> Show All
        </button>
        <button id="close-show" class="btn btn-danger d-none">
            <i class="bi bi-x-circle"></i> Tutup Show All
        </button>
    </div>
</div>

<!-- Berita Lama -->
<div class="container-fluid mt-5">
    <h2 class="text-center mb-4">Berita Lama</h2>
    <div class="row g-4" id="berita-lama">
        <!-- Loop untuk menampilkan 6 berita lama -->
        @for ($i = 0; $i < 6; $i++)
        <div class="col-md-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300x200?text=Gambar+Berita+Lama" class="card-img-top" alt="Gambar Berita Lama">
                <div class="card-body">
                    <h5 class="card-title">Judul Berita Lama {{ $i+1 }}</h5>
                    <p class="card-text">Deskripsi singkat tentang berita lama {{ $i+1 }}. Informasi ini relevan meskipun sudah lama dirilis.</p>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const showMoreButton = document.getElementById("show-more");
        const closeShowButton = document.getElementById("close-show");
        const beritaItems = document.querySelectorAll(".berita-item");

        showMoreButton.addEventListener("click", function () {
            let count = 0;

            // Tampilkan maksimal 3 berita tambahan
            beritaItems.forEach((item) => {
                if (item.classList.contains("d-none") && count < 3) {
                    item.classList.remove("d-none");
                    count++;
                }
            });

            // Sembunyikan tombol Show All jika semua berita sudah ditampilkan
            if (document.querySelectorAll(".berita-item.d-none").length === 0) {
                showMoreButton.style.display = "none";
            }

            // Tampilkan tombol "Tutup Show All"
            closeShowButton.classList.remove("d-none");
        });

        closeShowButton.addEventListener("click", function () {
            // Reset tampilan, sembunyikan berita tambahan
            beritaItems.forEach((item, index) => {
                if (index >= 6) {
                    item.classList.add("d-none");
                }
            });

            // Reset tombol Show All & sembunyikan "Tutup Show All"
            showMoreButton.style.display = "inline-block";
            closeShowButton.classList.add("d-none");
        });
    });
</script>
@endsection
