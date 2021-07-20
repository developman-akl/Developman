<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\RobotsController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'middleware' => [
        'web'
    ]
], function () {

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::post('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('sitemap.xml', [SitemapController::class])->name('sitemap');
    Route::get('robots.txt', [RobotsController::class])->name('robots');

});