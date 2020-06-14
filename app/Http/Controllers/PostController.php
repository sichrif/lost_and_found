<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Image;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = Auth::user();
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
        $request->validate($this->validationRules());

        $image_file = $request->photo;

        $photo = Image::make($image_file);
   
        Response::make($photo->encode('jpeg'));

        $post = new Post;

        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->posttype = $request->posttype;
        $post->photo = $request->photo;

        $post->save();
        
        return redirect('/show');
        //dd($request);
        
        
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
        $validatedData = $request->validate($this->validationRules());
        //dd($post);
       /* $posts= Post::find($post);*/
        
        /*$post->title = $request->title;
        $post->description = $request->description;
        $post->posttype = $request->posttype;
        $post->photo = $request->photo;*/

        $post->update($validatedData);

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
        return redirect('/show')->with('deletePost', 'Post deleted successfully !');

    }
    private function validationRules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'posttype' => 'required',
            'photo' => 'required',
        ];
    }

    function fetch_image($image_id)
    {
     $image = Images::findOrFail($image_id);

     $image_file = Image::make($image->photo);

     $response = Response::make($image_file->encode('jpeg'));

     $response->header('Content-Type', 'image/jpeg');

     return $response;
    }
}
