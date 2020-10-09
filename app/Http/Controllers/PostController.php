<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();

        $posts = Post::latest()->paginate(6);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        // $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post, 'submit' => 'Create']);
    }

    public function store(PostRequest $request)
    {
        // $post = new Post;
        // $post->title = $request->title;
        // $post->slug = \Str::slug($request->title, '-');
        // $post->body = $request->body;

        // $post->save();

        // Post::create([
        //     'title' => $request->title,
        //     'slug' => \Str::slug($request->title, '-'),
        //     'body' => $request->body
        // ]);

        $attr = $request->all();
        
        // Assign title to the slug
        $attr['slug'] = \Str::slug(request('title'), '-');

        // Create New Post
        Post::create($attr);

        session()->flash('success', 'The post was created');
        // session()->flash('error', 'The post was created');

        return redirect()->to('post');
        // return redirect('post');
        // return back();
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $attr = $request->all();

        $post->update($attr);

        session()->flash('success', 'The post was updated');
        return redirect('post');
    }

    // public function validateRequest()
    // {
    //     return request()->validate([
    //         'title' => 'required|min:3',
    //         'body' => 'required',
    //     ]);
    // }

    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('success', 'The post was destroyed');
        return redirect('post');   
    }
}
