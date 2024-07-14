@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
    use App\Models\Youtube;
    $youtubes = Youtube::all();
    $words = explode(" ", $page->name);
    $lastIndex = count($words) - 1;
    $lastWord = $words[$lastIndex];
    $allButLastWords = array_slice($words, 0, -1);
    $allButLastWordsString = implode(" ", $allButLastWords);
@endphp
@section('title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
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
			"item": "{{ $domain}}"
		},
		{
			"@type": "ListItem",
			"position": 2,
			"name": "{{ $page->name }}",
			"item": "{{$canonicalUrl}}"
		}
		]
	}
</script>
@endsection
@extends('layouts.app')
@section('content')
@php 

@endphp
        <section class="home-banner-section">
            <div>
                <h1 class="nev_hed pt-5 d-flex justify-content-center"> {{ $allButLastWordsString }} <span class="ms-2">{{ $lastWord}} </span> </h1>
                <h6 class="nev_subhed pt-2 pb-5 d-flex justify-content-center"> <pre class="mb-0"><a href="/" class="fw-bold">Home</a>   >   </pre> {{ $page->name }}</h6>
            </div>
        </section>
        <section class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        {!! $page->body !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <div class="service text-center mt-5">
                    <div class="service-text px-4 pt-5 ">
                        <h6>Why choose PCC?</h6>
                        <p>PCC Attestation Services that has been in existence for many years and is regarded as one of the best
                            services available in India. The support and experience that we have Kuwait Embassy Attestation
                            Services
                            acquired over the years has helped us gain our cetitude and reputation. You will discover how to
                            make
                            the most of your service:</p>
                    </div>
                    <div class="service-card  p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 pb-4 ">
                                <div class="card text-center doc_card  ">
                                    <img src="{{ asset('assets/img/customer-service 6.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
                                    <div class="card-body">
                                        <span>Fast &amp; Reliable Service</span>
                                        <p>The facilities are trustworthy &amp; lawful, we render fast certification for your
                                            documents. We are commissioned and are in confidence of our clients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pb-4 ">
                                <div class="card text-center doc_card ">
                                    <img src="{{ asset('assets/img/customer-service 5.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
                                    <div class="card-body">
                                        <span>Free pick up &amp; drop service</span>
                                        <p>Our utilities will gather documents from your location and provide them back to you
                                            after the process. You shall be rendered with the quickest and swift facilities.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pb-4 ">
                                <div class="card text-center doc_card ">
                                    <img src="{{ asset('assets/img/customer-service 3.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
                                    <div class="card-body">
                                        <span>Service availability across all India</span>
                                        <p>PCC is determined for more than half a decade and now has divisions spread all across
                                            the country rendering its clients the best of services. We even render facilities
                                            for foreign documents of all types.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4 pb-4 ">
                                <div class="card text-center doc_card  ">
                                    <img src="{{ asset('assets/img/customer-service 1.png')}}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
                                    <div class="card-body">
                                        <span>24*7 Customer service</span>
                                        <p>Contact us anytime in the day or night, and we shall adhere to your inquiries and aid
                                            them. The team is suceptible and persistent provide the best assistance for the
                                            required answers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pb-4 ">
                                <div class="card text-center doc_card ">
                                    <img src="{{ asset('assets/img/customer-service 4.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
                                    <div class="card-body">
                                        <span>Quality Service</span>
                                        <p>We, at our company, have services of the supreme quality with authenticity. Accuracy
                                            and expertise in job are assured.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pb-4 ">
                                <div class="card text-center doc_card ">
                                    <img src="{{ asset('assets/img/customer-service 2.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
                                    <div class="card-body">
                                        <span>Customer Convenience</span>
                                        <p>Clients are of importance to us and we are technology savvy to make our utilities of
                                            ease to our customers. We maintain transparency of the progress with our clients and
                                            there are no hidden costs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <h5 class="mt-5">Simple step by step process for your application</h5>
                    <p>PCC services help make various procedures necessitated frequently much more convenient affirming client
                        satisfaction. We ensure that we render distinct and genuine services by interposing you to 24*7
                        available team and benevolent service. All you have to do is fill in the details of the facility that
                        you need; upload and submit your original documents; make a transaction online and you are done. While
                        you relax, we’ll deliver you the stamped certificates and translated documents as per your requirement.
                    </p>
                    <p class="mt-3">We have carried this prominence all along and we are anticipating to keeping up with it. We sure crave to
                        become the best attestation & apostille services in India. Let us deliver you and you shall endeavor our
                        notable service for document attestation in India.</p>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner_2 d-flex flex-column justify-content-center align-items-center my-5">
                        <h6 class="m-4">Express Solution for Valuable Corporates Clients</h6>
                        <button type="button" class="btn px-5 py-4" onclick="openModal()">GET Quote Within <span>10 Minutes</span></button>
                        {{-- <button type="button" class="btn mb-2 mb-sm-0"  onclick="openModal()">Start Application of A Apostille</button> --}}

                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute;right: 0;top: 0;font-size:20px;"><span><i class="fa-solid fa-xmark"></i></span></button>
                <h6 class="text-center contact-section-title">Apply for Apostille</h6>
                    {{-- <form class="row justify-content-between align-items-center contact-form" style="padding: 0px 6%;"> --}}
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
        <section class="contact-section mb-5">
            <div class="container">
                <div class="contact-wrapper1">
                    <h6 class="text-center contact-section-title">Contact Us</h6>
                    <form action="{{ route('contact.inquiry')}}" method="POST" id="contact" class="row justify-content-between align-items-center contact-form needs-validation" style="padding: 0px 6%;" enctype="multipart/form-data" novalidate>
                        @csrf()
                        @method('POST')
                        <div class="col-md-12 col-lg-6 mb-3 ">
                            <label for="exampleInputEmail1" class="my-2 d-none d-xl-block">First Name<span class="text-danger">*</span></label>
                            <input class="form-control" id="firstname" name="name" placeholder="Enter full name*" required>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                              <div class="invalid-feedback">
                                Please choose a First Name
                              </div>
                        </div>
                        <div class="col-md-12 col-lg-6 mb-3 ps-lg-2">
                            <label for="lastname" class="my-2 d-none d-xl-block">Last Name<span class="text-danger">*</span></label>
                            <input class="form-control" name="lastname" placeholder="Enter email address*" required>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                              <div class="invalid-feedback">
                                Please choose a Last Name
                              </div>
                        </div>
                        <div class="col-md-12 col-lg-6 mb-3 ps-lg-2">
                            <label for="email" class="my-2 d-none d-xl-block">Email<span class="text-danger">*</span></label>
                            <input class="form-control" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Phone Number" required>
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
                            <input type="number" class="form-control mobile_code" id="mobile_code" name="phone" placeholder="Phone Number" required>
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
@endsection
@push('scripts')
    <script>
          function openModal(event) {
    $('#exampleModal').modal('show');
    $("#services_model").val(event);
            }
    </script>
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