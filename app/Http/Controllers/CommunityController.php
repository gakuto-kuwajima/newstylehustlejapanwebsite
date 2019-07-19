<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Community;

class CommunityController extends Controller
{
    //
    public function show(Request $request)
    {
        $page = Community::find($request->id);
        $keywords = '';
        return view('community.show',['page' =>$page,'keywords'=>$keywords]);
    }

    public function toppage()
    {
        $keywords = '';
        return view('toppage',['keywords'=>$keywords]);
    }
}
