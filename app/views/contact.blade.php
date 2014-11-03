@extends('master')
@section('contents')

<!-- Banner Start -->

<div class="banner padd">
    <div class="container">
        <!-- Image -->
        <img class="img-responsive" src="{{asset('img/crown-white.png')}}" alt="" />
        <!-- Heading -->
        <h2 class="white">Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Contact</li>
        </ol>
        <div class="clearfix"></div>
    </div>
</div>

<!-- Banner End -->



<!-- Inner Content -->
<div class="inner-page padd">

    <!-- Contact Us Start -->

    <div class="contactus">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Contact Us content -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <!-- Contact content details -->
                            <div class="contact-details">
                                <!-- Heading -->
                                <h4>Location</h4><!-- Address / Icon -->
                                <i class="fa fa-map-marker br-red"></i> <span>Nkinga School Of Nursing<br />Nkinga- Igunga<br />Tabora-Tanzania</span>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!-- Contact content details -->
                            <div class="contact-details">
                                <!-- Heading -->
                                <h4>Telephone</h4>
                                <!-- Contact Number / Icon -->
                                <i class="fa fa-phone br-green"></i> <span>+255 684 584 884</span>
                                <div class="clearfix"></div>
                                <!-- Email / Icon -->
                                <i class="fa fa-envelope-o br-lblue"></i> <span><a href="{{url('contact')}}#">abc@example.com</a></span>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!--/ Inner row end -->
                    <!-- Contact form -->
                    <div class="contact-form">
                        <!-- Heading -->
                        <h3>Contact Form</h3>
                        <!-- Form -->
                        <form role="form">
                            <div class="form-group">
                                <!-- Form input -->
                                <input class="form-control" type="text" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <!-- Form input -->
                                <input class="form-control" type="email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <!-- Form text area -->
                                <textarea class="form-control" rows="3" placeholder="Message..."></textarea>
                            </div>
                            <!-- Form button -->
                            <button class="btn btn-danger btn-sm" type="submit">Send</button>&nbsp;
                            <button class="btn btn-default btn-sm" type="reset">Reset</button>
                        </form>
                    </div><!--/ Contact form end -->
                </div>
                <div class="col-md-6">
                    <!-- Map holder -->
                    <div class="map-container">
                        <!-- Google Map -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.91750562808!2d33.43899999999999!3d-4.426468999999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19b59352a86bc901%3A0x5374ad1b2a43c0a5!2sNkinga+Hospital!5e0!3m2!1ssw!2stz!4v1414858912415" width="600" height="450" frameborder="0" style="border:0"></iframe>                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us End -->

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
                        <h3><a href="{{url('contact')}}#">Equine Porno Sumos</a></h3>
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
                        <h3><a href="{{url('contact')}}#">Equine Porno Sumos</a></h3>
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