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
        'news_eyecatch' => 'image',
        'news_image1' => 'image',
        'news_image2' => 'image',
        'news_image3' => 'image',
        'news_website_link' => 'url|nullable',
    );
}
