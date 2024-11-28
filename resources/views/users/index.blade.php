@extends('layouts.app')

@section('title', 'All Users')

@section('content')
    <h1>All Users</h1>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('danger') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <div class="mb-3">
        <a href="{{ route('users.create') }}" class="btn btn-primary">Create New User</a>
    </div>

    <!-- Users Table -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($profiles as $profile)
                <tr>
                    <td>{{ $profile->id }}</td>
                    <td>{{ $profile->first_name }} {{ $profile->last_name }}</td>
                    <td>{{ $profile->users->email ?? 'No email available' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
