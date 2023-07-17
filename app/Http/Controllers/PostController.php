<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with(['category', 'tags'])->latest()->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();

        return view('posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        $validated['image'] = isset($validated['image']) ? $validated['image']->store('posts', 'public') : null;

        $post = Post::create(array_filter($validated, fn($value, $key) => $key != 'tags', ARRAY_FILTER_USE_BOTH));

        $post->tags()->attach($validated['tags']);

        return back()->with('message', 'Post successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();

        return view('posts.edit', compact('categories', 'tags', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $validated = $request->validated();

        if (isset($validated['image'])) {
            !is_null($post->image) && Storage::disk('public')->delete($post->image);
            $validated['image'] = $validated['image']->store('posts', 'public');
        }

        $post->update(
            array_filter($validated, fn($value, $key) => $key != 'tags', ARRAY_FILTER_USE_BOTH)
        );

        $post->tags()->sync($validated['tags']);

        return back()->with('message', 'Post successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return back()->with('message', 'Post successfully deleted');
    }
}
