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

	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" href="{{url('/')}}/assets/images/{{$settings[0]->favicon}}" />
    <title>{{$settings[0]->title}}</title>
	<!-- Favicon -->
	{{-- <link rel="icon" type="image/png" href="images/favicon.png"> --}}
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
</script>
	<!-- StyleSheet -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
		var mainurl = '{{url('/')}}';
		var currency = '{{$settings[0]->currency_sign}}';
		var language = {!! json_encode($language) !!};
	</script>




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
								<li><i class="ti-headphone-alt"></i> {{$settings[0]->phone}}</li>
								<li><i class="ti-email"></i> {{$settings[0]->email}}</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i>  {{$settings[0]->address}}</li>
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
						  <div class="logo-wrapper">
                        <a href="{{url('/')}}" id="logo">
                            <img alt="" src="{{ URL::asset('assets/images/logo')}}/{{$settings[0]->logo}}">
                        </a>
                    </div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form open-search-popup">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
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
							{{-- <div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div> --}}
							<div class="sinlge-bar shopping">
								<a href="{{url('/cart')}}" class="single-icon"><i class="ti-bag"></i> </a>
								<!-- Shopping Item -->
                            </div>
                            <a href="{{url('/cart')}}" class="header-top-entry open-cart-popup" id="notify"><div class="title"><i class="fa fa-shopping-cart"></i><span>{{$language->my_cart}}</span> <b id="carttotal">{{$settings[0]->currency_sign}}0.00</b></div></a>
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
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<ul class="main-category">
									@foreach($menus as $menu)
									   <li class="main-mega"><a href="{{url('/category')}}/{{$menu->slug}}">{{$menu->name}} <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="mega-menu">
											
											@if(\App\Category::where('mainid',$menu->id)->where('role','sub')->count() >0)
												@foreach(\App\Category::where('mainid',$menu->id)->where('role','sub')->get() as $submenu)
												
											<li class="single-menu">
												
												<a href="{{url('/category')}}/{{$submenu->slug}}" class="title-link">{{$submenu->name}}</a>
												<div class="image">
													<img src="{{url('/assets')}}/images/categories/{{$menu->feature_image}}" alt="#">
												</div>
												<div class="inner-link">
													@foreach(\App\Category::where('subid',$submenu->id)->where('role','child')->get() as $childmenu)
													
													<a href="{{url('/category')}}/{{$childmenu->slug}}">{{$childmenu->name}}</a>
													@endforeach
												</div>

												
											</li>
											
											@endforeach
												@endif
											
											
										</ul>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
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
                                {{-- <li class="fixed-header-visible">
                                    <a class="fixed-header-square-button open-cart-popup"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="fixed-header-square-button open-search-popup"><i class="fa fa-search"></i></a>
                                </li> --}}
                            </ul>
														{{-- <ul class="dropdown">
															<li><a href="shop-grid.html">Shop Grid</a></li>
															<li><a href="cart.html">Cart</a></li>
															<li><a href="checkout.html">Checkout</a></li>
														</ul>
													</li>
													<li><a href="#">Pages</a></li>									
													<li><a href="#">Blog<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
														</ul>
													</li>
													<li><a href="contact.html">Contact Us</a></li> --}}
												{{-- </ul> --}}
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
	<!--/ End Header -->

	<section class="hero-slider">
		

		@if($pagesettings[0]->slider_status)


	

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
			@for ($i = 0; $i < count($sliders); $i++)
			@if($i == 0)
																			   <div class="carousel-item active">
																				  <div class="single-slider" style="background-image: url('{{url('/')}}/assets/images/sliders/{{$sliders[$i]->image}}')"; >
																					  <div class="container">
																						<div class="row no-gutters">
																							<div class="col-lg-9 offset-lg-3 col-12">
																								<div class="text-inner">
																									<div class="row">
																										<div class="col-lg-7 col-12">
																											<div class="hero-text" {{$sliders[$i]->text_position}}>
																												<h1>{{$sliders[$i]->title}}</h1>
																												{{-- <p>{{$sliders[$i]->text}}</p> --}}
																											 <div class="button">
																													<a href="{{$sliders[$i]->text}}" class="btn">Shop Now!</a>
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
																			  
																						   
		
							 @else
		
														<div class="carousel-item">
															<div class="single-slider" style="background-image: url('{{url('/')}}/assets/images/sliders/{{$sliders[$i]->image}}')"; >
																<div class="container">
																	<div class="row no-gutters">
																		<div class="col-lg-9 offset-lg-3 col-12">
																			<div class="text-inner">
																				<div class="row">
																					<div class="col-lg-7 col-12">
																						<div class="hero-text" {{$sliders[$i]->text_position}}>
																							<h1><span>UP TO 50% OFF </span>{{$sliders[$i]->title}}</h1>
																							<p>{{$sliders[$i]->text}}</p>
																							{{-- <div class="button">
																								<a href="#" class="btn">Shop Now!</a>
																							</div> --}}
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																</div>
														</div>
		
		
														@endif
														@endfor
			
													</div>
														<a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
															<span class="fa fa-angle-left" aria-hidden="true"></span>
															<span class="sr-only">Previous</span>
														</a>
										
														<!-- Right Control -->
														<a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
															<span class="fa fa-angle-right" aria-hidden="true"></span>
															<span class="sr-only">Next</span>
														</a>
		</div></div>
		@endif
		</section>
		
	
		@if($pagesettings[0]->sbanner_status)
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				@foreach($banners as $banner)
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">

									
									<a href="{{$banner->link}}" target="_blank">
										<img src="{{url('/assets')}}/images/brands/{{$banner->image}}" alt="">
									</a>
{{-- 
									<div class="content">
										<p>Man's Collectons</p>
										<h3>Summer travel <br> collection</h3>
										<a href="#">Discover Now</a>
									</div> --}}
									
						</div>
					</div>

					@endforeach
				</div>
				
			
			</div>
		</div>
	</section>
	@endif





	@if($pagesettings[0]->popularpro_status)
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>{{$language->popular_products}}</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						@foreach($tops as $product)
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}">
									<img class="default-img" src="{{url('/assets/images/products')}}/{{$product->feature_image}}" alt="Product Image" >
									<img class="hover-img" src="{{url('/assets/images/products')}}/{{$product->feature_image}}" alt="Product Image">
									
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" class=" to-wishlist"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										{{-- <button data-toggle="tooltip" class="btn btn-primary icon to-wishlist" type="button" title="Wishlist"> <i class="fa fa-heart"></i> </button> --}}
										{{-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> --}}
									</div>
									<div class="product-action-2">
										<a title="Add to cart"  class="to-cart" >Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}">{{$product->title}}</a></h3>
								<div class="product-price">




									
									@if($product->previous_price != "")
									<span class="original-price">{{$settings[0]->currency_sign}}{{\App\Product::Cost($product->id)}}</span>
								@else
								@endif
								<del class="old">{{$settings[0]->currency_sign}}{{$product->previous_price}}</del>
							</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						
						@endforeach
						
					
                    </div>
                </div>
            </div>
        </div>
	</div>
	@endif
	
	<!-- End Small Banner -->
	@if($pagesettings[0]->popularpro_status)
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>{{$language->featured_products}}</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						@foreach($features as $product)
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}">
									<img class="default-img" src="{{url('/assets/images/products')}}/{{$product->feature_image}}" alt="Product Image" >
									<img class="hover-img" src="{{url('/assets/images/products')}}/{{$product->feature_image}}" alt="Product Image">
									
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart to-wishlist "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" class="addTo-cart to-cart" href="#">{{$language->add_to_cart}}</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}">{{$product->title}}</a></h3>
								<div class="product-price">




									
									@if($product->previous_price != "")
									<span class="original-price">{{$settings[0]->currency_sign}}{{\App\Product::Cost($product->id)}}</span>
								@else
								@endif
								<del class="old">{{$settings[0]->currency_sign}}{{$product->previous_price}}</del>
							</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						
						@endforeach
						
					
                    </div>
                </div>
            </div>
        </div>
	</div>
	@endif
	
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				



				


				@foreach($bann as $banner)
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<a href="{{$banner->link}}" target="_blank">
							<img src="{{url('/assets')}}/images/brands/{{$banner->image}}" alt="">
						</a>
						{{-- <div class="content">
							<p>Man's Collectons</p>
							<h3>Man's items <br>Up to<span> 50%</span></h3>
							<a href="#">Shop Now</a>
						</div> --}}
					</div>
				</div>
				@endforeach
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				{{-- <div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>shoes women</p>
							<h3>mid season <br> up to <span>70%</span></h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div> --}}
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	

	<!-- End Most Popular Area -->
	



	
	@if($pagesettings[0]->popularpro_status)
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>{{$language->latest_products}}</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						@foreach($latests as $product)
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}">
									<img class="default-img" src="{{url('/assets/images/products')}}/{{$product->feature_image}}" alt="Product Image" >
									<img class="hover-img" src="{{url('/assets/images/products')}}/{{$product->feature_image}}" alt="Product Image">
									
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart to-wishlist "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" class="addTo-cart to-cart" href="#">{{$language->add_to_cart}}</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}">{{$product->title}}</a></h3>
								<div class="product-price">




									
									@if($product->previous_price != "")
									<span class="original-price">{{$settings[0]->currency_sign}}{{\App\Product::Cost($product->id)}}</span>
								@else
								@endif
								<del class="old">{{$settings[0]->currency_sign}}{{$product->previous_price}}</del>
							</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						
						@endforeach
						
					
                    </div>
                </div>
            </div>
        </div>
	</div>
	@endif
	

	
	
	<!-- Start Cowndown Area -->

	@if($pagesettings[0]->lbanner_status)
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">





							<a href="{{$pagesettings[0]->banner_link}}" target="_blank">
								<img style="width: 100%;" src="{{url('/assets/images')}}/{{$pagesettings[0]->large_banner}}" alt="">
							</a>
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Deal of day</p>
								<h3 class="title">Beatutyful dress for women</h3>
								<p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien. </p>
								<h1 class="price">$1200 <s>$1890</s></h1>
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	@endif


{{-- @if($pagesettings[0]->latestpro_status) --}}
	<!-- Start Product Area -->
	<div class="product-area section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>All Products</h2>
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-12">
					<div class="product-info">
						<div class="tab-pane fade show active" id="man" role="tabpanel">
							<div class="tab-single">
								<div class="row">
									@foreach($products as $product)
									 <div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}">
													<img class="default-img" src="{{url('/assets/images/products')}}/{{$product->feature_image}}" alt="#">
													<img class="hover-img" src="{{url('/assets/images/products')}}/{{$product->feature_image}}" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="javascript:;" class="wish-list to-wishlist" onclick="getQuickView({{$product->id}})" data-toggle="modal" data-target="#myModal"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div> 
													<div class="product-action-2">
														<a title="Add to cart" class="addTo-cart to-cart" href="#">{{$language->add_to_cart}}</a>
													</div>
													 {{-- <div class="product-action-2">
														<div class="product-meta-area">
															<form class="addtocart-form">
																{{csrf_field()}}
																@if(Session::has('uniqueid'))
																	<input type="hidden" name="uniqueid" value="{{Session::get('uniqueid')}}">
																@else
																	<input type="hidden" name="uniqueid" value="{{str_random(7)}}">
																@endif
																<input type="hidden" name="title" value="{{$product->title}}">
																<input type="hidden" name="product" value="{{$product->id}}">
																<input type="hidden" id="cost" name="cost" value="{{\App\Product::Cost($product->id)}}">
																<input type="hidden" id="quantity" name="quantity" value="1">
																 @if($product->stock != 0 || $product->stock === null )
																 <button type="button" class="addTo-cart to-cart"><i class="fa fa-cart-plus"></i><span>{{$language->add_to_cart}}</span></button>
																@else
																	<button type="button" class="addTo-cart  to-cart" disabled><i class="fa fa-cart-plus"></i>{{$language->out_of_stock}}</button>
																@endif 
															</form>
															{{-- <a  href="javascript:;" class="wish-list" onclick="getQuickView({{$product->id}})" data-toggle="modal" data-target="#myModal">
																<i class="fa fa-eye"></i>
															</a> 
														</div>	
													</div>  --}}
												</div>
											</div>
											<div class="product-content">
												<h3><a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}">{{$product->title}}</a></h3>
												<div class="product-price">
													@if($product->previous_price != "")
                                                    <span class="original-price">{{$settings[0]->currency_sign}}{{\App\Product::Cost($product->id)}}</span>
                                                @else
                                                @endif
                                                {{-- <del class="offer-price">{{$settings[0]->currency_sign}}{{$product->previous_price}}</del> --}}
                                            </div>
											</div>
										</div>
									</div>
									@endforeach


								</div>
							</div>
						</div>
					</div>
				</div>

				
			</div>

		</div>
	</div>
	

	<!-- /End Cowndown Area -->
    {{-- @if($pagesettings[0]->blogs_status)
	<!-- Start Shop Blog  -->
	<section class="shop-blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
                        <h2>{{$languages->blog_title}}</h2>
                        <p>{{$languages->blog_text}}</p>
					</div>
				</div>
            </div>
            
			<div class="row">
                @foreach($blogs as $blog) 
				<div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog  -->
                   
					<div class="shop-single-blog">
                        
						<img src="{{url('/assets')}}/images/blog/{{$blog->featured_image}}" alt="Blog Image">
						<div class="content">
							<p class="date">{{date('d M Y',strtotime($blog->created_at))}}</p>
                            <a href="#" class="title">{{$blog->title}}</a>
                            <p>{{substr(strip_tags($blog->details),0,125)}}</p>
                            <a href="{{url('/blog')}}/{{$blog->id}}" class="more-btn">{{$language->view_details}}</a>
						</div>
                    </div>
                    
					<!-- End Single Blog  -->
				</div>
			
                @endforeach
            </div>

           
		</div>
    </section>
    @endif
	<!-- End Shop Blog  -->
	 --}}


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
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- Start Shop Newsletter  -->
	
	<!-- End Shop Newsletter -->
	
	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										{{-- <a href="#" class="btn min"><i class="fa fa-compress"></i></a> --}}
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
	


	{{-- <div class="cart-box popup">
		<div class="popup-container">
			<div id="emptycart">
				{{$language->empty_cart}}
			</div>
			<div id="goCart">

			</div>
			<div class="summary">
				<div class="grandtotal">{{$language->total}} <span id="grandttl">{{$settings[0]->currency_sign}}0.00</span></div>
			</div>
			<div class="cart-buttons">
				<div class="column">
					<a href="{{url('/cart')}}" class="button style-3">{{$language->view_cart}}</a>
					<div class="clear"></div>
				</div>
				<div class="column">
					<a href="{{route('user.checkout')}}" class="button style-4">{{$language->checkout}}</a>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div> --}}



    <!-- Modal end -->
	@yield('content')
	<!-- Start Footer Area -->
	@extends('includes.footer')
	<script>

$(".to-cart").click(function(){

        var formData = $(this).parents('form:first').serializeArray();
        $.ajax({
            type: "POST",
            url: mainurl+'/cartupdate',
            data:formData,
            success: function (data) {
                getCart();
                $.notify(language.added_to_cart, "success");
            },
            error: function (data) {
                //console.log('Error:', data);
            }
        });
    });


	</script>
	<script>
		var mainurl = '{{url('/')}}';
		var currency = '{{$settings[0]->currency_sign}}';
		var language = {!! json_encode($language) !!};
	</script>
</body>
</html>