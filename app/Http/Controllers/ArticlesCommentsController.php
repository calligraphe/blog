<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class ArticlesCommentsController extends Controller
{
    public function store(Post $post)
    {
    	$attributes = request()->validate(['content' => 'required|min:3']);

    	$post->addComment($attributes);

    	return back();
    }
}
