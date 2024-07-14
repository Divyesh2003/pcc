@php
    use Carbon\Carbon;
    use App\Models\Review;
    $canonicalUrl = url()->current();
    $domain = Request::root();
    $reviews = Review::where('product_id', $product->id)->get();

@endphp
@section('title', 'Document Translation Services | Document Translation Services')
@section('meta_description', "we provide the document translation,language Translation Services ,Business,Technical,Legal,Financial translation services in india.")
@section('meta_keywords', "Translation Services")
@section('index_tag')
    {{-- {!! '<meta name="robots" content="noindex, nofollow">' !!} --}}
@endsection
@section('canonical', "www.mea-india.in/")
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
			"name": "Document Translation Services",
			"item": "{{ $canonicalUrl }}"
		}
		]
	}
</script>
@endsection
@extends('layouts.app')
@section('content')
<style>
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
        }
        .rate:not(:checked) > input {
        position:absolute;
        display: none;
        }
        .rate:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
        }
        .rated:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
        }
        .rate:not(:checked) > label:before {
        content: '★ ';
        }
        .rate > input:checked ~ label {
        color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
        color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
        }
        .star-rating-complete{
           color: #c59b08;
        }
        .rating-container .form-control:hover, .rating-container .form-control:focus{
        background: #fff;
        border: 1px solid #ced4da;
        }
        .rating-container textarea:focus, .rating-container input:focus {
        color: #000;
        }
        .rated {
        float: left;
        height: 46px;
        padding: 0 10px;
        }
        .rated:not(:checked) > input {
        position:absolute;
        display: none;
        }
        .rated:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ffc700;
        }
        .rated:not(:checked) > label:before {
        content: '★ ';
        }
        .rated > input:checked ~ label {
        color: #ffc700;
        }
        .rated:not(:checked) > label:hover,
        .rated:not(:checked) > label:hover ~ label {
        color: #deb217;
        }
        .rated > input:checked + label:hover,
        .rated > input:checked + label:hover ~ label,
        .rated > input:checked ~ label:hover,
        .rated > input:checked ~ label:hover ~ label,
        .rated > label:hover ~ input:checked ~ label {
        color: #c59b08;
        }
        .round-op{
            width: 75px;
            height: 75px;
            background: #FEF7ED;
            border-radius: 50%;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
            font-weight: 700;
            color: #F0B153;
        }
</style>  
<div class="container Document_translation ">
    <div class="row mt-5 align-items-center">
        <div class="col-md-6 doctransletcard ">
            <div class="card text-center doccard py-5">
                <img src="{{ asset('assets/img/fi_1372807.png') }}" class="card-img-top mx-auto mt-5 mb-3 img-fluid"
                    alt="...">
                <div class="card-body">
                    @php
                        $string = $product->language;
                        $words = explode(" ", $string);
                        $firstWord = $words[0];
                        $restOfString = implode(" ", array_slice($words, 1));
               
                    @endphp     
                    <h2 class=""><span class="text1">{{$firstWord}}</span> {{$restOfString}} </h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 card-detail mt-4 mt-md-0">
                <h1 class="detail-text"><span class="text1">{{ $product->name }}</h1>
            {!!  $product->description  !!}

            <div class="social-media-link text-center d-lg-flex justify-content-center align-items-center ">
                <button type="button" class="btn my-3 mx-auto mx-lg-2">
                    <img src="{{ asset('assets/img/Vector (1).png') }}" class="img-fluid mx-1">
                    <a href="https://api.whatsapp.com/send?phone=+916353349389&amp;text=Hello!" class="text-start">
                        <span>For any questions</span><br> Whatsapp Us
                    </a>
                </button>
                <button type="button" class="btn Contact_us mx-auto mx-lg-2">
                    <img src="{{ asset('assets/img/Vector (2).png') }}" class="img-fluid mx-1">
                    <a href="{{ route('contact') }}" class="text-start byncolor">
                        <span>For More info</span><br> Contact us
                    </a>
                </button>
            </div>
        </div>
    </div>
    <h3 class="sub_hed mt-5">Description About Document Translation</h3>
    <hr>
    {!!  $product->description_about !!}
    <br><br>
    <div class="suggested">
        <h6 class="text1 text-hed text-center mb-3">other suggested language combinations</h6>
        <div class="row">
            @foreach ($products as $product)
            <div class=" col-6 col-lg-3">
                <div class="card text-center doccard py-md-5 py-3">
                    <img src="{{ asset('assets/img/translet_s.png') }}" class="card-img-top mx-auto mt-5 mb-3 img-fluid"
                        alt="">
                    <div class="card-body">
                            <h5 class=""><span class="" style="font-size: 28px;font-weight: 800;">{{$firstWord}}</span> {{$restOfString}} </h5>
                    </div>
                </div>  
                <p class="text-center my-3 text3">{{ $product->name }}</p>
            </div>
            @endforeach
        </div>
    </div>
    <br><br>
    <div class="customer">
        <div class=" d-flex justify-content-between align-items-center ">
            <h6 class="text1  d-blok mb-1 mb-md-3">Customer Reviews</h6>
            <button type="button" class="btn Contact_us hw" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <a href="#" class="text-start Reviews ">Write a Review
                </a>
            </button>
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('review')}}" method="POST" class="row justify-content-between align-items-center contact-form contact needs-validation" id="review" style="padding: 0px 6%;" enctype="multipart/form-data" novalidate>
                            @csrf()
                            @method('POST')
                            <input type="hidden" id="product_id" class="product" name="product_id" value="{{ $product->id }}"/>
                        <div class="col-md-12 col-lg-12 mb-3 ">
                            <input class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="col-md-12 col-lg-12 mb-3 ps-lg-2">
                            <input class="form-control" name="role" placeholder="Role" required>
                        </div>
                        <div class="col-md-12 col-lg-12 mb-3 ps-lg-2">
                            <input class="form-control" name="description" placeholder="Description" required>
                        </div>
                        {{-- <div class="col-md-12 col-lg-12 mb-3 ps-lg-2">
                            <input class="form-control" name="role" placeholder="Role">
                        </div> --}}
                        <div class="col-md-12">
                            <input type="hidden" name="rating" id="rating_input" value="0">
                            <div class="rate">
                                <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" class="rate" name="rating" value="2">
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                <label for="star1" title="text">1 star</label>
                             </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-12 col-md-5 col-lg-4 col-xl-3 mb-2">
                                <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" required></div>
                            </div>
                        </div>
                        
                         <button type='submit'
                                class="btn btn-outline-primary">Save </button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
       
        <div class="small-ratings">
            <i class="fa fa-star rating-color"></i>
            <i class="fa fa-star rating-color"></i>
            <i class="fa fa-star rating-color"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <span class="fw-bold">{{ count($reviews) }} Reviews</span>
        </div>
        <hr class="mb-2 mb-md-5">
        <div class=" Customer_Reviews ">
            @foreach ($reviews as $review)
            @php
            $str = $review->name;
            $firstLetter = ucfirst($str[0]);
            // Assuming $review is your model instance
            $originalDate = $review->created_at;
            // Create a Carbon instance from the original date
            $carbonDate = Carbon::parse($originalDate);
            // Format the date to 'd-m-Y'
            $formattedDate = $carbonDate->format('d-m-Y');
            @endphp
            <div class="row" style="border-bottom: 1px solid #C2C2C2;margin-top: 15px;">
                <div class="col-sm-1">
                    <div class="round-op">
                        <span>{{$firstLetter}} </span>
                    </div>
                </div>
                <div class="col-sm-11">
                    <div>
                        <div class="">
                            <h5>{{ $review->name }} <p class="float-end">{{ $formattedDate }}</p></h5>
                            
                        </div>
                        <p class="m-0">{{ $review->role }}</p>
                        <p class="m-0">{{ $stars = str_repeat('⭐', $review->review) }}</p>
                        <p>{{ $review->description }}</p>
                    </div>
                </div>
            </div>
           
            @endforeach
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    let stars = document.querySelectorAll('.star');
    let ratingInput = document.getElementById('rating_input');

    stars.forEach(star => {
        star.addEventListener('click', () => {
            let value = star.getAttribute('data-value');
            ratingInput.value = value;

            stars.forEach(s => {
                s.classList.remove('active');
            });

            star.classList.add('active');
        });
    });
</script>
  <script>
     $("#contact").submit(function(e) {
        event.preventDefault()
        console.log("hello")
     });
        (function () {
                'use strict'
                var forms = document.querySelectorAll('.needs-validation')
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