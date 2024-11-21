@extends('layouts.admin') <!-- Use your layout file -->

@section('content')
<div class="container-fluid">
    <h2>Create New Announcement</h2>
    <form action="{{ route('announcements.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Image (optional)</label>
            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- We don't need to show the created_at field as it will be handled by Laravel automatically -->
        <div class="form-group">
            <label for="created_at">Date Created</label>
            <input type="text" name="created_at" class="form-control" value="{{ now()->format('d-m-Y') }}" readonly>
        </div>

        <button type="submit" class="btn btn-primary">Create Announcement</button>
    </form>
</div>
@endsection
