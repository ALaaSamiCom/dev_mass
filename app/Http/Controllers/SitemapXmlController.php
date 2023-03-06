<?php
namespace App\Http\Controllers;
use App\Item;
use App\Models\Service;

class SitemapXmlController extends Controller
{
    public function index() {

        $posts = Service::get();
        return response()->view('sitemap', [
            'posts' => $posts // sugeest ..
        ])->header('Content-Type', 'text/xml');
    }

    public function show() {
        return response()->view('genratedsitemap')->header('Content-Type', 'text/xml');
    }
}
