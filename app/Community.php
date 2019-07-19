<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $guarded = array('id');

    //
    public static $rules = array(
        'name' => 'required',
        'pref' => 'required',
        'facebook_link' =>'required',
    );
}
