<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Randholee</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Bootstrap (Framework) -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css')}}">

    <!-- Full Screen Background Slides -->
    <link rel="stylesheet" href="{{ asset('js/superslides/superslides.css')}}">

    <!-- Lightbox -->
    <link href="{{ asset('js/simplelightbox/simplelightbox.css' )}}" rel="stylesheet" type="text/css">

    <!-- Timepicker -->
    <link rel="stylesheet" href="{{ asset('js/jquery-timepicker/jquery')}}.timepicker.css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ asset('js/bootstrap-datepicker/bootstrap')}}-datepicker.css">

    <!-- Masonry grid Layout -->
    <link rel="stylesheet" href="{{ asset('js/jQuery-flexImages/jquery.flex')}}-images.css">

    <!-- Off Canvas Navigation -->
    <link type="text/css" href="{{ asset('js/pushy/pushy.css' )}}" rel="stylesheet"/>

    <!-- Prasto Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.html')}}">

    <!--[if lt IE 9]>
    <script src="{!! asset('js/vendor/html5-3.6-respond-1.4.2.min.js')!!}"></script>
    <![endif]-->
</head>

<body>

<!-- Preloader
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>


<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<!-- Off canvas menu starts -->
<div class="off-canvas-menu">
    <a class="menu-btn" id="hamburger"><span></span></a>
    <nav class="pushy pushy-right main-menu" style="background: #1A1915;">
        <a class="close-btn menu-btn"><i class="icon icon-cross"></i></a>
        <a class="brand" href="#home"><img src="{{ asset('images/logo.jpg') }}" alt="" class="img-responsive"></a>
        <ul class="list-unstyled menu-items" id="menu-items">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#our-menu">Our Menu</a></li>
            <li><a href="#gallery">Gallery</a></li>
            {{--<li><a href="#blog">Blog</a></li>--}}
            <li><a href="#reservation">Reservation</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="social clearfix">
            <a href="#"><i class="icon icon-facebook"></i></a>
            <a href="#"><i class="icon icon-twitter"></i></a>
            <a href="#"><i class="icon icon-google-plus"></i></a>
            <a href="#"><i class="icon icon-instagram"></i></a>

        </div>
    </nav>
</div> <!-- Off canvas menu ends -->

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Main body starts -->
<div id="container">
    <!-- Home section starts -->
    <section id="home" class="slides">
        <ul class="slides-container">
            {{-- *Slider* --}}
            @if(!empty($home_contents))
                @foreach($home_contents as $home_content)
                    <li>
                        <img src="{!! asset('images/slides/'.$home_content->id.'.jpg') !!} " width="1280" height="647"
                             alt="slide1"
                             class="img-responsive">
                        <div class="caption">
                            <h2>{{$home_content->title}}</h2>
                            <p>{{$home_content->sub_title}}</p>
                            <a href="#reservation" class="smooth-scroll btn btn-primary btn-sm">Book Your Table Now</a>
                        </div>
                    </li>
                @endforeach
            @endif

        </ul>
    </section>
    <!-- Home section ends -->

    <!-- About section starts -->
    <section id="about" class="container-fluid">
        <div class="photo-container col-lg-4 hidden-sm hidden-xs divider-background p-l-n">
            <div class="background-image-holder">
                <img src="images/chef-lead.jpg" alt="" style="display:none">
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 history pull-right">
                    <h2>About us</h2>
                    @if(!empty($about->title))
                        <h3>{!! $about->title !!}</h3>
                    @endif
                    {!! $about->about !!}

                </div>
            </div>
        </div>
    </section> <!-- About section starts -->

    <!-- Our Menu section starts -->
    <section id="our-menu">
        <div class="container">
            <h2>Our menu</h2>
            <div class="menu-table">
                <!-- Menu tabs -->
                <ul class="nav nav-tabs  menu-tabs" role="tablist">
                    {{--<li class="active">--}}
                    {{--<a href="#soups-salads-appetizers" aria-controls="soups-salads-appetizers" role="tab"--}}
                    {{--data-toggle="tab" class="icon icon-home"><span>Soups-Salads-Appetizers</span></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="#organic-pastas" aria-controls="prganic-pastas" role="tab" data-toggle="tab">Organic--}}
                    {{--Pastas</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="#pizza" aria-controls="pizza" role="tab" data-toggle="tab">Pizza</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="#entrees" aria-controls="entrees" role="tab" data-toggle="tab">Entrees</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="#desserts" aria-controls="desserts" role="tab" data-toggle="tab">Desserts</a>--}}
                    {{--</li>--}}

                    @if(!empty($menu_categories))
                        <?php $x = 1 ?>
                        @foreach($menu_categories as $menu_category)
                            <li class="{!! $x==1 ? 'active' : ''!!}">


                                <a href="#{{strtolower(str_replace(' ','-', $menu_category->menu_category))}}"
                                   aria-controls="soups-salads-appetizers"
                                   role="tab"
                                   data-toggle="tab"
                                   class="icon icon-home"><span>{!! $menu_category->menu_category !!}</span></a>
                            </li>
                            <?php $x++;?>
                        @endforeach
                    @endif

                </ul>

                <!-- Menu Tab panes -->
                <div class="tab-content">


                    @if(!empty($menu_categories))
                        <?php $x = 1?>
                        @foreach($menu_categories as $menu_category)
                            <div class="tab-pane {!! $x==1 ? 'active' : ''!!}"
                                 id="{{strtolower(str_replace(' ','-', $menu_category->menu_category))}}">
                                <div class="row">
                                    <div class="menu-group">

                                        @foreach($menu_category->menuItems as $menu_item)
                                            <div class="menu-group-item clearfix col-lg-6 col-md-6 col-sm-12">
                                                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
                                                    <img style="width: 100px;"
                                                         src="{!! asset('images/menu/'.$menu_item->id.'.jpg') !!}"
                                                         alt=""
                                                         class="img-circle">
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-sm-7 col-xs-7">
                                                    <span class="menu-title">{!! $menu_item->item !!}</span>
                                                    <span class="menu-descp">{!! $menu_item->description !!}</span>
                                                </div>
                                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
                                            <span class="menu-item-price">
                                                {!! $menu_item->price !!}
                                            </span>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <?php $x++;?>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section> <!-- Our Menu section ends -->

    <!-- Gallery section starts -->
    <section id="gallery" class="gallery">
        <h2>Gallery</h2>
        <div class="flex-images">
            @if(!empty($gallery_images))
                @foreach($gallery_images as $gallery_image)
                    <figure class="item" data-w="300" data-h="200">
                        <a href="{{asset('images/gallery/large/'.$gallery_image->id.'.jpg')}}">
                            <img src="{{asset(('images/gallery/thumb/'.$gallery_image->id.'.jpg'))}}" alt=""
                            />
                        </a>
                    </figure>
                @endforeach
            @endif

        </div>
    </section>
    <!-- Gallery section ends -->

    <!-- Blog section starts -->
    {{--<section id="blog">--}}
    {{--<h2>Blog</h2>--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<!-- Blog post 1 -->--}}
    {{--<div class="col-sm-4 col-md-4">--}}
    {{--<div class="post">--}}
    {{--<div class="post-img-content">--}}
    {{--<a href="#"><img src="images/post-thumb-1.jpg" class="img-responsive" alt="post-thumb"/></a>--}}
    {{--</div>--}}
    {{--<div class="content">--}}
    {{--<h4><a href="#">Aenean lobortis dolor a diam molestie </a></h4>--}}
    {{--<small class="text-muted date">posted on January 20th, 2014</small>--}}
    {{--<p>Morbi eget posuere dolor. Pellentesque ame cursus aliquet aliquet. Aeneanet felis--}}
    {{--sit.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Blog post 2 -->--}}
    {{--<div class="col-sm-4 col-md-4">--}}
    {{--<div class="post">--}}
    {{--<div class="post-img-content">--}}
    {{--<a href="#"><img src="images/post-thumb-2.jpg" class="img-responsive" alt="post-thumb"/></a>--}}
    {{--</div>--}}
    {{--<div class="content">--}}
    {{--<h4><a href="#">Nunc quis velit sed mauris egestas pretium</a></h4>--}}
    {{--<small class="text-muted date">posted on January 20th, 2014</small>--}}
    {{--<p>--}}
    {{--Morbi eget posuere dolor. Pellentesque ame cursus aliquet aliquet. Aeneanet felis sit.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Blog post 3 -->--}}
    {{--<div class="col-sm-4 col-md-4">--}}
    {{--<div class="post">--}}
    {{--<div class="post-img-content">--}}
    {{--<a href="#"><img src="images/post-thumb-3.jpg" class="img-responsive" alt="post-thumb"/></a>--}}
    {{--</div>--}}
    {{--<div class="content">--}}
    {{--<h4><a href="#">Nunc eu massa vitae est dignissim faucibus</a></h4>--}}
    {{--<small class="text-muted date">posted on January 20th, 2014</small>--}}
    {{--<p>--}}
    {{--Morbi eget posuere dolor. Pellentesque ame cursus aliquet aliquet. Aeneanet felis sit.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section> --}}
    <!-- Blog section ends -->

    <!-- Reservation section starts -->
    <section id="reservation" class="clearfix reservation">
        <div class="reserve-header">
            <div class="container">
                <div class="col-sm-6 f-n center-block">
                    <h2>Make a reservation</h2>

                </div>
            </div>
        </div>

        <div class="container reservation-container">
            <div class="row">
                <!-- Reservation form starts -->
                <div class="col-md-5 reservation-form">
                    <form class="form-custom">
                        <div class="form-group">
                            <label class="sr-only" for="name">Name</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="icon icon-user"></i></div>
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="icon icon-envelope"></i></div>
                                <input type="text" class="form-control" id="email" placeholder="Email address">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="phone">Phone</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="icon icon-phone"></i></div>
                                <input type="text" class="form-control" id="phone" placeholder="Phone number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="picktime">Select time</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="icon icon-clock"></i></div>
                                <input type="text" class="form-control" id="picktime" placeholder="Select time">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="pickdate">Select date</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="icon icon-date"></i></div>
                                <input type="text" class="form-control" id="pickdate" placeholder="Select date">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-block btn-primary ">Find a table</button>
                    </form>
                </div> <!-- Reservation form ends -->
                <hr class="visible-sm">

                <!-- Opening hours starts -->
                <div class="col-md-4 col-md-offset-2">
                    <div class="opening-hours">
                        <div class="frame">
                            <h2>Opening Hours</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <p>Monday & Tuesday</p>
                                    <p>8:00 AM - 3:00 PM</p>
                                </li>
                                <li>
                                    <p>Wednesday & Thursday</p>
                                    <p>8:00 AM - Midnight</p>
                                </li>
                                <li>
                                    <p>Friday & Saturday</p>
                                    <p>8:00 AM - Midnight</p>
                                </li>
                                <li>
                                    <p>Sunday</p>
                                    <p>8:00 AM - 10:00 PM</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- Opening hours ends -->
            </div>
        </div>
    </section> <!-- Reservation section ends -->

    <!-- Contact section starts -->
    <section id="contact">
        {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.79819530939216!2d79.99819676318627!3d6.423446101168058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x73eb23836d04976e!2sRandholee!5e0!3m2!1sen!2slk!4v1464551610835" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
        <div id="map" class="hidden-xs"></div>
        <div class="container">
            <div class="contact-details">
                <h2>Contact</h2>
                {{--<p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem--}}
                    {{--neque sed ipsum. Nam quam nunc.</p>--}}
                <div class="contact-phone"><i class="icon icon-phone"></i> {!! $contact->tel !!}</div>
                <div class="contact-email"><i class="icon icon-envelope"></i> {!! $contact->email !!}</div>
                <div class="contact-addresss"><i class="icon icon-restaurant"></i> {!! $contact->address !!}</div>
            </div>
        </div>
    </section> <!-- Contact section ends -->

    <!-- Footer starts -->
    <footer>
        <div class="container">
            <p>© Copyright {!! date('Y') !!} Randholee. All Rights Reserved.</p>
        </div>
    </footer> <!-- Footer ends -->
</div> <!-- Main body ends -->

<!-- Javascripts
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<!-- Jquery library -->
<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>

<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
    $(window).load(function () { // makes sure the whole site is loaded
        $('#status').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({'overflow': 'visible'});
    })
    //]]>
</script>

<!-- Bootstrap (Framework) -->
<script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>

<!-- Full Screen Background Slides -->
<script src="{{ asset('js/superslides/jquery.superslides.min.js')}}"></script>

<!-- Lightbox -->
<script src="{{ asset('js/simplelightbox/simple-lightbox.min.js')}}"></script>

<!-- Datepicker -->
<script src="{{ asset('js/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

<!-- Timepicker -->
<script src="{{ asset('js/jquery-timepicker/jquery.timepicker.min.js')}}"></script>

<!-- Masonry grid Layout -->
<script src="{{ asset('js/jQuery-flexImages/jquery.flex-images.min.js')}}"></script>

<!-- Off Canvas Navigation -->
<script src="{{asset('js/pushy/pushy.js')}}"></script>

<!-- Smooth one page scroll -->
<script src="{{ asset('js/jquery-one-page-nav/jquery.nav.js')}}"></script>

<!-- Google Map -->
<script type="text/javascript" src="{{ asset('https://maps.googleapis.com/maps/api/js?AIzaSyCK3xEfuwiBB-zAl9UMRKn_BnDZn0X3h1U')}}"></script>

<!-- Prasto plugins -->
<script src="{{ asset('js/main.js')}}"></script>

<!-- Google Analytics -->
{{--<script>--}}
    {{--(function (i, s, o, g, r, a, m) {--}}
        {{--i['GoogleAnalyticsObject'] = r;--}}
        {{--i[r] = i[r] || function () {--}}
                    {{--(i[r].q = i[r].q || []).push(arguments)--}}
                {{--}, i[r].l = 1 * new Date();--}}
        {{--a = s.createElement(o),--}}
                {{--m = s.getElementsByTagName(o)[0];--}}
        {{--a.async = 1;--}}
        {{--a.src = g;--}}
        {{--m.parentNode.insertBefore(a, m)--}}
    {{--})(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');--}}

    {{--ga('create', 'UA-33462071-1', 'auto');--}}
    {{--ga('send', 'pageview');--}}

{{--</script>--}}

<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

</html>