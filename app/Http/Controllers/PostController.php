<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
	public function index() {
		$posts = Post::where('isPublished', Post::PUBLISHED)->paginate(6);

		return view('blog.index', compact('posts'));
	}

	public function show(Post $post, Request $request) {
		if (!$post->isPublished()) {
			abort(404);
		}
		return view('blog.show', compact('post'));
	}
}
