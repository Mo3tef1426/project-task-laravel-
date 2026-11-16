
@extends('layouts.app')

@section('title', 'Add New Course')

@section('content')

<h2 class="mb-4">Add New Course</h2>

<form action="{{ route('courses.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label class="form-label">Course Title</label>
        <input type="text" name="title" class="form-control"
               value="{{ old('title') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"
                  rows="3">{{ old('description') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" class="form-control"
               step="0.01" min="0" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Duration</label>
        <input type="number" name="duration" class="form-control"
               min="1" required>
    </div>

    <button type="submit" class="btn btn-primary">
        Save Course
    </button>

    <a href="{{ route('courses.index') }}" class="btn btn-secondary">
        Cancel
    </a>

</form>

@endsection
