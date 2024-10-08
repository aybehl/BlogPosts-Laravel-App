<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create(){
        return view('authors.create');
    }

    public function store(Request $request){
        $request->validate([
            'author_name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email',
        ]);

        try {
            Author::create([
                'author_name' => $request->author_name,
                'email' => $request->email,
            ]);
    
            Session::flash('success', 'Author created successfully!');
        } catch(\Exception $e){
            Session::flash('error', 'Failed to create author. Please try again.');
        }
        return redirect()->route('authors.index');
    }

    public function edit($id){
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'author_name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        try {
            $author = Author::findOrFail($id);
            $author->update([
                'author_name' => $request->author_name,
                'email' => $request->email,
            ]);
    
            Session::flash('success', 'Author updated successfully!');
        } catch(\Exception $e){
            Session::flash('error', 'Failed to update author. Please try again.');
        }

        return redirect()->route('authors.index');
    }

    public function destroy($id){
        $author = Author::findOrFail($id);

        if ($author->posts()->count() > 0) {
            Session::flash('error', 'Cannot delete author. There are posts associated with this author.');
        } else {
            $author->delete();
            Session::flash('success', 'Author deleted successfully!');
        }

        return redirect()->route('authors.index');
    }
}
