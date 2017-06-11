<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$posts = Post::simplePaginate(10);
    	return view('news', ['posts'=>$posts ]);
    }
    public function show($slug)
    {
    	$post = Post::findBySlug($slug);
    	return view('news.show',['post'=>$post]);
    }
}
