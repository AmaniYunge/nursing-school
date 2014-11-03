@extends('master')
@section('contents')

<!-- Banner Start -->

<div class="banner padd">
    <div class="container">
        <!-- Image -->
        <img class="img-responsive" src="{{asset('img/crown-white.png')}}" alt="" />
        <!-- Heading -->
        <h2 class="white">About Us</h2>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">About Us</li>
        </ol>
        <div class="clearfix"></div>
    </div>
</div>

<!-- Banner End -->



<!-- Inner Content -->
<div class="inner-page padd">
<!-- General Info Start -->

<div class="general">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <!-- General information content -->
                <div class="general-content">
                    <!-- Navigation tab -->
                    <ul class="nav nav-tabs">
                        <!-- Navigation tabs (Job titles ). Use unique value for "href" in "anchor tags". -->
                        <li class="active"><a href="general.html#tab1" data-toggle="tab">About Us</a></li>
                        <li><a href="general.html#tab2" data-toggle="tab">Terms &amp; Conditions</a></li>
                        <li><a href="general.html#tab3" data-toggle="tab">Disclaimer</a></li>
                        <li><a href="general.html#tab4" data-toggle="tab">Privacy Policy</a></li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content">
                        <!-- In "id", use the value which you used in above anchor tags -->
                        <div class="tab-pane active" id="tab1">
                            <!-- Heading -->
                            <h5>About Us</h5>
                            <!-- Paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nitusrpis egestas. Suspendisse porttitor luctus imperdiet. <a href="general.html#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sit amet blandit viverra, dignissim eget est. Ut <strong>commodo ullamcorper risus nec</strong> mattis.</p>
                            <!-- Paragraph -->
                            <p>Fusce imperdiet, risus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris. Integer porta erat ac eros porta ultrices. Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="general.html#">Morbi dictum nibh gravida</a> mi pretium dapibus. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimen laoreet justo ullamcorper.</p>
                            <!-- List content -->
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check"></i> Etiam adipiscing posuere, nec iaculis justo dictum non</li>
                                <li><i class="fa fa-check"></i> Cras tincidunt mi non arcu hendrerit eleifend</li>
                                <li><i class="fa fa-check"></i> Aenean tincidunt justo aliquet et lobortis diam faucibus</li>
                                <li><i class="fa fa-check"></i> Maecenas hendrerit neque id ante dictum mattis</li>
                                <li><i class="fa fa-check"></i> Vivamus non neque lacus, et cursus tortor</li>
                            </ul>
                        </div> <!--/ tab-pane end -->
                        <div class="tab-pane" id="tab2">
                            <!-- heading -->
                            <h5>Terms &amp; Conditions</h5>
                            <!-- Paragraph -->
                            <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat. Proin rutrum, erat eget posuere semper, <em>arcu mauris posuere tortor</em>, in commodo enim magna id massa. Suspendisse potenti. Aliquam erat volutpat. Maecenas quis tristique turpis. Nulla facilisi. Duis sed velit at <a href="general.html#">magna sollicitudin cursus</a> ac ultrices magna. Aliquam consequat, purus vitae auctor ullamcorper, sem velit convallis quam, a pharetra justo nunc et mauris. Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <!-- Paragraph -->
                            <p>Fusce imperdiet, risus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus variusam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. Duis eget risus ac orci vulputate vestibul interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestiat laoreet justo ullamcorper.</p>
                            <!-- Paragraph -->
                            <p>ium dapibus. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. Duis eget risus ac orci vulputate vestibulum sit amet id orci. Etiam ac ante at lorem ultrices elementum. Vestibulum quis elit odio, id hendrerit ipsum. Fusce consequat leo vitae velit interdum at laoreet justo ullamcorper.</p>
                        </div> <!--/ tab-pane end -->
                        <div class="tab-pane" id="tab3">
                            <!-- heading -->
                            <h5>Disclaimer</h5>
                            <!-- Paragraph -->
                            <p>Fusce imperdiet, risus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris. Integer porta erat ac eros porta ultrices. Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="general.html#">Morbi dictum nibh gravida</a> velit interdum at laoreet justo ullamcorper.</p>
                            <!-- Paragraph -->
                            <p>Prisus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris. Integer porta erat ac eros porta ultrices. Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="general.html#">Morbi dictum nibh gravida</a> mi pretium dapibus.am in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. Duis eget risus ac orci vulputate vestibul Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. Duis eget risus ac orci vulputate vestibulum sit amet id orci. Etiam ac ante at lorem ultrices elementum. Vestibulum quis elit odio, id hendrerit ipsum. Fusce consequat lamcorper.</p>
                            <!-- Paragraph -->
                            <p>Mi pretium dapibus. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. Duis eget risus ac orci vulputate vestibulum sit amet id orci. Etiam ac ante at lorem ultrices elementum. Vestibulum quis elit odio, id hendrerit ipsum. Fusce consequat leo vitae velit interdum at laoreet justo ullamcorper.</p>
                        </div> <!--/ tab-pane end -->
                        <div class="tab-pane" id="tab4">
                            <!-- Heading -->
                            <h5>Privacy Policy</h5>
                            <!-- Paragraph -->
                            <p> Duis eget risus ac orci vulputate vestibulum sit amet id orci. Etiam ac ante at lorem ultrices elementum. Vestibulum quis elit am in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. Duis eget risus ac orci vulputate vestibulodio, id hendrerit ipsum. Fusce consequat leo vitae velit interdum at laoreet justo ullamcorper.</p>
                            <!-- paragraph -->
                            <p>Fusce imperdiet, risus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris. Integer porta erat ac eros porta ultrices. Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="general.html#">Morbi dictum nibh gravida</a> mi pretium dapibus. Nullam in est urna..</p>
                            <!-- Paragraph -->
                            <p>Eet viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris. Integer porta erat ac eros porta ultrices. Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="general.html#">Morbi dictum nibh gravida</a> mi pretium dapibus. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. Duis eget risus ac orci vulputate vestibulum sit amet id orci. Etiam ac ante at lorem ultrices elementum. Vestibulum quis elit odio, id hendrerit ipsum. Fusce consequat leo vitae velit interdum at laoreet justo ullamcorper.</p>
                        </div>
                    </div><!--/ Tab content end -->
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <!-- General Sidebar image -->
                <div class="general-img')}}">
                    <img class="img-responsive img-thumbnail" src="{{asset('img/dish/7.png')}}" alt="" />
                    <!-- Hot tag -->
                    <span class="hot-tag br-green">New</span>
                </div>
                <!-- General Sidebar image -->
                <div class="general-img')}}">
                    <img class="img-responsive img-thumbnail" src="{{asset('img/dish/1.png')}}" alt="" />
                    <!-- Hot tag -->
                    <span class="hot-tag br-red">About</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- General Info End -->

<!-- About company -->
    <div class="about-company padd">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- About Compnay Item -->
                    <div class="about-company-item">
                        <!-- About Company Image -->
                        <img class="img-responsive img-thumbnail" src="{{asset('img/doctorinnursing.png')}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- About Compnay Item -->
                    <div class="about-company-item">
                        <!-- Heading -->
                        <h3>About Our <span class="lblue">College</span></h3>
                        <!-- Paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut alio consequat.</p>
                        <br /><!--/ Line break -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Chefs Start -->

<div class="chefs padd">
    <div class="container">
        <!-- Default Heading -->
        <div class="default-heading')}}">
            <!-- Crown image -->
            <img class="img-responsive" src="{{asset('img/crown.png')}}" alt="" />
            <!-- Heading -->
            <h2>Administrative Staff</h2>
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <!-- Border -->
            <div class="border"></div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <!-- Chef Member -->
                <div class="chefs-member">
                    <!-- Chefs member header -->
                    <div class="chefs-head">
                        <!-- Member background image -->
                        <img class="chefs-back img-responsive" src="{{asset('img/dish/5.png')}}" alt="" />
                        <!-- chef member image -->
                        <img class="chefs-img img-responsive" src="{{asset('img/chef/4.jpg')}}" alt="" />
                    </div>
                    <!--Name / Heading -->
                    <h3><a href="{{url('/')}}#">Suzan John</a></h3>
                    <!-- Member designation -->
                    <span>Admistrator</span>
                    <!-- Social media links -->
                    <div class="social">
                        <a href="{{url('/')}}#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="{{url('/')}}#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="{{url('/')}}#" class="twitter"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <!-- Chef Member -->
                <div class="chefs-member">
                    <!-- Chefs member header -->
                    <div class="chefs-head">
                        <!-- Member background image -->
                        <img class="chefs-back img-responsive" src="{{asset('img/dish/5.png')}}" alt="" />
                        <!-- chef member image -->
                        <img class="chefs-img img-responsive" src="{{asset('img/chef/7.jpg')}}" alt="" />
                    </div>
                    <!--Name / Heading -->
                    <h3><a href="{{url('/')}}#">Stella Yunge</a></h3>
                    <!-- Member designation -->
                    <span>Pharmacist</span>
                    <!-- Social media links -->
                    <div class="social">
                        <a href="{{url('/')}}#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="{{url('/')}}#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="{{url('/')}}#" class="twitter"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <!-- Chef Member -->
                <div class="chefs-member">
                    <!-- Chefs member header -->
                    <div class="chefs-head">
                        <!-- Member background image -->
                        <img class="chefs-back img-responsive" src="{{asset('img/dish/5.png')}}" alt="" />
                        <!-- chef member image -->
                        <img class="chefs-img img-responsive" src="{{asset('img/chef/2.jpg')}}" alt="" />
                    </div>
                    <!--Name / Heading -->
                    <h3><a href="{{url('/')}}#">Vaileth Charles</a></h3>
                    <!-- Member designation -->
                    <span>Clinical Officer</span>
                    <!-- Social media links -->
                    <div class="social">
                        <a href="{{url('/')}}#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="{{url('/')}}#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="{{url('/')}}#" class="twitter"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chefs End -->
    <!-- Showcase Start -->

    <div class="showcase">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- Showcase section item -->
                    <div class="showcase-item">
                        <!-- Image -->
                        <img class="img-responsive" src="{{asset('img/fruit2.png')}}" alt="" />
                        <!-- Heading -->
                        <h3><a href="{{url('about')}}#">Equine Porno Sumos</a></h3>
                        <!-- Paragraph -->
                        <p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- Showcase section item -->
                    <div class="showcase-item">
                        <!-- Image -->
                        <img class="img-responsive" src="{{asset('img/fruit3.png')}}" alt="" />
                        <!-- Heading -->
                        <h3><a href="{{url('about')}}#">Equine Porno Sumos</a></h3>
                        <!-- Paragraph -->
                        <p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Showcase End -->

</div><!-- / Inner Page Content End -->

@stop