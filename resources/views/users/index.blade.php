@extends('layouts.app')

@section('title', 'All Users')

@section('content')
    <h1>All Users</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('users.create') }}" class="btn btn-primary">Create New User</a>
    </div>

    <div class="row">
        @forelse ($users as $user)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h5>
                        <p class="card-text">{{ $user->email }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p>No users found.</p>
            </div>
        @endforelse
    </div>
@endsection
