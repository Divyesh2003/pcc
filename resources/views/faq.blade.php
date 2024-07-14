@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', 'Faq')
@section('meta_description', "Faq")
@section('meta_keywords', "Faq")
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
			"name": "Faq's",
			"item": "{{ $canonicalUrl }}"
		}
		]
	}
</script>
@endsection
@extends('layouts.app')
@section('content')
<section class="home-banner-section">
    <div>
        <h1 class="nev_hed pt-5 d-flex justify-content-center">Frequently Asked Questions</h1>
        <h6 class="nev_subhed pt-2 pb-5 d-flex justify-content-center"> <pre class="mb-0"><a href="/" class="fw-bold">Home</a> > </pre> Frequently Asked Questions</h6>
    </div>
</section>
        <section class="faqs-question-section mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 my-4">
                        <form class="form">
                            <div class="form-group">
                                <input type="text" class="form-control float-end" id="searchInput" name="email" placeholder="Search FAQ..." style="width:400px !important;">
                          </form>
                    </div>
                </div>
                <div class="accordion faqs-info-wrapper accordion-flush" id="panel_main">
                    @if($faqs != null)
                    @foreach($faqs as $key => $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button px-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne_{{$key}}" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                {{ $faq['title'] }}
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne_{{$key}}" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body px-0">
                            {{ $faq['description']}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <div class="d-flex justify-content-center">
                        {!! $faqs->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
                 <div class="accordion faqs-info-wrapper accordion-flush" id="panel_search" style="display: none;">
                    
                    <div class="d-flex justify-content-center">
                        {!! $faqs->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- contact section -->
<section class="contact-section mb-5">
    <div class="container">
        <div class="contact-wrapper1">
            <h6 class="text-center contact-section-title">Contact Us</h6>
            <form action="{{ route('contact.inquiry')}}" method="POST" id="contact" class="row contact justify-content-between align-items-center contact-form needs-validation" style="padding: 0px 6%;" enctype="multipart/form-data" novalidate>
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

        @endsection
        @push('scripts')
        <script>
        $('#searchInput').on('keyup', function() {
            var search = $(this).val();
            console.log(search);
            if(search != ''){
                $('#panel_search').css('display', 'block');
                $('#panel_main').css('display', 'none');
                $.ajax({
                url: '{{ route('faq.search') }}',
                type: 'GET',
                data: { search: search },
                success: function(response) {
                    $('#panel_search').empty();
                    response.data.forEach(function(faq) {
                        var item = `
                            <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-heading`+faq.id+`">
                            <button class="accordion-button px-0" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne_`+ faq.id+`" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne" fdprocessedid="5qd4l">
                                `+ faq.title+`
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne_`+ faq.id+`" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body px-0">
                                `+ faq.description+`
                            </div>
                        </div>
                    </div>
                        `;
                        $('#panel_search').append(item);
                    });
                    // Update pagination links if needed
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
            }else{
                $('#panel_main').css('display', 'block');
                $('#panel_search').css('display', 'none');
            }
           
        });
        </script>
       
        {{-- <script>
        function matchPeople(input) {
          var reg = new RegExp(input.split("").join("\\w*").replace(/\W/, ""), "i");
          var res = [];
          if (input.trim().length === 0) {
            return res;
          }
          for (var i = 0, len = people.length; i < len; i++) {
            if (people[i].match(reg)) {
              res.push(people[i]);
            }
          }
          return res;
        }
        
        function changeInput(val) {
          var autoCompleteResult = matchPeople(val);
          document.getElementById("result").innerHTML = "";
          for (var i = 0, limit = 10, len = autoCompleteResult.length; i < len  && i < limit; i++) {
            document.getElementById("result").innerHTML += "<a class='list-group-item list-group-item-action' href='#' onclick='setSearch(\"" + autoCompleteResult[i] + "\")'>" + autoCompleteResult[i] + "</a>";
          }
        }
        
        
        function setSearch(value) {
          document.getElementById('search').value = value;
          document.getElementById("result").innerHTML = "";
        }
        
        </script> --}}
        @endpush