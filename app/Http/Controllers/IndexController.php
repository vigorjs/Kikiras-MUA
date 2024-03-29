<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Dymantic\InstagramFeed\Profile as InstagramProfile;

class IndexController extends Controller
{
    public function index()
    {
        $profile = InstagramProfile::where('username', 'makeupbykikiraa')->first();

        if ($profile == null) {
            $profile = InstagramProfile::create(['username' => 'makeupbykikiraa']);
            return redirect($profile->getInstagramAuthUrl());
        }

        if (Cache::has('cached_instagram_feed_index')) {
            $feed = Cache::get('cached_instagram_feed_index');
        } else {
            $feed = $profile?->refreshFeed(10);
            Cache::put('cached_instagram_feed_index', $feed, now()->addDays(14));
        }
        return view('pages.landing-pages.index', [
            'profile' => $feed
        ]);
    }

    public function gallery()
    {
        $profile = InstagramProfile::where('username', 'makeupbykikiraa')->first();

        if ($profile == null) {
            $profile = InstagramProfile::create(['username' => 'makeupbykikiraa']);
            return redirect($profile->getInstagramAuthUrl());
        }

        if (Cache::has('cached_instagram_feed_gallery')) {
            $feed = Cache::get('cached_instagram_feed_gallery');
        } else {
            $feed = $profile?->refreshFeed(30);
            Cache::put('cached_instagram_feed_gallery', $feed, now()->addDays(14));
        }
        return view('pages.landing-pages.gallery', [
            'profile' => $feed
        ]);
    }

    public function aboutus()
    {
        return view('pages.landing-pages.aboutus');
    }
}
