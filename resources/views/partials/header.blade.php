@php
use App\Models\Apositlle;
use App\Models\Attension;
$cities_nav = Apositlle::where('nav_bar','A')->get();
// dd($cities_nav );
$country_nav = Attension::where('nav_bar','A')->get();
@endphp    
<section class="header-front d-lg-block d-none">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/Logo.png') }}" class="logo-wrapper">
                        </a>
                    </div>
                    <div class="col-sm-10">
                        <div class="top-nav">
                            <div class="d-flex  justify-content-center  align-items-center" style="padding-top: 22px;">
                                <div class="contact-wrapper">
                                    <a href="tel:+91 63533 49389" style="font-size: 14px;">
                                        <img src="{{ asset('assets/img/call1.png') }}" class="img-fluid mx-1">
                                        +91 63533 49389</a>
                                </div>
                                <div class="contact-wrapper">
                                    <a href="tel:+91 91066 14849" style="font-size: 14px;">
                                        <img src="{{ asset('assets/img/call1.png') }}" class="img-fluid mx-1">
                                        +91 91066 14849
                                    </a>
                                </div>
                                <div class="contact-wrapper">
                                    <span style="color: #0a833a;" href="#" style="font-size: 14px;">
                                        <img src="{{ asset('assets/img/navbar-icon3.png') }}" class="img-fluid mx-2">
                                        Ministry(MCA) Approved Apostille Agency, INDIA</span>
                                </div>
                                <a class="btn navbar-btn d-flex justify-content-center align-items-center"
                                    href="https://apostile.xyz/doc_status/doc_status_view" target="_blank">
                                    <h6 class="mb-0 mx-1">Track Document</h6>
                                    <img src="{{ asset('assets/img/track_document.png') }}" class="mx-1">
                                </a>
                                <a class="btn navbar-btn d-flex justify-content-center align-items-center"
                                    href="{{ route('contact') }}">
                                    <h6 class="mb-0 mx-1">Contact Us</h6>
                                    <img src="{{ asset('assets/img/contact.png') }}" class="mx-1">
                                </a>
                            </div>
                        </div>
                        <hr style="margin:24px 0 32px 0;border: 1px solid #00000040;">
                        <nav class="navbar navbar-expand-lg navbar-light pb-0 pt-0">
                            <div class="collapse navbar-collapse header_nav" id="navbarNav">
                                <ul class="navbar-nav d-lg-flex justify-content-lg-between">
                                    <li class="nav-item">
                                        <a class="nav-link pt-0 pb-0" href="/">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-0 pb-0" href="{{ route('about') }}">
                                            About Us
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle nav-link pt-0 dropdown-toggle pb-0"
                                                data-toggle="dropdown">Services <b class="caret"></b></a>
                                            <ul class="dropdown-menu multi-level">
                                                <li class="dropdown-submenu">
                                                    <a href="{{ route('page','certificate-apostille-services-india')}}" class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        data-toggle="dropdown">Certificate Apostille</a>
                                                    <!-- Level 2 -->
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-submenu">
                                                            <a href="#" class="dropdown-item py-3"
                                                                style="font-size: 14px;padding: 0px;font-weight:900"
                                                                data-toggle="dropdown">Personal Documents</a>
                                                            <!-- Level 3 -->
                                                            <ul class="dropdown-menu">
                                                                <li> <a href="{{ route('page','birth-certificate-apostille')}}" class="dropdown-item py-3"
                                                                    style="font-size: 14px;padding: 0px;font-weight:900"
                                                                    data-toggle="dropdown">Birth Certificate Apostille</a>
                                                                    <hr class="m-0">
                                                            </li>
                                                            <li> <a href="{{ route('page','marriage-certificate-apostille')}}" class="dropdown-item py-3"
                                                                style="font-size: 14px;padding: 0px;font-weight:900"
                                                                data-toggle="dropdown">Marriage Certificate Apostille</a>
                                                                <hr class="m-0">
                                                        </li>
                                                        <li> <a href="{{ route('page','divorce-decree-apostille')}}" class="dropdown-item py-3"
                                                            style="font-size: 14px;padding: 0px;font-weight:900"
                                                            data-toggle="dropdown">Divorce Decree Apostille</a>
                                                            <hr class="m-0">
                                                    </li>
                                                        <li> <a href="{{ route('page','pcc-apostille')}}" class="dropdown-item py-3"
                                                            style="font-size: 14px;padding: 0px;font-weight:900"
                                                            data-toggle="dropdown">PCC Apostille</a>
                                                            <hr class="m-0">
                                                    </li>
                                                    <li> <a href="{{ route('page','medical-certificate-apostille')}}" class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900">Medical Certificate Apostille</a>
                                                        </li>
                                                    </ul>
                                                    <hr class="m-0">
                                                        </li>                                                        
                                                        <li class="dropdown-submenu">
                                                            <a href="{{ route('page','educational-certificate-attestation')}}" class="dropdown-item py-3"
                                                                style="font-size: 14px;padding: 0px;font-weight:900"
                                                                data-toggle="dropdown">Educational Certificate</a>
                                                                <ul class="dropdown-menu">
                                                                    <li> <a href="{{route('page','degree-certificate')}}" class="dropdown-item py-3"
                                                                            style="font-size: 14px;padding: 0px;font-weight:900"
                                                                            data-toggle="dropdown">Degree Certificate Apostille</a>
                                                                    </li>
                                                                </ul>
                                                            <hr class="m-0">
                                                        </li>

                                                        <li class="dropdown-submenu">
                                                            {{-- <a href="#" class="dropdown-toggle"
                                                                data-toggle="dropdown">Commercial Documents</a> --}}
                                                            <a href="{{ route('page','commercial-document-apostille')}}" class="dropdown-item py-3"
                                                                style="font-size: 14px;padding: 0px;font-weight:900"
                                                                data-toggle="dropdown">Commercial Documents</a>
                                                            <!-- Level 3 -->
                                                            <ul class="dropdown-menu">
                                                                <li> <a href="{{ route('page','export-invoice-apostille')}}" class="dropdown-item py-3"
                                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                                        data-toggle="dropdown">Export Invoice Apostille</a>
                                                                        <hr class="m-0">
                                                                </li>
                                                                <li> <a href="{{ route('page','gmp-certificate-apostille')}}" class="dropdown-item py-3"
                                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                                        data-toggle="dropdown">GMP Certificate
                                                                        Apostille</a>
                                                                        <hr class="m-0">
                                                                    </li>
                                                                <li> <a href="{{ route('page','power-of-attorney')}}" class="dropdown-item py-3"
                                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                                        data-toggle="dropdown">Power of Attorney
                                                                        Apostille</a>
                                                                    </li>
                                                            </ul>
                                                            
                                                        </li>
                                                    </ul>
                                                    <hr class="m-0">
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        data-toggle="dropdown">Certificate Attestation</a>
                                                    <!-- Level 2 -->
                                                    <ul class="dropdown-menu">
                                                        <li class="">
                                                            <a href="{{ route('page','commercial-document-attestation')}}" class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        data-toggle="dropdown">Commercial Documents</a>
                                                        <hr class="m-0">
                                                        </li>
                                                        <li class="">
                                                            <a href="{{ route('page','degree-certificate-attestation')}}" class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        data-toggle="dropdown">Degree Certificate Attestation</a>
                                                        <hr class="m-0">
                                                        </li>
                                                        <li class="">
                                                            <a href="{{ route('page','birth-certificate-attestation')}}" class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        data-toggle="dropdown">Birth Certificate Attestation</a>
                                                        <hr class="m-0">
                                                        </li>
                                                        <li class="">
                                                            <a href="{{ route('page','marriage-certificate-attestation') }}" class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        data-toggle="dropdown">Marriage Certificate Attestation</a>
                                                        </li>
                                                    </ul>
                                                    <hr class="m-0">
                                                </li>
                                                <li><a class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        href="{{ route('page','mea-india-approve-legalization-service')}}">Certificate Legalization</a>
                                                    <hr class="m-0">
                                                </li>
                                                <li><a class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        href="{{ route('page','translation-services')}}">Language Translation</a>
                                                    <hr class="m-0">
                                                </li>
                                                <li><a class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        href="{{ route('page','visa-process')}}">Visa Process</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle nav-link pt-0 pb-0"
                                                onclick="toggleDropdownapostille('apostilleservice')" type="button"
                                                id="services" data-bs-toggle="dropdown" aria-expanded="false">
                                                Apostille Services
                                            </a>
                                            <ul class="dropdown-contentio" id="apostilleservice">
                                                @foreach ($cities_nav as $city)
                                                <li><a class="dropdown-item py-3"
                                                    style="font-size: 14px;padding: 0px;font-weight:900"
                                                    href="{{ route('page', $city->slug) }}">{{ $city->nav_bar_name }}</a>
                                                <hr class="m-0">
                                            </li>
                                                @endforeach
                                                <li><a class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        href="{{ route('scholarship')}}">Apostille For
                                                        GKS</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle nav-link pt-0 pb-0"
                                                onclick="toggleDropdownapostille('attensionservices')" type="button"
                                                id="services" data-bs-toggle="dropdown" aria-expanded="false">
                                                Embassy Attestation Services
                                            </a>
                                            <ul class="dropdown-contentio" id="attensionservices">
                                                @foreach ($country_nav as $country)
                                                <li><a class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        href="{{ route('page', $country->slug) }}">{{ $country->nav_bar_name }}</a>
                                                    <hr class="m-0">
                                                </li>
                                                @endforeach
                                                <li>
                                                <hr class="m-0">
                                            </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle nav-link pt-0 pb-0" href="{{ route('translation')}}"
                                              id="services">
                                                Translation
                                            </a>
                                            <ul class="dropdown-contentio" id="translation">
                                                <li><a class="dropdown-item py-3" onclick=""
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        href="{{ route('translation.service.foreign') }}">foreign language translation
                                                        services</a>
                                                    <hr class="m-0">
                                                </li>
                                                <li>
                                                    <a class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        href="/translation/spanish-to-english">Spanish sworn translation</a>
                                                    <hr class="m-0">
                                                </li>
                                                <li><a class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        href="/translation/russian-to-english">Russian notarization translation</a>
                                                    <hr class="m-0">
                                                </li>
                                                <li><a class="dropdown-item py-3"
                                                        style="font-size: 14px;padding: 0px;font-weight:900"
                                                        href="/translation/czech-sworn-to-english">Czech sworn translation</a>
                                                    <hr class="m-0">
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-0 pb-0" href="{{ route('blog') }}">
                                            Blog
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-0 pb-0" href="{{ route('faq')}}">
                                            FAQs
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-icon">
                                <a href="https://www.facebook.com/pccattestation">
                                   <img src="{{ asset('assets/img/facebook.png') }}" class="img-fluid">
                                </a>
                                <a href="https://twitter.com/Apostilleservi4">
                                    <img src="{{ asset('assets/img/twitter.png') }}" class="img-fluid">
                                </a>
                                <a href="https://www.instagram.com/pcc_attestation_service/">
                                    <img src="{{ asset('assets/img/Instagram.png') }}" class="img-fluid">
                                </a>
                                <a
                                    href="https://www.linkedin.com/company/pcc-apostille-attestation-translation-services-india-pvt-ltd">
                                    <img src="{{ asset('assets/img/Linkedin.png') }}" class="img-fluid">
                                </a>
                                <a href="https://www.youtube.com/channel/UC8-lZQz_ht_FplXqKPZ4oFg/featured">
                                    <img src="{{ asset('assets/img/youtube.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                <div class=" p-0">
                            </button>
                    </div>
                    </nav>
                </div>
            </div>
            </div>
        </section>
        <section class="header-front d-lg-none d-block">
            <div class="container-fluid container-lg">
                <div class="row">
                    <div class="col-12  py-7 bg-green text-center">
                        <div class="contact-wrapper">
                            <span href="#">
                                <img src="{{ asset('assets/img/fi_3045701.png') }}" class="img-fluid mx-2">
                                Ministry(MCA) Approved Apostille Agency, INDIA</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-3">
                              <a href="/"> <img src="{{ asset('assets/img/Logo.png') }}" class="logo-wrapper" width="100%"></a> 
                            </div>
                            <div class="col-9 header_fxt0099">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="contact-wrapper p-0 p-sm-2 p-lg-0">
                                                    <a href="tel:+91 6353349389">
                                                        <img  src="{{ asset('assets/img/call1.png') }}"
                                                            class="img-fluid mx-1">
                                                        +91 63533 49389</a>
                                                </div>
                                            </div>
                                            <div class="col-6 border-start-fty0090">
                                                <div class="contact-wrapper p-0 p-sm-2 p-lg-0 d-flex justify-content-end">
                                                    <a href="tel:+91 9106614849">
                                                        <img src="{{ asset('assets/img/call1.png') }}"
                                                            class="img-fluid mx-1">
                                                        +91 91066 14849</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row px-18">
                                            <div class="col-3">
                                                <div class="row ">
                                                    <div class="col-12 d-flex">
                                                        {{-- <a class="btn navbar-btn d-flex justify-content-center align-items-center"
                                                        href="https://apostile.xyz/doc_status/doc_status_view" target="_blank">
                                                        <h6 class="mb-0 mx-1">Track Document</h6>
                                                        <img src="{{ asset('assets/img/track_document.png') }}" class="mx-1">
                                                    </a>
                                                    <a class="btn navbar-btn d-flex justify-content-center align-items-center"
                                                        href="{{ route('contact') }}">
                                                        <h6 class="mb-0 mx-1">Contact Us</h6>
                                                        <img src="{{ asset('assets/img/contact.png') }}" class="mx-1">
                                                    </a> --}}
                                                        <a class="box"  href="https://apostile.xyz/doc_status/doc_status_view">
                                                            <img src="{{ asset('assets/img/track_document.png') }}"
                                                                class="w-response">
                                                        </a>
                                                        <a class="box ms_5" href="{{ route('contact') }}">
                                                            <img src="{{ asset('assets/img/contact.png') }}"
                                                                class="w-response" >
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center  justify-content-center">
                                                <div class="social-icon">
                                                    <a href="https://www.facebook.com/pccattestation">
                                                        <img src="{{ asset('assets/img/facebook.png') }}"
                                                            class="img-fluid">
                                                    </a>
                                                    <a href="https://twitter.com/Apostilleservi4">
                                                        <img src="{{ asset('assets/img/twitter.png') }}"
                                                            class="img-fluid">
                                                    </a>
                                                    <a href="https://www.instagram.com/pcc_attestation_service/">
                                                        <img src="{{ asset('assets/img/Instagram.png') }}"
                                                            class="img-fluid">
                                                    </a>
                                                    <a
                                                        href="https://www.linkedin.com/company/pcc-apostille-attestation-translation-services-india-pvt-ltd">
                                                        <img src="{{ asset('assets/img/Linkedin.png') }}"
                                                            class="img-fluid">
                                                    </a>
                                                    <a
                                                        href="https://www.youtube.com/channel/UC8-lZQz_ht_FplXqKPZ4oFg/featured">
                                                        <img src="{{ asset('assets/img/youtube.png') }}"
                                                            class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-2 d-flex justify-content-end">
                                                <div class="menu-btn">
                                                    <img
                                                    src="{{ asset('assets/img/Group_21689.png') }}"
                                                    class="img-fluid">
                                                  </div>
                                                <div class="side-bar">
                                                    <div style="padding: 20px;">
                                                        <div class="close-btn">
                                                            <i class="fas fa-times"></i>
                                                          </div>
                                                          <div class="menu">
                                                            <div class="item border-bottom"><a href="{{ route('home') }}">Home</a></div>
                                                            <div class="item border-bottom "><a href="{{ route('about') }}">About Us </a></div>
                                                            <div class="item position-relative">
                                                              {{-- <a class="sub-btn border-bottom">Services <i class="fa-solid fa-caret-down"></i></a> --}}
                                                              <a href="#" class="border-bottom ">Services  </a>
                                                              <a class="sub-btn p-0 iop"><i class="fa-solid fa-caret-down border-bottom"></i></a>
                                                              <div class="sub-menu position-relative">
                                                                <a href="{{ route('page','certificate-apostille-services-india')}}" class="border-bottom ">Certificate Apostille</a>
                                                                <a class="sub-btn p-0 iop"><i class="fa-solid fa-caret-down border-bottom"></i></a>
                                                              {{-- <a class="sub-btn p-0 border-bottom ps-2" href="/certificate-apostille-services-india">Certificate Apostille <i class="fa-solid fa-caret-down"></i></a> --}}
                                                              <div class="sub-menu position-relative">
                                                                {{-- <a href="#" class="sub-item  p-0 border-bottom">Personal Documents</a> --}}
                                                                <div class="position-relative">
                                                                    <a class="border-bottom ">Personal Documents</a>
                                                                    <a class="sub-btn p-0 iop"> <i class="fa-solid fa-caret-down border-bottom"></i></a>
                                                                    <div class="sub-menu">
                                                                      <a href="{{ route('page','birth-certificate-apostille')}}" class="sub-item  p-0 border-bottom">Birth Certificate Apostille</a>
                                                                      <a href="{{ route('page','marriage-certificate-apostille')}}" class="sub-item  p-0 border-bottom">Marriage Certificate Apostille</a>
                                                                      <a href="{{ route('page','divorce-decree-apostille')}}" class="sub-item  p-0 border-bottom">Divorce Degree</a>
                                                                      <a href="{{ route('page','pcc-apostille')}}" class="sub-item  p-0 border-bottom">Pcc Apostille</a>
                                                                      <a href="{{ route('page','medical-certificate-apostille')}}" class="sub-item  p-0 border-bottom">Medical Certificate</a>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative">
                                                                {{-- <a href="/educational-certificate-attestation" class="sub-item  p-0 border-bottom">Educational Certificate</a> --}}
                                                                <a href="{{ route('page','educational-certificate-attestation')}}" class="border-bottom ">Educational Certificate</a>
                                                                <a class="sub-btn p-0 iop"> <i class="fa-solid fa-caret-down border-bottom"></i></a>
                                                                <div class="sub-menu position-relative">
                                                                  <a href="{{ route('page','degree-certificate')}}" class="sub-item  p-0 border-bottom">Degree Certificate Apostille</a>
                                                                </div>
                                                            </div>

                                                                <div class="position-relative">
                                                                    <a href="{{ route('page','commercial-document-apostille')}}" class="border-bottom ">Commercial Certificate</a>
                                                                    <a class="sub-btn p-0 iop"> <i class="fa-solid fa-caret-down border-bottom"></i></a>
                                                                    {{-- <a href="/commercial-document-apostille" class="sub-item  p-0 border-bottom">Cmmercial Certificate</a> --}}
                                                                    <div class="sub-menu position-relative">
                                                                      <a href="{{ route('page','export-invoice-apostille')}}" class="sub-item  p-0 border-bottom">Export Invoice Apostille</a>
                                                                      <a href="{{ route('page','gmp-certificate-apostille')}}" class="sub-item  p-0 border-bottom">GMP Certificate Apostille</a>
                                                                      <a href="{{ route('page','power-of-attorney')}}" class="sub-item  p-0 border-bottom">Power Of Attorney Apostille</a>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="position-relative">
                                                              <a href="" class="border-bottom ">Certificate Attestation</a>
                                                                <a class="sub-btn p-0 iop"> <i class="fa-solid fa-caret-down border-bottom"></i></a>
                                                         
                                                              <div class="sub-menu">
                                                                <a href="{{ route('page','commercial-document-attestation')}}" class="sub-item  p-0 border-bottom">Commercial Document</a>
                                                                <a href="{{ route('page','degree-certificate-attestation')}}" class="sub-item  p-0 border-bottom">Degree Certifiacate Attestation</a>
                                                                <a href="{{ route('page','birth-certificate-attestation')}}" class="sub-item  p-0 border-bottom">Birth Certificate Attestation</a>
                                                                <a href="{{ route('page','marriage-certificate-attestation') }}" class="sub-item  p-0 border-bottom">Marraige Certificate Attestation</a>
                                                              </div>
                                                            </div>
                                                              <a herf="{{ route('page','mea-india-approve-legalization-service')}}" class="sub-btn p-0 border-bottom ps-2">Certificate Legalization</a>
                                                              <a herf="{{ route('page','translation-services')}}" class="sub-btn p-0 border-bottom ps-2">Language registration</a>
                                                              <a herf="{{ route('page','visa-process')}}" class="sub-btn p-0 border-bottom ps-2">Visa process</a>
                                                              </div>
                                                            </div>
                                                            <div class="item position-relative">
                                                              <a href="" class="border-bottom ">Apostille Services</a>
                                                                <a class="sub-btn p-0 iop"> <i class="fa-solid fa-caret-down border-bottom"></i></a>
                                                              <div class="sub-menu">
                                                                @foreach ($cities_nav as $city)
                                                                    <a class="sub-btn p-0 border-bottom ps-2" href="{{ route('page', $city->slug) }}">{{ $city->nav_bar_name }}</a>
                                                                @endforeach
                                                                <a class="sub-btn p-0 border-bottom ps-2" href="/global-korea-scholarship">Apostille For GKS </a>
                                                              </div>
                                                            </div>
                                                            <div class="item position-relative">
                                                                <a href="" class="border-bottom ">Embassy Attestation Services</a>
                                                                <a class="sub-btn p-0 iop"> <i class="fa-solid fa-caret-down border-bottom"></i></a>
                                                              <div class="sub-menu">
                                                                @foreach ($country_nav as $country)
                                                                    <a class="sub-btn p-0 border-bottom ps-2" href="{{ route('page', $country->slug) }}">
                                                                    {{ $country->nav_bar_name }}</a>
                                                                @endforeach
                                                              </div>
                                                            </div>
                                                            <div class="item position-relative">
                                                              <a href="" class="border-bottom ">Translation</a>
                                                              <a class="sub-btn p-0 iop"> <i class="fa-solid fa-caret-down border-bottom"></i></a>
                                                              <div class="sub-menu">
                                                                   <a class="sub-btn p-0 border-bottom ps-2"  href="{{ route('translation.service.foreign') }}">foreign language translation services</a>
                                                                   <a class="sub-btn p-0 border-bottom ps-2"  href="/translation/spanish-to-english">Spanish sworn translation</a>
                                                                   <a class="sub-btn p-0 border-bottom ps-2"  href="/translation/russian-to-english">Russian notarization translation</a>
                                                                   <a class="sub-btn p-0 border-bottom ps-2"  href="/translation/czech-sworn-to-english">Czech sworn translation</a>
                                                              </div>
                                                            </div>
                                                            <div class="item border-bottom"><a href="{{ route('blog') }}">Blog</a></div>
                                                            <div class="item border-bottom"><a href="{{ route('faq')}}">FAQs </a></div>
                                                          </div>
                                                    </div>
                                                    <button type="button" class="btn btn-apply_aposittle"
                                                      onclick="openModal('attestation')">
                                                        <img src="{{asset('assets/img/certificate 1.png')}}" alt=""> Apply Apostille 
                                                    </button>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 </section>