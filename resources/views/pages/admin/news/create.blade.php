@extends('layouts.Admin-page.app')

@section('content')
<div class="container" style="margin-left: 250px;"> <!-- Menambahkan margin kiri -->
    <div class="d-flex justify-content-center">
        <div class="card shadow-sm" style="width: 80%; max-width: 800px;">
            <div class="card-body">
                <h1 class="text-center mb-4">Tambah Berita Baru</h1>
                <form action="{{ route('pages.admin.news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Kolom Kiri: Preview Gambar -->
                        <div class="col-md-5 d-flex flex-column align-items-center">
                            <div class="form-group text-center w-100">
                                <label for="image" class="form-label d-block">Preview Gambar</label>
                                <!-- Preview Gambar -->
                                <img 
                                    id="image-preview" 
                                    src="https://via.placeholder.com/500x400?text=Preview+Gambar" 
                                    alt="Preview Gambar" 
                                    class="img-fluid mb-3" 
                                    style="border: 1px solid #ddd; padding: 5px; width: 100%; height: 350px; object-fit: cover;">
                                <!-- Input Gambar -->
                                <input 
                                    type="file" 
                                    name="image" 
                                    id="image" 
                                    class="form-control @error('image') is-invalid @enderror" 
                                    style="font-size: 1.2em; padding: 10px;" 
                                    onchange="previewImage(event)" 
                                    accept="image/*">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Kolom Kanan: Form Input -->
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="title">Judul Berita</label>
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="content">Konten</label>
                                <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="category_id">Kategori</label>
                                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start_date">Tanggal Mulai</label>
                                        <input type="date" name="start_date" id="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}">
                                        @error('start_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="end_date">Tanggal Selesai</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control @error('end_date') is-invalid @enderror" value="{{ old('end_date') }}">
                                        @error('end_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 w-100">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk preview gambar
    function previewImage(event) {
        const fileInput = event.target;
        const file = fileInput.files[0];

        // Validasi jika file bukan gambar
        if (file && !file.type.startsWith('image/')) {
            alert('File yang diunggah harus berupa gambar!');
            fileInput.value = ''; // Reset input file
            return;
        }

        // Preview gambar jika file valid
        const reader = new FileReader();
        reader.onload = function () {
            const output = document.getElementById('image-preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(file);
    }
</script>
@endsection
