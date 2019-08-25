<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable=[
      'name','email','subject','body',
    ];
    public static $rules = array(
        'email' => 'email',
    );
}
