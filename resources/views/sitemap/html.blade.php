@section('title', 'Sitemap')
@section('meta_description', "Sitemap")
@section('meta_keywords', "Sitemap")
{{-- @section('canonical', "https://www.indiamea.in/info/about-us") --}}
@section('index_tag')
    {!! '<meta name="robots" content="noindex, nofollow">' !!}
@endsection
@extends('layouts.app')
@section('content')
<section class="home-banner-section">
    <div>
        <h1 class="nev_hed pt-5 d-flex justify-content-center">Sitemap
        </h1>
    </div>
    </section>

        <section class="mt-4">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                            <h2>Pages</h2>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul>
                                        <li><a href="{{ route('home')}}">Welcome</a></li>
                                        <li><a href="{{ route('service')}}">Service</a></li>
                                        <li><a href="{{ route('refund')}}">Cancellation and Refund Policy</a></li>
                                        <li><a href="{{ route('page','certificate-apostille-services-india')}}">Apostile Services</a></li>
                                        <li><a href="{{ route('page','birth-certificate-apostille')}}">Birth Certificate Apostille Service in India</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul>
                                        {{-- <li><a href="/">Welcome</a></li> --}}
                                        <li><a href="{{ route('about')}}">About</a></li>
                                        <li><a href="{{ route('term')}}">Terms & Conditions</a></li>
                                        <li><a href="{{ route('privacy')}}">Privacy Policy</a></li>
                                        <li><a href="{{ route('page','marriage-certificate-apostille')}}">Marriage Certificate Apostille Services in India</a></li>
    
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul>
                                        <li><a href="{{ route('contact')}}">contact</a></li>
                                        <li><a href="{{ route('scholarship')}}">Global Korea Scholarship</a></li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
            </div>
        </section>
        <section class="mt-4">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                            <h2>Blogs</h2>
                            <hr>
                            <div class="row">
                            @foreach ($blogs as $blog)
                            <ul>
                                <li>
                                    <a href="{{ route('blog.single',$blog->slug)}}">{{ $blog->name }}</a>
                                </li>
                            </ul>
                            @endforeach
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <section class="mt-4">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                            <h2>Translation</h2>
                            <hr>

                            @foreach ($products as $product)
                            <ul>
                                <li>
                                    <a href="{{ route('product.single',$product->slug)}}">{{ $product->name }}</a>
                                </li>
                            </ul>
                            @endforeach
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <section class="mt-4">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                            <h2>Country</h2>
                            <hr>
                            <div class="row">
                            @foreach ($countries as $country)
                            <div class="col-sm-3">
                                <ul>
                                    <li>
                                        <a href="{{ route('page',$country->slug)}}">{{ $country->name }}</a>
                                    </li>
                                </ul>
                            </div>
                        
                            @endforeach
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <section class="mt-4">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                            <h2>City</h2>
                            <hr>
                            <div class="row">
                            @foreach ($cities as $city)
                            <div class="col-sm-3">
                                <ul>
                                    <li>
                                        <a href="{{ route('page',$city->slug)}}">{{ $city->name }}</a>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <section class="mt-4">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Other Pages</h2>
                            <div class="row">
                            @foreach ($pages as $page)
                            <div class="col-sm-3">
                                <ul>
                                    <li>
                                        <a href="{{ route('page',$page->slug)}}">{{ $page->name }}</a>
                                    </li>
                                </ul>
                            </div>
                       
                            @endforeach
                            </div>
                        </div>
                    </div>
            </div>
        </section>
@endsection