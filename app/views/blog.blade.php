@extends('master')
@section('contents')

<!-- Banner Start -->

<div class="banner padd">
    <div class="container">
        <!-- Image -->
        <img class="img-responsive" src="{{asset('img/crown-white.png')}}" alt="" />
        <!-- Heading -->
        <h2 class="white">Blog</h2>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Blog</li>
        </ol>
        <div class="clearfix"></div>
    </div>
</div>

<!-- Banner End -->



<!-- Inner Content -->
<div class="inner-page padd">

    <!-- Blog Start -->

    <div class="blog')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- The new post done by user's all in the post block -->
                    <div class="blog-post">
                        <!-- Entry is the one post for each user -->
                        <div class="entry">
                            <!-- Post Images -->
                            <div class="blog-img pull-left">
                                <img src="{{asset('img/1.png')}}" class="img-responsive img-thumbnail" alt="" />
                            </div>
                            <!-- Meta for this block -->
                            <div class="meta">
                                <i class="fa fa-calendar"></i>&nbsp; Jan 13, 2014
                                <span class="pull-right"><i class="fa fa-comment"></i> <a href="{{url('blog')}}#">&nbsp;2 Comments</a></span>
                            </div>
                            <!-- Heading of the  post -->
                            <h3><a href="blog-single.html">Contrary to popular belief horem purse</a></h3>
                            <hr /><!-- Horizontal line -->
                            <!-- Paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="{{url('blog')}}#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Ut <strong>commodo ullamcorper risus nec</strong> viverra, dignissim eget est.</p>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Entry is the one post for each user -->
                        <div class="entry">
                            <!-- Post Images -->
                            <div class="blog-img pull-left">
                                <img src="{{asset('img/smiling.jpg')}}" class="img-responsive img-thumbnail" alt="" />
                            </div>
                            <!-- Meta for this block -->
                            <div class="meta">
                                <i class="fa fa-calendar"></i>&nbsp; Jan 29, 2014
                                <span class="pull-right"><i class="fa fa-comment"></i> <a href="{{url('blog')}}#">&nbsp;0 Comments</a></span>
                            </div>
                            <!-- Heading of the  post -->
                            <h3><a href="blog-single.html">Suspended portrait cretinous perimeter</a></h3>
                            <hr /><!-- Horizontal line -->
                            <!-- Paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="{{url('blog')}}#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Ut <strong>commodo ullamcorper risus nec</strong> viverra, dignissim eget est.</p>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Entry is the one post for each user -->
                        <div class="entry">
                            <!-- Post Images -->
                            <div class="blog-img pull-left">
                                <img src="{{asset('img/nurse.png')}}" class="img-responsive img-thumbnail" alt="" />
                            </div>
                            <!-- Meta for this block -->
                            <div class="meta">
                                <i class="fa fa-calendar"></i>&nbsp; Feb 14, 2014
                                <span class="pull-right"><i class="fa fa-comment"></i> <a href="{{url('blog')}}#">&nbsp;0 Comments</a></span>
                            </div>
                            <!-- Heading of the  post -->
                            <h3><a href="blog-single.html">Placerat semper quis in urna risus</a></h3>
                            <hr /><!-- Horizontal line -->
                            <!-- Paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="{{url('blog')}}#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Ut <strong>commodo ullamcorper risus nec</strong> viverra, dignissim eget est.</p>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Pagination -->
                        <ul class="pagination">
                            <li class="disabled"><a href="{{url('blog')}}#">&laquo;</a></li>
                            <li class="active"><a href="{{url('blog')}}#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="{{url('blog')}}#">2</a></li>
                            <li><a href="{{url('blog')}}#">3</a></li>
                            <li><a href="{{url('blog')}}#">4</a></li>
                            <li><a href="{{url('blog')}}#">5</a></li>
                            <li><a href="{{url('blog')}}#">&raquo;</a></li>
                        </ul>
                        <!-- Pagination end-->
                    </div>
                </div> <!--/ Main blog column end -->
                <div class="col-md-4">
                    <!-- Blog page sidebar -->
                    <div class="blog-sidebar">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <!-- Blog sidebar page widget -->
                                <div class="sidebar-widget">
                                    <!-- Widget Heading -->
                                    <h4>Search</h4>
                                    <!-- search button and input box -->
                                    <form role="form" class="form-inline">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type to search">
														<span class="input-group-btn">
															<button class="btn btn-danger" type="button"><i class="fa fa-search"></i></button>
														</span>
                                        </div>
                                    </form><!--/ Form end -->
                                </div><!--/ Widget end -->
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <!-- Blog sidebar page widget -->
                                <div class="sidebar-widget">
                                    <!-- Widget Heading -->
                                    <h4>Recent Post</h4>
                                    <!-- Recent post list -->
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-angle-double-right"></i> <a href="{{url('blog')}}#">Delicious Pizza recipe, soluta nobqual blame betum rutrum allongs to this est eligend.</a></li>
                                        <li><i class="fa fa-angle-double-right"></i> <a href="{{url('blog')}}#">Chicken recipe, luta nobisest hyelqual bltum rutrum alame belongs to thigend.</a></li>
                                        <li><i class="fa fa-angle-double-right"></i> <a href="{{url('blog')}}#">Hot Cake recipe, jueilqual blame belongs to thuta ntum rutrum alobist hyeleniurd.</a></li>
                                        <li><i class="fa fa-angle-double-right"></i> <a href="{{url('blog')}}#">French Food recipe, rsiqual blame belongs to thlutum rutrum alta nobniurd.</a></li>
                                    </ul>
                                </div><!--/ Widget end -->
                            </div>

                        </div><!--/ Inner row end -->
                    </div><!--/ Page sidebar end -->
                </div>
            </div><!--/ Row end -->
        </div>
    </div>

    <!-- Blog End -->

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
                        <h3><a href="{{url('blog')}}#">Equine Porno Sumos</a></h3>
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
                        <h3><a href="{{url('blog')}}#">Equine Porno Sumos</a></h3>
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