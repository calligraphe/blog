<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class ArticlesCommentsController extends Controller
{
    public function store(Post $post, $post_id)
    {
    	$attribute = request()->validate(['content' => 'required|min:3']);

    	$comment = new \App\Comment([
    		'comment_author' => \Auth::user()->id,
    		'post_id' => $post_id,
    		'content' => $attribute['content']
    	]);

    	$comment->save();

    	return back();
    }
}
