<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Display all courses
    public function index()
    {
        $courses = Course::withCount('students')->latest()->get();

        return view('courses.index', compact('courses'));
    }

    // Show create form
    public function create()
    {
        return view('courses.create');
    }

    // Store new course
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|integer|min:1',
        ]);

        Course::create($validated);

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course added successfully!');
    }

    // Show one course
    public function show(Course $course)
    {
        $course->load('students');

        return view('courses.show', compact('course'));
    }

    // Show edit form
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    // Update course
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|integer|min:1',
        ]);

        $course->update($validated);

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course updated successfully!');
    }

    // Delete course
    public function destroy(Course $course)
    {
        if ($course->students()->exists()) {
            return redirect()
                ->route('courses.index')
                ->with('error', 'Cannot delete a course with registered students.');
        }

        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course deleted successfully!');
    }
    
}
