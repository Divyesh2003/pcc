@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', 'Blog')
@section('meta_description', "Blog")
@section('meta_keywords', "Blog")
@section('canonical', "www.mea-india.in/blog")
@section('index_tag')
    {{-- {!! '<meta name="robots" content="noindex, nofollow">' !!} --}}
@endsection
@section('json-ld')
<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "BreadcrumbList",
		"itemListElement": [ 
		{
			"@type": "ListItem",
			"position": 1,
			"name": "Home",
			"item": "{{  $domain }}"
		},
		{
			"@type": "ListItem",
			"position": 2,
			"name": "Blog",
			"item": "{{$canonicalUrl}}"
		}
		]
	}
</script>
@endsection
@extends('layouts.app')
@section('content')
<?php
use Carbon\Carbon;
?>
<section class="home-banner-section">
    <div >
        <h1 class="nev_hed  d-flex justify-content-center">BLOG
        </h1>
        <h2 class="nev_subhed pt-2 pb-5 d-flex justify-content-center">
            <pre class="mb-0"><a href="{{ route('home')}}" class="fw-bold">Home</a> > </pre>Blog
    </div>
</section>
<div class="container">
    <div class="blog pt-5">
        <div class="row align-items-center">
                @foreach ($blogs as $blog)
                @php
                    $date = Carbon::parse($blog->created_at)->format("M d, Y");
                    @endphp
                <div class="col-md-4 py-2  py-md-3">
                    <a href="{{ route('blog.single',$blog->slug)}}">
                    <div class="card  blogcard">
                        <img src="{{ asset($blog->image) }}" class=" img-fluid card-img-top mx-auto p-2"
                            alt="...">
                        <div class="card-body ">
                            <p class="s_text pb-2">{{ $date }}</p>
                            <p class="text1">{{ $blog->name }}</p>
                            <p class="text2 py-3">{!! strip_tags(Str::words($blog->description, 35,'....'))  !!}</p>
                            <a href="{{ route('blog.single',$blog->slug)}}">Read More -></a>
                        </div>
                    </div>
                </a>
                </div>
                @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {!! $blogs->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>
<style>
    .text-muted{
        display: none;
    }
</style>
@endsection
