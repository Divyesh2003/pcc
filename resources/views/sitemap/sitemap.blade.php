{{-- <html xmlns="http://www.w3.org/1999/xhtml" xmlns:html="http://www.w3.org/TR/REC-html40"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
    xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9">

<head>
    <title>XML Sitemap</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
        body {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 13px;
            color: #545353;
        }

        table {
            border: none;
            border-collapse: collapse;
        }

        #sitemap tr:nth-child(odd) td {
            background-color: #eee !important;
        }

        #sitemap tbody tr:hover td {
            background-color: #ccc;
        }

        #sitemap tbody tr:hover td,
        #sitemap tbody tr:hover td a {
            color: #000;
        }

        #content {
            margin: 0 auto;
            width: 1000px;
        }

        .expl {
            margin: 18px 3px;
            line-height: 1.2em;
        }

        .expl a {
            color: #da3114;
            font-weight: 600;
        }

        .expl a:visited {
            color: #da3114;
        }

        a {
            color: #000;
            text-decoration: none;
        }

        a:visited {
            color: #777;
        }

        a:hover {
            text-decoration: underline;
        }

        td {
            font-size: 11px;
        }

        th {
            text-align: left;
            padding-right: 30px;
            font-size: 11px;
        }

        thead th {
            border-bottom: 1px solid #000;
        }
    </style>
</head>

<body>
    <div id="content">
        <h1>XML Sitemap</h1>
        <p class="expl">
            You can find more information about XML sitemaps on <a href="https://sitemaps.org" target="_blank"
                rel="noopener">sitemaps.org</a>.
        </p>
        <p class="expl">
            This XML Sitemap Index file contains  sitemaps.
        </p>
        <table id="sitemap" cellpadding="3">
            <thead>
                <tr>
                    <th width="75%">Sitemap</th>
                    <th width="25%">Last Modified</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="{{route('home')}}">{{route('home')}}</a>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <a href="{{route('about')}}">{{route('about')}}</a>
                    </td>
                    <td> </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>
</html> --}}

<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{route('home')}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{route('about')}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{route('contact')}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{route('service')}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{route('refund')}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{route('term')}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{route('privacy')}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{route('translation')}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{route('faq')}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{route('scholarship')}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
@foreach($products as $product)
    <url>
        <loc>{{route('product.single',$product->slug)}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
@endforeach
@foreach($pages as $page)
    <url>
        <loc>{{ request()->root() }}/{{$page->slug}}</loc>
        <lastmod></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
@endforeach
</urlset>