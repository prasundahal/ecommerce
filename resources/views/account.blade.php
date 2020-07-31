@extends('includes.head')

@section('content')

<div class="home-wrapper">
    <!-- Starting of Account Dashboard area -->
    <div class="section-padding dashboard-account-wrapper wow fadeInUp">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-13">
                    <div class="dashboard-breadcroumb-section">
                        <img src="{{url('/')}}/assets/images/{{$settings[0]->background}}" alt="no img">
                       
                    </div>
                    </div> --}}
                <div class="col-md-6">
                    @include('includes.usermenu')
                </div>
               
                        
                <section id="contact-us" class="contact-us section">
                    <div class="container">
                            <div class="contact-head">
                                <div class="row">
                                    <div class="col-md-28">
                                        <div class="single-head">
                                            
   
    <p><strong>Name : </strong>{{$user->name}}</p>
    <p><strong>Email : </strong>{{$user->email}}</p>
    <p><strong>Phone : </strong>{{$user->phone}}</p>
    <p><strong>Address : </strong>{{$user->address}}</p>
    <p><strong>City : </strong>{{$user->city}}</p>
    <p><strong>Post Code : </strong>{{$user->zip}}</p>
    <a href="{{route('user.accinfo')}}" class="address-btn">Edit address</a>
</div>
                 </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ending of Account Dashboard area -->
</div>

	

    </div></div>

@stop

@section('footer')

@stop











