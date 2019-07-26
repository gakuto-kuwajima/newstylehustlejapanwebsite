<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Community;
use App\News;

class ReadingPagecontroller extends Controller
{
    //
    public function communityshow(Request $request)
    {
        $page = Community::where('permalink',$request->permalink)->first();
        $keywords = '';
        return view('community',['page' =>$page,'keywords'=>$keywords]);
    }

    public function newsshow(Request $request)
    {
        $post = News::where('news_permalink',$request->news_permalink)->first();
        $keywords = '';
        return view('news',['post' =>$post,'keywords'=>$keywords]);
    }

    public function toppage()
    {
        $keywords = '';
        return view('toppage',['keywords'=>$keywords]);
    }
}
