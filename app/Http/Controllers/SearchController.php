<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Community;

class SearchController extends Controller
{
    //
    public function index(Request $request)
       {
           $keywords = $request->keywords;
           if ($keywords != '') {
               $keyary  = explode(" ",$keywords);
               $posts = Community::where(function ($query) use ($keyary) {
                   foreach ($keyary as $word) {
                       $query->where('name', 'LIKE', "%{$word}%")
                             ->orWhere('pref', 'LIKE', "%{$word}%")
                             ->orWhere('information', 'LIKE', "%{$word}%");
                   }
               })
               //->distinct()->select('eyecatch_path','name','information')->orderBy('updated_at', 'desc')->get();
               ->distinct()->orderBy('updated_at', 'desc')->get();
           } else {
               $posts = Community::all()->sortByDesc('updated_at');
           }
           return view('search',['posts'=>$posts, 'keywords' =>$keywords]);
       }
}
