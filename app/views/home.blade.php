@extends('master')
@section('contents')

<!-- Slider Start
			#################################
				- THEMEPUNCH BANNER -
			#################################	-->

<div class="tp-banner-container">
<div class="tp-banner" >
<ul>	<!-- SLIDE  -->
<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
    <!-- MAIN IMAGE -->
    <img src="{{asset('img/slider/slide2.png')}}"  alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">

    <!-- LAYERS -->
    <!-- LAYER NR. 1 -->
    <div class="tp-caption lfl largeblackbg br-red"
         data-x="20"
         data-y="100"
         data-speed="1500"
         data-start="1200"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeIn"
         style="z-index: 3">Be the best with us
    </div>
    <!-- LAYER NR. 2.0 -->
    <div class="tp-caption lfl medium_bg_darkblue br-green"
         data-x="20"
         data-y="200"
         data-speed="1500"
         data-start="1800"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power4.easeIn"
         data-captionhidden="off">Consectetur Adipisicing
    </div>
    <!-- LAYER NR. 2.1 -->
    <div class="tp-caption lfl medium_bg_darkblue br-lblue"
         data-x="20"
         data-y="250"
         data-speed="1500"
         data-start="2100"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeIn"
         style="z-index: 3">Sed do Seusmod
    </div>
    <!-- LAYER NR. 2.2 -->
    <div class="tp-caption lfl medium_bg_darkblue br-purple"
         data-x="20"
         data-y="300"
         data-speed="1500"
         data-start="2400"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeIn"
         style="z-index: 3">Incididunt ut Labore
    </div>
    <!-- LAYER NR. 2.3 -->
    <div class="tp-caption lfl medium_bg_darkblue br-orange"
         data-x="20"
         data-y="350"
         data-speed="1500"
         data-start="2700"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeIn"
         style="z-index: 3">Excepteur Sint
    </div>
    <!-- LAYER NR. 3.0 -->
    <div class="tp-caption customin customout"
         data-x="right" data-hoffset="-50"
         data-y="100"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="400"
         data-start="3600"
         data-easing="Power3.easeInOut"
         data-endspeed="300"
         style="z-index: 5"><img class="slide-img img-responsive" src="{{asset('img/slider/s23.png')}}" alt="" />
    </div>
    <!-- LAYER NR. 3.1 -->
    <div class="tp-caption customin customout"
         data-x="right" data-hoffset="-120"
         data-y="130"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="400"
         data-start="3900"
         data-easing="Power3.easeInOut"
         data-endspeed="300"
         style="z-index: 6"><img class="slide-img img-responsive" src="{{asset('img/slider/s21.png')}}" alt="" />
    </div>
    <!-- LAYER NR. 3.2 -->
    <div class="tp-caption customin customout"
         data-x="right" data-hoffset="-10"
         data-y="160"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="400"
         data-start="4200"
         data-easing="Power3.easeInOut"
         data-endspeed="300"
         style="z-index: 7"><img class="slide-img img-responsive" src="{{asset('img/slider/s22.png')}}" alt="" />
    </div>
    <!-- LAYER NR. 3.3 -->
    <div class="tp-caption customin customout"
         data-x="right" data-hoffset="-80"
         data-y="190"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="400"
         data-start="4500"
         data-easing="Power3.easeInOut"
         data-endspeed="300"
         style="z-index: 8"><img class="slide-img img-responsive" src="{{asset('img/slider/s24.png')}}" alt="" />
    </div>
</li>
<li data-transition="zoomin" data-slotamount="6" data-masterspeed="400" >
    <!-- MAIN IMAGE -->
    <img src="{{asset('img/slider/transparent.png')}}" style="background-color:#fff" alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">

    <!-- LAYERS -->
    <!-- LAYER NR. 1 -->
    <div class="tp-caption sfl modern_medium_light"
         data-x="20"
         data-y="90"
         data-speed="800"
         data-start="1000"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeIn"
         style="z-index: 3">Enjoy with us
    </div>
    <!-- LAYER NR. 1.1 -->
    <div class="tp-caption large_bold_grey heading customin customout"
         data-x="10"
         data-y="125"
         data-splitin="chars"
         data-splitout="chars"
         data-elementdelay="0.05"
         data-start="1500"
         data-speed="900"
         data-easing="Back.easeOut"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-endspeed="500"
         data-endeasing="Power3.easeInOut"
         data-captionhidden="on"
         style="z-index:5">For nursing studies...
    </div>
    <!-- LAYER NR. 2 -->
    <div class="tp-caption customin customout"
         data-x="right"
         data-y="100"
         data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="800"
         data-start="2000"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeIn"
         style="z-index: 3"><img class="img-responsive" src="{{asset('img/slider/s11.png')}}" alt="" />
    </div>
    <!-- LAYER NR. 2.1 -->
    <div class="tp-caption customin customout"
         data-x="right"
         data-y="100"
         data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="800"
         data-start="2300"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeIn"
         style="z-index: 3"><img class="img-responsive" src="{{asset('img/slider/s12.png')}}" alt="" />
    </div>
    <!-- LAYER NR. 2.2 -->
    <div class="tp-caption customin customout"
         data-x="right"
         data-y="100"
         data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="800"
         data-start="2600"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeIn"
         style="z-index: 3"><img class="img-responsive" src="{{asset('img/slider/s13.png')}}" alt="" />
    </div>
    <!-- LAYER NR. 2.3 -->
    <div class="tp-caption sft"
         data-x="right" data-hoffset="-400"
         data-y="80"
         data-speed="1000"
         data-start="3000"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeIn"
         style="z-index: 10">
    </div>
    <!-- LAYER NR. 3 -->
    <div class="tp-caption finewide_verysmall_white_mw paragraph customin customout tp-resizeme"
         data-x="20"
         data-y="210"
         data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="1000"
         data-start="3600"
         data-easing="Power3.easeInOut"
         data-splitin="lines"
         data-splitout="lines"
         data-elementdelay="0.2"
         data-endelementdelay="0.08"
         data-endspeed="300"
         style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum dolor sit amet, consetetur<br/>  sadipscing elitr, sed diam nonumy<br/>  eirmod tempor invidunt ut labore et<br/>  dolore magna aliquyam erat, sed diam <br/> voluptua. At vero eos et accusam.
    </div>
    <!-- LAYER NR. 4 -->
    <div class="tp-caption sfb"
         data-x="20"
         data-y="335"
         data-speed="800"
         data-start="4500"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeIn"
         style="z-index: 11">
    </div>
</li>
<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="600" >
    <!-- MAIN IMAGE -->
    <img src="{{asset('img/slider/transparent.png')}}" style="background-color:#fea501" alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
    <!-- LAYERS NR. 1 -->
    <div class="tp-caption lfl"
         data-x="left"
         data-y="100"
         data-speed="800"
         data-start="1200"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Linear.easeNone"
         data-captionhidden="off"><img class="img-responsive" src="{{asset('img/slider/s35.png')}}" alt="" />
    </div>
    <!-- LAYERS NR. 2 -->
    <div class="tp-caption lfr large_bold_grey heading white"
         data-x="right" data-hoffset="-10"
         data-y="120"
         data-speed="800"
         data-start="2000"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Linear.easeNone"
         data-captionhidden="off">Laboratory Studies
    </div>
    <!-- LAYER NR. 3 -->
    <div class="tp-caption whitedivider3px customin customout tp-resizeme"
         data-x="right" data-hoffset="-20"
         data-y="210" data-voffset="0"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="700"
         data-start="2300"
         data-easing="Power3.easeInOut"
         data-splitin="none"
         data-splitout="none"
         data-elementdelay="0.1"
         data-endelementdelay="0.1"
         data-endspeed="500"
         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
    </div>
    <!-- LAYER NR. 4 -->
    <div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
         data-x="right" data-hoffset="-10"
         data-y="245" data-voffset="0"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="1000"
         data-start="2700"
         data-easing="Power3.easeInOut"
         data-splitin="chars"
         data-splitout="chars"
         data-elementdelay="0.08"
         data-endelementdelay="0.08"
         data-endspeed="500"
         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">Get what you need
    </div>
    <!-- LAYER NR. 5 -->
    <div class="tp-caption finewide_verysmall_white_mw white customin customout tp-resizeme text-right paragraph"
         data-x="right" data-hoffset="-10"
         data-y="300"
         data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="1000"
         data-start="3500"
         data-easing="Power3.easeInOut"
         data-splitin="lines"
         data-splitout="lines"
         data-elementdelay="0.2"
         data-endelementdelay="0.08"
         data-endspeed="300"
         style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum dolor sit amet, consetetur  sadipscing elitr,<br/> nonumy voluptu ansetetur  sadipscing elit. <br/> sed diam quisquam est nonumy voluptu vero eos et.
    </div>
</li>
<li data-transition="cube" data-slotamount="7" data-masterspeed="600" >
    <!-- MAIN IMAGE -->
    <img src="{{asset('img/slider/slide2.jpg')}}"  alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
    <!-- LAYERS NR. 1 -->
    <div class="tp-caption lfl"
         data-x="110"
         data-y="130"
         data-speed="800"
         data-start="1500"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power4.easeIn"
         data-captionhidden="off"><img src="{{asset('img/slider/s31.png')}}" class="img-responsive" alt="" />
    </div>
    <!-- LAYERS NR. 2 -->
    <div class="tp-caption lfl"
         data-x="80"
         data-y="265"
         data-speed="800"
         data-start="2200"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power4.easeIn"
         data-captionhidden="off"><img src="{{asset('img/slider/s33.png')}}" class="img-responsive" alt="" />
    </div>
    <!-- LAYERS NR. 3 -->
    <div class="tp-caption lfl"
         data-x="450"
         data-y="312"
         data-speed="800"
         data-start="2700"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power4.easeIn"
         data-captionhidden="off"><img src="{{asset('img/slider/s34.png')}}" class="img-responsive" alt="" />
    </div>
    <!-- LAYERS NR. 4 -->
    <div class="tp-caption sfr  thinheadline_dark white"
         data-x="right" data-hoffset="-10"
         data-y="90"
         data-speed="800"
         data-start="3200"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeIn"
         style="z-index: 3">Enjoy
    </div>
    <!-- LAYERS NR. 4.1 -->
    <div class="tp-caption lfr largepinkbg br-green"
         data-x="right" data-hoffset="-10"
         data-y="135"
         data-speed="800"
         data-start="3500"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Linear.easeNone"
         data-captionhidden="off">Micro-biology
    </div>
    <!-- LAYERS NR. 5 -->
    <div class="tp-caption skewfromright medium_text text-right paragraph"
         data-x="right" data-hoffset="-10"
         data-y="225"
         data-speed="800"
         data-start="3800"
         data-easing="Power4.easeOut"
         data-endspeed="400"
         data-endeasing="Power4.easeOut"
         data-captionhidden="off">At vero eos etntium accu amet, adipisicing samus iusto<br />praese  delen itieos etconsectetur atque corrupti<br />praese etntiumder delen itierrupti.
    </div>
    <!-- LAYERS NR. 6 // -->
    <div class="tp-caption lfr modern_big_redbg br-red"
         data-x="right"
         data-hoffset="-10"
         data-y="315"
         data-speed="1500"
         data-start="4100"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Linear.easeNone"
         data-captionhidden="off">Botany
    </div>
    <!-- LAYERS NR. 6.1 // -->
    <div class="tp-caption lfr modern_big_redbg br-yellow"
         data-x="right"
         data-hoffset="-10"
         data-y="375"
         data-speed="1500"
         data-start="4400"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Linear.easeNone"
         data-captionhidden="off">Zoology
    </div>
</li>
</ul>
<!-- Banner Timer -->
<div class="tp-bannertimer"></div>
</div>
</div>
<!-- Slider End -->



<!-- Main Content -->
<div class="main-content">

<!-- Showcase Start -->

<div class="showcase">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <!-- Showcase section item -->
                <div class="showcase-item">
                    <!-- Image -->
                    <img class="img-responsive" style="height: 200px" src="{{asset('img/fruit2.png')}}" alt="" />
                    <!-- Heading -->
                    <h3><a href="{{url('/')}}#">Equine Porno Sumos</a></h3>
                    <!-- Paragraph -->
                    <p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <!-- Showcase section item -->
                <div class="showcase-item">
                    <!-- Image -->
                    <img class="img-responsive" style="height: 210px" src="{{asset('img/fruit3.png')}}" alt="" />
                    <!-- Heading -->
                    <h3><a href="{{url('/')}}#">Equine Porno Sumos</a></h3>
                    <!-- Paragraph -->
                    <p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Showcase End -->

<!-- Dishes Start -->

<div class="dishes padd">
    <div class="container">
        <!-- Default Heading -->
        <div class="default-heading')}}">
            <!-- Crown image -->
            <img class="img-responsive" src="{{asset('img/crown.png')}}" alt="" />
            <!-- Heading -->
            <h2>Course Offered</h2>
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <!-- Border -->
            <div class="border"></div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="dishes-item-container">
                    <!-- Image Frame -->
                    <div class="img-frame">
                        <!-- Image -->
                        <img src="{{asset('img/dish/1.png')}}" class="img-responsive" alt="" />
                        <!-- Block for on hover effect to image -->
                        <div class="img-frame-hover">
                            <!-- Hover Icon -->
                            <a href="{{url('/')}}#"><i class="fa fa-book"></i></a>
                        </div>
                    </div>
                    <!-- Dish Details -->
                    <div class="dish-details">
                        <!-- Heading -->
                        <h3>Pharmacy</h3>
                        <!-- Paragraph -->
                        <p>At vero eos et accusal gusto for ides residuum lores.</p>
                        <!-- Button -->
                        <a href="{{url('/')}}#" class="btn btn-danger btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="dishes-item-container">
                    <!-- Image Frame -->
                    <div class="img-frame">
                        <!-- Image -->
                        <img src="{{asset('img/dish/nurse.png')}}" class="img-responsive" alt="" />
                        <!-- Block for on hover effect to image -->
                        <div class="img-frame-hover">
                            <!-- Hover Icon -->
                            <a href="{{url('/')}}#"><i class="fa fa-book"></i></a>
                        </div>
                    </div>
                    <!-- Dish Details -->
                    <div class="dish-details">
                        <!-- Heading -->
                        <h3>Nursing</h3>
                        <!-- Paragraph -->
                        <p>At vero eos et accusal gusto for ides residuum lores.</p>
                        <!-- Button -->
                        <a href="{{url('/')}}#" class="btn btn-danger btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="dishes-item-container">
                    <!-- Image Frame -->
                    <div class="img-frame">
                        <!-- Image -->
                        <img src="{{asset('img/dish/5.png')}}" class="img-responsive" alt="" />
                        <!-- Block for on hover effect to image -->
                        <div class="img-frame-hover">
                            <!-- Hover Icon -->
                            <a href="{{url('/')}}#"><i class="fa fa-book"></i></a>
                        </div>
                    </div>
                    <!-- Dish Details -->
                    <div class="dish-details">
                        <!-- Heading -->
                        <h3>Lab Technology</h3>
                        <!-- Paragraph -->
                        <p>At vero eos et accusal gusto for ides residuum lores.</p>
                        <!-- Button -->
                        <a href="{{url('/')}}#" class="btn btn-danger btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="dishes-item-container">
                    <!-- Image Frame -->
                    <div class="img-frame">
                        <!-- Image -->
                        <img src="{{asset('img/dish/7.png')}}" class="img-responsive" alt="" />
                        <!-- Block for on hover effect to image -->
                        <div class="img-frame-hover">
                            <!-- Hover Icon -->
                            <a href="{{url('/')}}#"><i class="fa fa-book"></i></a>
                        </div>
                    </div>
                    <!-- Dish Details -->
                    <div class="dish-details">
                        <!-- Heading -->
                        <h3>Maternity</h3>
                        <!-- Paragraph -->
                        <p>At vero eos et accusal gusto for ides residuum lores.</p>
                        <!-- Button -->
                        <a href="{{url('/')}}#" class="btn btn-danger btn-sm">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dishes End -->

<!-- Pricing Start -->

<div class="pricing padd">
    <div class="container">
        <!-- Default Heading -->
        <div class="default-heading')}}">
            <!-- Crown image -->
            <img class="img-responsive" src="{{asset('img/crown.png')}}" alt="" />
            <!-- Heading -->
            <h2>Departments</h2>
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <!-- Border -->
            <div class="border"></div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <!-- Pricing list Item -->
                <div class="pricing-item">
                    <!-- Image -->
                    <a href="{{url('/')}}#"><img class="img-responsive img-thumbnail" src="{{asset('img/dish/nurse.png')}}" alt="" /></a>
                    <!-- Pricing item details -->
                    <div class="pricing-item-details">
                        <!-- Heading -->
                        <h3><a href="{{url('/')}}#">Blood</a></h3>
                        <!-- Paragraph -->
                        <p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
                        <!-- Buy link -->
                        <a class="btn btn-danger pull-right" href="{{url('/')}}#">Details</a>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Tag -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <!-- Pricing list Item -->
                <div class="pricing-item">
                    <!-- Image -->
                    <a href="{{url('/')}}#"><img class="img-responsive img-thumbnail" src="{{asset('img/dish/1.png')}}" alt="" /></a>
                    <!-- Pricing item details -->
                    <div class="pricing-item-details">
                        <!-- Heading -->
                        <h3><a href="{{url('/')}}#">Paracetamol</a></h3>
                        <!-- Paragraph -->
                        <p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
                        <!-- Buy link -->
                        <a class="btn btn-danger pull-right" href="{{url('/')}}#">Details</a>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Tag -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix visible-md"></div>
            <div class="col-md-6 col-sm-6">
                <!-- Pricing list Item -->
                <div class="pricing-item">
                    <!-- Image -->
                    <a href="{{url('/')}}#"><img class="img-responsive img-thumbnail" src="{{asset('img/dish/6.png')}}" alt="" /></a>
                    <!-- Pricing item details -->
                    <div class="pricing-item-details">
                        <!-- Heading -->
                        <h3><a href="{{url('/')}}#">Diclopar</a></h3>
                        <!-- Paragraph -->
                        <p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
                        <!-- Buy link -->
                        <a class="btn btn-danger pull-right" href="{{url('/')}}#">Details</a>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Tag -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <!-- Pricing list Item -->
                <div class="pricing-item">
                    <!-- Image -->
                    <a href="{{url('/')}}#"><img class="img-responsive img-thumbnail" src="{{asset('img/dish/5.png')}}" alt="" /></a>
                    <!-- Pricing item details -->
                    <div class="pricing-item-details">
                        <!-- Heading -->
                        <h3><a href="{{url('/')}}#">Laboratory</a></h3>
                        <!-- Paragraph -->
                        <p>These cases are perfectly simple and distil and when nothing adipose slicing consecrate prevents...</p>
                        <!-- Buy link -->
                        <a class="btn btn-danger pull-right" href="{{url('/')}}#">Details</a>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Tag -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pricing End -->

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

<!-- Testimonial Start -->

<div class="testimonial padd">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- BLock heading -->
                <h3>Recent Posts</h3>
                <!-- Flex slider Content -->
                <div class="flexslider-recent">
                    <ul class="slides">
                        <li>
                            <!-- Image for background -->
                            <img class="img-responsive" src="{{asset('img/dish/1.png')}}" alt="" />
                            <!-- Slide content -->
                            <div class="slider-content">
                                <!-- Heading -->
                                <h4>Healthy Therapy</h4>
                                <!-- Paragraph -->
                                <p>Sed ut perspiciatis unde omnis iste natus error sitvolua rchitecto beatae vitae dicta sunt explicabo eaque ipsa quae ab illo inventore.</p>
                            </div>
                        </li>
                        <li>
                            <!-- Image for background -->
                            <img class="img-responsive" src="{{asset('img/dish/5.png')}}" alt="" />
                            <!-- Slide content -->
                            <div class="slider-content">
                                <!-- Heading -->
                                <h4>Laboratories</h4>
                                <!-- Paragraph -->
                                <p>Sed ut perspiciatis unde omnis iste natus error sitvolua rchitecto beatae vitae dicta sunt explicabo eaque ipsa quae ab illo inventore.</p>
                            </div>
                        </li>
                        <li>
                            <!-- Image for background -->
                            <img class="img-responsive" src="{{asset('img/dish/7.png')}}" alt="" />
                            <!-- Slide content -->
                            <div class="slider-content">
                                <!-- Heading -->
                                <h4>Paracetamol</h4>
                                <!-- Paragraph -->
                                <p>Sed ut perspiciatis unde omnis iste natus error sitvolua rchitecto beatae vitae dicta sunt explicabo eaque ipsa quae ab illo inventore.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <!-- BLock heading -->
                <h3>Our Client Says</h3>
                <!-- Flex slider Content -->
                <div class="flexslider-testimonial">
                    <ul class="slides">
                        <li>
                            <!-- Testimonial Content -->
                            <div class="testimonial-item">
                                <!-- Quote -->
                                <span class="quote lblue">&#8220;</span>
                                <!-- Your comments -->
                                <blockquote>
                                    <!-- Paragraph -->
                                    <p>Sed ut perspiciatis unde omnis iste natus error sitvolu accusative ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
                                </blockquote>
                                <!-- Heading with image -->
                                <h4><img class="img-responsive img-circle" src="{{asset('img/nurse.png')}}" alt="" /> Suzan John<span>, your designation</span></h4>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <!-- Testimonial Content -->
                            <div class="testimonial-item">
                                <!-- Quote -->
                                <span class="quote lblue">&#8220;</span>
                                <!-- Your comments -->
                                <blockquote>
                                    <!-- Paragraph -->
                                    <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the dislikes.</p>
                                </blockquote>
                                <!-- Heading with image -->
                                <h4><img class="img-responsive img-circle" src="{{asset('img/nurse.png')}}" alt="" /> Peter Raphael<span>, your designation</span></h4>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <!-- Testimonial Content -->
                            <div class="testimonial-item">
                                <!-- Quote -->
                                <span class="quote lblue">&#8220;</span>
                                <!-- Your comments -->
                                <blockquote>
                                    <!-- Paragraph -->
                                    <p>At vero eos et accusamus et iusto odio dignis simos ducimus qui bland itiis praes entium volup tatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non laboratory.</p>
                                </blockquote>
                                <!-- Heading with image -->
                                <h4><img class="img-responsive img-circle" src="{{asset('img/nurse.png')}}" alt="" /> Katrina Yunge<span>, your designation</span></h4>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial End -->


</div><!-- / Main Content End -->



@stop