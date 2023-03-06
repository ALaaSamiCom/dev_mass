<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{url('/'.\app()->getLocale())}}</loc>
        <lastmod>2022-03-01T12:49:59+00:00</lastmod>
        <priority>1.00</priority>
    </url>

    @foreach ($posts as $post)
        <url>
            <loc>{{ url(\App::getLocale().'/services/'.$post->id.'/'.$post->title) }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
