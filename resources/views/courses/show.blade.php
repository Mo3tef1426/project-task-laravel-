
@extends('layouts.app')

@section('title', 'Course Details')

@section('content')

<h2 class="mb-4">Course Details</h2>

<div class="card">
    <div class="card-body">
        <h3>{{ $course->title }}</h3>

        <p><strong>Description:</strong>
            {{ $course->description ?? 'No description' }}
        </p>

        <p><strong>Price:</strong>
            {{ $course->price }}
        </p>

        <p><strong>Duration:</strong>
            {{ $course->duration }}
        </p>

        <p><strong>Registered Students:</strong>
            {{ $course->students->count() }}
        </p>

        <a href="{{ route('courses.edit', $course->id) }}"
           class="btn btn-warning">Edit Course</a>

        <a href="{{ route('courses.index') }}"
           class="btn btn-secondary">Back</a>
    </div>
</div>

@endsection
