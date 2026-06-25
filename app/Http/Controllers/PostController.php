<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

use function Laravel\Prompts\title;

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
    public function edit(Request $request, string $id = "")
    {
        // return view('edit', [])
        // Post::where('id', $id)->update([])
        // Post::where('id', 1)->update(['title'=> 'New Title']);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function save(Request $request)
    {
        //
        $post = new Post();
        // Example: $post = Post::find(1); $post->title =
// 'Updated'; $post->save();
// or    // Post::where('id', 1)->update(['title'=> 'New Title']);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}

