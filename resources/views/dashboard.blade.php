<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.animatedheadline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/dark.css"> -->

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

    <title>Best DatingSite</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('./assets/images/logo/logo.png')}}" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                  
                    <li class="user-profile">
                        <a href="#">
                            <img src="{{asset('assets/images/user-demo.png')}}" alt="">
                        </a>
                        <ul class="submenu">
                            <li>
                                <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Logout') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="search-overlay">
        <div class="close"><i class="fas fa-times"></i></div>
        <form action="#">
            <input type="text"  placeholder="Write what you want..">
        </form>
    </div>
    <!-- ==========Header-Section========== -->

    <!-- ==========Breadcrumb-Section========== -->
    <section class="breadcrumb-area profile-bc-area">
        <div class="container">
            
        </div>
    </section>
    <!-- ==========Breadcrumb-Section========== -->


    <!-- ========= Profile Section Start -->
    <section class="profile-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7">
                    <div class="left-profile-area">
                        <div class="profile-about-box">
                            <div class="top-bg"></div>
                            <div class="p-inner-content">
                                <div class="profile-img">
                                    <img src="{{asset('assets/images/profile/profile-user.png')}}" alt="">
                                    <div class="active-online"></div>
                                </div>
                                <h5 class="name">
                                    {{$user->name}}
                                </h5>
                                <ul class="p-b-meta-one">
                                    <li>
                                        <span>23 Years Old</span>
                                    </li>
                                    <li>
                                        <span> <i class="fas fa-map-marker-alt"></i> {{$user->city}},{{$user->country}}</span>
                                    </li>
                                </ul>
                                <div class="p-b-meta-two">
                                    <div class="left">
                                        <div class="icon">
                                            <i class="far fa-heart"></i>
                                        </div> 257
                                    </div>
                                    <div class="right">
                                        <a href="#" class="custom-button">
                                            <i class="fab fa-cloudversify"></i> Get Premium
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-meta-box">
                            <ul class="p-m-b">
                                <li>
                                    <a href="#">
                                        <i class="far fa-envelope"></i>
                                        <div class="number">04</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/posts/create">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/{{$user->id}}/edit">
                                        <i class="fas fa-cogs"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-uplodate-photo">
                            <h4 class="p-u-p-header">
                                <i class="fas fa-camera"></i> 21 Upload Photos 
                            </h4>
                            <div class="p-u-p-list">
                                <div class="my-col">
                                    <div class="img">
                                        <img src="{{asset('assets/images/profile/up1.jpg')}}" alt="">
                                        <div class="overlay">
                                            <a href="{{asset('assets/images/profile/up1.jpg')}}" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="{{asset('assets/images/profile/up2.jpg')}}" alt="">
                                        <div class="overlay">
                                            <a href="{{asset('assets/images/profile/up2.jpg')}}" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="{{asset('assets/images/profile/up3.jpg')}}" alt="">
                                        <div class="overlay">
                                            <a href="{{asset('assets/images/profile/up3.jpg')}}" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="{{asset('assets/images/profile/up4.jpg')}}" alt="">
                                        <div class="overlay">
                                            <a href="{{asset('assets/images/profile/up4.jpg')}}" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="{{asset('assets/images/profile/up5.jpg')}}" alt="">
                                        <div class="overlay">
                                            <a href="{{asset('assets/images/profile/up5.jpg')}}" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="{{asset('assets/images/profile/up6.jpg')}}" alt="">
                                        <div class="overlay">
                                            <a href="{{asset('assets/images/profile/up6.jpg')}}" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="profile-main-content">
                        <ul class="top-menu">
                            <li>
                                <a href="/posts/create">
                                    Activity 
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/{{$user->id}}" class="active">
                                    Profile 
                                </a>
                            </li>
                            <li>
                                <a href="single-profile3.html">
                                    Friends  
                                    <div class="num">1</div>
                                </a>
                            </li>
                           
                        </ul>
                        <div class="info-box">
                            <div class="header">
                                <h4 class="title">
                                    Base
                                </h4>
                            </div>
                            <div class="content">
                                <ul class="infolist">
                                    <li>
                                        <span>
                                            Name
                                        </span>
                                        <span>
                                            {{$user->name}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Birthday
                                        </span>
                                        <span>
                                            {{$user->birthday}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            I am a
                                        </span>
                                        <span>
                                            {{$user->gender1}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Looking for a
                                        </span>
                                        <span>
                                            {{$user->gender2}}
                                        </span>
                                    </li>
                                   <!-- <li>
                                        <span>
                                            Marital status
                                        </span>
                                        <span>
                                            single
                                        </span>
                                    </li>-->
                                    <li>
                                        <span>
                                            Country
                                        </span>
                                        <span>
                                            {{$user->country}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            City
                                        </span>
                                        <span>
                                            {{$user->city}}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="header">
                                <h4 class="title">
                                    Myself Summary
                                </h4>
                            </div>
                            <div class="content">
                                <p class="text">
                                   {{$user->profile->MyselfSummary ?? ""}}
                                </p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="header">
                                <h4 class="title">
                                    Physical
                                </h4>
                            </div>
                            <div class="content">
                                <ul class="infolist">
                                    <li>
                                        <span>
                                            Height
                                        </span>
                                        <span>
                                            {{ $user->profile->height ?? ""}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Weight
                                        </span>
                                        <span>
                                            {{$user->profile->weight ?? ""}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Hair Color
                                        </span>
                                        <span>
                                            {{$user->profile->hairColor ?? ""}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Eye Color
                                        </span>
                                        <span>
                                            {{$user->profile->eyeColor ?? ""}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Body Type
                                        </span>
                                        <span>
                                            {{$user->profile->bodyTipe ?? ""}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Ethnicity
                                        </span>
                                        <span>
                                            {{$user->profile->ethnicity ?? ""}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Vaccinated
                                        </span>
                                        <span>
                                            {{$user->profile->vaccinated ?? ""}}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-7">
                    <div class="profile-aside-area">
                        <div class="other-profile">
                            <div class="o-p-header">
                                <h6 class="title">
                                    You may like
                                </h6>
                            </div>
                            <div class="o-p-content">
                                <div class="p-u-p-list-slider owl-carousel">
                                    <div class="slider-item">
                                        <div class="p-u-p-list">
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img1.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img2.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img3.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img4.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img5.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img6.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img7.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img8.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <div class="p-u-p-list">
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img1.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img2.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img3.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img4.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img5.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img6.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img7.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/profile/op-img8.png')}}" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-request">
                            <div class="c-r-heading">
                                <h6 class="title">
                                    <i class="far fa-comments"></i> Chat Request
                                </h6>
                            </div>
                            <div class="c-r-content">
                                <div class="c-r-content-list">
                                    <div class="single-c-r">
                                        <div class="left">
                                            <img src="{{asset('assets/images/profile/c-r-img1.png')}}" alt="">
                                            <div class="active-online"></div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                laura maria
                                            </h4>
                                            <p>
                                                true love is...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-c-r">
                                        <div class="left">
                                            <img src="{{asset('assets/images/profile/c-r-img2.png')}}" alt="">
                                            <div class="active-online"></div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                laura maria
                                            </h4>
                                            <p>
                                                true love is...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-c-r">
                                        <div class="left">
                                            <img src="{{asset('assets/images/profile/c-r-img3.png')}}" alt="">
                                            <div class="active-online"></div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                laura maria
                                            </h4>
                                            <p>
                                                true love is...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="load-more">
                                    load More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= Profile Section Start -->



    <!-- ==========Newslater-Section========== -->
    <footer class="footer-section">
        <img class="shape1" src="{{asset('assets/images/footer/f-shape.png')}}" alt="">
        <img class="shape2" src="{{asset('assets/images/footer/flower01.png')}}" alt="">
        <img class="shape3" src="{{asset('assets/images/footer/right-shape.png')}}" alt="">
       <div class="newslater-section">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-lg-6 col-md-8">
                       <div class="newslater-container">
                           <div class="newslater-wrapper">
                               <div class="icon">
                                   <img src="{{asset('assets/images/footer/n-icon.png')}}" alt="">
                               </div>
                               <p class="text">Sign up to recieve a monthly email on the latest news!</p>
                               <form class="newslater-form">
                                   <input type="text" placeholder="Your Email Address">
                                   <button type="submit"> 
                                       <i class="fab fa-telegram-plane"></i>
                                   </button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="container">
           <div class="footer-links">
               <div class="row">
                   <div class="col-lg-12">
                       <hr class="hr">
                   </div>
               </div>
               <div class="row">
                   <div class="col-lg-3 col-sm-6">
                       <div class="link-wrapper one">
                           <h4 class="f-l-title">
                               Our Information
                           </h4>
                           <ul class="f-solial-links">
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i>  About Us
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> Contact Us
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> Customer Reviews
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> Success Stories
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i>  Business License
                                   </a>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-3 col-sm-6">
                       <div class="link-wrapper two">
                           <h4 class="f-l-title">
                               My Account
                           </h4>
                           <ul class="f-solial-links">
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> Manage Account
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i>  Safety Tips
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> Account Varification
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> Safety & Security
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> Membership Level
                                   </a>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-3 col-sm-6">
                       <div class="link-wrapper three">
                           <h4 class="f-l-title">
                               help center
                           </h4>
                           <ul class="f-solial-links">
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i>  Help centre
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> FAQ
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i>Quick Start Guide 
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i>Tutorials
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i>Associate Blog
                                   </a>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-3 col-sm-6">
                       <div class="link-wrapper four">
                           <h4 class="f-l-title">
                               legal 
                           </h4>
                           <ul class="f-solial-links">
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i>  Privacy policy 
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> End User Agreements
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> Refund Policy
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> Cookie policy
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="fas fa-angle-double-right"></i> Report abuse
                                   </a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="copyright-wrapper">
               <div class="row">
                   <div class="col-lg-12">
                       <hr class="hr2">
                   </div>
               </div>
               <div class="row">
                   <div class="col-lg-6 align-self-center">
                       <div class="copyr-text">
                           <span>
                               Copyright © 2020.All Rights Reserved By
                           </span>
                           <a href="#">Peyamba</a>
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <ul class="footer-social-links">
                           <li>
                               <a href="#">
                                   <i class="fab fa-twitter"></i>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="fab fa-facebook-f"></i>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="fab fa-instagram"></i>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="fab fa-dribbble"></i>
                               </a>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </footer> 
    <!-- ==========Newslater-Section========== -->


    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/heandline.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('assets/js/viewport.jquery.js')}}"></script>
    <script src="{{asset('assets/js/nice-select.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
