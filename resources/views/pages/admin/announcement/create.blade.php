@extends('layouts.admin-page.app')
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
          <div class="card-body">
            <h4 class="card-title">Tambah Announcement</h4>
            <form action="{{ route('announcements.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" required>
              </div>
              <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Masukkan Deskripsi" required></textarea>
              </div>
              <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
              </div>
              <div class="form-group">
                <label for="date">Tanggal</label>
                <input type="text" class="form-control" id="date" name="date" value="{{ now()->format('Y-m-d H:i:s') }}" readonly>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
              <a href="{{ route('announcements.index') }}" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
        </div>
        </div>
        </div>
        </div>
@endsection
