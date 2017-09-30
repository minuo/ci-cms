<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @yield('title')

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ base_url('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ base_url('assets/css/mdb.min.css') }}" rel="stylesheet">

    <!-- Template styles -->
    <link href="{{ base_url('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--Main Content-->
    @yield('content')
    
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="{{ base_url('assets/js/jquery-2.2.3.min.js') }}"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ base_url('assets/js/tether.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ base_url('assets/js/bootstrap.min.js') }}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ base_url('assets/js/mdb.min.js') }}"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>