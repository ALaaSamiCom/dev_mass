<?php
namespace App\Http\Controllers;
use App\Item;

class SitemapXmlController extends Controller
{
    public function index() {

        $posts = Item::where('page_id', 2)->get();
        return response()->view('sitemap', [
            'posts' => $posts // sugeest ..
        ])->header('Content-Type', 'text/xml');
    }

    public function show() {
        return response()->view('genratedsitemap')->header('Content-Type', 'text/xml');
    }
}
