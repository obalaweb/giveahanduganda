<?php

namespace App\Http\Controllers;
use App\Models\AboutPage;
use App\Models\Brand;
use App\Models\Course;
use App\Models\Gallery;
use App\Models\HomePage;
use App\Models\HomePageSlider;
use App\Models\Post;
use App\Models\Section;
use App\Models\Team;
use App\Models\Testimonial;

class WebController extends Controller {
	public function index() {
		$courses = Course::all();
		$team = Team::take(3)->get();
		$slides = HomePageSlider::all();
		$galleries = Gallery::take(12)->latest()->get();
		$testimonials = Testimonial::where('status', 1)->take(4)->latest()->get();
		$pageSetting = HomePage::first();
		$posts = Post::where('isPublished', Post::PUBLISHED)->take(6)->latest()->get();
		$brands = Brand::take(5)->latest()->get();
		$testSection = Section::where('location', 'testimonial')->first();
		$title = "Home";
		return view('index', compact('title', 'courses', 'team', 'posts', 'testimonials', 'galleries', 'pageSetting', 'slides', 'brands', 'testSection'));
	}

	public function aboutUs() {
		$team = Team::take(3)->get();
		$pageSetting = AboutPage::first();
		$HomeSetting = json_encode(HomePage::pluck('items')->first());
		$testimonials = Testimonial::take(4)->latest()->get();
		$brands = Brand::take(5)->latest()->get();
		$testSection = Section::where('location', 'testimonial')->first();
		$title = "About Us";
		return view('aboutUs', compact('team', 'testimonials', 'pageSetting', 'HomeSetting', 'testSection', 'brands', 'title'));
	}

	public function contactUs() {
		return view('contactUs', [
			'title' => 'Contact Us',
		]);
	}
}
