@extends('layouts.main')

@section('title', 'Contacts')

@section('content')

<div class="page-heading mb-4">
    <h3>Contacts</h3>
</div>

<section class="section">

    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title m-0">All Contacts</h5>

            <a href="{{ route('contacts.create') }}" class="btn btn-primary btn-sm">
                <i class="bi bi-plus-circle"></i> Add Contact
            </a>
        </div>

        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                        <td>{{ $contact->gender }}</td>
                        <td>{{ $contact->phone }}</td>

                        <td class="text-end">
                            <a href="{{ route('contacts.edit', $contact->id) }}" 
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('contacts.destroy', $contact->id) }}"
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this contact?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-3">
                            No contacts available
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</section>

@endsection
