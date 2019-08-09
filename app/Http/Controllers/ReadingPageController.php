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

    public function indexnews()
    {
        $keywords = '';
        $posts = News::latest()->get();
        $posts = News::latest()->paginate(10);
        return view('indexnews',['posts' =>$posts, 'keywords'=>$keywords]);
    }

    public function indexcommunity()
    {
        $keywords = '';
        return view('indexcommunity',['keywords'=>$keywords]);
    }

    public function about()
    {
        $keywords = '';
        return view('aboutnewstylehustle',['keywords'=>$keywords]);
    }

    public function toppage()
    {
        $keywords = '';
        $posts = NEWS::orderBy('id', 'DESC')->take(3)->get();
        return view('toppage',['posts' =>$posts, 'keywords'=>$keywords]);
    }
}
