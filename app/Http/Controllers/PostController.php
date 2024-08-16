<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        $authors = Author::all();
        return view('posts.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'publish_date' => 'required|date',
            'author_id' => 'required|exists:authors,author_id',
        ]);

       try {
            Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'publish_date' => $request->publish_date,
                'author_id' => $request->author_id,
            ]);

            Session::flash('success', 'Post created successfully!');
        } catch(\Exception $e){
            Session::flash('error', 'Failed to create Post. Please try again.');
        }

        return redirect()->route('posts.index');
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        $authors = Author::all();
        return view('posts.edit', compact('post', 'authors'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
        'publish_date' => 'required|date',
        'author_id' => 'required|exists:authors,author_id',
    ]);

    try {
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'publish_date' => $request->publish_date,
            'author_id' => $request->author_id,
        ]);

        Session::flash('success', 'Post updated successfully!');
    } catch (\Exception $e) {
        Session::flash('error', 'Failed to update post. Please try again.');
    }

    return redirect()->route('posts.index');
}

}
