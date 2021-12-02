<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ovin+ | Service Detail</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Nunito+Sans:wght@300;600;700;800;900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Color Switcher Mockup -->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Color Themes -->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        @include('component/nav')
        <!-- End Main Header -->

        <!-- Sidebar Cart Item -->
        <div class="xs-sidebar-group info-group">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget">
                            X
                        </a>
                    </div>
                    <div class="sidebar-textwidget">

                        <!-- Sidebar Info Content -->
                        @include('component.sidebar')


                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->

        <!--Page Title-->
        <section class="page-title">
            <div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
            <div class="auto-container">
                <h2>Service Detail</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Sidebar Side -->
                    <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar sticky-top">

                            <!-- Services -->
                            <div class="sidebar-widget">
                                <ul class="service-list">
                                    <li class="current"><a href=""><span class="arrow fa fa-angle-double-right"></span>
                                            QA & Testing</a></li>
                                    <li><a href=""><span class="arrow fa fa-angle-double-right"></span> UI/UX Design</a>
                                    </li>
                                    <li><a href=""><span class="arrow fa fa-angle-double-right"></span> Dedicated
                                            Team</a></li>
                                    <li><a href=""><span class="arrow fa fa-angle-double-right"></span> Web
                                            Development</a></li>
                                    <li><a href=""><span class="arrow fa fa-angle-double-right"></span> IT
                                            Counsultancy</a></li>
                                    <li><a href=""><span class="arrow fa fa-angle-double-right"></span> Mobile
                                            Development</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Contact Widget -->
                            <div class="sidebar-widget contact-widget">
                                <div class="widget-content" style="background-image:url(images/resource/service.jpg)">
                                    <div class="border-layer"></div>
                                    <div class="icon-box flaticon-phone-call"></div>
                                    <h4>How Can We Help?</h4>
                                    <div class="text">If you need any help, please <br> feel free to contact us.</div>
                                    <ul>
                                        <li><span class="icon flaticon-call"></span>+94 70 208 3306
                                        </li>
                                        <li><span class="icon flaticon-envelope"></span>ovinplus@gmail.com</li>
                                    </ul>
                                </div>
                            </div>

                        </aside>
                    </div>

                    <!-- Content Side -->
                    <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
                        <div class="services-detail">
                            <div class="inner-box">
                                <h2>IT Consultancy</h2>
                                <div class="image">
                                    <img src="images/resource/service-1.jpg" alt="" />
                                </div>
                                <p>We help transform the world’s most important businesses into vigorous organizations
                                    that anticipate the agile unpredictable, adapt rapidly to disruption and outcompete
                                    opposition. We work with clients who not hide from the future but want define
                                    clients with high potential and high ambition.</p>
                                <p>We help transform the world’s most important businesses into vigorous organizations
                                    opposition. We work with clients who not hide from the future but want define
                                    clients with high potential and high ambition. We go deep to unlock insight and have
                                    courage to act. We bring the right people together to challenge established thinking
                                    and drive transformation. We work with our clients to build the capabilities that
                                    enable organizations to achieve sustainable advantage.</p>
                                <h3>Cyber Security</h3>
                                <p>Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore et dolore
                                    magna aliqua enim ad minim veniam quis nostrud exercitation ulac laboris aliquip ex
                                    ea commodo consequat duis aute irure.dolor in repre henderit in voluptate velit esse
                                    cillum fugiat nulla paria tur excepteur sint cupidatat non proident.</p>
                                <div class="image-two">
                                    <img src="images/resource/service-2.jpg" alt="" />
                                    <div class="play-box">
                                        <a href="https://youtu.be/EqwtBc2TjZs" class="lightbox-image video-box"><span
                                                class="fa fa-play"><i class="ripple"></i></span></a>
                                    </div>
                                </div>
                                <h3>Analyzing IT services</h3>
                                <p>We help transform the world’s most important businesses into vigorous organizations
                                    that anticipate the agile unpredictable, adapt rapidly to disruption and outcompete
                                    opposition. We work with clients who not hide from the future but want define
                                    clients with high potential and high ambition.</p>
                                <p>We help transform the world’s most important businesses into vigorous organizations
                                    opposition. We work with clients who not hide from the future but want define
                                    clients with high potential and high ambition.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- <div class="our-shops text-center">

            <div class="row clearfix text-center">

                <!-- Shop Item -->
                <div class="row">
                    <div class="single-product-item col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="img-holder">
                            <img width="270" height="300" src="images/resource/products/1.jpg" class="" alt="">
                        </div>

                    </div>

                    <!-- Shop Item -->
                    <div class="single-product-item col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="img-holder">
                            <img width="270" height="250" src="images/resource/products/2.jpeg" class="" alt="">
                        </div>

                    </div>

                    <!-- Shop Item -->
                    <div class="single-product-item col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="img-holder">
                            <img width="270" height="300" src="images/resource/products/4.png" class="" alt="">
                        </div>

                    </div>
                    <div class="single-product-item col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="img-holder">
                            <img width="270" height="300" src="images/resource/products/3.jpeg" class="" alt="">
                        </div>

                    </div>
                </div>

            </div>

        </div> --}}
        @include('component/footer2')

        @include('component/footer')


    </div>


    <!-- Search Popup -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
        <button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
        <form method="post" action="blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/nav-tool.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>

</body>

</html>
