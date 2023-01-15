<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function home(): Factory|View|Application
    {
        $posts = Post::latest()->paginate(3);
        return view('home', ['posts' => $posts]);
    }

    /**
     * @param Post $post
     * @return Factory|View|Application
     */
    public function post(Post $post): Factory|View|Application
    {
        return view('post', ['post' => $post]);
    }
}
