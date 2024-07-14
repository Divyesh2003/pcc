@php
use App\Models\Setting;
$head = Setting::where('name','head')->first();
$canonicalUrl = url()->current(); 
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <link rel="canonical" href="{{ $canonicalUrl }}" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('meta_description')" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $canonicalUrl }}" />
    {{-- @yield('index_tag') --}}
    <link rel="apple-touch-icon" href="{{ asset('admin/assets/img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{ asset('admin/assets/img/apple-touch-icon.png')}}">
    <!-- Favicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <!-- <link rel="stylesheet" href="Navbar.css"> -->
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">

    {!! $head->description !!}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        #exampleModal{
            font-family:'Montserrat-Bold';
        }
        #exampleModal .form-control, .contact-form .form-label, .contact-form .form-select{
            padding: 15px 15px;
        }
        .iti {
        width: 100%;
    }
    ul#iti-0__country-listbox{
        width: 340px;
    }
    </style>
    @yield('json-ld')

</head>
<body>