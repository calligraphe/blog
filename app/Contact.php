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
    protected ​$table ​= ​'my_contact'​;
    public $timestamps = false;
}
