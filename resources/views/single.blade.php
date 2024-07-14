@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', "$blog->meta_title")
@section('meta_description', "$blog->meta_description")
@section('meta_keywords', "$blog->meta_keywords")
@section('canonical', "$blog->canonical")
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
			"name": "Blog",
			"item": "{{ $domain }}/blog"
		}
		{
			"@type": "ListItem",
			"position": 3,
			"name": "{{ $blog->name }}",
			"item": "{{ $canonicalUrl }}"
		}
		]
	}
</script>
@endsection
@extends('layouts.app')
@section('content')
<div class="container contectUs ">
    <div class="text-center my-5 ">
        <h1 class="text1 ">{{ $blog->name }}</h1>
        <img class=" img-fluid mt-5" src="{{ asset($blog->image)}}" alt="">
    </div>
    <div>
        {!! $blog->description !!}
    </div>
 
<!-- contact section -->
    <section class="contact-section mb-5">
    <div class="container">
        <div class="contact-wrapper1">
            <h6 class="text-center contact-section-title">Contact Us</h6>
            <form action="{{ route('contact.inquiry')}}" method="POST" id="contact" class="row justify-content-between align-items-center contact-form needs-validation" style="padding: 0px 6%;" enctype="multipart/form-data" novalidate>
              @csrf()
              @method('POST')
              <div class="col-md-12 col-lg-6 mb-3 ">
                  <label for="exampleInputEmail1" class="my-2 d-none d-xl-block">First Name<span class="text-danger">*</span></label>
                  <input class="form-control" id="firstname" name="name" placeholder="Enter Firstname*" required>
                  <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose a First Name
                    </div>
              </div>
              <div class="col-md-12 col-lg-6 mb-3 ps-lg-2">
                  <label for="lastname" class="my-2 d-none d-xl-block">Last Name<span class="text-danger">*</span></label>
                  <input class="form-control" name="lastname" placeholder="Enter Lastname*" required>
                  <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose a Last Name
                    </div>
              </div>
              <div class="col-md-12 col-lg-6 mb-3 ps-lg-2">
                  <label for="email" class="my-2 d-none d-xl-block">Email<span class="text-danger">*</span></label>
                  <input class="form-control" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Enter Email*" required>
                  <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose a Email
                    </div>
              </div>
              <div class="col-md-12 col-lg-6 mb-3">
                  <label for="lastname" class="my-2 d-none d-xl-block">Phone Number<span class="text-danger">*</span></label>
                  <input class="form-control country_code" type="hidden" name="country_code" placeholder="Phone Number" value="" required>    
                  <input type="number" class="form-control mobile_code" id="mobile_code" name="phone" placeholder="Enter Phone Number" required>
                  <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose a Phone
                    </div>
              </div>
              <div class="col-md-12 col-lg-12 mb-3 ps-lg-2">
                  <label for="lastname" class="my-2 d-none d-xl-block">Services<span class="text-danger">*</span></label>
                  <select class="form-select" name="services" id="services_model" required>
                    <option>Select Services</option>
                    <option value="Apostille Services" selected>Apostille Services</option>
                    <option value="Embassy Attestation Services">Embassy Attestation Services</option>
                    <option value="Document Translation">Document Translation</option>
                    <option value="Visa Services">Visa Services</option>
                </select>
                  <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose a Services
                    </div>
              </div>
              <div class="col-12 mb-3" name="message">
                  <label for="message" class="my-2 d-none d-xl-block">Message<span class="text-danger">*</span></label>
                  <textarea class="form-control" name="message" rows="3" placeholder="Type your message here*" required></textarea>
                  <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose a Message
                    </div>
              </div>
          <div class="col-12 col-md-5 col-lg-4 col-xl-3 mb-2">
              <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
          </div>
          <div
              class="col-12 col-md-4 col-lg-3 mb-4 mb-md-2 d-flex ml-auto justify-content-center md-justify-content-end">
              <button class="btn custom-btn" name="contact">submit</button>
          </div>
      </form>
        </div>
    </div>
</section>
</div>
@endsection