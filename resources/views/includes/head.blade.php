<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <link rel="icon" type="image/png" href="{{url('/')}}/assets/images/{{$settings[0]->favicon}}" />
    <title>{{$settings[0]->title}}</title>
	<!-- Favicon -->
	{{-- <link rel="icon" type="image/png" href="images/favicon.png"> --}}
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
    <!-- Bootstrap -->
    <link href="{{ URL::asset('assets/css/bootstrap.css')}}" rel="stylesheet">
	
    <!-- Magnific Popup -->
    <link href="{{ URL::asset('assets/css/magnific-popup.min.css')}}" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="{{ URL::asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    
    <!-- Fancybox -->
    <link href="{{ URL::asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
	
    <!-- Themify Icons -->
    <link href="{{ URL::asset('assets/css/themify-icons.css')}}" rel="stylesheet">
   
    <!-- Nice Select CSS -->
    <link href="{{ URL::asset('assets/css/niceselect.css')}}" rel="stylesheet">
   
    <!-- Animate CSS -->
    <link href="{{ URL::asset('assets/css/animate.css')}}" rel="stylesheet">
    
    <!-- Flex Slider CSS -->
    <link href="{{ URL::asset('assets/css/flex-slider.min.css')}}" rel="stylesheet">
   
    <!-- Owl Carousel -->
    <link href="{{ URL::asset('assets/css/owl-carousel.css')}}" rel="stylesheet">
 
    <!-- Slicknav -->
    <link href="{{ URL::asset('assets/css/slicknav.min.css')}}" rel="stylesheet">
   
	
    <!-- Eshop StyleSheet -->
    <link href="{{ URL::asset('assets/css/reset.css')}}" rel="stylesheet">
    
    <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet">
    
    <link href="{{ URL::asset('assets/css/responsive.css')}}" rel="stylesheet">
    

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	 <div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
<!-- Header -->
<header class="header shop">
	<!-- Topbar -->
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-12">
					<!-- Top Left -->
					<div class="top-left">
						<ul class="list-main">
							<li><i class="ti-headphone-alt"></i>{{$settings[0]->phone}}</li>
							<li><i class="ti-email"></i> {{$settings[0]->email}}</li>
						</ul>
					</div>
					<!--/ End Top Left -->
				</div>
				<div class="col-lg-8 col-md-12 col-12">
					<!-- Top Right -->
					<div class="right-content">
						<ul class="list-main">
							<li><i class="ti-location-pin"></i> {{$settings[0]->address}}</li>
							{{-- <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li> --}}
							<li> <div class="header-top-entry increase-icon-responsive login">
								@if(Auth::guard('profile')->guest())
									<a href="{{url('user/login')}}" class="title"><i class="fa fa-user"></i> <span>{{$language->sign_in}}</span></a>
								@else
									<a href="{{route('user.account')}}" class="title"><i class="fa fa-user"></i> <span>{{$language->my_account}}</span></a>
								@endif
							</div></li>
							
						</ul>
					</div>
					<!-- End Top Right -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Topbar -->
	<div class="middle-inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-12">
					<!-- Logo -->
					<div class="logo">
						<a href="{{url('/')}}" id="logo">
                            <img alt="" src="{{ URL::asset('assets/images/logo')}}/{{$settings[0]->logo}}">
                        </a>
						{{-- <a href="index.html"><img src="images/logo.png" alt="logo"></a> --}}
					</div>
					<!--/ End Logo -->
				
					<!--/ End Search Form -->
					<div class="mobile-nav"></div>
				</div>
				<div class="col-lg-8 col-md-7 col-12">
					<div class="search-bar-top">
						<div class="search-bar">
							<select>
								<option selected="selected">All Category</option>
							
								@foreach($menus as $menu)
								<option>
								<li class="full-width-columns">
									<a href="{{url('/category')}}/{{$menu->slug}}">{{$menu->name}}</a>
									@if(\App\Category::where('mainid',$menu->id)->where('role','sub')->count() >0)	
									@endif
								</li>
							</option>
							@endforeach
					
							</select>
							<form id="searchform">
							
						
								<div class="search-field">
									<input type="text" id="searchdata" value="" placeholder="{{$language->search}}" />
									<button type="button" id="searchbtn" class="btnn" class="btnn"><i class="ti-search"></i></button>
					
								
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-12">
					<div class="right-bar">
						<!-- Search Form -->
						<div class="sinlge-bar">
							<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
						</div>
						<div class="sinlge-bar">
							<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
						</div>
						<div class="sinlge-bar shopping">
							<a href="{{url('/cart')}}" class="single-icon"><i class="ti-bag"></i> </a>
							<!-- Shopping Item -->
							
							<!--/ End Shopping Item -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Header Inner -->
	<div class="header-inner">
		<div class="container">
			<div class="cat-nav-head">
				<div class="row">
					<div class="col-12">
						<div class="menu-area">
							<!-- Main Menu -->
							<nav class="navbar navbar-expand-lg">
								<div class="navbar-collapse">	
									<div class="nav-inner">	
										<ul class="nav main-menu menu navbar-nav">
											<li class="active"><a href="{{url('/')}}" class="">{{$language->home}}</a></li>
													
                                                												
                                                @if($pagesettings[0]->a_status == 1)
                                                <li class="simple-list"><a href="{{url('/about')}}" class="">{{$language->about_us}}</a></li>
                                            @endif
                                            @if($pagesettings[0]->f_status == 1)
                                            <li class="simple-list"><a href="{{url('/faq')}}" class="">{{$language->faq}}</a></li>
                                        @endif
                                        @if($pagesettings[0]->blogs_status == 1)
                                        <li class="simple-list"><a href="{{url('/blogs')}}" class="">{{$language->blog}}</a></li>
                                    @endif
                                    @if($pagesettings[0]->c_status == 1)
                                    <li class="simple-list"><a href="{{url('/contact')}}" class="">{{$language->contact_us}}</a></li>
                                @endif
										</ul>
									</div>
								</div>
							</nav>
							<!--/ End Main Menu -->	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Header Inner -->
</header>


<script>
    var mainurl = '{{url('/')}}';
    var currency = '{{$settings[0]->currency_sign}}';
    var language = {!! json_encode($language) !!};
</script>

{{-- 
<div class="search-box popup">
	<form id="searchform">
		<button type="button" id="searchbtn" class="search-button">
			<i class="fa fa-search"></i>

		</button> 

		<div class="search-field">
			<input type="text" id="searchdata" value="" placeholder="{{$language->search}}" />
		</div>
	</form>
</div> --}}

	@yield('content') 






	@if($pagesettings[0]->subscribe_status)
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>{{$language->subscription}}</h4>
							<p id="resp"></p>
							<form id="subform" action="{{action('FrontEndController@subscribe')}}" method="POST" target="_blank" class="newsletter-inner">
								{{csrf_field()}}
								<input type="email" id="email" placeholder="Enter Email" name="email" required>
								<button class="btn">{{$language->subscribe}}</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
	
	@extends('includes.footer')
    
	 