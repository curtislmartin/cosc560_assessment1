<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function list()
    {
        $posts = Post::where("is_active", "Yes")->get();
        return view('list', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('/forms/edit', ['post' => $post]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/forms/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function save(Request $request)
    {
        $data = $request->validate([
            'title'   => 'required|max:50',
            'content' => 'required',
        ]);

        // If an id came through, update that post; otherwise create a new one.
        $post = $request->filled('id')
            ? Post::find($request->input('id'))
            : new Post();

        $post->title   = $data['title'];
        $post->content = $data['content'];
        $post->save();

        return redirect('/all');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $post = Post::find($id);

        if ($post) {
            $post->delete();
        }

        return redirect('/all');
    }
}

