<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach($countries as $country)
{{-- @dd($city->slug) --}}
    <url>
        <loc>{{ request()->root() }}/{{$country->slug}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
@endforeach
</urlset>