<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="{{url('/')}}" id="logo">
                                <img alt="" src="{{ URL::asset('assets/images/logo')}}/{{$settings[0]->logo}}">
                            </a>
                        </div>
                        <div class="footer-title">
                            {{$language->about_us}}
                        </div>
                        <div class="footer-content">
                            <p>
                                {{$settings[0]->about}}
                            </p>

                        </div></div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="{{url('/')}}"><i class="fa fa-caret-right"></i> {{$language->home}}</a></li>
                                    <li><a href="{{url('/about')}}"><i class="fa fa-caret-right"></i> {{$language->about_us}}</a></li>
                                    <li><a href="{{url('/faq')}}"><i class="fa fa-caret-right"></i> {{$language->faq}}</a></li>
                                    <li><a href="{{url('/contact')}}"><i class="fa fa-caret-right"></i> {{$language->contact_us}}</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    {{-- <div class="single-footer links">
                        <h4>Customer Service</h4>
                        <ul>
                             <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Privacy Policy</a></li> 
                        </ul>
                    </div> --}}
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Get In Tuch</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li>NO. 342 - London Oxford Street.</li>
                                <li>012 United Kingdom.</li>
                                <li>info@eshop.com</li>
                                <li>+032 3456 7890</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <ul>
                                @if($sociallinks[0]->f_status == "enable")
                                <li>
                                    <a class="facebook" href="{{$sociallinks[0]->facebook}}">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                @endif
                                @if($sociallinks[0]->g_status == "enable")
                                <li>
                                    <a class="google" href="">
                                        <i class="fa fa-google"></i>
                                    </a>
                                </li>
                                @endif
                                @if($sociallinks[0]->t_status == "enable")
                                <li>
                                    <a class="twitter" href="{{$sociallinks[0]->twiter}}">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                @endif
                                @if($sociallinks[0]->link_status == "enable")
                                <li>
                                    <a class="tumblr" href="{{$sociallinks[0]->linkedin}}">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Copyright © 2020 <a href="#" target="_blank">Blendwit</a>  -  All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                            <img src="images/payments.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{ URL::asset('assets/jsjquery-ui.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ URL::asset('assets/jsbootstrap.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/colors.js')}}"></script>
	<script src="{{ URL::asset('assets/js/slicknav.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/owl-carousel.js')}}"></script>
	<script src="{{ URL::asset('assets/js/magnific-popup.js')}}"></script>
	<script src="{{ URL::asset('assets/js/waypoints.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/finalcountdown.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/nicesellect.js')}}"></script>
	<script src="{{ URL::asset('assets/js/flex-slider.js')}}"></script>
	<script src="{{ URL::asset('assets/js/scrollup.js')}}"></script>
	<script src="{{ URL::asset('assets/js/onepage-nav.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/easing.js')}}"></script>
	<script src="{{ URL::asset('assets/js/active.js')}}"></script>
    <script src="{{ URL::asset('assets/js/main.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>	
	<script src="{{ URL::asset('assets/js/gmap.min.js')}}"></script>
    <script src="{{ URL::asset('assetsjs/map-script.js')}}"></script>
</footer>