@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', 'About Us')
@section('meta_description', "About Us")
@section('meta_keywords', "About Us")
@section('canonical', "{{$canonicalUrl}}")
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
			"name": "ABOUT US",
			"item": "{{$canonicalUrl}}"
		}
		]
	}
</script>
@endsection
@extends('layouts.app')
@section('content')
<section class="home-banner-section">
    <div>
        <h1 class="nev_hed pt-5 d-flex justify-content-center">ABOUT US
        </h1>
        <h2 class="nev_subhed pt-2 pb-5 d-flex justify-content-center">
            <pre class="mb-0"><a href="{{ route('home')}}" class="fw-bold">Home</a>  >   </pre> About us
    </div>
        </section>
        <div class="container">
            <div class="row align-items-center mt-100">
        <div class="col-md-6 aboutimg">
            <img src="{{ asset('assets/img/image 12.png') }}" alt="">
        </div>
        <div class="col-md-6 abouttext d-flex flex-column text-center">
            <h6>Know <span class="text1">About Us</span></h6>
            <p class="text2">Welcome to India mea, your trusted partner in streamlining the often complex process of
                obtaining Apostilles. With a commitment to efficiency, accuracy, and customer satisfaction, we pride
                ourselves on being the bridge that connects your documents to global recognition.</p>
        </div>
    </div>
    <div class="text-center pt-75">
        <span class="text1">Why Choose Us?</span>
        <p class="text2 mt-4">At India mea , we understand the importance of international document authentication.
            Whether you're navigating the waters of business, education, or personal affairs, our dedicated team is
            here to simplify the Apostille process for you.</p>
    </div>
    <div class="text-center pt-75">
        <span class="text1">Expertise You Can Rely On</span>
        <p class="text2" style="padding-top: 20px;">Backed by years of experience, our team comprises seasoned professionals well-versed
            in the
            intricacies of Apostille requirements across various jurisdictions. We stay abreast of ever-changing
            regulations to ensure that your documents are processed swiftly and accurately.
        </p>
    </div>
    <div class="text-center pt-75">
        <span class="text1 m-5">Our Services</span>
        <div class="row align-items-center mt-40">
            <div class="col-12 col-md-6 ">
                <div class="card text-center aboutcard  ">
                    <img src="{{ asset('assets/img/fi_9254529.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
                    <div class="card-body card_fxopio">
                        <p class="text1">Document Authentication</p>
                        <p class="text2">We specialize in obtaining Apostilles for a wide range of documents,
                            including educational certificates, legal papers, business documents, and more. Trust us
                            to handle the intricate details, allowing you to focus on your priorities.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 m-opip">
                <div class="card text-center aboutcard ">
                    <img src="{{ asset('assets/img/fi_4547479.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
                    <div class="card-body">
                        <p class="text1">Document Authentication</p>
                        <p class="text2">We specialize in obtaining Apostilles for a wide range of documents,
                            including educational certificates, legal papers, business documents, and more. Trust us
                            to handle the intricate details, allowing you to focus on your priorities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-75" style="">
        <span class="text1">Customer-Centric Approach</span>
        <p class="text2 mt-20">In India mea , your satisfaction is our priority. Our customer support team is ready
            to
            guide you through the process, answer your questions, and provide updates on the status of your
            Apostille request. We believe in transparent communication and strive to make your experience with us
            seamless and stress-free.
        </p>
    </div>
    <div class="text-center pt-75 pb-50">
        <span class="text1">Your Success, Our Mission</span>
        <p class="text2 pt-4">Your aspirations, endeavors, and legal requirements matter to us. With India mea ,
            you're
            not just a client; you're a partner in the journey toward global recognition. Let us be the catalyst
            that propels your documents into the international spotlight.
        </p>
        <p class="text2 ">Choose India mea for Apostille services that go beyond the ordinary, ensuring your
            documents are authenticated with precision and efficiency. We look forward to being your trusted
            Apostille partner.</p>
    </div>
</div>
@endsection