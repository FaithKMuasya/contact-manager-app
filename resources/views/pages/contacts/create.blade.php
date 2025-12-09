@extends('layouts.main')

@section('title', 'Add Contact')

@section('content')

<div class="page-heading mb-4">
    <h3>Add Contact</h3>
</div>

<section class="section">

    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="card-title m-0">Contact Details</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('contacts.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" 
                               name="first_name" 
                               class="form-control @error('first_name') is-invalid @enderror"
                               value="{{ old('first_name') }}" 
                               required>
                        @error('first_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" 
                               name="last_name" 
                               class="form-control @error('last_name') is-invalid @enderror"
                               value="{{ old('last_name') }}" 
                               required>
                        @error('last_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Gender</label>
                        <select name="gender" 
                                class="form-control @error('gender') is-invalid @enderror"
                                required>
                            <option value="">-- Select Gender --</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" 
                               name="phone" 
                               class="form-control @error('phone') is-invalid @enderror"
                               value="{{ old('phone') }}" 
                               required>
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="mt-4 d-flex">
                    <button class="btn btn-primary me-2">Save Contact</button>
                    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
                </div>

            </form>
        </div>
    </div>

</section>

@endsection
