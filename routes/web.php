
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;

// Home
Route::get('/', function () {
    return redirect()->route('courses.index');
});

// Resource Routes
Route::resource('courses', CourseController::class);
Route::resource('students', StudentController::class);
