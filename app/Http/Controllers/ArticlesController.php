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

        //get first post with post_nam == $post_name
    	$post = \App\Post::where('post_name', $post_name)->first();

        $user = \App\User::where('id', $post->post_author)->first();

        // posts/single: no dir posts for now
    	return view('single', compact('post', 'user'));
    }
}
