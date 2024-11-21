@extends('layouts.Admin-page.app')
@section('content')

<div class="main-panel">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <!-- card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><b>Daftar Kategori</b></h3>
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
                  <th></th>
                  <th scope="col">Nama Kategori</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $index => $category)
          <tr>
            <td>{{$index +1 }}</td>
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