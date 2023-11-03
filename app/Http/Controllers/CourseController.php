<?php

namespace App\Http\Controllers;
use App\Models\Course;

class CourseController extends Controller {
	public function index() {
		return view('courses.index');
	}

	public function show(Course $course) {
		return view('courses.show', compact('course'));
	}
}
