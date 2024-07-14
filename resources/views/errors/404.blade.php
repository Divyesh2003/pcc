@section('index_tag')
    {!! '<meta name="robots" content="noindex, nofollow">' !!}
@endsection
@extends('layouts.app')
@section('content')
<style>
  
/*======================
    404 page
=======================*/
.py-35{
  padding: 50px 0;
}

.page_404{ padding:60px 0; background:#fff; font-family: 'Arvo', serif;
}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
    height: 400px;
    background-position: center;
 }
 
 
 .four_zero_four_bg h1{
 font-size:80px;
 }
 
  .four_zero_four_bg h3{
			 font-size:80px;
			 }
			 
			 .link_404{			 
	color: #fff!important;
    padding: 10px 20px;
    background: #f0b153;
    margin: 20px 0;
    display: inline-block;}
	.contant_box_404{ margin-top:-50px;}
</style>

<section class="home-banner-section">
    <div class="py-5">
        <h1 class="nev_hed  d-flex justify-content-center" style="font-size: 80px;">404</h1>	
    </div>
</section>
<section class="page_404 py-35">
	<div class="container">
		<div class="row">	
		<div class="col-sm-12 ">
		<div class="col-sm-10 col-sm-offset-1  text-center">
		<div class="four_zero_four_bg">
			{{-- <h1 class="text-center ">404</h1> --}}
		
		
		</div>
		
		<div class="contant_box_404">
		<h3 class="h2">
		Look like you're lost
		</h3>
		
		<p>the page you are looking for not avaible!</p>
		
		<a href="/" class="link_404">Go to Home</a>
	</div>
		</div>
		</div>
		</div>
	</div>
</section>

@endsection