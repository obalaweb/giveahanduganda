<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostSideBar extends Component
{
    public $post;
    /**
     * Create a new component instance.
     */
    public function __construct(Post $post = null)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if ($this->post->exists) {
            $recentPosts = Post::whereNotIn('id', [$this->post->id])->take(4)->get();
        } else {
            $recentPosts = Post::take(3)->get();
        }

        return view('components.post-side-bar', [
            'categories' => Category::all(),
            'post' => $this->post,
            'recentPosts' => $recentPosts,
        ]);
    }
}
