@extends('layouts.app')

@section('title', 'Student Profiles')

@section('content')
    <h1>Student Profiles</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Number</th>
                <th>Year Level</th>
                <th>Profile</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->student_number }}</td>
                    <td>{{ $student->year_level }}</td>
                    <td>
                        @if ($student->profile)
                            {{ $student->profile->first_name }} {{ $student->profile->last_name }}
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
