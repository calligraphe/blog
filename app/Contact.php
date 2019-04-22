<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    // protected ​$table ​= ​'contacts'​;

    // tableau pour les champs qui ne doivent pas etre remplis
    protected $guarded = []; 

    public $timestamps = false;
}
