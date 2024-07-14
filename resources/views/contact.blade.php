@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', 'Indiamea Contact US')
@section('meta_description', "Indiamea Contact US")
@section('meta_keywords', "Contact Us")
@section('canonical', "")
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
			"name": "Contact us",
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
        <h1 class="nev_hed pt-5 d-flex justify-content-center">Contact us</h1>
        <h2 class="nev_subhed pt-2 pb-5 d-flex justify-content-center">
            <pre><a href="/" class="fw-bold">Home</a> > </pre> Contact us
    </div>
</section>
    @if (session('success'))
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<section class="px-50 contact-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2 style="padding-top: 30px;" class="text-center text-xl-start mb-3 mb-xl-0">Get in Touch</h2>
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
            <div class="col-sm-4">
                <div class="contact_box_opiop h-100 mt-3 mt-sm-0">
                    <h6>Contact Info</h6>
                    <ul class="contact-list-opio mb-0 d-none d-xl-block">
                        <li>
                            <div class="contact-opiop">
                                <img src="{{ asset('assets/img/fi_2099199.png') }}" class="img-fluid mt-1">
                                <p class="ms-2"><a href="mailto:info@indiamea.in" style="color: #fff;">info@indiamea.in</a></p>
                            </div>
                            </li>
                            <li>
                                <div class="contact-opiop">
                                    <img src="{{ asset('assets/img/fi_483947.png') }}">
                                    <p class="ms-2"><a href="tel:+91 6353349389" style="color: #fff;">+91 63533 49389</a></p>
                                </div>
                                </li>
                                <li>
                                    <div class="contact-opiop">
                                        <img src="{{ asset('assets/img/fi_483947.png') }}">
                                        <p class="ms-2"><a href="tel:+91 9106614849" style="color: #fff;">+919106614849</a></p>
                                    </div>
                                    </li>
                                    <li class="mb-0">
                                        <div class="contact-opiop">
                                            <img src="{{ asset('assets/img/fi_483947.png') }}">
                                            <p class="ms-2"><a href="tel:+91 6353349389" style="color: #fff;">+91 63533 49389</a></p>

                                        </div>
                                        </li>
                          </ul>
                          <ul class="contact-list-opio mb-0 d-xl-none d-block">
                            <li>
                                <div class="contact-opiop">
                                    <img src="{{ asset('assets/img/location-icon.png') }}" class="img-fluid mt-1">
                                    <p class="ms-2" style="color: #ffffff;">Nizamuddin metro station, Sarai kale khan, New Delhi 110013</p>
                                </div>
                                </li>
                                <li>
                                    <div class="contact-opiop">
                                        <img src="{{ asset('assets/img/fi_2099199.png') }}" class="img-fluid mt-1">
                                        <p class="ms-2"><a href="mailto:info@indiamea.in" style="color: #fff;">info@indiamea.in</a></p>
                                    </div>
                                    </li>
                                    <li class="mb-0">
                                        <div class="contact-opiop">
                                            <img src="{{ asset('assets/img/fi_483947.png') }}">
                                            <p class="ms-2"><a href="tel:+91 6353349389" style="color: #fff;">+91 63533 49389</a></p>
                                        </div>
                                    </li>
                              </ul>

                          <div class="contact-social-media-link my-2 d-flex justify-content-start justify-content-xl-center align-items-end">
                            <a href="https://www.facebook.com/pccattestation" class="ms-0">
                                <img src="{{ asset('assets/img/light-facebook-icon.png') }}"
                                    class="img-fluid">
                            </a>
                            <a href="https://twitter.com/Apostilleservi4" target="_blank">
                                    <img src="{{ asset('assets/img/light-twitter-icon.png') }}"
                                                class="img-fluid">
                            </a>
                            <a href="https://www.instagram.com/pcc_attestation_service/" target="_blank">
                                <img src="{{ asset('assets/img/light-instgram-icon.png') }}"
                                    class="img-fluid">
                            </a>
                            <a href="https://www.linkedin.com/company/pcc-apostille-attestation-translation-services-india-pvt-ltd" target="_blank">
                                <img src="{{ asset('assets/img/light-linkedin-icon.png') }}"
                                    class="img-fluid">
                            </a>
                            <a
                                href="https://www.youtube.com/channel/UC8-lZQz_ht_FplXqKPZ4oFg/featured" target="_blank">
                                <img src="{{ asset('assets/img/light-youtube-icon.png') }}"
                                    class="img-fluid">
                            </a>
                        </div>
                </div>
              
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="responsive-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
            </div>
        </div>
    </div>
</section>
<style>
    .responsive-map{
overflow: hidden;
padding-bottom:40%;
position:relative;
height:550px;
}
.responsive-map iframe{
left:0;
top:0;
/* height:100%; */
border-radius: 20px;
width:100%;
position:absolute;
}
</style>
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
<script>
    $(document).ready(function(){
        $('#checkbox').change(function(){
            if(this.checked){
                $('#myButton').prop('disabled', false);
            }else{
                $('#myButton').prop('disabled', true);
            }
        });
    });
</script>
  {{-- bootstrap validation --}}
  <script>
    function openModal(event) {
            $('#exampleModal').modal('show');
            $("#services_model").val(event);
                    }
                //google captcha
                $('form').submit(function(event) {
            if ( $('#g-recaptcha-response').val() === '' ) {
                event.preventDefault();
                alert('Please check the recaptcha');
            }
        });
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