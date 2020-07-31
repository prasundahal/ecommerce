<section id="contact-us" class="contact-us section">
    <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 col-4">

        
     <div class="single-head">
               
            <div class="single-info">
                <a href="{{route('user.account')}}"><h4 class="title">Dashboard</h4></a>
            </div>
            <div class="single-info">
                 <a href="{{route('user.accinfo')}}"><h4 class="title">Account</h4></a>
            </div>
            <div class="single-info">
                <a href="{{route('user.accpass')}}"><h4 class="title">Change Password</h4></a>
           </div>
           <div class="single-info">
            <a href="{{route('user.orders')}}"><h4 class="title">My Orders</h4></a>
           </div>


           <div class="single-info">
            <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><h4> Logout</h4> </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}</form>
         </div>
     </div>
        </div>
                </div>
</div>
    </div>



                   
                   
             
</section>



