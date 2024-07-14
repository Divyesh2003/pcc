@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', 'Cancellation and Refund Policy | Apostille | Translation Apostille Services')
@section('meta_description', "Refund and Cancellation Policy. Our focus is complete customer satisfaction. In event, if you are displeased with service provided.")
@section('meta_keywords', "Faq")
@section('index_tag')
    {{-- {!! '<meta name="robots" content="noindex, nofollow">' !!} --}}
@endsection
{{-- @section('canonical', "www.mea-india.in") --}}
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
			"name": "Cancellation and Refund Policy",
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
        <h1 class="nev_hed d-flex justify-content-center">CANCELLATION AND <span class="ms-2">REFUND POLICY</span></h1>
        <h2 class="nev_subhed pt-2 pb-4 d-flex justify-content-center">
            <pre class="mb-0"><a href="/" class="fw-bold">Home</a>   >   </pre>  Cancellation and Refund Policy </h2>
    </div>
</section>
<div class="container refuedpolicy ">
    <div class="my-5">
        <div class="col-md-12 padzerom mndj">
            <div class="content">
            <p><span style="font-weight: 400;">Cancellation and Refund Policy for Apostille Services:</span></p>
            <p><span style="font-weight: 400;">We understand that circumstances may arise where you need to cancel or request a refund for the apostille services you have initiated. Our goal is to provide a transparent and fair policy to address such situations. Please review the following terms and conditions regarding cancellations and refunds for our apostille services:</span></p>
            <h3><span style="font-weight: 400;">1. Cancellation Policy:</span></h3>
            <p><b>Before Submission to Authorities:</b></p>
            <p><span style="font-weight: 400;">If you decide to cancel your apostille service before the documents are submitted to the relevant authorities, you are eligible for a full refund minus any processing fees incurred up to that point. To initiate the cancellation process, please contact our customer support team at [customer-support@example.com] with your order details.</span></p>
            <p><b>After Submission to Authorities:</b></p>
            <p><span style="font-weight: 400;">Once the documents have been submitted to the authorities, cancellation is no longer possible, as the process is irreversible at this stage. We recommend reviewing your order carefully before finalizing it to avoid any inconvenience.</span></p>
            <h3><span style="font-weight: 400;">2. Refund Policy:</span></h3>
            <p><b>Processing Fees:</b></p>
            <p><span style="font-weight: 400;">Any processing fees associated with your order are non-refundable. This includes fees for document review, consultation, or administrative services.</span></p>
            <p><b>Denied Apostille:</b></p>
            <p><span style="font-weight: 400;">If, for any reason, the authorities deny the apostille service, you will be eligible for a refund minus the processing fees. We will provide documentation of the denial from the relevant authorities to support your refund request.</span></p>
            <p><b>Incomplete or Incorrect Documents:</b></p>
            <p><span style="font-weight: 400;">Refunds will not be issued if the documents provided are incomplete, incorrect, or do not meet the requirements of the apostille process. It is the responsibility of the customer to ensure that all submitted documents are accurate and complete.</span></p>
            <p><b>Timely Refund Requests:</b></p>
            <p><span style="font-weight: 400;">Refund requests must be submitted within 30 days of the order date. Requests made beyond this period will not be considered.</span></p>
            <h3><span style="font-weight: 400;">3. How to Request a Refund:</span></h3>
            <p><span style="font-weight: 400;">To request a refund, please contact our customer support team at [customer-support@example.com] with the following information:</span></p>
            <p><span style="font-weight: 400;">- Order number</span></p>
            <p><span style="font-weight: 400;">- Reason for the refund request</span></p>
            <p><span style="font-weight: 400;">- Supporting documentation, if applicable</span></p>
            <p><span style="font-weight: 400;">Our team will review your request and respond in a timely manner.</span></p>
            <p><span style="font-weight: 400;">Please note that this Cancellation and Refund Policy is subject to change, and any updates will be communicated through our official channels. We appreciate your understanding and cooperation.</span></p>
            <p><br><br><br></p> </div>
            </div>
    </div>
</div>

@endsection
