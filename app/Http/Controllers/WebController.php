<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Post;
use App\Models\Team;

class WebController extends Controller {
	public function index() {
		$courses = Course::all();
		$team = Team::all();
		$posts = Post::all();
		return view('index', compact('courses', 'team', 'posts'));
	}

	public function aboutUs() {
		return view('aboutUs');
	}

	public function contactUs() {
		return view('contactUs');
	}
}
