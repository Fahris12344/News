@extends('layouts.Admin-page.app')

@section('content')
<div class="d-flex justify-content-center" style="margin-left: 300px;"> <!-- Menambah margin kiri -->
    <div class="card shadow mb-4" style="width: 100%; max-width: 800px;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Tambah Berita Baru</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pages.admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Preview Gambar -->
                <div class="form-group mb-4 text-center">
                    <label for="image" class="form-label font-weight-bold">Preview Gambar</label>
                    <img 
                        id="image-preview" 
                        src="https://via.placeholder.com/500x400?text=Preview+Gambar" 
                        alt="Preview Gambar" 
                        class="img-fluid rounded border mb-3" 
                        style="width: 100%; max-width: 300px; height: auto;">
                    <input 
                        type="file" 
                        name="image" 
                        id="image" 
                        class="form-control @error('image') is-invalid @enderror" 
                        onchange="previewImage(event)" 
                        accept="image/*">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Judul Berita -->
                <div class="form-group mb-3">
                    <label for="title" class="font-weight-bold">Judul Berita</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Masukkan Judul Berita">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Konten -->
                <div class="form-group mb-3">
                    <label for="content" class="font-weight-bold">Konten</label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5" placeholder="Tulis Konten Berita">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Kategori -->
                <div class="form-group mb-3">
                    <label for="category_id" class="font-weight-bold">Kategori</label>
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

                <!-- Tanggal Mulai dan Selesai -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="start_date" class="font-weight-bold">Tanggal Mulai</label>
                            <input type="date" name="start_date" id="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}">
                            @error('start_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="end_date" class="font-weight-bold">Tanggal Selesai</label>
                            <input type="date" name="end_date" id="end_date" class="form-control @error('end_date') is-invalid @enderror" value="{{ old('end_date') }}">
                            @error('end_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
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
