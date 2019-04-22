<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {

    	// pour avoir 3 derniers articles
    	$posts = \App\Post::orderBy('post_date', 'desc')->take(3)->get();
    	
    	return view('welcome', compact('posts'));
    }

}
