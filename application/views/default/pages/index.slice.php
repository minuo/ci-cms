@extends('default.layouts.home')

@section('title')
<title>{{ $page->post_title }} | {{ APPLICATION_NAME }}</title>
@endsection

@section('content')

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <strong>Navbar</strong>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#best-features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>

                    </li>
                </ul>
                <form class="form-inline waves-effect waves-light">
                    <input class="form-control" type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->
    
    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <ul>
                <li>
                    <h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s">New York Advertising Agency</h1></li>
                <li>
                    <p class="wow fadeInDown">Digital advertising agency focused on today's consumers</p>
                </li>
                <li>
                    <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-primary btn-lg wow fadeInLeft" data-wow-delay="0.2s" rel="nofollow">Sign up!</a>
                    <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default btn-lg wow fadeInRight" data-wow-delay="0.2s" rel="nofollow">Learn more</a>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->

    <!-- Main container-->
    <div class="container">

        <div class="divider-new">
            <h2 class="h2-responsive wow fadeIn" data-wow-delay="0.2s">About us</h2>
        </div>

        <!--Section: About-->
        <section id="about" class="text-center wow fadeIn" data-wow-delay="0.2s">

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.</p>

        </section>
        <!--Section: About-->

        <div class="divider-new">
            <h2 class="h2-responsive wow fadeIn">Best features</h2>
        </div>

        <!--Section: Best features-->
        <section id="best-features">

            <div class="row">

                <!--First columnn-->
                <div class="col-lg-3">
                    <!--Card-->
                    <div class="card wow fadeIn">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(25).jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">360 Advertising</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->

                <!--Second columnn-->
                <div class="col-lg-3">
                    <!--Card-->
                    <div class="card wow fadeIn" data-wow-delay="0.2s">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(14).jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">Top-class Team</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Second columnn-->

                <!--Third columnn-->
                <div class="col-lg-3">
                    <!--Card-->
                    <div class="card wow fadeIn" data-wow-delay="0.4s">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(21).jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">Newest Technolgies</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Third columnn-->

                <!--First columnn-->
                <div class="col-lg-3">
                    <!--Card-->
                    <div class="card wow fadeIn" data-wow-delay="0.6s">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(37).jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">24/7 Support</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->
            </div>

        </section>
        <!--/Section: Best features-->

        <div class="divider-new">
            <h2 class="h2-responsive wow fadeIn">Contact us</h2>
        </div>

        <!--Section: Contact-->
        <section id="contact">
            <div class="row">
                <!--First column-->
                <div class="col-md-8">
                    <div id="map-container" class="z-depth-1 wow fadeIn" style="height: 300px"></div>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4">
                    <ul class="text-center">
                        <li class="wow fadeIn" data-wow-delay="0.2s"><i class="fa fa-map-marker teal-text"></i>
                            <p>New York, NY 10012, USA</p>
                        </li>

                        <li class="wow fadeIn" data-wow-delay="0.3s"><i class="fa fa-phone teal-text"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li class="wow fadeIn" data-wow-delay="0.4s"><i class="fa fa-envelope teal-text"></i>
                            <p>contact@mdbootstrap.com</p>
                        </li>
                    </ul>
                </div>
                <!--/Second column-->
            </div>
        </section>
        <!--Section: Contact-->

    </div>
    <!--/ Main container-->



    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 offset-lg-1 hidden-lg-down">
                    <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                    <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                    <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title">Our Projects</h5>
                    <ul>
                        <li><a href="#!">Jeffs Bike Shop</a></li>
                        <li><a href="#!">Main Street Restaurant</a></li>
                        <li><a href="#!">Connect Groceries</a></li>
                        <li><a href="#!">White-To-Black Coffe Shop</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Useful Resources</h5>
                    <ul>
                        <li><a href="#!">2016 Advertising Report</a></li>
                        <li><a href="#!">Best NY Agencies</a></li>
                        <li><a href="#!">Trends for 2017</a></li>
                        <li><a href="#!">World Advertisement Report</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Find us on</h5>
                    <ul>
                        <li><a href="#!">Facebook</a></li>
                        <li><a href="#!">Twitter</a></li>
                        <li><a href="#!">LinkedIn</a></li>
                        <li><a href="#!">Behance</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <h4>Material Design for Bootstrap</h4>
            <ul>
                <li>
                    <h5>Get our UI KIT for free</h5></li>
                <li><a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-info" rel="nofollow">Sign up!</a></li>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default" rel="nofollow">Learn more</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


@endsection