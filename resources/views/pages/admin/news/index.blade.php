@extends('layouts.Admin-page.app')

@section('content')
<div class="container-fluid py-4">
    <h1 class="text-center">Daftar Berita</h1>

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
    <div class="d-flex justify-content-center mb-3">
        <a href="{{ route('pages.admin.news.create') }}" class="btn btn-success">Tambah Berita</a>
    </div>

    <!-- Card Layout untuk Daftar Berita -->
    <div class="row justify-content-center">
        @forelse($news as $item)
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}" style="height: 200px; object-fit: cover;">
                    @else
                        <img src="{{ asset('images/placeholder.png') }}" class="card-img-top" alt="No Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $item->title }}</h5>
                        <p class="card-text text-muted">Kategori: {{ $item->category->name ?? 'Tidak ada kategori' }}</p>
                        <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                        <div class="text-center">
                            <a href="{{ route('pages.admin.news.show', $item->id) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="card-footer text-muted text-center">
                        Tanggal: {{ $item->start_date }} - {{ $item->end_date }}
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
