@extends('layouts.default')

@section('title')
<title>Home | {{ APPLICATION_NAME }}</title>
@endsection

@section('content')
<!--Carousel Wrapper-->
<div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-3" data-slide-to="1"></li>
        <li data-target="#carousel-example-3" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="carousel-item active view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20(1).jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeInUp col-md-12">
                    <li>
                        <h1 class="h1-responsive flex-item">Material Design for Bootstrap 4</h1>
                        <li>
                            <p class="flex-item">The most powerful and free UI KIT for Bootstrap</p>
                        </li>
                        <li>
                            <a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-primary btn-lg flex-item" rel="nofollow">Sign up!</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default btn-lg flex-item" rel="nofollow">Learn more</a>
                        </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.First slide -->

        <!-- Second slide -->
        <div class="carousel-item view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20(22).jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeInUp col-md-12">
                    <li>
                        <h1 class="h1-responsive">Lots of tutorials at your disposal</h1>
                    </li>
                    <li>
                        <p>And all of them are FREE!</p>
                    </li>
                    <li>
                        <a target="_blank" href="http://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-primary btn-lg" rel="nofollow">Start learning</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.Second slide -->

        <!-- Third slide -->
        <div class="carousel-item view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20(24).jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeInUp col-md-12">
                    <li>
                        <h1 class="h1-responsive">Visit our support forum</h1></li>
                    <li>
                        <p>Our community can help you with any question</p>
                    </li>
                    <li>
                        <a target="_blank" href="http://mdbootstrap.com/forums/forum/support/" class="btn btn-default btn-lg" rel="nofollow">Support forum</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.Third slide -->
        
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
@endsection