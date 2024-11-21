@extends('layouts.Admin-page.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card shadow-sm mt-4" style="width: 60%;">
        <div class="card-body">
            <h1 class="text-center mb-4">{{ $news->title }}</h1>
            
            @if($news->image)
            <!-- Gambar Berita -->
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

            <!-- Tombol Aksi -->
            <div class="text-center mt-4">
                <a href="{{ route('news.edit', $news->id) }}" class="btn btn-warning">Edit Berita</a>
                <form action="{{ route('news.destroy', $news->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus Berita</button>
                </form>
                <a href="{{ route('news.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
