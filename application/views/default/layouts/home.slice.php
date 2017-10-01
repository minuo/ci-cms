<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ base_url('assets/default/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ base_url('assets/default/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ base_url('assets/default/css/clean-blog.min.css') }}" rel="stylesheet">
    
    @yield('page-styles')

  </head>

  <body>

    @include('default.includes.nav')

    @yield('header')

    @yield('content')

    <hr>

    @include('default.includes.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ base_url('assets/default/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ base_url('assets/default/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ base_url('assets/default/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ base_url('assets/default/js/clean-blog.min.js') }}"></script>

    @yield('page-scripts')

  </body>

</html>