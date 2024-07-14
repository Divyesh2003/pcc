@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', 'Document Translation Services | Document Translation Services')
@section('meta_description', "we provide the document translation,language Translation Services ,Business,Technical,Legal,Financial translation services in india.")
@section('meta_keywords', "")
{{-- @section('canonical', "www.mea-india.in") --}}
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
			"item": "{{ $domain }}"
		},
		{
			"@type": "ListItem",
			"position": 2,
			"name": "Foreign Language Document Translation",
            "item": "{{ $canonicalUrl }}"
		}
		]
	}
</script>
@endsection

@extends('layouts.app')
@section('content')
<section class="home-banner-section">
    <div >
        <h1 class="nev_hed mt-m-0 d-flex justify-content-center"><span class="ms-2">FOREIGN DOCUMENT TRANSLATION</span>
        </h1>
        <h2 class="nev_subhed pt-2 pb-5 d-flex justify-content-center">
            <pre class="mb-0"><a href="/" class="fw-bold">Home</a>   >   </pre> Document Translation
    </div>
</section>

<div class="container Document_translation ">
    <br>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4 mb-4 mb-4 mb-4">
            <a href="{{ route('product.single',$product->slug)}}">
                <div class="card text-center doccard py-5">
                    <img src="{{ asset('assets/img/fi_9254529.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
                    <div class="card-body">
                        <h6 class=""><span class="text1">{{ $product->language }}</span></h6>
                    </div>
                </div>
                <p class="text-center my-3 text3">{{ $product->name }}</p>
            </a>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
</div>
@endsection