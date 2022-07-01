<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function myPosts() {
        $myPosts = Post::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('posts.my-posts',['myPosts'=>$myPosts]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'string|required',
            'content' => 'string|required',
        ]);

        $post = Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/posts/' . $post->id)->with('Info','New post created');
    }

    public function show(Post $post) {
        return view('posts.view', ['post'=>$post]);
    }

    public function edit(Post $post) {
        return view('posts.edit', ['post'=>$post]);
    }

    public function update(Post $post, Request $request) {
        $request->validate([
            'title' => 'string|required',
            'content' => 'string|required',
        ]);

        $post->update($request->all());

        return redirect('/posts/' . $post->id);
    }
}
