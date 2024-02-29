<?php

namespace App\Http\Controllers;

use Dymantic\InstagramFeed\Instagram;
use Dymantic\InstagramFeed\InstagramFeed as InstagramFeed;
use Illuminate\Support\Facades\Cache;
use Dymantic\InstagramFeed\Profile as InstagramProfile;

class IndexController extends Controller
{
    public function index()
    {
        // Mengecek apakah data $profile sudah di-cache
        if (Cache::has('cached_instagram_feed')) {
            $profile = InstagramFeed::for('vigorjs');
            Cache::put('cached_instagram_feed', $profile, now()->addMinutes(5));
            $profile = Cache::get('cached_instagram_feed');
        } else {
            // Jika belum di-cache, ambil dari API Instagram dan simpan ke dalam cache
            if (!empty($profile)){
                $profile = InstagramProfile::new('vigorjs')->getInstagramAuthUrl();
            }
            $profile = InstagramFeed::for('vigorjs');
            Cache::put('cached_instagram_feed', $profile, now()->addMinutes(5));
        }
        return view('pages.landing-pages.index', [
            'profile' => $profile
        ]);
    }

    public function gallery()
    {
        // Mengecek apakah data $profile sudah di-cache
        if (Cache::has('cached_instagram_feed')) {
            $profile = Cache::get('cached_instagram_feed');
        } else {
            // Jika belum di-cache, ambil dari API Instagram dan simpan ke dalam cache
            $profile = InstagramFeed::for('vigorjs')->refresh();
            Cache::put('cached_instagram_feed', $profile, now()->addMinutes(5));
        }
        return view('pages.landing-pages.gallery', [
            'profile' => $profile
        ]);
    }

    public function aboutus()
    {
        return view('pages.landing-pages.aboutus');
    }
}
