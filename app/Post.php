<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
    * Get the user tht authored the post.
    */
    public function author()
    {
        // pour le liaison
    	return $this->belongsTo('App\User','post_author');
    }

    /**
    * Get the post comments' 
    */
    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id');
    }

    // Adds a new comment 
    public function addComment($comment) 
    {
        $this->comments()->create($comment);
    }
}
