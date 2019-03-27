<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    function index() {
    	$posts = \App\Post::all();
    	return view('articles', array( 
    		'posts' => $posts));
    }

    public function show($post_name){ 
    	$post = \App\Post::where('post_name', $post_name)->first();

    	return view('single', array( // posts/single
    		'post' => $post));
    }
}
