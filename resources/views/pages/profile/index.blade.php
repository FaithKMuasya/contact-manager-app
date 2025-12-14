@extends('layouts.main')

@section('title', 'My Profile')

@section('content')

<div class="page-heading mb-4 d-flex justify-content-between align-items-center">
    <h3>My Profile</h3>

    <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-sm">
        Edit Profile
    </a>
</div>

<section class="section">
    <div class="card shadow-sm">
        <div class="card-body">

            <div class="row">
                <div class="col-md-6 mb-3">
                    <strong>Name</strong>
                    <p class="text-muted">{{ $user->name }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <strong>Email</strong>
                    <p class="text-muted">{{ $user->email }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <strong>Member Since</strong>
                    <p class="text-muted">
                        {{ $user->created_at->format('M d, Y') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
