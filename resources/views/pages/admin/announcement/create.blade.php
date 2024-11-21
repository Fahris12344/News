@extends('layouts.Admin-page.app') <!-- Use your layout file -->

@section('content')
<div class="container-fluid">
    <h2>Create New Announcement</h2>
    <form action="{{ route('pages.admin.announcement.store') }}" method="POST" enctype="multipart/form-data">
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
    
        <div class="form-group">
            <label for="date">Date Created</label>
            <input type="date" name="date" class="form-control" value="{{ old('date', now()->format('Y-m-d')) }}" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Create Announcement</button>
    </form>
</div>
@endsection
