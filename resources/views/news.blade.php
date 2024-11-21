@extends('layouts.Admin-page.app')

@section('content')
<div class="py-5">
    <style>
     .main-panel {
    margin-left: 250px; /* Sesuai dengan lebar sidebar */
    margin-top: 60px; /* Sesuai dengan tinggi topbar */
    padding: 20px;
    min-height: 100vh;
    box-sizing: border-box;
}


        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
        }

        .content-wrapper {
            margin-left: 0;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                width: 100%;
            }

            .main-panel,
            .content-wrapper {
                margin-left: 0;
            }
        }

        .position-relative {
            position: relative;
            display: inline-block;
        }

        .profile-photo {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            display: block;
        }

        .edit-icon {
            position: absolute;
            top: 0;
            left: 0;
            width: 120px;
            height: 120px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            display: none;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            cursor: pointer;
            z-index: 10;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .position-relative:hover .edit-icon {
            display: flex;
        }

        .edit-icon:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
    </style>

    <div class="container">
        <div class="row">
            <!-- Profile Information Section -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="h5 font-weight-bold text-dark">{{ __('Profile Information') }}</h2>
                        <p class="text-muted small">{{ __("Update your account's profile information and email address.") }}</p>

                        <div class="d-flex align-items-center mb-4">
                            <div class="text-center me-4 position-relative">
                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" 
                                     alt="Profile Photo" 
                                     class="profile-photo">
                                <div class="edit-icon">
                                    <label for="uploadPhotoInput" style="cursor: pointer;">
                                        <i class="fas fa-pencil-alt"></i>
                                    </label>
                                    <input type="file" id="uploadPhotoInput" name="profile_photo" class="d-none" accept="image/*">
                                </div>
                            </div>
                            <div class="w-100">
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
                        <p class="small text-muted">{{ __('Permanently delete your account.') }}</p>
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
