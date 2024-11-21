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
        <!-- card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Kategori</h3>
            <a href="{{ route('pages.admin.category.create') }}" class="btn btn-primary float-right">Tambah Kategori</a>
          </div>
          <div class="card-body">
            @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

            <!-- Tabel Daftar Kategori -->
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Nama Kategori</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
          <tr>
            <td>{{ $category->name }}</td>
            <td>
            <a href="{{ route('pages.admin.category.edit', $category->id) }}"
              class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('pages.admin.category.destroy', $category->id) }}" method="POST"
              style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm"
              onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
            </form>

            </td>
          </tr>
        @endforeach
              </tbody>
            </table>

            <!-- Pagination -->
          </div>
        </div>
        <!-- endcard -->
      </div>
    </div>
  </div>
</div>
@endsection