<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View|Application
     */
    public function home(Request $request): Factory|View|Application
    {
        $search = $request->search;
        $posts = Post::where('title', 'LIKE', "%$search%")
            ->with('user')
            ->latest()->paginate(3);

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
