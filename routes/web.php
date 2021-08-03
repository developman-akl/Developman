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

    Route::get('/', function () { return view('home'); })->name('home');

    Route::get('/projects/1', function () { return view('/projects/1'); })->name('projects.1');
    Route::get('/projects/2', function () { return view('/projects/2'); })->name('projects.2');
    Route::get('/projects/3', function () { return view('/projects/3'); })->name('projects.3');
    Route::get('/projects/4', function () { return view('/projects/4'); })->name('projects.4');
    Route::get('/projects/5', function () { return view('/projects/5'); })->name('projects.5');
    Route::get('/projects/6', function () { return view('/projects/6'); })->name('projects.6');

    Route::post('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('sitemap.xml', [SitemapController::class])->name('sitemap');
    Route::get('robots.txt', [RobotsController::class])->name('robots');


});