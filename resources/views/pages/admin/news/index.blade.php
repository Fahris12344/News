@extends('layouts.Admin-page.app')

@section('content')
<style>
    .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
}

</style>
<div class="container-fluid py-12">
    <h1 class="text-center mt-auto">Daftar Berita</h1>

    <!-- Alert Success -->
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form Filter -->
    <form method="GET" action="{{ route('pages.admin.news.index') }}" class="mb-4">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <input type="text" name="search" class="form-control" placeholder="Cari judul/konten..." value="{{ old('search', request('search')) }}">
            </div>
            <div class="col-md-3">
                <select name="category_id" class="form-control">
                    <option value="">-- Semua Kategori --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <input type="date" name="start_date" class="form-control" value="{{ old('start_date', request('start_date')) }}">
            </div>
            <div class="col-md-2">
                <input type="date" name="end_date" class="form-control" value="{{ old('end_date', request('end_date')) }}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary btn-block">Filter</button>
            </div>
        </div>
    </form>

    <!-- Tombol Tambah Berita -->
    <div class="d-flex justify-content-center mb-4">
        <a href="{{ route('pages.admin.news.create') }}" class="btn btn-success">Tambah Berita</a>
    </div>

    <!-- Card Layout untuk Daftar Berita -->
    <div class="row">
        @forelse($news as $item)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0 h-100" style="border-radius: 15px; overflow: hidden;">
                    <!-- Gambar Admin -->
                    <div class="card-header bg-white text-center" style="border-bottom: 1px solid #f0f0f0;">
                        <img 
                            src="{{ asset('storage/' . optional($item->admin)->profile_picture) ?? asset('images/admin-placeholder.png') }}" 
                            class="rounded-circle border" 
                            alt="Admin Avatar" 
                            style="width: 60px; height: 60px; object-fit: cover;">
                    </div>
                    
                    <!-- Gambar Berita -->
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}" style="height: 180px; object-fit: cover;">
                    @else
                        <img src="{{ asset('images/placeholder.png') }}" class="card-img-top" alt="No Image" style="height: 180px; object-fit: cover;">
                    @endif

                    <!-- Konten Berita -->
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title mb-2 text-center font-weight-bold">{{ $item->title }}</h5>
                        <p class="card-text text-muted text-center small mb-3">{{ $item->category->name ?? 'Tidak ada kategori' }}</p>
                        <p class="card-text text-muted text-truncate" style="max-width: 100%;">{{ $item->content }}</p>
                    </div>

                    <!-- Footer Card -->
                    <div class="card-footer bg-white text-center py-3">
                        <a href="{{ route('pages.admin.news.show', $item->id) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">Tidak ada berita ditemukan.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $news->onEachSide(1)->links() }}
    </div>
</div>
@endsection
