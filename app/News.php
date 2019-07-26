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

    //以下を追記
    //Newsモデルに関連付けを行う
    public function histories()
    {
      return $this->hasmany('App\History');

    }
}
