@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', "$city->meta_title")
@section('meta_description', "$city->meta_description")
@section('meta_keywords', "$city->meta_title")
@section('canonical', "$city->canonical")
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
			"name": "{{$city->name}} Embassy Attestation",
			"item": "{{$canonicalUrl}}"
		}
		]
	}
</script>
@endsection
@extends('layouts.app')
@section('content')
@php
use App\Models\Attension;
use App\Models\Youtube;
    $attension = Attension::whereIn('name',['UAE','Qatar','Kuwait','Saudi Arabia','China','Malaysia','Thailand','Taiwan'])->orderByRaw("
        CASE name 
            WHEN 'UAE' THEN 1 
            WHEN 'Qatar' THEN 2 
            WHEN 'Kuwait' THEN 3
            WHEN 'China' THEN 5 
            WHEN 'Malaysia' THEN 6 
            WHEN 'Thailand' THEN 7
            WHEN 'Taiwan' THEN 8
            WHEN 'Saudi Arabia' THEN 9 
        END
    ")->take(8)->get();
    // dd($attension);
    $youtubes = Youtube::all();
    $city_description = json_decode($city->description, true);
@endphp
<section class="home-banner-section">
    <div >
        <h1 class="nev_hed pt-5 d-flex justify-content-center">{{$city->name}} EMBASSY Attestation</h1>
        <span class="nev_subhed pt-2 pb-5 d-flex justify-content-center">
            <pre class="mb-0"><a href="/" class="fw-bold">Home</a>   >   </pre> {{$city->name}} Embassy Attestation  </span>
    </div>
</section>
<!-- documenttranslation -->
<div class="container documentattestation px-35">
    <div class="d-flex justify-content-between align-items-center">
        <img src="{{ asset($city->flag) }}" class="img-fluid" alt="{{ $city->name }}" width="250px" height="150px">
    </div>
    <div class="buttons mt-5">
        @foreach ($attension as $att)
        <button type="button" class="btn mb-2 @if($city->name == $att->name) active @endif"><a href="{{ route('page',$att->slug)}}">{{$att->name}}</a></button>
        @endforeach
    </div>
    <div class="my-4">
    </div>
    <section class="section_1">
        <div class="my-4">
       {!! $city->section_1 !!}
        </div>
    </section>
   
    <section>
        <div class="row align-items-center ">
            <div class="col-md-6 order-0 order-lg-0">
                <img src="{{ asset($city->section_2_image) }}" alt="{{$city->section_2_alt}}" class="img-fluid" width="100%">
            </div>
            <div class="col-md-6 abouttext d-flex flex-column p-2 p-lg-5 order-1 order-lg-1">
               {!! $city->section_2_text !!}
            </div>
        </div>
    </section>
    <section>
        <div class="row align-items-center ">
            <div class="col-md-6 order-1 order-lg-0">
               {!! $city->section_3_text !!}
            </div>
            <div class="col-md-6 abouttext d-flex flex-column p-2 p-lg-5 order-0 order-lg-1">
                <img src="{{ asset($city->section_3_image) }}" alt="{{ $city->section_3_alt }}" class="img-fluid" width="100%">
              
            </div>
        </div>
    </section>
        <section>
            <div class="row align-items-center ">
                <div class="col-md-6 order-1 order-lg-0">
                    <img src="{{ $city->section_4_image }}" alt="{{ $city->section_4_alt }}" class="img-fluid" width="100%">
                   
                </div>
                <div class="col-md-6 abouttext d-flex flex-column p-2 p-lg-5 order-0 order-lg-1">
                   {!! $city->section_4_text !!}
                </div>
            </div>
        </section>
     
        <section>
            <div class="row align-items-center ">
                <div class="col-md-6 order-0 order-lg-0">
                
                    {!! $city->section_5_text !!}
                  
                </div>
                <div class="col-md-6 abouttext d-flex flex-column p-2 p-lg-5 order-1  order-lg-1">
                    <img src="{{ asset($city->section_5_image) }}" alt="{{ $city->section_5_alt }}" class="img-fluid" width="100%">
                 
                </div>
            </div>
        </section>
    
        
    <div>
        <div class="row align-items-center mt-2 mt-lg-5">
            <div class="col-md-6 p-2 order-1 order-lg-0">
                <img src="{{ asset($city->section_6_image) }}" alt="{{ $city->section_6_alt }}" class="img-fluid" width="">

            </div>
            <div class="col-md-6 abouttext d-flex flex-column p-2 p-lg-5 order-0 order-lg-1">
               
                {!! $city->section_6_text !!}
              
            </div>
        </div>
    </div>
 
    <div class="mt-2 mt-lg-5">
        <div class="row align-items-center box mt-3 ">
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/img/Group 18.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-10 abouttext d-flex flex-column py-2 py-lg-5 ">
                <h6>Notary Attestation</h6>
                <p>Next, verify with the local authorities (Power of Attorneys and Birth Certificates). The
                    documents are then sent to HRD (the Human Resource Department) for further processing.</p>
            </div>
        </div>
        <div class="row align-items-center box mt-3 ">
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/img/Group 22.png') }}" alt=""class="img-fluid" >
            </div>
            <div class="col-md-10 abouttext d-flex flex-column py-2 py-lg-5">
                <h6>HRD Attestation</h6>
                <p>After verifying the documents (personal, educational, or commercial), HRD will forward them to
                    SDM.</p>
            </div>
        </div>
        <div class="row align-items-center box mt-3">
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/img/Group 20.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-10 abouttext d-flex flex-column py-2 py-lg-5">
                <h6>SDM Attestation</h6>
                <p>SDM is also known as Sub Divisional Magistrates. SDMs in Delhi are the only people who can
                    provide official signatures for legalizing documents. The stamping and attestation of documents
                    by the MEA is made easier with this.</p>
            </div>
        </div>
        <div class="row align-items-center box mt-3 ">
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/img/Group 21.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-10 abouttext d-flex flex-column py-2 py-lg-5">
                <h6>MEA Attestation</h6>
                <p>As the Ministry of External Affairs does not accept direct applications from applicants, the
                    Ministry of External Affairs will sign all documents. The Ministry of External Affairs instead
                    outsources Document Attestation to companies or organizations to verify the authenticity of an
                    individual.</p>
            </div>
        </div>
        
        <div class="row align-items-center box mt-3 ">
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/img/Group 19.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-10 abouttext d-flex flex-column py-5">
                <h6>{{$city->name}} Embassy Attestation</h6>
                <p>The {{$city->name}} embassy will verify the attestation done by MEA and then certify the documents for a
                    {{$city->name}} visa.</p>
            </div>
        </div>
    </div>
    <div>
        <div class="row align-items-center mt-5">
            <div class="col-md-6 ">
                <img src="{{ asset($city->section_7_image) }}" alt="{{ $city->section_7_alt }}" class="img-fluid" width="100%">
            </div>
            <div class="col-md-6 abouttext d-flex flex-column p-5">
                {!! $city->section_7_text !!} 
            </div>
        </div>
    </div>
    <div class="types">
        <div class="row align-items-center mt-5">
            <div class="col-md-6 p-5 left">
                {!! $city->section_9_text !!}
            </div>
            <div class="col-md-6 right px-0 py-2  ">
                <div class="right-in p-4">
                  {!! $city->section_10_text !!}
                </div>
            </div>
        </div>
    </div>
    <div class="service text-center mt-5">
        <div class="service-text px-4 pt-5">
            <h6>Why choose PCC Attestation Services for {{$city->name}} Embassy Attestation?</h6>
            <p>PCC Attestation Services that has been in existence for many years and is regarded as one of the best
                services available in India. The support and experience that we have Kuwait Embassy Attestation
                Services
                acquired over the years has helped us gain our cetitude and reputation. You will discover how to
                make
                the most of your service:</p>
        </div>
        <div class="service-card p-2 p-lg-4">
            <div class="row align-items-center">
                <div class="col-md-4 pb-2 pb-lg-4">
                    <div class="card text-center doc_card  ">
                        <img src="{{ asset('assets/img/customer-service 6.png') }}" class="card-img-top mx-auto mt-5 mb-3 img-fluid" alt="Fast & Reliable Service">
                        <div class="card-body">
                            <h6>Fast & Reliable Service</h6>
                            <p>The facilities are trustworthy & lawful, we render fast certification for your
                                documents. We are commissioned and are in confidence of our clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-2 pb-lg-4">
                    <div class="card text-center doc_card ">
                        <img src="{{ asset('assets/img/customer-service 5.png') }}" class="card-img-top mx-auto mt-5 mb-3 img-fluid" alt="Free pick up & drop service">
                        <div class="card-body">
                            <h6>Free pick up & drop service</h6>
                            <p>Our utilities will gather documents from your location and provide them back to you
                                after the process. You shall be rendered with the quickest and swift facilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-2 pb-lg-4">
                    <div class="card text-center doc_card ">
                        <img src="{{ asset('assets/img/customer-service 3.png') }}" class="card-img-top mx-auto mt-5 mb-3 img-fluid" alt="Service availability across all India">
                        <div class="card-body">
                            <h6>Service availability across all India</h6>
                            <p>PCC is determined for more than half a decade and now has divisions spread all across
                                the country rendering its clients the best of services. We even render facilities
                                for foreign documents of all types.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4 pb-2 pb-lg-4">
                    <div class="card text-center doc_card">
                        <img src="{{ asset('assets/img/customer-service 1.png') }}" class="card-img-top mx-auto mt-5 mb-3 img-fluid" alt="24*7 Customer service">
                        <div class="card-body">
                            <h6>24*7 Customer service</h6>
                            <p>Contact us anytime in the day or night, and we shall adhere to your inquiries and aid
                                them. The team is suceptible and persistent provide the best assistance for the
                                required answers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-2 pb-lg-4">
                    <div class="card text-center doc_card">
                        <img src="{{ asset('assets/img/customer-service 4.png') }}" class="card-img-top mx-auto mt-5 mb-3 img-fluid" alt="Quality Service">
                        <div class="card-body">
                            <h6>Quality Service</h6>
                            <p>We, at our company, have services of the supreme quality with authenticity. Accuracy
                                and expertise in job are assured.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-2 pb-lg-4">
                    <div class="card text-center doc_card ">
                        <img src="{{ asset('assets/img/customer-service 2.png') }}" class="card-img-top mx-auto mt-5 mb-3 img-fluid" alt="Customer Convenience">
                        <div class="card-body">
                            <h6>Customer Convenience</h6>
                            <p>Clients are of importance to us and we are technology savvy to make our utilities of
                                ease to our customers. We maintain transparency of the progress with our clients and
                                there are no hidden costs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner_2 d-flex flex-column justify-content-center align-items-center my-5">
        <h6 class="m-4">Get Embassy Attestation Process Directly</h6>
        <button type="button" class="btn px-5 py-4 "
        style="margin-left: 0; margin-top: 0; margin-left: 25px;"  onclick="openModal('attestation')">Embassy Attestation Process</button>
        {{-- <button type="button" class="btn px-5 py-4 ">Embassy Attestation Process</button> --}}
    </div>
    <!-- customer Review section -->
<section class="customer-Review-section">
    <div class="container ">
        <h5 class="text-center section-title my-5">What’s our Customer says</h5>
        <!-- <div class="owl-carousel owl-theme"> -->
        <div class="row ">
            <div class="col-lg-3 customer-Review owl-carousel owl-theme">
            @foreach ($youtubes as $youtube)
                <div class="item">
                    <div class="card mx-auto text-center">
                        <div class="Review-img">
                            <iframe width="300" height="446" style="border-radius: 20px;"
                                src="https://youtube.com/embed/{{$youtube->url}}" frameborder="0"
                                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <h6 class="services-title mt-3">{{ $youtube->title }}</h6>
                        <p class="services-desc">{{ $youtube->description}}</p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
    <section class="Kannada-wrapper-section  mb-5">
        <div class="Kannada-wrapper Contact-box text-center  p-3 ">
            <h6 class=" section-title my-4">Address Embassy Of {{$city->name}}</h6>
            <img src="{{ asset('assets/img/Vector-1.png') }}" alt="address" class="img-fluid">
            <p class="mt-3 mb-5">{{ $city->address }}</p>
            <img src="{{ asset('assets/img/Vector.png') }}" alt="phone" class="img-fluid">
            <p class="mt-3 mb-5">{{ $city->embasy_phone }}</p>
        </div>
    </section>
</div>
@endsection