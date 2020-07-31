@extends('includes.head')
@section('content')


<div class="home-wrapper">
    <div class="section-padding product-details-wrapper padding-bottom-0 wow fadeInUp">
        <div class="container">
            <div class="product-projects-FullDiv-area">
<div class="row">
    <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="product-review-carousel-img product-zoom">
            <img id="imageDiv" src="{{url('/assets/images/products')}}/{{$productdata->feature_image}}" alt="">
        </div>
        <div class="product-review-owl-carousel">
            <div class="single-product-item">
                <img id="iconOne" onclick="productGallery(this.id)" src="{{url('/assets/images/products')}}/{{$productdata->feature_image}}" alt="">
            </div>
            @forelse($gallery as $galdta)
                <div class="single-product-item">
                    <img id="galleryimg{{$galdta->id}}" onclick="productGallery(this.id)" src="{{url('/assets/images/gallery')}}/{{$galdta->image}}" alt="">
                </div>
            @empty
            @endforelse
        </div>
    </div>
    <div class="col-md-7 col-sm-7 col-xs-12">
        <h2 class="product-header">{{$productdata->title}}</h2>
        @if($productdata->owner != "admin")
            @if(\App\Vendors::where('id',$productdata->vendorid)->count() != 0)
                <strong class="">{{$language->vendor}}: <a href="{{url('/shop')}}/{{$productdata->vendorid}}/{{str_replace(' ','-',strtolower(\App\Vendors::findOrFail($productdata->vendorid)->shop_name))}}" target="_blank">{{\App\Vendors::findOrFail($productdata->vendorid)->shop_name}}</a></strong>
            @endif
        @else
        @endif
        <p class="product-status">
        @if($productdata->stock != 0 || $productdata->stock === null )
            <span class="available">
                <i class="fa fa-check-square-o"></i>
                <span>{{$language->available}}</span>
            </span>
        @else
            <span class="not-available">
            <i class="fa fa-times-circle-o"></i>
            <span>{{$language->out_of_stock}}</span>
            </span>
        @endif

        </p>
        <div>
            <div class="ratings">
                <div class="empty-stars"></div>
                <div class="full-stars" style="width:{{\App\Review::ratings($productdata->id)}}%"></div>
            </div>
            @if(\App\Review::reviewCount($productdata->id) > 1)
                <span>{{\App\Review::reviewCount($productdata->id)}} Reviews</span>
            @else
                <span>{{\App\Review::reviewCount($productdata->id)}} Review</span>
            @endif
        </div>
        <p class="product-description">
            {{substr(strip_tags($productdata->description), 0, 600)}}...
            <a href="">show more</a>
        </p>
        <h1 class="product-price">
            @if($productdata->previous_price != "")
                <span>
                    <del>{{$settings[0]->currency_sign}}{{$productdata->previous_price}}</del>
                </span>
            @endif
                {{$settings[0]->currency_sign}}{{\App\Product::Cost($productdata->id)}}
        </h1>

        @if($productdata->sizes != null)
            <div class="product-size" id="product-size">
            <p>Size</p>
                @foreach(explode(',',$productdata->sizes) as $size)
                <span>{{$size}}</span>
                @endforeach
            </div>
        @endif
        <div class="product-quantity">
            <p>{{$language->quantity}}</p>
            <span class="quantity-btn" id="qty-minus"><i class="fa fa-minus"></i></span>
            <span id="pqty">1</span>
            <span class="quantity-btn" id="qty-add"><i class="fa fa-plus"></i></span>
        </div>
        <form class="addtocart-form">
            {{csrf_field()}}
            @if(Session::has('uniqueid'))
                <input type="hidden" name="uniqueid" value="{{Session::get('uniqueid')}}">
            @else
                <input type="hidden" name="uniqueid" value="{{str_random(7)}}">
            @endif
            <input type="hidden" id="price" name="price" value="{{\App\Product::Cost($productdata->id)}}">
            <input type="hidden" name="title" value="{{$productdata->title}}">
            <input type="hidden" name="product" value="{{$productdata->id}}">
            <input type="hidden" id="cost" name="cost" value="{{\App\Product::Cost($productdata->id)}}">
            <input type="hidden" id="quantity" name="quantity" value="1">
            <input type="hidden" id="size" name="size" value="">
            @if($productdata->stock != 0 || $productdata->stock === null )
                <button type="button" class="product-addCart-btn to-cart"><i class="fa fa-cart-plus"></i><span>{{$language->add_to_cart}}</span></button>
            @else
                <button type="button" class="product-addCart-btn  to-cart" disabled><i class="fa fa-cart-plus"></i>{{$language->out_of_stock}}</button>
            @endif
        </form>
    </div>
</div>
</div>
</div>
    </div>














    @if($pagesettings[0]->popularpro_status)
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>{{$language->related_products}}</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        @foreach($relateds as $product)
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}">
									<img class="default-img" src="{{url('/assets/images/products')}}/{{$product->feature_image}}" alt="Product Image" >
									<img class="hover-img" src="{{url('/assets/images/products')}}/{{$product->feature_image}}" alt="Product Image">
									
								</a>
								<div class="button-head">
									<div class="product-action">
                                        <a title="Add to cart" class="addTo-cart" href="">Add to cart</a>
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" class="to-wishlist" onclick="getQuickView({{$product->id}})" data-toggle="modal" data-target="#myModal"href="javascript:;"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                    </div>
                                     
									<div class="product-action-2">
										
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
			</section>
		<!--/ End Blog Single -->
			
		













@endsection

<script>
    $('#star1').starrr({
        rating: 5,
        change: function(e, value){
            if (value) {
                $('.your-choice-was').show();
                $('.choice').text(value);
                $('#rate').val(value);
            } else {
                $('.your-choice-was').hide();
            }
        }
    });

    $("#showmore").click(function() {
        $('html, body').animate({
            scrollTop: $("#description").offset().top - 200
        }, 1000);
    });


    $('#star1').starrr({
        rating: 5,
        change: function(e, value){
            if (value) {
                $('.your-choice-was').show();
                $('.choice').text(value);
                $('#rate').val(value);
            } else {
                $('.your-choice-was').hide();
            }
        }
    });
</script>