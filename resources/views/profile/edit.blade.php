@extends('layouts.Admin-page.app')

@section('content')
<div class="main-panel">
    <div class="container-fluid py-5">
        <div class="row">
            <!-- Profile Information Section -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="h5 font-weight-bold text-dark">{{ __('Profile Information') }}</h2>
                        <p class="text-muted small">{{ __("Update your account's profile information and email address.") }}</p>
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" id="name" name="name" class="form-control w-100" 
                                       value="{{ old('name', $user->name) }}" required autofocus>
                                @error('name')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" id="email" name="email" class="form-control w-100" 
                                       value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <textarea id="description" name="description" class="form-control w-100" rows="3">{{ old('description', $user->description) }}</textarea>
                                @error('description')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            @if (session('status') === 'profile-updated')
                            <p class="text-success small mt-2">{{ __('Saved.') }}</p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>

            <!-- Update Password Section -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h5">{{ __('Update Password') }}</h3>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="current_password">{{ __('Current Password') }}</label>
                                <input id="current_password" name="current_password" type="password" class="form-control">
                                @error('current_password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('New Password') }}</label>
                                <input id="password" name="password" type="password" class="form-control">
                                @error('password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control">
                                @error('password_confirmation')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            @if (session('status') === 'password-updated')
                            <p class="text-success small mt-2">{{ __('Saved.') }}</p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Account Section -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h5">{{ __('Delete Account') }}</h3>
                        <form method="POST" action="{{ route('profile.destroy') }}">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                                <label for="delete_password">{{ __('Password') }}</label>
                                <input id="delete_password" name="password" type="password" class="form-control">
                                @error('password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
