<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{$settings[0]->title}} - Admin Panel</title>

  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/main.css">

 

   <script src="https://kit.fontawesome.com/34463f0b6a.js" crossorigin="anonymous"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    {{-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul> --}}

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <ul class="nav navbar-right top-nav">

        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
            <ul class="dropdown-menu">
                <li><a href="{!! url('admin/adminprofile') !!}"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                <li><a href="{!! url('admin/adminpassword') !!}"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-fw fa-power-off"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>
      <!-- Notifications Dropdown Menu -->
     
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   
      {{-- <a class="navbar-brand" href="{!! url('admin/dashboard') !!}">
        <img class="logo" src="{!! url('assets/images/logo') !!}/{{$settings[0]->logo}}" alt="LOGO">
    </a> --}}
    
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <a class="navbar-brand" href="{!! url('admin/dashboard') !!}">
            <img class="logo" src="{!! url('assets/images/logo') !!}/{{$settings[0]->logo}}" alt="LOGO">
        </a>
        </div>
      
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="{!! url('admin/dashboard') !!}"><i class="fa fa-fw fa-home"></i>  Dashboard</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/orders') !!}"><i class="fa fa-fw fa-usd"></i> Orders</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/products') !!}"><i class="fa fa-fw fa-shopping-cart"></i> Products</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/withdraws') !!}"><i class="fa fa-fw fa-bank"></i> Withdraws</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/customers') !!}"><i class="fa fa-fw fa-user"></i> Customers</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/categories') !!}"><i class="fa fa-fw fa-sitemap"></i> Manage Category</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/blog') !!}"><i class="fa fa-fw fa-file-text"></i> Blog</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/sliders') !!}"><i class="fa fa-fw fa-photo"></i> Slider Settings</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/language-settings') !!}"><i class="fa fa-fw fa-language"></i> Language Settings</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/testimonial') !!}"><i class="fa fa-fw fa-quote-right"></i> Testimonial Section</a>
          </li>

         

          <li class="nav-item">
            <a href="{!! url('admin/themecolor') !!}"><i class="fa fa-fw fa-paint-brush"></i> Theme Color Settings</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/pagesettings') !!}"><i class="fa fa-fw fa-file-code-o"></i> Page Settings</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/social') !!}"><i class="fa fa-fw fa-paper-plane"></i> Social Settings</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/tools') !!}"><i class="fa fa-fw fa-wrench"></i> Seo Tools</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('admin/settings') !!}"><i class="fa fa-fw fa-cogs"></i> General Settings</a>
          </li>
          <li class="nav-item">
            <a href="{!! url('admin/subscribers') !!}"><i class="fa fa-fw fa-group"></i> Subscribers</a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
   

    
  

  </div>


 
 

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script>
  var baseUrl = '{!! url('/') !!}';
</script>
<!-- jQuery -->
<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.smooth-scroll.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-tagsinput.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-colorpicker.js')}}"></script>
<!-- Switchery -->
<script src="{{ URL::asset('assets/js/bootstrap-toggle.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/plugin/nicEdit.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/admin-genius.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/Chart.min.js')}}"></script>

<script>
  $("#maincats").change(function () {
      $("#subs").html('<option value="">Select Sub Category</option>');
      $("#subs").attr('disabled',true);
      $("#childs").html('<option value="">Select Sub Category</option>');
      $("#childs").attr('disabled',true);
      var mainid = $(this).val();
      $.get('{{url('/')}}/subcats/'+mainid, function(response){
          $("#subs").attr('disabled',false);
          $.each(response, function(i, cart){
              $.each(cart, function (index, data) {
                  $("#subs").append('<option value="'+data.id+'">'+data.name+'</option>');
                  //console.log('index', data)
              })
          })
      });
  });
  $("#subs").change(function () {
      $("#childs").html('<option value="">Select Sub Category</option>');
      $("#childs").attr('disabled',true);
      var mainid = $(this).val();
      $.get('{{url('/')}}/childcats/'+mainid, function(response){
          $("#childs").attr('disabled',false);
          $.each(response, function(i, cart){
              $.each(cart, function (index, data) {
                  $("#childs").append('<option value="'+data.id+'">'+data.name+'</option>');
                  //console.log('index', data)
              })
          })
      });
  });


</script>

</body>
</html>
