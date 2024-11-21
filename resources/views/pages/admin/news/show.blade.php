@extends('layouts.Admin-page.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card shadow-sm mt-4" style="max-width: 600px;">
        <div class="card-body">
            <!-- Judul Berita -->
            <h3 class="text-center mb-3">{{ $news->title }}</h3>

            <!-- Gambar Berita (jika ada) -->
            @if($news->image)
            <div class="text-center mb-3">
                <img src="{{ asset('storage/' . $news->image) }}" alt="Gambar Berita" class="img-fluid" style="max-height: 300px; object-fit: cover;">
            </div>
            @endif

            <!-- Kategori -->
            <div class="mb-2">
                <strong>Kategori:</strong> 
                <span>{{ $categories->firstWhere('id', $news->category_id)?->name ?? 'Tidak ada kategori' }}</span>
            </div>

            <!-- Konten Berita -->
            <div class="mb-3">
                <strong>Konten:</strong>
                <p>{{ $news->content }}</p>
            </div>

            <!-- Tanggal Mulai dan Selesai -->
            <div class="row mb-3">
                <div class="col">
                    <strong>Tanggal Mulai:</strong>
                    <p>{{ \Carbon\Carbon::parse($news->start_date)->format('d M Y') }}</p>
                </div>
                <div class="col">
                    <strong>Tanggal Selesai:</strong>
                    <p>{{ \Carbon\Carbon::parse($news->end_date)->format('d M Y') }}</p>
                </div>
            </div>

            <!-- Like dan Dislike dengan Jumlah -->
            <div class="d-flex justify-content-start mb-4">
                <div class="d-inline mx-2">
                    <form action="{{ route('news.like', $news->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-thumbs-up"></i> <!-- Like Icon -->
                        </button>
                    </form>
                    <span> 1 </span>
                </div>

                <div class="d-inline mx-2">
                    <form action="{{ route('news.dislike', $news->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-thumbs-down"></i> <!-- Dislike Icon -->
                        </button>
                    </form>
                    <span> 2 </span>
                </div>
            </div>

            <!-- Komentar: Cek apakah pengguna sudah login -->
            @if(auth()->check())
            <div class="mb-4">
                <h5><strong>Komentar:</strong></h5>
                <!-- Form komentar bisa diisi di sini -->
                <form action="{{ route('news.comment', $news->id) }}" method="POST">
                    @csrf
                    <textarea name="comment" class="form-control" rows="3" placeholder="Tulis komentar..."></textarea>
                    <button type="submit" class="btn btn-primary mt-2">Kirim Komentar</button>
                </form>
            </div>
            @else
            <div class="alert alert-info text-center mb-3">
                Anda harus <a href="{{ route('login') }}">login</a> untuk mengirim komentar.
            </div>
            @endif

            <!-- Daftar Komentar -->
            <div class="mb-4">
                <h5><strong>Daftar Komentar:</strong></h5>
                @forelse($news->comments as $comment)
                    <div class="mb-3">
                        <strong>{{ $comment->user->name }}</strong>
                        <p>{{ $comment->content }}</p>
                        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                    </div>
                @empty
                    <p class="text-muted">Belum ada komentar.</p>
                @endforelse
            </div>

            <!-- Tombol Aksi -->
            <div class="text-center">
                <a href="{{ route('pages.admin.news.edit', $news->id) }}" class="btn btn-warning btn-sm">Edit Berita</a>
                <form action="{{ route('pages.admin.news.edit', $news->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                </form>
                <a href="{{ route('pages.admin.news.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
