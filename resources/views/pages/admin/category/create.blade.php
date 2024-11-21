@extends('layouts.admin-page.app')
@section('content')

<div class="main-panel">
<div class="container mt-5"></div>
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Kategori</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pages.admin.category.store') }}" method="POST">
                        @csrf
                        <!-- Nama Kategori -->
                        <div class="form-group">
                            <label for="name">Nama Kategori</label>
                            <input 
                                type="text" 
                                class="form-control @error('name') is-invalid @enderror" 
                                id="name" 
                                name="name" 
                                value="{{ old('name') }}" 
                                required 
                                placeholder="Masukkan nama kategori">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Tombol Submit -->
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('pages.admin.category.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

      </div>
      </div>
    </div>
</div>
</div>
@endsection