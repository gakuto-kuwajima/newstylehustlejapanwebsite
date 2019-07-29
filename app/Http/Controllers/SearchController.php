<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Community;
use App\News;

class SearchController extends Controller
{
    //
    public function index(Request $request)
       {
           $keywords = $request->keywords;

           if ($keywords != '') {
               $keyary  = explode(" ",$keywords);
               $pages = Community::where(function ($query) use ($keyary) {
                   foreach ($keyary as $word) {
                       $query->where('name', 'LIKE', "%{$word}%")
                             ->orWhere('pref', 'LIKE', "%{$word}%")
                             ->orWhere('information', 'LIKE', "%{$word}%");
                   }
               })
               //->distinct()->select('eyecatch_path','name','information')->orderBy('updated_at', 'desc')->get();
               ->distinct()->orderBy('updated_at', 'desc')->get();
           } else {
               $pages = Community::all()->sortByDesc('updated_at');
           }

           $nocommunityresult ='お探しのキーワードでコミュニティが見つかりませんでした。';

           if ($keywords != '') {
               $newskeyary  = explode(" ",$keywords);
               $posts = News::where(function ($query) use ($newskeyary) {
                   foreach ($newskeyary as $newsword) {
                       $query->where('news_title', 'LIKE', "%{$newsword}%")
                             ->orWhere('news_body', 'LIKE', "%{$newsword}%");
                   }
               })
               ->distinct()->orderBy('updated_at', 'desc')->get();
           } else {
               $posts = News::all()->sortByDesc('updated_at');
           }

           $nonewsresult ="お探しのキーワードでNEWSが見つかりませんでした。";

           return view('search',[ 'pages'=>$pages, 'posts'=>$posts, 'keywords' =>$keywords, 'nocommunityresult' =>$nocommunityresult, 'nonewsresult'=>$nonewsresult]);
       }
}
