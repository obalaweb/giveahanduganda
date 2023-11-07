<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
	public function index() {
		$posts = Post::paginate(6);

		return view('blog.index', compact('posts'));
	}

	public function show(Post $post, Request $request) {
		return view('blog.show', compact('post'));
	}
}
