@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', 'Privacy Policy')
@section('meta_description', "Privacy Polic")
@section('meta_keywords', "Privacy Polic")
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
			"name": "Privacy Policy",
			"item": "{{$canonicalUrl}}"
		}
		]
	}
</script>
@endsection
@extends('layouts.app')
@section('content')
<section class="home-banner-section">
    <div >
        <h1 class="nev_hed d-flex justify-content-center">PRIVACY <span class="ms-2">POLICY</span></h1>
        <h2 class="nev_subhed pt-2 pb-4 d-flex justify-content-center">
            <pre class="mb-0"><a href="/" class="fw-bold">Home</a>   >   </pre>  PRIVACY POLICY
    </div>
</section>
<div class="container refuedpolicy ">
    <div class="my-5">
        <div class="content">
            <p><span style="font-weight: 400;">Privacy Policies</span></p>
            <p><b>Information Collection</b></p>
            <p><span style="font-weight: 400;">We will collect and store information about you if you use this website without giving us any personal data. This includes your IP address, browser type and operating system, dates and times you access the site, which pages you view, as well as the website address you used to link from. These data will not allow you to be identified and they will not link back to your personal information. We may need personal information about or from you, for example, when you fill out a contact form or submit a request for an auto lead to a dealership. These personally identifiable data may include information such as your name, email address, phone number, and identification number.</span></p>
            <p><b>Share and Use Information</b></p>
            <p><span style="font-weight: 400;">At no time will we sell your personally-identifiable data without your permission unless set forth in this Privacy Policy. We may use or share the information that we collect about or from you with our corporate associates, agents, suppliers, and vendors to process your request, to meet any legal, regulatory, audit, or court orders, to improve our site or products or services, to conduct research, to better understand customer needs, to create new offerings, and to notify you of new products and/or services offered by ourselves or by our business partners. In order to provide you with better service, we may combine the information that you give us with other information available about you.</span></p>
            <p><span style="font-weight: 400;">Your personal information will not be shared, sold, traded or rented to a third party for any unknown reason.</span></p>
            <p><b>The Security of Your Own Home</b></p>
            <p><span style="font-weight: 400;">Our privacy is protected by industry-approved security procedures, standards, and laws. We use industry approved physical, electronic and procedure safeguards on our websites to protect your data throughout its lifecycle in our infrastructure.</span></p>
            <p><span style="font-weight: 400;">When stored on our infrastructure, sensitive data is encrypted or hashed. Decrypted sensitive data is processed, re-encrypted and discarded as soon as it's no longer needed. Our web hosting services are hosted in data centers that have been audited and where access is restricted to data processing servers. We provide a secure web hosting service with the help of controlled access, live and recorded video feeds and 24/7 security staff.</span></p>
            <p><b>This Privacy Statement may be amended.</b></p>
            <p><span style="font-weight: 400;">The last time we updated our privacy policy was Nov 2019. Our Privacy Policy may be updated from time to time. We will always update our Privacy Policy.</span></p>
            <p><b>Question</b></p>
            <p><span style="font-weight: 400;">Please send us your questions regarding our privacy policy by email at</span><span style="font-weight: 400;"> </span><span style="font-weight: 400;">info@indiamea.in</span></p>
            <p></p> </div>
    </div>
    
</div>
@endsection