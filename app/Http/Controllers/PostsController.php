<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index')
            ->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('editor.posts.edit')
            ->with(compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @todo Slim controller action down.
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        // Validate request
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        // Save Photo record then upload file
        if ($request->hasFile('featured_photo')) {
            $featuredPhoto = new Photo(['filename' => $request->file('featured_photo')->getClientOriginalName()]);
            $featuredPhoto->upload($request->file('featured_photo'));
            $featuredPhoto->save();
            $post->featured_photo_id = $featuredPhoto->id;
        }

        // Mass-assign validated Post attributes
        $post->fill($request->all());

        if ($post->save()) {
            Session::flash('notice', 'Post successfully updated');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if (Post::destroy($id)) {
            Session::flash('notice', 'Post successfully deleted');
        }

        return redirect()->back();
    }
}
