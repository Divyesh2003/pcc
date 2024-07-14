@php
use App\Models\Youtube;
$youtubes = Youtube::all();
use Carbon\Carbon;
$canonicalUrl = url()->current(); 
@endphp
@section('title', 'Apostille Attestation Services Near Me: Certificate Apostille Attestation in India')
@section('meta_description', "Quick Document certificate Apostille services near me in India for all location. Quick Certificate attestation apostille for birth certificate, Marriage Certificate, Embassy Attesattion in India")
@section('meta_keywords', "Mea")
@section('index_tag')
    {{-- {!! '<meta name="robots" content="noindex, nofollow">' !!} --}}
@endsection
{{-- @section('canonical', "$canonicalUrl") --}}
@extends('layouts.app')
@section('content')
{{-- @php
use App\Models\Youtube;
$youtubes = Youtube::all();
use Carbon\Carbon;
@endphp --}}
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<section class="home-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="home-banner-info">
                    <h1>Apostille Services In India Within <p>2 Working Days!</p>
                    </h1>
                    <h6 class="my-4">
                        Get Apostille Document delivered to your doorstep in 4 working days* with
                        <b>Free Pickup & Drop Service</b> Across India Over 20000+ Pin codes.
                    </h6>
                    <div class="d-flex  mx-auto my-2 mb-4 my-xl-5 align-items-center">
                        {{-- <button class="btn Apply-custom-btn pl-2">
                            Apply For Apostille
                        </button> --}}
                        <button type="button" class="btn Apply-custom-btn pl-2 services" onclick="openModal('apositlle')" data-bs-toggle="modal">
                            Apply For Apostille
                          </button>
                        <a href="https://api.whatsapp.com/send?phone=+919106614849&amp;text=Hello!">
                            <div class="mx-2 mx-lg-4 social-media-link" id="whatsapp">
                                <img src="{{ asset('assets/img/whatapp-icon.png') }}" class="img-fluid mx-1">
                                <span class="green-word">Whatsapp Us</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/home-banner.webp') }}" class="img-fluid" width="100%">
            </div>
        </div>
    </div>
</section>
<!-- about section -->
<section class="about-section position-relative px-75">
    <div class="container">
        <h6 class="text-center section-title mb-0 mb-xl-5">About PCC Apostille Services</h6>
        <div class="row">
            <div class="col-12 col-md-6 aboutimg">
                <img src="{{ asset('assets/img/About-section.png') }}">
            </div>
            <div class="col-12 col-md-6 ">
                <div class="about-section-info">
                    <p>PCC Apostille and Attestation Services India Pvt Ltd is a leading Services provider of
                        document Apostille and Attestation services in India. With over a decade of experience in
                        the industry, we have established ourselves as a trusted and reliable partner for
                        individuals and businesses seeking assistance with their document Apostille and Legalization
                        needs.</p>
                    <ul class="about-section-info-list">
                        <li>
                            We are the leader in certificate Apostille Attestation services and a highly
                            professional and trusted company you can rely upon for document authentication.

                        </li>
                        <li>
                            We have Document collection centers all over India, We are planning to open new
                            branch Dubai, UAE, to help clients get the best Embassy Attestation, Apostille &
                            Visa Services.
                        </li>
                        <li>
                            If you are looking for a reliable partner for your document Apostille and
                            Attestation needs, look no further than PCC Apostille and Attestation Services
                            India Pvt Ltd. Contact us today to learn more about our services and how we can
                            assist you with your document Apostille and Legalization needs.
                        </li>
                    </ul>
                </div>
                <a class="btn custom-btn" href="{{ route('about')}}">More About Us</a>
            </div>
        </div>
    </div>
</section>
<!-- Service section -->
<section class="services-section pt-5">
    <div class="container">
        <h6 class="section-title mb-0  mt-0  mb-xl-4 mt-xl-5">Services We Offer..</h6>
        <div class="row pb-5">
            <div class="w-100 service-array">
                <div class="col-lg-12 Offer-carousel owl-carousel owl-theme p-2">
                    <div class="item p-2 ">
                        <div class="card px-3 py-4 mx-auto text-center">
                            <div class="services-img">
                                <img src="{{ asset('assets/img/Apostille.png') }}" class="img-fluid">
                            </div>
                            <h6 class="services-title ">Apostille Services</h6>
                            <p class="services-desc ">An apostille is a document that certifies a public official's
                                signature on a document intended for use abroad.</p>
                            <a href="/certificate-apostille-services-india" class="services-readMore">Read More
                                <img src="{{ asset('assets/img/arrow.png') }}"></a>
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="card px-3 py-4 mx-auto text-center">
                            <div class="services-img">
                                <img src="{{ asset('assets/img/Apostille.png') }}" class="img-fluid">
                            </div>
                            <h6 class="services-title ">Embassy Attestation</h6>
                            <p class="services-desc ">An apostille is a document that certifies a public official's
                                signature on a document intended for use abroad.</p>
                            <a href="/embassy-attestation-services" class="services-readMore">Read More
                                <img src="{{ asset('assets/img/arrow.png') }}"></a>
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="card px-3 py-4 mx-auto text-center">
                            <div class="services-img">
                                <img src="{{ asset('assets/img/Apostille.png') }}" class="img-fluid">
                            </div>
                            <h6 class="services-title">MEA Attestation</h6>
                            <p class="services-desc ">An apostille is a document that certifies a public official's
                                signature on a document intended for use abroad.</p>
                            <a href="/mea-attestation" class="services-readMore">Read More
                                <img src="{{ asset('assets/img/arrow.png') }}"></a>
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="card px-3 py-4 mx-auto text-center">
                            <div class="services-img">
                                <img src="{{ asset('assets/img/Apostille.png') }}" class="img-fluid">
                            </div>
                            <h6 class="services-title ">HRD Attestation</h6>
                            <p class="services-desc ">An apostille is a document that certifies a public official's
                                signature on a document intended for use abroad.</p>
                            <a href="{{ route('page','hrd-attestation-online')}}" class="services-readMore">Read More
                                <img src="{{ asset('assets/img/arrow.png') }}"></a>
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="card px-3 py-4 mx-auto text-center">
                            <div class="services-img">
                                <img src="{{ asset('assets/img/Apostille.png') }}" class="img-fluid">
                            </div>
                            <h6 class="services-title ">Document Translation</h6>
                            <p class="services-desc ">An apostille is a document that certifies a public official's
                                signature on a document intended for use abroad.</p>
                            <a href="/translation" class="services-readMore">Read More
                                <img src="{{ asset('assets/img/arrow.png') }}"></a>
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="card px-3 py-4 mx-auto text-center">
                            <div class="services-img">
                                <img src="{{ asset('assets/img/Apostille.png') }}" class="img-fluid">
                            </div>
                            <h6 class="services-title ">VISA Stamping</h6>
                            <p class="services-desc ">An apostille is a document that certifies a public official's
                                signature on a document intended for use abroad.</p>
                            <a href="{{ route('page','visa-process') }}" class="services-readMore">Read More
                                <img src="{{ asset('assets/img/arrow.png') }}"></a>
    
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="card px-3 py-4 mx-auto text-center">
                            <div class="services-img">
                                <img src="{{ asset('assets/img/Apostille.png') }}" class="img-fluid">
                            </div>
                            <h6 class="services-title ">UAE Embassy Attestation</h6>
                            <p class="services-desc ">An apostille is a document that certifies a public official's
                                signature on a document intended for use abroad.</p>
                            <a href="/uae-embassy-attestation" class="services-readMore">Read More
                                <img src="{{ asset('assets/img/arrow.png') }}"></a>
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="card px-3 py-4 mx-auto text-center">
                            <div class="services-img">
                                <img src="{{ asset('assets/img/Apostille.png') }}" class="img-fluid">
                            </div>
                            <h6 class="services-title ">UAE Job Seeker VISA</h6>
                            <p class="services-desc ">An apostille is a document that certifies a public official's
                                signature on a document intended for use abroad.</p>
                            {{-- <a href="https://pccvisas.com/" class="services-readMore">Read More
                                <img src="{{ asset('assets/img/arrow.png') }}"></a> --}}
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="card px-3 py-4 mx-auto text-center">
                            <div class="services-img">
                                <img src="{{ asset('assets/img/Apostille.png') }}" class="img-fluid">
                            </div>
                            <h6 class="services-title ">Flight Booking</h6>
                            <p class="services-desc ">An apostille is a document that certifies a public official's
                                signature on a document intended for use abroad.</p>
                            {{-- <a href="https://pccvisas.com/" class="services-readMore">Read More
                                <img src="{{ asset('assets/img/arrow.png') }}"></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
          <!-- Your Benefits section -->
          <div class="benefits-section py-2 py-xl-5 m-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 d-block d-xl-none text-center py-4">
                        <h6 class="section-subtitle mb-0">PCC Always Stands For</h6>
                        <h6 class="section-title mb-0 mb-xl-4">Your Benefits</h6>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center order-1 order-xl-0">
                        <div style="padding-left: 5px;">
                            <div class="row g-3">
                                <div class="d-none d-xl-block">
                                    <h6 class="section-subtitle mb-0">PCC Always Stands For</h6>
                                    <h6 class="section-title mb-4">Your Benefits</h6>
                                </div>
                                <div class="col-6 col-md-6 col-xl-6">
                                    <div class="benefits-info d-none d-xl-block">
                                        <img src="{{ asset('assets/img/pickup.png') }}" class="img-fluid">
                                        <h6><b>FREE</b> Pick Up & Drop* Doorstep Services in INDIA</h6>
                                    </div>
                                    <div class="benefits-info d-block d-xl-none">
                                        <img src="{{ asset('assets/img/pickup.png') }}" class="img-fluid">
                                        <h6><b>FREE</b> Pick Up & Drop* Doorstep Services in INDIA</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-xl-6">
                                    <div class="benefits-info d-none d-xl-block">
                                        <img src="{{ asset('assets/img/fast.png') }}" class="img-fluid">
                                        <h6>Fast and Reliable Processing #NoHassle</h6>
                                    </div>
                                    <div class="benefits-info d-block d-xl-none">
                                        <img src="{{ asset('assets/img/fast.png') }}" class="img-fluid">
                                        <h6>Fast and Reliable Processing #NoHassle</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-xl-6">
                                    <div class="benefits-info d-none d-xl-block" >
                                        <img src="{{ asset('assets/img/processpayment.png') }}" class="img-fluid">
                                        <h6>After Process Payment <b>NO ADVANCE*</b></h6>
                                    </div>
                                    <div class="benefits-info d-block d-xl-none">
                                        <img src="{{ asset('assets/img/processpayment.png') }}"
                                            class="img-fluid">
                                            <h6>After Process Payment <b>NO ADVANCE*</b></h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-xl-6">
                                    <div class="benefits-info d-none d-xl-block">
                                        <img src="{{ asset('assets/img/worldwideshipping.png') }}"
                                            class="img-fluid ">
                                        <h6>WorldWide Shipping Available</h6>
                                    </div>
                                    <div class="benefits-info d-block d-xl-none">
                                        <img src="{{ asset('assets/img/worldwideshipping.png') }}"
                                            class="img-fluid">
                                            <h6>WorldWide Shipping Available</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center order-0 order-xl-1 ">
                        <div class="benefits-img mx-auto">
                            <img src="{{ asset('assets/img/Benefits.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="choose-services-provider">
    <div class="container">
        <h6 class="text-center section-title mb-4 mt-5">Why Choose PCC?</h6>
        <h2 class="choose-services-subtitle d-flex justify-content-center text-center mx-auto">
            There are multitple reason what makes us best Apostille Attestation Service provider in India. Here are
            some of them:
        </h2>
        <div class="choose-services-info-wrapper mb-5">
            <div class="row ">
                <div class="col-md-6 col-lg-3 col-xl-3 ">
                    <div class="">
                        <div class="text-center text-lg-start">
                            <img src="{{ asset('assets/img/customersupport.png') }}" class="img-fluid mt-5 mb-4">
                            <h6 class="choose-services-info-title">Customer Support</h6>
                            <div class="bord d-block d-lg-none"></div>
                        </div>
                    </div>
                 
                    <p class="choose-services-info-desc pt-4">
                        PCC has hot 24x7 support* to assist you at any point you need help.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3">
                    <div class="">
                        <div class="text-center text-lg-start">
                    <img src="{{ asset('assets/img/stamps.png') }}" class="img-fluid mt-5 mb-4">
                    <h6 class="choose-services-info-title">100% Genuine Stamps</h6>
                    <div class="bord d-block d-lg-none"></div>
                        </div>
                    </div>
                    <p class="choose-services-info-desc pt-4">
                        PCC provide 100% Genuine Stamping Services on all type Document. Sign & Stamp By under
                        Section Officer and ambassador.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 ">
                    <div class="">
                        <div class="text-center text-lg-start">
                            <img src="{{ asset('assets/img/documentsafety.png') }}" class="img-fluid mt-5 mb-4">
                            <h6 class="choose-services-info-title">Document Safety & Security</h6>
                    <div class="bord d-block d-lg-none"></div>
                        </div>
                    </div>
                    <p class="choose-services-info-desc pt-4">
                        We Have a Professional Dedicated Team at Ground Level For Specially Handling Original
                        Documents.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 ">

                    <div class="">
                        <div class="text-center text-lg-start">
                            <img src="{{ asset('assets/img/tracking.png') }}" class="img-fluid mt-5 mb-4">
                            <h6 class="choose-services-info-title">Live Document Tracking</h6>
                    <div class="bord d-block d-lg-none"></div>
                        </div>
                    </div>
                    <p class="choose-services-info-desc pt-4">
                        PCC provides live document tracking Service so that you can are aware about current process.
                    </p>
                </div>
            </div>
        </div>

        <div class="count-services my-2 my-xl-5">
            <div class="row justify-content-center align-items-center py-5 py-xl-0">
                <div class="col-lg-4 col-md-4 .col-sm-12 count-services-info py-4 py-xl-0">
                    <span>140+</span>
                    <h2>COUNTRIES</h2>
                </div>
                <div class="col-lg-4 col-md-4 .col-sm-12 count-services-info py-4 py-xl-0">
                    <span>20,132+</span>
                    <h2>CUSTOMERS</h2>
                </div>
                <div class="col-lg-4 col-md-4 .col-sm-12 count-services-info py-4 py-xl-0">
                    <span>35,580+</span>
                    <h2>Documents Processed</h2>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- customer Review section -->
 <section class="customer-Review-section">
    <div class="container ">
        <h6 class="text-center section-title my-5">What’s our Customer says</h6>
        <!-- <div class="owl-carousel owl-theme"> -->
        <div class="row ">
            <div class="col-lg-3 customer-Review owl-carousel owl-theme">
            @foreach ($youtubes as $youtube)
            <div class="item">
                <div class="card mx-auto text-center">
                    <div class="Review-img">
                        <img data-src="https://youtube.com/embed/{{$youtube->url}}" 
                            src="" 
                            width="300" 
                            height="446" 
                            style="border-radius: 20px;" 
                            class="lazyload" 
                            alt="YouTube Video">
                    </div>
                    <h6 class="services-title mt-3">{{ $youtube->title }}</h6>
                    <p class="services-desc">{{ $youtube->description}}</p>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
<!-- faqs question section -->
<section class="faqs-question-section px-75">
    <div class="container ">
        <h6 class="text-center faqs-question-section-title">Frequently Asked Questions</h6>
        <div class="accordion faqs-info-wrapper accordion-flush" id="accordio   nPanelsStayOpenExample">
            @foreach($faqs as $faq)
            <div class="accordion-item mt-0">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button px-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne{{ $faq->id }}" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne{{ $faq->id }}">
                        {{ $faq->title }}
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne{{ $faq->id }}" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingOne{{ $faq->id }}">
                    <div class="accordion-body px-0">
                        <p>
                           {{ $faq->description }} 
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="banner_2-section pt-5">
    <div class="container">
        <div class="banner_2 d-flex flex-column justify-content-center align-items-center">
            <h6 class="mb-4">Start Application</h6>
            <div class="banner_2_button d-flex flex-column flex-sm-row justify-content-center align-items-center">
                <button type="button" class="btn mb-2 mb-sm-0"  onclick="openModal('apositlle')">Start Application of A Apostille</button>
                <button type="button" class="btn mt-sm-0 mt-2"
                    style="margin-left: 0; margin-top: 0; margin-left: 25px;"  onclick="openModal('attestation')">Start Application for Embassy
                    Attestation</button>
            </div>
        </div>
    </div>
</section>
<!-- blog section -->
<section class="blog-section px-75">
    <div class="container mb-5">
        <h6 class="text-center blog-section-title">Latest Blogs </h6>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div id="news-blogs" class=" owl-carousel owl-theme news-blog ">
                    @foreach ($blogs as $blog)
                    {{-- @dd($blogs) --}}
                    <div class="item">
                        <div class="card blogcard">
                            <img src="{{ asset($blog->image) }}" class=" img-fluid card-img-top mx-auto "
                                alt="">
                            @php
                                $date = Carbon::parse($blog->created_at)->format("M d, Y");
                            @endphp
                            <div class="card-body ">
                                <p class="s_text">{{ $date }}</p>
                                <p class="text1">{{ $blog->name }}</p>
                                <p class="text2">{!! strip_tags(Str::words($blog->description, 35,'....'))  !!}</p>
                                <a href="{{ route('blog.single',$blog->slug)}}">Read More -></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact section -->
<section class="contact-section mb-5">
    <div class="container">
        <div class="contact-wrapper1">
            <h6 class="text-center contact-section-title">Contact Us</h6>
            <form action="{{ route('contact.inquiry') }}" method="POST" id=""
            class="row contact justify-content-between align-items-center contact-form needs-validation"
          id="myForm1"  style="padding: 0px 6%;" enctype="multipart/form-data" novalidate>
            @csrf()
            @method('POST')
            <div class="col-md-12 col-lg-6 mb-3 ">
                <label for="exampleInputEmail1" class="my-2 d-none d-xl-block">First Name<span
                        class="text-danger">*</span></label>
                <input class="form-control" id="firstname" name="name" placeholder="Enter Firstname*"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a First Name
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mb-3 ps-lg-2">
                <label for="lastname" class="my-2 d-none d-xl-block">Last Name<span
                        class="text-danger">*</span></label>
                <input class="form-control" name="lastname" placeholder="Enter Lastname*" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a Last Name
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mb-3 ps-lg-2">
                <label for="email" class="my-2 d-none d-xl-block">Email<span
                        class="text-danger">*</span></label>
                <input class="form-control" name="email" placeholder="Enter Email*" pattern="[^@\s]+@[^@\s]+\.[^@\s]+"  required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a Email
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mb-3">
                <label for="lastname" class="my-2 d-none d-xl-block">Phone Number<span
                        class="text-danger">*</span></label>
                <input class="form-control country_code" type="hidden" name="country_code"
                    placeholder="Phone Number" value="" required>
                <input type="number" class="form-control mobile_code" id="mobile_code" name="phone"
                    placeholder="Enter Phone Number" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a Phone
                </div>
            </div>
            <div class="col-md-12 col-lg-12 mb-3 ps-lg-2">
                <label for="lastname" class="my-2 d-none d-xl-block">Services<span
                        class="text-danger">*</span></label>
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
                <label for="message" class="my-2 d-none d-xl-block">Message<span
                        class="text-danger">*</span></label>
                <textarea class="form-control" name="message" rows="3" placeholder="Type your message here*" required></textarea>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a Message
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-4 col-xl-3 mb-2">
                <div class="g-recaptcha" id="recaptcha1" data-sitekey="{{ config('services.recaptcha.sitekey') }}" data-callback='onSubmit'></div>
            </div>
            <div
                class="col-12 col-md-4 col-lg-3 mb-4 mb-md-2 d-flex ml-auto justify-content-center md-justify-content-end">
                <button class="btn custom-btn" name="contact">submit</button>
            </div>
        </form>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script>
    setInterval(() => {
      const whatsappElement = document.getElementById('whatsapp');
      whatsappElement.classList.add('shake');
      setTimeout(() => {
        whatsappElement.classList.remove('shake');
      }, 500); // Remove the class after 0.5 seconds
    }, 1000); // Add the class every 1 second
  </script>
  <script>
    setInterval(() => {
      const whatsappElement = document.getElementById('whatsapps');
      whatsappElement.classList.add('shake');
      setTimeout(() => {
        whatsappElement.classList.remove('shake');
      }, 500); // Remove the class after 0.5 seconds
    }, 1000); // Add the class every 1 second

  </script>
@endpush