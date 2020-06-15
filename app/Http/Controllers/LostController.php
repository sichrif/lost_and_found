<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class LostController extends Controller
{
    public function index()
    {
        //$users = Auth::user();
        $posts = Post::all();
        return view('lost',compact('posts'));  
       
    }
}