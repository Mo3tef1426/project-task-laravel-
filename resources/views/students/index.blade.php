
@extends('layouts.app')

@section('title', 'All Students')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>All Students</h2>

    <a href="{{ route('students.create') }}" class="btn btn-primary">
        + Add New Student
    </a>
</div>

@if($students->count() > 0)

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
        </tr>
    </thead>

    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->course->title }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@else

<div class="alert alert-info">
    No students found.
</div>

@endif

@endsection
