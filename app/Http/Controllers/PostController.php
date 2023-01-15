<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Post $post
     * @return Application|Factory|View
     */
    public function create(Post $post): View|Factory|Application
    {
        return view('posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'   => 'required',
            'slug'    => 'required|unique:posts,slug',
            'content' => 'required',
        ]);

        $post = $request->user()->posts()->create([
            'title'   => $request->title,
            'slug'    => $request->slug,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Application|Factory|View
     */
    public function edit(Post $post): View|Factory|Application
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return RedirectResponse
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        $request->validate([
            'title'   => 'required',
            'slug'    => 'required|unique:posts,slug,' . $post->id,
            'content' => 'required',
        ]);

        $post->update([
            'title'   => $request->title,
            'slug'    => $request->slug,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return RedirectResponse
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return back();
    }
}
