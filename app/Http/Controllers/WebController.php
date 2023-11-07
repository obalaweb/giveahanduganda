<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Team;
use App\Models\Testimonial;

class WebController extends Controller {
	public function index() {
		$courses = Course::all();
		$team = Team::take(3)->get();
		$galleries = Gallery::take(12)->latest()->get();
		$testimonials = Testimonial::take(4)->latest()->get();
		$posts = Post::take(6)->latest()->get();

		return view('index', compact('courses', 'team', 'posts', 'testimonials', 'galleries'));
	}

	public function aboutUs() {
		$team = Team::take(3)->get();
		$testimonials = Testimonial::take(4)->latest()->get();
		return view('aboutUs', compact('team', 'testimonials'));
	}

	public function contactUs() {
		return view('contactUs');
	}
}
