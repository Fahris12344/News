@extends('layouts.Admin-page.app')
@section('content')

<style>
  /* Ensure the sidebar has a fixed position */
  .main-panel {
    margin-left: 250px;
    /* Adjust this to match the width of the sidebar */
    padding: 20px;
    /* Add padding to give space around the content */
    min-height: 100vh;
    /* Ensure the main panel takes full height */
    box-sizing: border-box;
  }

  /* Make sure the sidebar is fixed */
  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    width: 250px;
    /* Adjust this to match your sidebar width */
  }

  /* Ensure content doesn’t get hidden behind the sidebar */
  .content-wrapper {
    margin-left: 0px;
    /* Adjust this to match the sidebar width */
    padding-top: 20px;
    padding-bottom: 20px;
  }

  @media (max-width: 768px) {
    .sidebar {
      position: absolute;
      width: 100%;
    }

    .main-panel {
      margin-left: 0;
    }

    .content-wrapper {
      margin-left: 0;
    }
  }
</style>
<div class="main-panel">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Kategori</h3>
          </div>
          <div class="card-body">
            <!-- Form Edit Kategori -->
            <form action="{{ route('kategori.update', $category->id) }}" method="POST">
              @csrf
              @method('PUT') <!-- Menandakan bahwa ini adalah metode PUT untuk update -->

              <div class="form-group">
                <label for="name">Nama Kategori</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $category->name) }}" required>
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-success">Update Kategori</button>
                <a href="{{ route('pages.admin.category.index') }}" class="btn btn-secondary">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection