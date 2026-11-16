<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('course')->latest()->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        $courses = Course::all();

        return view('students.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'nullable|string|max:30',
            'course_id' => 'required|exists:courses,id',
        ]);

        Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student added successfully!');
    }
}
