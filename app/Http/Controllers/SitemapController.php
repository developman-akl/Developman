<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SitemapController extends Controller
{
    /**
     * Generate sitemap.xml
     */
    public function __invoke()
    {
        $current_timestamp = Carbon::now()->timestamp;

        return response()->view('sitemap', compact('current_timestamp'))->header('Content-Type', 'text/xml');
    }
}