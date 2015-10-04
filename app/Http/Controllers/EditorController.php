<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('editor.index')
            ->with(compact('posts'));
    }

    /**
     * Show the post editor.
     *
     * @param $id
     * @return Response
     */
    public function postEditor($id)
    {
        $post = Post::find($id);

        return view('editor.posts.edit')
            ->with(compact('post'));
    }
}
