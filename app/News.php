<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $guarded = array('id');

    //
    public static $rules = array(
        'news_permalink' => 'required',
        'news_title' => 'required',
        'news_body' => 'required',
    );

    
}
