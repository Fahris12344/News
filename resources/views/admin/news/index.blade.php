@extends('layouts.Admin-page.app')

@section('content')
<div class="container">
    <h1>Daftar Berita</h1>

    <!-- Alert Success -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form Filter -->
    <form method="GET" action="{{ route('news.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="search" class="form-control" placeholder="Cari judul/konten..." value="{{ request('search') }}">
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
                <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}" placeholder="Tanggal Mulai">
            </div>
            <div class="col-md-2">
                <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}" placeholder="Tanggal Selesai">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <!-- Tombol Tambah Berita -->
    <div class="mb-3">
        <a href="{{ route('news.create') }}" class="btn btn-success">Tambah Berita</a>
    </div>

    <!-- Card Layout untuk Daftar Berita -->
    <div class="row">
        @forelse($news as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}" style="height: 200px; object-fit: cover;">
                    @else
                        <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top" alt="No Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text text-muted">Kategori: {{ $item->category->name ?? 'Tidak ada kategori' }}</p>
                        <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                        <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                    <div class="card-footer text-muted">
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
        {{ $news->links() }}
    </div>
</div>
@endsection
