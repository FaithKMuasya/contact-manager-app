@extends('layouts.main')

@section('title', 'Change Password')

@section('content')

<div class="page-heading mb-4">
    <h3>Change Password</h3>
</div>

<section class="section">
    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('profile.password.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Current Password</label>
                    <input type="password"
                           name="current_password"
                           class="form-control"
                           required>
                    @error('current_password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input type="password"
                           name="password"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm New Password</label>
                    <input type="password"
                           name="password_confirmation"
                           class="form-control"
                           required>
                </div>

                <div class="d-flex mt-4">
                    <button class="btn btn-primary me-2">
                        Update Password
                    </button>
                    <a href="{{ route('profile.index') }}"
                       class="btn btn-secondary">
                        Cancel
                    </a>
                </div>

            </form>

        </div>
    </div>
</section>

@endsection
