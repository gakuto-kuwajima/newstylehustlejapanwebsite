<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $guarded = array('id');

    //
    public static $rules = array(
        'permalink' => 'required',
        'name' => 'required',
        'facebook_link' =>'required',
    );

}
