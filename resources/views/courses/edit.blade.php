
@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')

<h2 class="mb-4">Edit Course</h2>

<form action="{{ route('courses.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Course Title</label>
        <input type="text" name="title"
            class="form-control"
            value="{{ old('title', $course->title) }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description"
            class="form-control">{{ old('description', $course->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price"
            class="form-control"
            step="0.01" min="0"
            value="{{ old('price', $course->price) }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Duration</label>
        <input type="number" name="duration"
            class="form-control"
            min="1"
            value="{{ old('duration', $course->duration) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">
        Update Course
    </button>

    <a href="{{ route('courses.index') }}" class="btn btn-secondary">
        Cancel
    </a>
</form>

@endsection
