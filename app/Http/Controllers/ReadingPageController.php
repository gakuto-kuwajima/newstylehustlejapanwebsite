<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Community;

class Readingpagecontroller extends Controller
{
    //
    public function communityshow(Request $request)
    {
        $page = Community::find($request->id);
        $keywords = '';
        return view('community',['page' =>$page,'keywords'=>$keywords]);
    }

    public function toppage()
    {
        $keywords = '';
        return view('toppage',['keywords'=>$keywords]);
    }
}
