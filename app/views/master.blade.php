<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!-- Title here -->
    <title>Nkinga School Of Nursing</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" href="{{ URL::asset('css/settings.css') }}">
    <!-- FlexSlider Css -->
    <link rel="stylesheet" href="{{ URL::asset('css/flexslider.css') }}">
    <!-- Portfolio CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/prettyPhoto.css') }}">
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <!-- Custom Less -->
    <link rel="stylesheet" href="{{ URL::asset('css/less-style.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <link href="" rel="stylesheet">
    <!--[if IE]><link rel="stylesheet" href="{{ URL::asset('css/ie-style.css') }}"><![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('/')}}#">
</head>

<body>




<!-- Page Wrapper -->
<div class="wrapper">

    <!-- Header Start -->

    <div class="header">
        <div class="container">
            <!-- Header top area content -->
            <div class="header-top">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <!-- Header top left content contact -->
                        <div class="header-contact">
                            <!-- Contact number -->
                            <span style="font-size: 13px"><i class="fa fa-phone red fa"></i> +255 684 584 884</span>
                            <span style="font-size: 13px"><i class="fa fa-envelope red fa"></i> info@nkinganursingschool.com</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 pull-right">
                        <!-- Header top right content search box -->
                        <div class=" header-search">
                            <form class="form" role="form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
										  <span class="input-group-btn">
											<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
										  </span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <!-- Link -->
                            <a href="{{url('/')}}">
                                <!-- Logo area -->
                                <div class="logo">
                                    <img class="img-responsive" src="{{asset('img/logo.png')}}" alt="" />									<!-- Heading -->
                                    <h1 style="font-size: 25px">Nkinga School Of Nursing</h1><br>
                                    <!-- Paragraph -->
                                    <p style="font-size: 16px">Facility ester expedite instinct.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <!-- Navigation -->
                            <nav class="navbar navbar-default navbar-right" role="navigation">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{url('/')}}"><img src="{{asset('img/nav-menu/stethescope.png')}}" class="img-responsive" alt="" /> Home</a></li>
                                            <li><a href="{{url('about')}}"><img src="{{asset('img/nav-menu/stethescope.png')}}" class="img-responsive" alt="" /> About</a></li>
                                            <li class="dropdown hidden-xs">
                                                <a href="{{url('/')}}#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('img/nav-menu/stethescope.png')}}" class="img-responsive" alt="" /> Departments <b class="caret"></b></a>
                                                <ul class="dropdown-menu dropdown-md">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <!-- Menu Item -->
                                                                <div class="menu-item">
                                                                    <!-- Heading -->
                                                                    <h3>Pharmacy</h3>
                                                                    <!-- Image -->
                                                                    <img src="{{asset('img/dish/1.png')}}" class="img-responsive" alt="" />
                                                                    <!-- Paragraph -->
                                                                    <p>Sea nut perspicacity under omni piste natures mirror of there with consequent.</p>
                                                                    <!-- Button -->
                                                                    <a href="{{url('menu')}}" class="btn btn-danger btn-xs">View Menu</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6">
                                                                <!-- Menu Item -->
                                                                <div class="menu-item">
                                                                    <!-- Heading -->
                                                                    <h3>Blood</h3>
                                                                    <!-- Image -->
                                                                    <img src="{{asset('img/dish/7.png')}}" class="img-responsive" alt="" />
                                                                    <!-- Paragraph -->
                                                                    <p>Sea nut perspicacity under omni piste natures mirror as precode consequent.</p>
                                                                    <!-- Button -->
                                                                    <a href="{{url('menu')}}" class="btn btn-danger btn-xs">View Menu</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <!-- Menu Item -->
                                                                <div class="menu-item">
                                                                    <!-- Heading -->
                                                                    <h3>Laboratories</h3>
                                                                    <!-- Image -->
                                                                    <img src="{{asset('img/dish/5.png')}}" class="img-responsive" alt="" />
                                                                    <!-- Paragraph -->
                                                                    <p>Sea nut perspicacity under omni piste natures mirror consequent.</p>
                                                                    <!-- Button -->
                                                                    <a href="{{url('menu')}}" class="btn btn-danger btn-xs">View Menu</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown visible-xs">
                                            <a href="{{url('/')}}#" class="dropdown-toggle" data-toggle="dropdown"> Departments <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                            <li><a href="{{url('menu')}}">Vegetarian</a></li>
                                            <li><a href="{url('menu')}}">Non Vegetarian</a></li>
                                            <li><a href="{url('menu')}}">Special Menu</a></li>
                                            </ul>
                                            </li>
                                            <li><a href="{{url('gallery')}}"><img src="{{asset('img/nav-menu/stethescope.png')}}" class="img-responsive" alt="" /> Gallery</a></li>
                                            <li><a href="{{url('blog')}}"><img src="{{asset('img/nav-menu/stethescope.png')}}" class="img-responsive" alt="" /> Projects</a></li>
                                            <li><a href="{{url('blog')}}"><img src="{{asset('img/nav-menu/stethescope.png')}}" class="img-responsive" alt="" /> Blog</a></li>
                                            <li><a href="{{url('contact')}}"><img src="{{asset('img/nav-menu/stethescope.png')}}" class="img-responsive" alt="" /> Contacts</a></li>
                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav>
                        </div>
                    </div>
                </div> <!-- / .container -->
            </div>

            <!-- Header End -->

            @yield('contents')

            <!-- Footer Start -->

            <div class="footer padd">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <!-- Footer widget -->
                            <div class="footer-widget">
                                <!-- Logo area -->
                                <div class="logo">
                                    <img class="img-responsive" src="{{asset('img/logo.png')}}" alt="" />
                                    <!-- Heading -->
                                    <h1>Nkinga School Of Nursing</h1>
                                </div>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                                <hr />
                                <!-- Heading -->
                                 </div> <!--/ Footer widget end -->
                        </div>

                        <div class="clearfix visible-sm"></div>
                        <div class="col-md-4 col-sm-6">
                            <!-- Footer widget -->
                            <div class="footer-widget">
                                <!-- Heading -->
                                <h4>Join Us Today</h4>
                                <!-- Paragraph -->
                                <p>There is no one who loves pain itself, who seeks after it and wants to have it.</p>
                                <!-- Subscribe form -->
                                <form role="form">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Your name" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Your email" />
                                    </div>
                                    <button class="btn btn-danger" type="button">Subscribe</button>
                                </form>
                            </div> <!--/ Footer widget end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- Footer widget -->
                            <div class="footer-widget">
                                <!-- Heading -->
                                <h4>Contact Us</h4>
                                <div class="contact-details">
                                    <!-- Address / Icon -->
                                    <i class="fa fa-map-marker br-red"></i> <span>Nkinga School Of Nursing<br />Nkinga- Igunga<br />Tabora-Tanzania</span>
                                    <div class="clearfix"></div>
                                    <!-- Contact Number / Icon -->
                                    <i class="fa fa-phone br-green"></i> <span>+255 684 584 884</span>
                                    <div class="clearfix"></div>
                                    <!-- Email / Icon -->
                                    <i class="fa fa-envelope-o br-lblue"></i> <span><a href="{{url('/')}}#">abc@example.com</a></span>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- Social media icon -->
                                <div class="social">
                                    <a href="{{url('/')}}#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="{{url('/')}}#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="{{url('/')}}#" class="twitter"><i class="fa fa-github"></i></a>
                                </div>
                            </div> <!--/ Footer widget end -->
                        </div>
                    </div>
                    <!-- Copyright -->
                    <div class="footer-copyright">
                        <!-- Paragraph -->
                        <p>&copy; Copyright 2014 <a href="{{url('/')}}#">Nkinga School Of Nursing</a></p>
                    </div>
                </div>
            </div>

            <!-- Footer End -->

        </div><!-- / Wrapper End -->


        <!-- Scroll to top -->
        <span class="totop"><a href="{{url('/')}}#"><i class="fa fa-angle-up"></i></a></span>



        <!-- Javascript files -->
        <!-- jQuery -->
        {{HTML::script('js/jquery.js')}}
        <!-- Bootstrap JS -->
        {{HTML::script('js/bootstrap.min.js')}}
        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        {{HTML::script('js/jquery.themepunch.plugins.min.js')}}
        {{HTML::script('js/jquery.themepunch.revolution.min.js')}}
        <!-- FLEX SLIDER SCRIPTS  -->
        {{HTML::script('js/jquery.flexslider-min.js')}}
        <!-- Pretty Photo JS -->
        {{HTML::script('js/jquery.prettyPhoto.js')}}
        <!-- Respond JS for IE8 -->
        {{HTML::script('js/respond.min.js')}}
        <!-- HTML5 Support for IE -->
        {{HTML::script('js/html5shiv.js')}}
        <!-- Custom JS -->
        {{HTML::script('js/custom.js')}}
        <!-- JS code for this page -->
        <script>
            /* ******************************************** */
            /*  JS for SLIDER REVOLUTION  */
            /* ******************************************** */
            jQuery(document).ready(function() {
                jQuery('.tp-banner').revolution(
                    {
                        delay:9000,
                        startheight:500,

                        hideThumbs:10,

                        navigationType:"bullet",

                        hideArrowsOnMobile:"on",

                        touchenabled:"on",
                        onHoverStop:"on",

                        navOffsetHorizontal:0,
                        navOffsetVertical:20,

                        stopAtSlide:-1,
                        stopAfterLoops:-1,

                        shadow:0,

                        fullWidth:"on",
                        fullScreen:"off"
                    });
            });
            /* ******************************************** */
            /*  JS for FlexSlider  */
            /* ******************************************** */

            $(window).load(function(){
                $('.flexslider-recent').flexslider({
                    animation:		"fade",
                    animationSpeed:	1000,
                    controlNav:		true,
                    directionNav:	false
                });
                $('.flexslider-testimonial').flexslider({
                    animation: 		"fade",
                    slideshowSpeed:	5000,
                    animationSpeed:	1000,
                    controlNav:		true,
                    directionNav:	false
                });
            });

            /* Gallery */

            jQuery(".gallery-img-link").prettyPhoto({
                overlay_gallery: false, social_tools: false
            });

        </script>
</body>
</html>
