<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = 'comments';

	protected $guarded = [];

    /**
    * Get the comment author 
    */
    public function author()
    {
        return $this->belongsTo('App\User','comment_author');
    }

    /**
    * Get the comment post
    */
    public function post()
    {
        return $this->belongsTo('App\Post','post_id');
    }
}
