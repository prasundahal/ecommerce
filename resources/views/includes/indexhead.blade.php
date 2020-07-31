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
	{{-- <div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div> --}}
    <!-- End Preloader -->
    @yield('content')