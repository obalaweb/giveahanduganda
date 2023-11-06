<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Post;
use App\Models\Team;

class WebController extends Controller {
	public function index() {
		$courses = Course::all();
		$team = Team::take(3)->get();
		$posts = Post::take(6)->latest()->get();

		return view('index', compact('courses', 'team', 'posts'));
	}

	public function aboutUs() {
		$team = Team::take(3)->get();
		return view('aboutUs', compact('team'));
	}

	public function contactUs() {
		return view('contactUs');
	}
}
