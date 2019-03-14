<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" >
<url>
    <loc>http://{{$host}}</loc>
    <priority>0.8</priority>
    <changefreq>daily</changefreq>
</url>
    @foreach($links as $link)
        <url>
            <loc>http://{{$link}}</loc>
        </url>
        @endforeach
</urlset>