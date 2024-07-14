@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', 'Apostille services India- Attetstation - Certified Tranlations | Apostille Services')
@section('meta_description', "We at PCC provide finest services for apostille in India with exceptional support for apostille requirements your documents")
@section('meta_keywords', "Apostille services India")
@section('canonical', "https://www.indiamea.in/certificate-apostille-services-india")
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
			"name": "Apostille services",
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
                <h1 class="nev_hed pt-5 d-flex justify-content-center">APOSTILLE <span class="ms-2">SERVICES</span> </h1>
                <span class="nev_subhed pt-2 pb-5 d-flex justify-content-center"> <pre class="mb-0"><a href="{{ route('home')}}" class="fw-bold">Home</a> >   </pre> Apostille services</span>
            </div>
        </section>
    <!-- heder end -->
<div class="container services ">
    <div class="my-3">
        <h6 class="button-hed mt-5">APOSTILLE SERVICES IN POPULAR CITIES</h6>
    </div>
    <div class="buttons">
        <button type="button" class="btn mb-2">Chennai</button>
        <button type="button" class="btn mb-2">Bangalore</button>
        <button type="button" class="btn mb-2">Pune</button>
        <button type="button" class="btn mb-2">Kolkata</button>
        <button type="button" class="btn mb-2">Ahmedabad</button>
        <button type="button" class="btn mb-2">Hyderabad</button>
        <button type="button" class="btn mb-2">Mumbai</button>
        <button type="button" class="btn mb-2">Delhi</button>
        <button type="button" class="btn mb-2">Kerala</button>
        <button type="button" class="btn mb-2">Surat</button>
    </div>
    <div>
        <h6 class="mt-3 mt-md-5">Certified Translation, Document Apostille and Certificate Attestation in India</h6>
        <p>We are serve the from last five years in this industry and continuously giving best service to our
            valuable customer. Being part in the India for more than five years, we at PCC has mastered in providing
            utilities of various sorts. Our friendly and supportive staff has been ready to serve for Certified
            Translation, Document Apostille and Certificate Attestation We provide Certificate attestation, document
            apostille, document translation, and other language translation services in India. Legalization
            processes like apostille and attestation are necessitated for certain legal procedures which require the
            evidence of the authenticity of the documents. Generally, these processes are performed for three
            distinct sorts of documents – personal, educational and commercial. PCC has facilities present for all
            of them.</p>
        <p class="mt-3">We have translation services for the documents of wide range of areas. We have translators who are
            efficient in carrying out the translation of documents and other sorts of material as well.</p>

        <h6 class="mt-3 mt-md-5">Apostille Service in India</h6>
        <p>Studying, working or expanding your business abroad has become pretty common nowadays. Some nations have
            initiated a pact so as to aid this course of action by eliminating the barriers up to some extent. We at
            PCC provide best services for apostille in India with exceptional intervention for apostille
            requirements of our clients, primarily acquiring an apostille sticker from MEA. There are finite
            services that will offer you with a genuine and true certificate apostille. It is enclosed by the
            certification process that will make sure one’s genuinely and their need of travelling to destination
            country, which is also an essential prospect of procuring a visa and growth of business in foreign
            country.</p>
        <ul class="mt-3">
            <li>Birth Certificate Apostille</li>
            <li>Marriage Certificate Apostille</li>
            <li>Degree Certificate Apostille</li>
            <li>Oman Apostille</li>
            <li>Germany Apostille</li>
            <li>Turkey Apostille</li>
            <li>UK Apostille</li>
            <li>France Apostille</li>
            <li>Netherlands Apostille</li>
            <li>Australia Apostille</li>
            <li>Singapore Apostille</li>
        </ul>

        <h6 class="mt-3 mt-md-5">Attestation Service in India</h6>
        <p>Attestation services attend to the certification obtained from MEA and other government officials in the
            form of an attestation stamp. It is carried out by the concerned officials available at the embassy,
            MEA, state and notary as well. The authorities then offer a stamp as proof of attestation of documents.
            PCC is situated amongst the best of services in India, Maharashtra. We have been rendering attestation
            in India for more than 6 years and are well-known to have maintained the standard of our services over
            the years and keeping our clients happy.</p>

        <h6 class="mt-3 mt-md-5">Attestation Services List</h6>
        <p>Studying, working or expanding your business abroad has become pretty common nowadays. Some nations have
            initiated a pact so as to aid this course of action by eliminating the barriers up to some extent. We at
            PCC provide best services for apostille in India with exceptional intervention for apostille
            requirements of our clients, primarily acquiring an apostille sticker from MEA. There are finite
            services that will offer you with a genuine and true certificate apostille. It is enclosed by the
            certification process that will make sure one’s genuinely and their need of travelling to destination
            country, which is also an essential prospect of procuring a visa and growth of business in foreign
            country.</p>
        <p class="mt-3">Our agency has utilities obtainable for all stages of legalization. The utilities for authentication that
            we render are mention below:</p>
        <ul class="mt-3">
            <li>Embassy Attestation</li>
            <li>MEA Attestation</li>
            <li>HRD Attestation</li>
            <li>SDM Attestation</li>
            <li>GAD Attestation</li>
            <li>Notary Attestation</li>
            <li>Home Department/Mantralaya Attestation</li>
            <li>Chambers of Commerce Attestation</li>
        </ul>

        <h6 class="mt-3 mt-md-5">Quick links for attestation</h6>
        <ul class="mt-3">
            <li>Marriage Certificate Attestation</li>
            <li>Birth Certificate Attestation</li>
            <li>Degree Certificate Attestation</li>
            <li>UAE Attestation</li>
            <li>Qatar Attestation</li>
            <li>Kuwait Attestation</li>
            <li>Saudi Attestation</li>
            <li>China attestation</li>
            <li>PCC attestation</li>
            <li>Power of Attorney Attestation</li>
            <li>MOA Attestation</li>
        </ul>

        <h6 class="mt-3 mt-md-5">Translation Service in India</h6>
        <p>Translation is one of the primary requirements in any field today. Professional translation is an
            essential part of the translation of the content so as to ensure accuracy in the task. At times, for
            conversion of legal documents, certified translators are necessitated. Translation services can
            exclusively carry out the procedure of conversion for a wide range of language amalgams and it needs for
            the translator to be expert and well-versed in both the languages. We at PCC have government approved
            translators in India to help provide genuine translation for all sorts of documents.</p>

        <h6 class="mt-3 mt-md-5">Document Translation</h6>
        <p>Translation of documents is normally carried out for three various sorts of documents, namely – personal,
            educational and commercial documents. sometimes, certified translators hired by the Notary mandatorily
            carry out the translation of documents. A list of documents that we render facilities for are given
            below:</p>
        <ul class="mt-3">
            <li>Birth Certificate Translation</li>
            <li>Death Certificate Translation</li>
            <li>Driving License Translation</li>
            <li>Bank Statement Translation </li>
            <li>Degree Certificate Translation</li>
            <li>Power Of Attorney Translation</li>
            <li>Trademark Translation</li>
            <li>Quotation Translation</li>
        </ul>

        <h6 class="mt-3 mt-md-5">Language Translation</h6>
        <p>Language translation is just the way for converting the material from one language to other with correct
            grammar and clarity. It is absolutely crucial to pass on the proper message and aim of the translation
            to the readers and customers. Language conversion mandates technique and efficiency and an intense
            comprehension of the area in which the translation is being performed.</p>
        <ul class="mt-3">
            <li>English Translation Service</li>
            <li>Chinese Translation Service</li>
            <li>Spanish Translation Service</li>
            <li>French Translation Service</li>
            <li>Japanese Translation Service</li>
            <li>German Translation Service</li>
            <li>Italian Translation Service</li>
            <li>Russian Translation Service</li>
        </ul>

        <h6 class="mt-3 mt-md-5">Types of translation services</h6>
        <p>There are various translation kinds depending on the area. These areas necessitate specialized
            translation level efficiency for a translator. We render translation for the given types:</p>
        <ul class="mt-3">
            <li>Legal</li>
            <li>Technical</li>
            <li>Medical</li>
            <li>Academic</li>
            <li>Financial</li>
            <li>Business</li>
            <li>Literary</li>
        </ul>

        <h6 class="mt-3 mt-md-5">About PCC</h6>
        <p>Were you searching for attestation services in India? Well, you have come upon the right site. PCC
            renders attestation and apostille services for personal, educational and commercial documents. Be it
            birth certificate, degree certificate, PCC, marriage certificate we serve facilities them all. Also,
            apostille services for birth certificate, marriage certificate are given by us as well. We here at PCC
            will render you with trustworthy and fast certificate and apostille attestation that you would return us
            again another time. PCC is chosen by many when it is about attestation and apostille services in India.
            It sure is one of the fast apostille services. PCC is a certificate attestation agency that gives
            courier options too to help your convenience.</p>

    </div>

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
                            <h6>Fast & Reliable Service</h6>
                            <p>The facilities are trustworthy & lawful, we render fast certification for your
                                documents. We are commissioned and are in confidence of our clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-4 ">
                    <div class="card text-center doc_card ">
                        <img src="{{ asset('assets/img/customer-service 5.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
                        <div class="card-body">
                            <h6>Free pick up & drop service</h6>
                            <p>Our utilities will gather documents from your location and provide them back to you
                                after the process. You shall be rendered with the quickest and swift facilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-4 ">
                    <div class="card text-center doc_card ">
                        <img src="{{ asset('assets/img/customer-service 3.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
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
                <div class="col-md-4 pb-4 ">
                    <div class="card text-center doc_card  ">

                        <img src="{{ asset('assets/img/customer-service 1.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
                        <div class="card-body">
                            <h6>24*7 Customer service</h6>
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
                            <h6>Quality Service</h6>
                            <p>We, at our company, have services of the supreme quality with authenticity. Accuracy
                                and expertise in job are assured.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-4 ">
                    <div class="card text-center doc_card ">
                        <img src="{{ asset('assets/img/customer-service 2.png') }}" class="card-img-top mx-auto mt-5 mb-3" alt="...">
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
    <h6 class="mt-5">Simple step by step process for your application</h6>
    <p>PCC services help make various procedures necessitated frequently much more convenient affirming client
        satisfaction. We ensure that we render distinct and genuine services by interposing you to 24*7
        available team and benevolent service. All you have to do is fill in the details of the facility that
        you need; upload and submit your original documents; make a transaction online and you are done. While
        you relax, we’ll deliver you the stamped certificates and translated documents as per your requirement.
    </p>
    <p class="mt-3">We have carried this prominence all along and we are anticipating to keeping up with it. We sure crave to
        become the best attestation & apostille services in India. Let us deliver you and you shall endeavor our
        notable service for document attestation in India.</p>
    <div class="text-center">
        <button type="button" class="btn process P-5 my-4">Start the apostille process</button>
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
