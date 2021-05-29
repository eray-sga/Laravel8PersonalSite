<!doctype html>
<html lang="en">
<head>

<!-- Simple Page Needs
================================================== -->
<title>@yield('title') ERAY KALKAN</title>
<meta charset="UTF-8">
<meta name="description" content="@yield('description','Eray KALKAN Kişisel Web Sitesidir.')">
<meta name="keywords" content="@yield('keyword','Eray Kalkan, Siber Güvenlik, yazılım, yazılım güvenliği eğitimleri')">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- Favicon
================================================== -->  
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/reset.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/cubeportfolio.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}"/> 
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/colors/blue.css')}}" id="color"/>



    
<!-- Google Web fonts
================================================== --> 
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

<!-- Font Icons
================================================== --> 
<link rel="stylesheet" href="{{asset('assets/icon-fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/icon-fonts/medical/flaticon.css')}}" />

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>
    <!-- Preloading -->
   <div id="preloader">
       <div class="spinner">
       </div>
   </div>  
       
   <!-- Wrapper --> 
   <div class="wrapper top_60 container">
   <div class="row">
           
   <!-- Profile Section
   ================================================== --> 
   <div class="col-lg-3 col-md-4">
       <div class="profile">
           <div class="profile-name">
               <span class="name">ERAY KALKAN</span><br>
               <span class="job">Web Geliştirici</span>
           </div>
           <figure class="profile-image">
               <img src="{{asset('assets/images/pp.jpg')}}" alt="">
           </figure> 
           <ul class="profile-information">
               <li></li>
               <li><p><span>İsim:</span> Eray KALKAN</p></li>
               <li><p><span>Meslek:</span> Web Geliştirici</p></li>
               <li><p><span>Email:</span> eray@eraykalkan.com.tr</p></li>
           </ul>
           <div class="col-md-12">
               <button class="site-btn icon">Download Cv <i class="fa fa-download" aria-hidden="true"></i></button>
           </div>
       </div>
   </div>
   
   <!-- Page Tab Container Div -->   
   <div id="ajax-tab-container" class="col-lg-9 col-md-8 tab-container">
