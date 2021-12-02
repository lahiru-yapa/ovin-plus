<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ovin+</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Nunito+Sans:wght@300;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Color Themes -->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
                <h2>Services</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </section>

        <section class="featured-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Featured Block Two -->
                    <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="background-image: url(images/resource/feature-1.jpg)">
                            <div class="number">35 +</div>
                            <h4>Worldwide Work Pair</h4>
                            <div class="text">To succeed, every software solution must be deeply integrated into the
                                existing tech environment..</div>
                        </div>
                    </div>

                    <!-- Featured Block Two -->
                    <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="background-image: url(images/resource/feature-2.jpg)">
                            <div class="number">40 k</div>
                            <h4>Happy Clients</h4>
                            <div class="text">To succeed, every software solution must be deeply integrated into the
                                existing tech environment..</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Featured Section -->

        <!-- Services Section -->
        <section class="services-section margin-top">
            <div class="pattern-layer" style="background-image: url(images/background/pattern-2.png)"></div>
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title light centered">
                    <div class="title">WHO WE ARE</div>
                    <h2>We deal with the aspects of <br> professional IT Services</h2>
                </div>
                <div class="row clearfix">

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-responsive"></span>
                            </div>
                            <h5>IT Soluations</h5>
                            <div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.
                            </div>

                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-monitor"></span>
                            </div>
                            <h5>Security System</h5>
                            <div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.
                            </div>

                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-coding"></span>
                            </div>
                            <h5>Web Development</h5>
                            <div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.
                            </div>

                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-laptop"></span>
                            </div>
                            <h5>Database Security</h5>
                            <div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- Services Section Two -->
        <section class="services-section-two margin-top">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="icon-one" style="background-image: url(images/icons/icon-1.png)"></div>
                    <div class="icon-two" style="background-image: url(images/icons/icon-2.png)"></div>
                    <div class="icon-three" style="background-image: url(images/icons/icon-3.png)"></div>
                    <!-- Sec Title -->
                    <div class="sec-title light centered">
                        <div class="title">WHO WE ARE</div>
                        <h2>We deal with the aspects of <br> professional IT Services</h2>
                    </div>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-coding-1"></span>
                                </div>
                                <h5 class="text">Web Develpment</h5>
                                <div class="text">We carry more than just good coding skills. Our experience makes us
                                    stand out from other web development.</div>
                            </div>
                        </div>

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-mobile-app"></span>
                                </div>
                                <h5 class="text">Mobile Development</h5>
                                <div class="text">Create complex enterprise software, ensure reliable software
                                    integration, modernise your legacy system.</div>
                            </div>
                        </div>

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-computer"></span>
                                </div>
                                <h5 class="text">UI/UX Design</h5>
                                <div class="text">Build the product you need on time with an experienced team that uses
                                    a clear and effective design process.</div>
                            </div>
                        </div>

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-web"></span>
                                </div>
                                <h5 class="text">QA & Testing</h5>
                                <div class="text">Turn to our experts to perform comprehensive, multi-stage testing and
                                    auditing of your software.</div>
                            </div>
                        </div>

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-monitor-2"></span>
                                </div>
                                <h5 class="text">IT Counsultancy</h5>
                                <div class="text">Trust our top minds to eliminate workflow pain points, implement new
                                    tech, and consolidate app portfolios.</div>
                            </div>
                        </div>

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-human-resources"></span>
                                </div>
                                <h5 class="text">Dedicated Team</h5>
                                <div class="text">Over the past decade, our customers succeeded by leveraging
                                    Intellectsoft’s process of building, motivating.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section Two -->



        {{-- <section class="contact-map-section">
            <div class="auto-container">
                <div class="sec-title">
                    <div class="clearfix">
                        <div class="pull-left">
                            <div class="title">SEND YOUR MESSAGE</div>
                            <h2>Send Your Message</h2>
                        </div>
                        <div class="pull-right">
                            <div class="text">Our goal is to help our companies maintain or achieve best- in-class <br>
                                positions in their respective industries and our team works.</div>
                        </div>
                    </div>
                </div>
                <livewire:contact.contact-form />
            </div>
        </section> --}}

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
