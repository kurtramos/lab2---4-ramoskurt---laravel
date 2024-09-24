<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Make sure to use your actual Post model

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Display a listing of the posts (Admin)
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    // Show the form for creating a new post (Admin)
    public function create()
    {
        return view('admin.posts.create');
    }

    // Store a newly created post in storage (Admin)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        Post::create($request->all());

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    // Display the specified post (User)
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    // Show the form for editing the specified post (Admin)
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    // Update the specified post in storage (Admin)
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    // Optional: Add a method to delete a post
}
