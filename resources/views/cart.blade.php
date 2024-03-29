@extends('includes.head')

@section('content')

    <div class="home-wrapper">
        <!-- Starting of add to cart table -->
        <div class="section-padding product-shoppingCart-wrapper wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <div class="table-responsive">
                            <div class="breadcrumb-box">
                                <a href="{{url('/')}}">Home</a>
                                <a href="{{url('/cart')}}">My Cart</a>
                            </div>
                            @if(Session::has('message'))
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                            <table class="table shopping-summery">
                                <thead>
                                <tr>
                                    <th>Remove</th>
                                    <th>Image</th>
                                    <th width="25%">{{$language->product_name}}</th>
                                    <th>{{$language->quantity}}</th>
                                    <th>{{$language->unit_price}}</th>
                                    <th>{{$language->subtotal}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($carts as $cart)
                                <tr id="item{{$cart->product}}">
                                    <td><a onclick="getDelete({{$cart->product}})"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                    <td><img src="{{url('/assets/images/products')}}/{{\App\Product::findOrFail($cart->product)->feature_image}}" alt=""></td>
                                    <td>
                                        <a href="{{url('/product')}}/{{$cart->product}}/{{str_replace(' ','-',strtolower(\App\Product::findOrFail($cart->product)->title))}}" class="product-name-header">{{$cart->title}}</a>
                                        <p class="table-product-review">
                                            <i class="fa fa-star"></i>
                                            {{-- <span>(06 Reviews)</span> --}}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="cart-btn">
                                            <span class="quantity-cart-minus" id="minus{{$cart->product}}"><i class="fa fa-minus"></i></span>
                                            <span id="number{{$cart->product}}">{{$cart->quantity}}</span>
                                            <span class="quantity-cart-plus" id="plus{{$cart->product}}"><i class="fa fa-plus"></i></span>
                                        </p>
                                    </td>
                                    <form id="citem{{$cart->product}}">
                                        {{csrf_field()}}
                                        @if(Session::has('uniqueid'))
                                            <input type="hidden" name="uniqueid" value="{{Session::get('uniqueid')}}">
                                        @else
                                            <input type="hidden" name="uniqueid" value="{{str_random(7)}}">
                                        @endif
                                        <input type="hidden" name="title" value="{{$cart->title}}">
                                        <input type="hidden" name="product" value="{{$cart->product}}">
                                        <input type="hidden" id="cost{{$cart->product}}" name="cost" value="{{$cart->cost}}" autocomplete="off">
                                        <input type="hidden" id="quantity{{$cart->product}}" name="quantity" value="{{$cart->quantity}}">
                                    </form>
                                    <td>{{$settings[0]->currency_sign}}<span id="price{{$cart->product}}">{{\App\Product::Cost($cart->product)}}</span></td>
                                    <td>{{$settings[0]->currency_sign}}<span id="subtotal{{$cart->product}}" class="subtotal">{{$cart->cost}}</span></td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">
                                            <h3>{{$language->empty_cart}}</h3>
                                        </td>
                                    </tr>
                                @endforelse

                                <tr style="border-top: 1px solid black;">
                                    <td colspan="5" style="text-align: right;">
                                        <h3>{{$language->total}}</h3>
                                    </td>
                                    <td colspan="2" style="text-align: right;">
                                        <h3>{{$settings[0]->currency_sign}}<span id="grandtotal">{{round($sum,2)}}</span></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <a href="{{url('/')}}" class="shopping-btn">{{$language->continue_shopping}}</a>
                                    </td>
                                    <td colspan="4">
                                        <a href="{{route('user.checkout')}}" class="update-shopping-btn">{{$language->proceed_to_checkout}}</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class = "col-md-12">
        <div class="bottom">
            <div class="total">
                <span>Total</span>
                <span class="total-amount">$134.00</span>
            </div>
            <a href="checkout.html" class="btn animate">Checkout</a>
        </div>
        </div> --}}
        <!-- Ending of add to cart table -->
    </div>

@stop

@section('footer')
<script>

</script>
@stop