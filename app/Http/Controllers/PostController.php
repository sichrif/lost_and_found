<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $posts = Post::all();
        return view('posts.show',compact('posts'));  
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->validate($this->validationRules());

        $post = new Post;

        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->posttype = $request->posttype;
        $post->photo = $request->photo;

        $post->save();
        
        return redirect('/');
        
        
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //dd($post->id);
        return view('posts.show_more',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //$validatedData = $request->validate($this->validationRules());
        //dd($post);
       /* $posts= Post::find($post);*/
        
        $post->title = $request->title;
        $post->description = $request->description;
        $post->posttype = $request->posttype;
        $post->photo = $request->photo;

        $post->update();

        return redirect('/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/show');

    }
}
