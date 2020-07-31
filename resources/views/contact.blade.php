@extends('includes.head')

@section('content')


 <section style="background: url({{url('/')}}/assets/images/{{$settings[0]->background}}) no-repeat center center; background-size: cover;">
        <div class="row" style="background-color:rgba(0,0,0,0.7);">

            <div style="margin: 3% 0px 3% 0px;">
                <div class="text-center" style="color: #FFF;padding: 20px;">
                    <h1>{{$language->contact_us_today}}</h1>
                </div>
            </div>

        </div>
    </section>

  
    
 
 
<section id="contact-us" class="contact-us section">
    <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="title">
                                <h4>{{$language->contact_us_today}}</h4>
                                <h3>Write us a message</h3>
                            </div>
                            <form action="{{action('FrontEndController@contactmail')}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="to" value="{{$pagedata->contact_email}}">
                                <!-- Success message -->
                                @if(Session::has('cmail'))
                                    <div class="alert alert-success" role="alert" id="success_message">
                                        {{ Session::get('cmail') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Your Name<span>*</span></label>
                                            <input name="name" type="text" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                           
                                            <label>Your Email<span>*</span></label>
                                            <input name="email" type="email"  placeholder="Your Email" required>
                                        </div>	
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            
                                            <label>Your Phone<span>*</span></label>
                                            <input name="phone" type="text"placeholder="Your Phone">
                                        </div>	
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <label>your message<span>*</span></label>
                                            <textarea name="message"id="comment" placeholder="Write a Replay" cols="30" rows="10" required></textarea>
                                        </div>
                                    </div>



                                    {{-- <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Your Subjects<span>*</span></label>
                                            <input name="subject" type="text" placeholder="">
                                        </div>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn ">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="single-head">
                            <div class="single-info">
                                <i class="fa fa-phone"></i>
                                <h4 class="title">Call us Now:</h4>
                                <ul>
                                    <li>{{$settings[0]->phone}}</li>
                                    {{-- <li>+522 672-452-1120</li> --}}
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa fa-envelope-open"></i>
                                <h4 class="title">Email:</h4>
                                <ul>
                                    <li>{{$settings[0]->email}}</a></li>
                                    
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa fa-location-arrow"></i>
                                <h4 class="title">Our Address:</h4>
                                <ul>
                                    <li>{{$settings[0]->address}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

 

    

@stop

@section('footer')

@stop