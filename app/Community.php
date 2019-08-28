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
        'pref' => 'required',
        'eyecatch' => 'image',
        'image1' => 'image',
        'image2' => 'image',
        'image3' => 'image',
        'message_image' => 'image',
        'facebook_link' =>'required|url',
        'instagram_link' => 'url|nullable',
        'website_link' => 'url|nullable',
    );
}
