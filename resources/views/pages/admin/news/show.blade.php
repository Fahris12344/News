@extends('layouts.Admin-page.app')

@section('content')
<div class="container" style="margin-left: 250px;"> <!-- Penyesuaian margin dengan sidebar -->
    <div class="card shadow-sm mt-4">
        <div class="card-body">
            <h1 class="text-center mb-4">{{ $news->title }}</h1>
            
            <!-- Gambar Berita -->
            @if($news->image)
            <div class="text-center mb-4">
                <img src="{{ asset('storage/' . $news->image) }}" alt="Gambar Berita" class="img-fluid" style="max-height: 400px; object-fit: cover; border: 1px solid #ddd; padding: 5px;">
            </div>
            @endif

            <!-- Detail Berita -->
            <div class="mb-3">
                <h5><strong>Kategori:</strong></h5>
                <p>{{ $categories->firstWhere('id', $news->category_id)?->name ?? 'Tidak ada kategori' }}</p>
            </div>
            <div class="mb-3">
                <h5><strong>Konten:</strong></h5>
                <p>{{ $news->content }}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5><strong>Tanggal Mulai:</strong></h5>
                    <p>{{ \Carbon\Carbon::parse($news->start_date)->format('d M Y') }}</p>
                </div>
                <div class="col-md-6">
                    <h5><strong>Tanggal Selesai:</strong></h5>
                    <p>{{ \Carbon\Carbon::parse($news->end_date)->format('d M Y') }}</p>
                </div>
            </div>

            <!-- Tombol Like dan Dislike (Icons) -->
            <div class="text-center mt-4">
                @if(Auth::check())
                    <!-- Like Button with Icon -->
                    <form action="{{ route('news.like', $news->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-thumbs-up"></i> <!-- Like Icon -->
                        </button>
                    </form>
                    <span>Likes</span>
                    
                    <!-- Dislike Button with Icon -->
                    <form action="{{ route('news.dislike', $news->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-thumbs-down"></i> <!-- Dislike Icon -->
                        </button>
                    </form>
                    <span> Dislikes</span>
                @else
                    <p class="text-muted">Login untuk menyukai atau tidak menyukai berita.</p>
                @endif
            </div>

            <!-- Form Komentar -->
            <div class="mt-5">
                <h5><strong>Tambahkan Komentar:</strong></h5>
                @if(Auth::check())
                    <form action="{{ route('news.comment', $news->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea name="comment" class="form-control" rows="3" placeholder="Tulis komentar..."></textarea>
                            @error('comment')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Kirim Komentar</button>
                    </form>
                @else
                    <p class="text-muted">Login untuk memberikan komentar.</p>
                @endif
            </div>

            <!-- Daftar Komentar -->
            <div class="mt-5">
                <h5><strong>Komentar:</strong></h5>
                @foreach($news->comments as $comment)
                    <div class="mb-3">
                        <strong>{{ $comment->user->name }}</strong>
                        <p class="mb-1">{{ $comment->content }}</p>
                        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                    </div>
                @endforeach
                @if($news->comments->count() == 0)
                    <p class="text-muted">Belum ada komentar.</p>
                @endif
            </div>

            <!-- Tombol Edit dan Hapus (Hanya untuk Admin) -->
            @if(Auth::check() && Auth::user()->role === 'admin') 
                <div class="text-center mt-4">
                    <a href="{{ route('pages.admin.news.edit', $news->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pages.admin.news.destroy', $news->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                    </form>
                </div>
            @endif

            <!-- Tombol Kembali -->
            <div class="text-center mt-4">
                <a href="{{ route('pages.admin.news.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
