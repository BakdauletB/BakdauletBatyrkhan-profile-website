<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    
    <title>Bakdaulet</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    
    <!-- <link rel="stylesheet" type="text/css" href="css/reset.css"/> 
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/fancybox.css"/> -->
    <link rel="stylesheet" href="{{asset('/css/fancybox.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic"/>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easytabs.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <script type="text/javascript" src="js/jquery.easytabs.min.js"></script>   
	<script type="text/javascript" src="js/jquery.adipoli.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/jquery.gmap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    
</head>
    <body>
    @extends('layout')
    @section('content')
        <div id="container">
			<div class="top"> 
            	<div id="logo">
                	<h2>Bakdaulet Batyrkhan </h2>
                    <!-- <h3 class="title">@lang('lang.message_title')</h3> -->
                    <h2>@lang('lang.fullname')</h2>
                    
                    <h4>Student</h4>
                    <h4>@lang('lang.status')</h4>
                </div>
                

                <!-- <ul class="socialicons">
                	<li><a href="https://www.instagram.com/_.muratkhanova._/" class="social-text">Instagram</a></li>
                	
                </ul> -->
            </div>
            <div id="content" >
                <div id="profile"> 
                	<div class="about">
                    	<div class="photo-inner"><img src="css/images/photo.jpg" height="186" width="153" /></div>
                        <h1>Bakdaulet Batyrkhan </h1>
                        <h1>@lang('lang.fullname')</h1>
                        <h3>Student </h3>
                        <h3>@lang('lang.status') </h3>
                        <p>Everything will be fine</p>
                        <p>@lang('lang.quote')</p>
                    </div>
                    <!-- /About section -->
                     
                    <!-- Personal info section -->
                	<ul class="personal-info">
						<li><label>Full Name</label><span>Bakdaulet Batyrkhan </span></li>
                        <li><label>@lang('lang.fuul')</label><span>@lang('lang.fullname') </span></li>
                        <li><label>Birthday</label><span>18 December, 2001</span></li>

                        <li><label>Address</label><span>Shymkent</span></li>
                        <li><label>GMail</label><span>190103440@stu.sdu.kz </span></li>
                        <li><label>Mobile phone</label><span>8(705)799 93 93</span></li>
                        <li><label>Website</label><span>JS games</a></span></li>
                    </ul>

                </div>        
                <div class="menu">
                	<ul class="tabs">
                    	<li><a href="#profile" class="tab-profile">Profile</a></li>
                    	<li><a href="http://127.0.0.1:8000/about" class="tab-resume">About me</a></li>
                    	<!-- <li><a href="#portfolio" class="tab-portfolio">Портфолио</a></li> -->
                    	<li><a href="#contact" class="tab-contact">Contact</a></li>


                        <li><a href="#profile" class="tab-profile">{{__('lang.home')}}</a></li>
                    	<li><a href="http://127.0.0.1:8000/about" class="tab-resume">{{__('lang.about')}}</a></li>
                    	<!-- <li><a href="#portfolio" class="tab-portfolio">Портфолио</a></li> -->
                    	<li><a href="#contact" class="tab-contact">{{__('lang.contact')}}</a></li>
                    </ul>
                </div>

                <style>
       .dropdown-menu-dropdown-menu-right > option > a{
            color: #B429CB;
            text-decoration: none;
        }
        .l-header{
            display: flex;
            justify-content: space-between;
        }
        .dropdown-menu-dropdown-menu-right > a{
            display: inline-block;
            padding: 10px;
        }
    </style>

<div class="dropdown-menu-dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"> <img src="https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" width="20" alt=""> English</a>
                            <a class="dropdown-item" href="kz"><img src="https://www.akorda.kz/assets/media/flag.jpg" width="20" alt="">Қазақ тілі</a>
                            <a class="dropdown-item" href="ru"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/1200px-Flag_of_Russia.svg.png" width="20" alt="">Русский язык</a>
                </div>
                @endsection
                <body
            
                