@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', "$city->meta_title")
@section('meta_description', "$city->meta_description")
@section('meta_keywords', "$city->meta_keyword")
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
			"name": "Apostille Services In {{  $city->name }}",
			"item": "{{$canonicalUrl}}"
		}
		]
	}
</script>
@endsection
@extends('layouts.app')
@section('content')
@php
use App\Models\Youtube;
$youtubes = Youtube::all();

@endphp        
<section class="home-banner-section">
            <div>
                <h1 class="nev_hed pt-5 d-flex justify-content-center">APOSTILLE SERVICES IN <span class="ms-2">{{ $city->name }}</span> </h1>
                <span class="nev_subhed pt-2 pb-5 d-flex justify-content-center"> <pre class="mb-0"><a href="/" class="fw-bold">Home</a>  >   </pre> Apostille services in {{ $city->name }} </span>
            </div>
        </section>
 <div class="container documentattestation Service_in_Bangalore ">
    <h6 class="button-hed my-3 mt-md-4">APOSTILLE SERVICES IN POPULAR CITIES</h6>
    <div class="buttons">
    @foreach ($apositlles as $att)
    <button type="button" class="btn mb-2 @if($city->name == $att->name) active @endif"><a href="{{ route('page',$att->slug)}}">{{$att->name}}</a></button>
    @endforeach
    </div>
    <style>
        .service_apositlle ul li{
            font-family: 'Montserrat', sans-serif;
    font-weight: normal;
    font-size: 16px;
    line-height: 24px;
        }
    </style>
   {{-- @if ($city->description != null) --}}
   {{-- @dd($city) --}}
   <div class="my-4">
    {!! $city->section1 !!}
 </div>
 <div class="row align-items-center mt-5">
     <div class="col-md-6 ">
        {!! $city->section2_text !!}
     </div>
     <div class="col-md-6 ">
         <img src="{{ asset($city->section2_image) }}" alt="{{$city->section2_image_alt}}" class="img-fluid">
     </div>
 </div>
 
 {!! $city->section3 !!}

 <div class="Certificate ">
     <div class="row align-items-center my-5 justify-content-center">
         <div class="col-md-12 d-flex justify-content-center">
             <img src="{{ asset($city->section4) }}" class="img-fluid" alt="{{$city->section4_image_alt}}">
         </div>
     </div>
 </div>
 <div>
     {!! $city->section5 !!}
 </div>
 <div class="section_6">
     <img src="{{ asset($city->section6) }}" class="img-fluid" alt="{{$city->section6_image_alt}}">
 </div>
{{----------------------------------------------------------------------------------------}}
    <div class=" Process_type  mt-5">
        <h5 class="hed text-center">Process of apostille for educational personal and commercial</h5>
        <div class="row  mt-5">
            <div class="col-lg-6 ">
                <img src="{{ asset($city->process_apostille_1_file) }}" class="img-fluid" alt="{{$city->process_apostille_1_alt}}" width="100%">
            </div>
            <div class="col-lg-6 d-flex flex-column">
                {!! $city->process_apostille_1_text !!}
                <div class="alert">
                    <div class="row ">
                        <div class="col-md-1 d-flex justify-content-center ">
                            <img src="{{ asset('assets/img/Alert.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-11 p-0 ">
                            <ol>
                                <li>Notary Stamp</li>
                                <li>SDM / Home Department / HRD</li>
                                <li>Apostille from Ministry of External Affairs (MEA India)</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <span>Note: SDM is a makeshift key for the Apostille process.</span>
            </div>
        </div>
        <div class="row  mt-5">
            <div class="col-lg-6 d-flex flex-column">
                {!! $city->process_apostille_2_text !!}
                <div class="alert">
                    <div class="row ">
                        <div class="col-md-1 d-flex justify-content-center ">
                            {{-- @dd($city->process_apostille_2_alt) --}}
                            <img src="{{asset('assets/img/Alert.png') }}" class="img-fluid" alt="" >
                        </div>
                        <div class="col-md-11 p-0 ">
                            <ol>
                                <li>Notary Stamp</li>
                                <li>SDM/Home Department Stamp</li>
                                <li>Apostille from Ministry of External Affairs</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <span>Note: SDM is a makeshift key for the Apostille process.</span>
            </div>
            <div class="col-lg-6 ">
                <img src="{{ asset($city->process_apostille_2_file) }}" class="img-fluid" alt="{{$city->process_apostille_2_alt}}" width="100%">
            </div>
        </div>
        <div class="row  mt-5">
            <div class="col-lg-6 order-1 order-lg-0 ">
                <img src="{{ asset($city->process_apostille_3_file) }}" alt="{{ $city->process_apostille_3_alt }}" class="img-fluid" width="100%">
            </div>
            <div class="col-lg-6 d-flex flex-column order-0 order-lg-1">
                {!! $city->process_apostille_3_text !!}
                <div class="alert">
                    <div class="row ">
                        <div class="col-1 d-block justify-content-center px-1 px-sm-2 ">
                            <img src="{{asset('assets/img/Alert.png') }}"  class="img-fluid" alt="">
                        </div>
                        <div class="col-11 p-0 ">
                            <ol>
                                <li>Chamber of Commerce Attestation</li>
                                <li>Apostille from Ministry of External Affairs</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <span>Note: A chamber of commerce is a class of business arrangement and the first step in verifying
                    your business documents before the Apostille stamp of MEA.</span>
            </div>
        </div>
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
    </div>
</section>
@php
$cities_faq = json_decode($city->faq,true);
@endphp
<section class="faqs-question-section mb-5">
    <div class="container">
     
        <div class="accordion faqs-info-wrapper accordion-flush" id="accordionPanelsStayOpenExample">
            @if($cities_faq != null)
            @foreach($cities_faq as $key => $faq)
            {{-- @dd($cities_faq) --}}
            <div class="accordion-item">
                <h6 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button px-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne_{{$key}}" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        {{ $faq['title'] }}
                    </button>
                </h6>
                <div id="panelsStayOpen-collapseOne_{{$key}}" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body px-0">
                    {{ $faq['message']}}
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
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
                    <input class="form-control" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+"  placeholder="Enter Email*" required>
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
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  if (document.querySelectorAll('#map').length > 0)
  {
    if (document.querySelector('html').lang)
      lang = document.querySelector('html').lang;
    else
      lang = 'en';

    var js_file = document.createElement('script');
    js_file.type = 'text/javascript';
    js_file.src = 'https://maps.googleapis.com/maps/api/js?callback=initMap&signed_in=true&language=' + lang;
    document.getElementsByTagName('head')[0].appendChild(js_file);
  }
});

var map;

function initMap()
{
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });

  fetch('https://raw.githubusercontent.com/jayshields/google-maps-api-template/master/markers.json')
    .then(function(response){return response.json()})
    .then(plotMarkers);
}

var markers;
var bounds;

function plotMarkers(m)
{
  markers = [];
  bounds = new google.maps.LatLngBounds();

  m.forEach(function (marker) {
    var position = new google.maps.LatLng(marker.lat, marker.lng);

    markers.push(
      new google.maps.Marker({
        position: position,
        map: map,
        animation: google.maps.Animation.DROP
      })
    );

    bounds.extend(position);
  });

  map.fitBounds(bounds);
}
</script>
 {{-- bootstrap validation --}}
 <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'
    
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')
    
      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()
      </script>
@endpush