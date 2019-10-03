<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use App\Community;
use App\News;

class siteMapController extends Controller
{
    public function sitemap(){
        $sitemap = App::make("sitemap");
        $now = Carbon::now();
        $sitemap->add(URL::to('/'), $now, '1.0', 'daily');
        $sitemap->add(URL::to('/about-newstylehustle'), $now, '0.8', 'weekly');
        $sitemap->add(URL::to('/featured-video'), $now, '0.8', 'weekly');
        $sitemap->add(URL::to('/news'), $now, '0.8', 'weekly');
        $sitemap->add(URL::to('/community'), $now, '0.8', 'weekly');
        $sitemap->add(URL::to('/lesson'), $now, '0.8', 'weekly');
        $sitemap->add(URL::to('/contact'), $now, '0.8', 'monthly');

        $sitemap->add(URL::to('/about'), $now, '0.8', 'monthly');
        $sitemap->add(URL::to('/privacy_policy'), $now, '0.8', 'monthly');
        $sitemap->add(URL::to('/disclaimer'), $now, '0.8', 'monthly');


        return $sitemap->render('xml');
    }
}
