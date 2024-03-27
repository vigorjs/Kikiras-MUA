<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Output\BufferedOutput;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('index')->get('/', [IndexController::class, 'index']);

Route::name('pages.landing-pages.aboutus')->get('/aboutus', [IndexController::class, 'aboutus']);
Route::get('/service', function () {return view('pages.landing-pages.service');})->name('pages.landing-pages.service');
Route::name('pages.landing-pages.gallery')->get('/gallery', [IndexController::class, 'gallery']);

Route::get('instagram-auth-success', [IndexController::class, 'index']);


Route::get('/refresh-instagram-tokens', function () {
    $output = new BufferedOutput();
    Artisan::call('instagram-feed:refresh-tokens', [], $output);
    return $output->fetch();
});
