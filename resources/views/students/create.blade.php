
@extends('layouts.app')

@section('title', 'Add New Student')

@section('content')

<h2 class="mb-4">Add New Student</h2>

<form action="{{ route('students.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label class="form-label">Student Name</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control"
               value="{{ old('email') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control"
               value="{{ old('phone') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Select Course</label>

        <select name="course_id" class="form-select" required>
            <option value="">Choose a course</option>

            @foreach($courses as $course)
                <option value="{{ $course->id }}">
                    {{ $course->title }}
                </option>
            @endforeach

        </select>
    </div>

    <button type="submit" class="btn btn-primary">
        Save Student
    </button>

    <a href="{{ route('students.index') }}" class="btn btn-secondary">
        Cancel
    </a>

</form>

@endsection
