@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', 'Terms & Conditions')
@section('meta_description', "Terms &amp; Conditions")
@section('meta_keywords', "")
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
			"name": "Terms and Conditions",
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
        <h1 class="nev_hed d-flex justify-content-center">Terms and <span class="ms-2">Conditions</span></h1>
        <h2 class="nev_subhed pt-2 pb-4 d-flex justify-content-center">
            <pre class="mb-0"><a href="/" class="fw-bold">Home</a>   >   </pre>  Terms and Conditions
    </div>
</section>
<div class="container refuedpolicy ">
    <div class="my-5">
        <div class="content">
            <p>Terms &amp; Conditions</p>
            <h3><span style="font-weight: 400;">1. Introduction:&nbsp;</span></h3>
            <p><span style="font-weight: 400;">These Terms and Conditions govern the provision of Apostille and Attestation Services by [Your Company Name], an Indian-registered corporation indiamea. By availing ourselves, you agree to comply with and be bound by these terms and Conditions.</span></p>
            <h3><span style="font-weight: 400;">2. Service Descriptions:</span></h3>
            <p><span style="font-weight: 400;">&nbsp;Indiamea Service provider provides Apostille and Attestation services for documents including educational certificates, commercial contracts, personal files etc. in accordance with guidelines set by relevant Indian authorities.</span></p>
            <h3><span style="font-weight: 400;">3. Client Responsibilities:</span></h3>
            <p><span style="font-weight: 400;">Clients must provide accurate and complete information about the documents requiring Apostille or Attestation. Furthermore, clients are solely responsible for gathering any additional documentation necessary for the Apostille/Attestation process.</span></p>
            <p><span style="font-weight: 400;">Clients must comply with timelines provided by service providers and respond quickly to any enquiries that arise.</span></p>
            <h3><span style="font-weight: 400;">4. Service Fees</span></h3>
            <p><span style="font-weight: 400;">&nbsp;Clients agree to pay any agreed-upon service fees communicated by their Service Provider, covering only their service charges but excluding government taxes or courier expenses or related costs.</span></p>
            <h3><span style="font-weight: 400;">5. Payment</span></h3>
            <p><span style="font-weight: 400;">In general, payments should be made prior to starting any services with any Service Provider and can be made using one or more accepted payment methods as communicated. Should payments not be met as requested by them, service may be suspended or discontinued at their sole discretion.</span></p>
            <h3><span style="font-weight: 400;">6. Turnaround Time</span></h3>
            <p><span style="font-weight: 400;">While indiamea Service Provider will make every attempt to complete an Apostille or Attestation within its agreed timeline, delays may arise due to unexpected circumstances or government procedures.</span></p>
            <h3><span style="font-weight: 400;">7. Refund Policy:&nbsp;</span></h3>
            <p><span style="font-weight: 400;">Ramburs will only be offered if a service provider fails to deliver as agreed-upon services; once Apostille or Attestation processes have begun no refunds will be offered.</span></p>
            <h3><span style="font-weight: 400;">8. Confidentiality:&nbsp;</span></h3>
            <p><span style="font-weight: 400;">Our Service Provider will treat all client information and documents with strictest confidence, sharing any necessary data with government authorities for Apostille/Attestation processes as necessary.</span></p>
            <h3><span style="font-weight: 400;">9. Liability:</span></h3>
            <p><span style="font-weight: 400;">India mea Service Provider does not assume liability for delays, losses, damages, or errors caused by third-party courier services, government agencies, or external factors beyond its control.</span></p>
            <h3><span style="font-weight: 400;">10.Governing Law</span></h3>
            <p><span style="font-weight: 400;">These Terms and Conditions shall be governed and interpreted in accordance with Indian law, with any disputes arising out of or connected to these Terms &amp; Conditions being subject to exclusive jurisdiction of surat .</span></p>
            <h3><span style="font-weight: 400;">11. Amendment of Agreement Terms</span></h3>
            <p><span style="font-weight: 400;">Service Provider reserves the right to amend these Terms and Conditions at any time; clients will be informed immediately of any such modifications.</span></p>
            <p></p>
            <p><span style="font-weight: 400;">By taking advantage of our Apostille and Attestation services, you acknowledge that you have read, understood, and agreed to these Terms and Conditions. Should any issues arise that need answering please reach out at [Your Contact Info].</span></p>
            <p></p>
            <p></p> </div>
    
    </div>
    </div>
@endsection