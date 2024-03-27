<?php

namespace App\Http\Controllers;

use Dymantic\InstagramFeed\InstagramFeed;
use Illuminate\Support\Facades\Cache;
use Dymantic\InstagramFeed\Profile as InstagramProfile;
use Illuminate\Support\Facades\Artisan;

class IndexController extends Controller
{
    public function index()
    {
        $profile = InstagramProfile::where('username', 'vigorjs')->first();

        if (!$profile) {
            $profile = InstagramProfile::create(['username' => 'vigorjs']);
        }

        if (Cache::has('cached_instagram_feed')) {
            $feed = Cache::get('cached_instagram_feed');
        } else {
            $feed = $profile->refreshFeed();

            if ($feed === null) {
                return redirect($profile->getInstagramAuthUrl());
            }

            Cache::put('cached_instagram_feed', $feed, now()->addDays(14));
        }
        return view('pages.landing-pages.index', [
            'profile' => $feed
        ]);
    }

    public function gallery()
    {
        $profile = InstagramProfile::where('username', 'vigorjs')->first();

        if (!$profile) {
            $profile = InstagramProfile::create(['username' => 'vigorjs']);
        }

        if (Cache::has('cached_instagram_feed')) {
            $feed = Cache::get('cached_instagram_feed');
        } else {
            $feed = $profile->refreshFeed();

            if ($feed === null) {
                return redirect($profile->getInstagramAuthUrl());
            }

            Cache::put('cached_instagram_feed', $feed, now()->addDays(14));
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
