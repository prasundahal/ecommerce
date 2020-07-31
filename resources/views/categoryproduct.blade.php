@extends('includes.head')

@section('content')
<!-- Product Style -->
<section class="product-area shop-sidebar shop section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="shop-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title">Categories</h3>
                            <ul class="categor-list">
                                @foreach($menus as $menu)
								
								<li class="full-width-columns">
									<a href="{{url('/category')}}/{{$menu->slug}}">{{$menu->name}}</a>
									@if(\App\Category::where('mainid',$menu->id)->where('role','sub')->count() >0)	
									@endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Shop By Price -->
                            <div class="single-widget range">
                                <h3 class="title">Shop by Price</h3>
                                <div class="price-filter">
                                    <div class="price-filter-inner">
                                        <div id="slider-range"></div>
                                            <div class="price_slider_amount">
                                                <div class="label-input">
                                                <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price"/>    
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-filter-option">
                                    {{-- <h2 class="filter-title">Price</h2> --}}
                                    <form action="" method="GET">
                                        <div class="form-group padding-bottom-10">
                                            <input id="ex2" type="hidden"  class="form-control" value="" data-slider-min="0" data-slider-max="{{$maxvalue}}" data-slider-step="5" data-slider-value="[{{$mins}},{{$maxs}}]"/>
                                        </div>
                                        <div class="form-group padding-bottom-10">
                                           <li> <input type="text" id="price-min" class="price-input" size="15" value="{{$mins}}" name="min">
                                            {{-- <i class="fa fa-minus"></i> --}}
                                        </li>
                                        <br>
                                           <li><input type="text" id="price-max" class="price-input" size="15" value="{{$maxs}}" name="max">
                                           </li> 
                                           <br>
                                           <input type="submit" class="btn btn-warning" value="SEARCH">
                                            
                                           
                                        </div>
                                    </form>
                                </div>



                                {{-- <ul class="check-box-list">
                                    <li>
                                        <label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>
                                    </li>
                                    
                                </ul> --}}
                            </div>
                            <!--/ End Shop By Price -->
                        <!-- Single Widget -->
                        {{-- <div class="single-widget recent-post">
                            <h3 class="title">Recent post</h3>
                            <!-- Single Post -->
                            <div class="single-post first">
                                <div class="image">
                                    <img src="https://via.placeholder.com/75x75" alt="#">
                                </div>
                                <div class="content">
                                    <h5><a href="#">Girls Dress</a></h5>
                                    <p class="price">$99.50</p>
                                    <ul class="reviews">
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Single Post -->
                            <div class="single-post first">
                                <div class="image">
                                    <img src="https://via.placeholder.com/75x75" alt="#">
                                </div>
                                <div class="content">
                                    <h5><a href="#">Women Clothings</a></h5>
                                    <p class="price">$99.50</p>
                                    <ul class="reviews">
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Single Post -->
                            <div class="single-post first">
                                <div class="image">
                                    <img src="https://via.placeholder.com/75x75" alt="#">
                                </div>
                                <div class="content">
                                    <h5><a href="#">Man Tshirt</a></h5>
                                    <p class="price">$99.50</p>
                                    <ul class="reviews">
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Post -->
                        </div> --}}
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title">Manufacturers</h3>
                            <ul class="categor-list">
                                <li><a href="#">Forever</a></li>
                                <li><a href="#">giordano</a></li>
                                <li><a href="#">abercrombie</a></li>
                                <li><a href="#">ecko united</a></li>
                                <li><a href="#">zara</a></li>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <!-- Shop Top -->
                        {{-- <div class="shop-top">
                            <div class="product-filter-option">
                                <h3 class="filter-title">Filter Option</h3>
                                    <div class="form-group">
                                        <select id="sortby" class="form-control">
                                            @if($sort == "new")
                                                <option value="new" selected>{{$language->sort_by_latest}}</option>
                                            @else
                                                <option value="new">{{$language->sort_by_latest}}</option>
                                            @endif
                                            @if($sort == "old")
                                                <option value="old" selected>{{$language->sort_by_oldest}}</option>
                                            @else
                                                <option value="old">{{$language->sort_by_oldest}}</option>
                                            @endif
                                            @if($sort == "low")
                                                <option value="low" selected>{{$language->sort_by_lowest}}</option>
                                            @else
                                                <option value="low">{{$language->sort_by_lowest}}</option>
                                            @endif
                                            @if($sort == "high")
                                                <option value="high" selected>{{$language->sort_by_highest}}</option>
                                            @else
                                                <option value="high">{{$language->sort_by_highest}}</option>
                                            @endif

                                        </select>
                                    </div>
                            </div>
                            <ul class="view-mode">
                                <li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
                                <li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                        </div> --}}
                        <!--/ End Shop Top -->
                    </div>
                </div>
                <div class="row">
                    
                    
                            @forelse($products as $product)
                 <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}">
                                <img class="default-img" src="{{url('/assets/images/products')}}/{{$product->feature_image}}" alt="#">
                               
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" class="to-wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" class="to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}">{{$product->title}}</a></h3>
                            <div class="product-price">
                                <span><div class="product-price">
                                    @if($product->previous_price != "")
                                        <span class="original-price">${{\App\Product::Cost($product->id)}}</span>
                                    @else
                                    @endif
                                    <del class="offer-price">${{$product->previous_price}}</del>
                                </div></span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="row" style="margin-left: 0">
                    <div class="col-md-12">
                        <h3>{{$language->no_result}}</h3>
                    </div>
                </div>
            @endforelse
        </div>
        @if(count($products) > 0)
        <div class="row">
            <div class="col-md-12 text-center">
                <img id="load" src="{{url('/assets/images/default.gif')}}" style="display: none;width: 80px;">
            </div>
            <div class="col-md-12 text-center">
                <input type="hidden" id="page" value="2">
                <a href="javascript:;" id="load-more" class="product-filter-loadMore-btn">Load more</a>
            </div>
        </div>
        @endif
    </div>
</div>
              
    </div>
</section>


<script>

    $("#sortby").change(function () {
        var sort = $("#sortby").val();
        window.location = "{{url('/category')}}/{{$category->slug}}?sort="+sort;
    });

    $("#load-more").click(function () {
        $("#load").show();
        var slug = "{{$category->slug}}";
        var page = $("#page").val();
        var sort = $("#sortby").val();
        $.get("{{url('/')}}/loadcategory/"+slug+"/"+page+"?sort="+sort, function(data, status){
            $("#load").fadeOut();
            $("#products").append(data);
            //alert("Data: " + data + "\nStatus: " + status);
            $("#page").val(parseInt($("#page").val())+1);
            if ($.trim(data) == ""){
                $("#load-more").fadeOut();
            }

        });
    });
</script>
@endsection
<!--/ End Product Style 1  -->	
