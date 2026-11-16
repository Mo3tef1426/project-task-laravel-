
@extends('layouts.app')

@section('title', 'All Courses')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>All Courses</h2>

    <a href="{{ route('courses.create') }}" class="btn btn-primary">
        + Add New Course
    </a>
</div>


@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if($courses->count() > 0)

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Duration</th>
            <th>Students</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->title }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ number_format($course->price, 2) }}</td>
                <td>{{ $course->duration }}</td>
                <td>{{ $course->students_count }}</td>

                <td>
                    <a href="{{ route('courses.show', $course->id) }}"
                       class="btn btn-info btn-sm">
                        View
                    </a>

                    <a href="{{ route('courses.edit', $course->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('courses.destroy', $course->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this course?')">
                            Delete
                        </button>

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@else

    <div class="alert alert-info">
        No courses found.
    </div>

@endif

@endsection
