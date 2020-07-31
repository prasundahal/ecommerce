@extends('includes.head')

@section('content')

    <section style="background: url({{url('/')}}/assets/images/{{$settings[0]->background}}) no-repeat center center; background-size: cover;">
        <div class="row" style="background-color:rgba(0,0,0,0.7);">
            <div class = "col-md-12">
            <div style="margin: 3% 0px 3% 0px;">
                <div class="text-center" style="color: #FFF;padding: 20px;">
                    <h1>{{$language->about_us}}</h1>
                </div>
            </div>
            </div>
        </div>


    </section>

   
    <div class="home-wrapper">
        <div class = "col-md-12">
        <!-- Starting of contact us area -->
        <div class="section-padding contact-area-wrapper wow fadeInUp">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    {!! $pagedata->about !!}
                </div>
            </div>
        </div></div>
        </div>
    </div>
@endsection
{{-- @stop

@section('footer')

@stop --}}