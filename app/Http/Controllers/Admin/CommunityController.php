<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Community;

class CommunityController extends Controller
{
    //
    public function add()
    {
        return view('community.create');
    }


    public function create(Request $request)
    {
        $this->validate($request, Community::$rules);

        $community =new Community;
        $form = $request->all();

        if(isset($form['eyecatch'])){
          $eyecatchpath = $request->file('eyecatch')->store('public/image');
          $community->eyecatch_path = basename($eyecatchpath);
        } else {
          $community->eyecatch_path = null;
        }

        if(isset($form['image1'])){
          $image1path = $request->file('image1')->store('public/image');
          $community->image1_path = basename($image1path);
        } else {
          $community->image1_path = null;
        }

        if(isset($form['image2'])){
          $image2path = $request->file('image2')->store('public/image');
          $community->image2_path = basename($image2path);
        } else {
          $community->image2_path = null;
        }

        if(isset($form['image3'])){
          $image3path = $request->file('image3')->store('public/image');
          $community->image3_path = basename($image3path);
        } else {
          $community->image3_path = null;
        }

        if(isset($form['message_image'])){
          $messageimagepath = $request->file('message_image')->store('public/image');
          $community->message_image_path = basename($messageimagepath);
        } else {
          $community->message_image_path = null;
        }


        unset($form['_token']);

        unset($form['eyecatch']);

        unset($form['image1']);

        unset($form['image2']);

        unset($form['image3']);

        unset($form['message_image']);


        $community->fill($form);
        $community->save();


        return redirect('community/create');
    }


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
               ->distinct()->select('id','name','information')->get();
           } else {
               $pages = Community::all();
           }
           return view('community.index',['pages'=>$pages, 'keywords' =>$keywords]);
       }


    public function edit(Request $request)
    {
        $community = Community::find($request->id);
        if (empty($community)){
           abort(404);
        }
        return view('community.edit', ['community_form' => $community]);
    }


    public function update(Request $request)
    {
        $this->validate($request, Community::$rules);

        $community = Community::find($request->id);

        $community_form = $request->all();
        if (isset($community_form['eyecatch'])){
          $eyecatchpath = $request->file('eyecatch')->store('public/image');
          $community->eyecatch_path = basename($eyecatchpath);
          unset($community_form['eyecatch']);
        }elseif (0 == strcmp($request->remove, 'true')){
          $community->eyecatch_path = null;
        }


        if (isset($community_form['image1'])){
          $image1path = $request->file('image1')->store('public/image');
          $community->image1_path = basename($image1path);
          unset($community_form['image1']);
        }elseif (0 == strcmp($request->remove, 'true')){
          $community->image1_path = null;
        }


        if (isset($community_form['image2'])){
          $image2path = $request->file('image2')->store('public/image');
          $community->image2_path = basename($image2path);
          unset($community_form['image2']);
        }elseif (0 == strcmp($request->remove, 'true')){
          $community->image2_path = null;
        }


        if (isset($community_form['image3'])){
          $image3path = $request->file('image3')->store('public/image');
          $community->image3_path = basename($image3path);
          unset($community_form['image3']);
        }elseif (0 == strcmp($request->remove, 'true')){
          $community->image3_path = null;
        }


        if (isset($community_form['message_image'])){
          $messageimagepath = $request->file('message_image')->store('public/image');
          $community->message_image_path = basename($messageimagepath);
          unset($community_form['message_image']);
        }elseif (0 == strcmp($request->remove, 'true')){
          $community->message_image_path = null;
        }


        unset($community_form['_token']);
        unset($community_form['remove']);

        $community->fill($community_form)->save();

        return redirect('community');

    }


    public function delete(Request $request){
       $community = Community::find($request->id);

       $community->delete();
       return redirect('community');
    }

}
