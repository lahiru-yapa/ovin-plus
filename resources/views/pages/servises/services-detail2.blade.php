<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Globex HTML-5 Template | Service Detail</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Nunito+Sans:wght@300;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="css/color-switcher-design.css" rel="stylesheet">

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
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo-2.png" alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h2>About Us</h2>
                                    <p class="text">The argument in favor of using filler text goes something like this:
                                        If you use real content in the Consulting Process, anytime you reach a review
                                        point you’ll end up reviewing and negotiating the content itself and not the
                                        design.</p>
                                    <a href="#" class="theme-btn btn-style-two"><span
                                            class="txt">Consultation</span></a>
                                </div>
                                <div class="contact-info">
                                    <h2>Contact Info</h2>
                                    <ul class="list-style-one">
                                        <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City,
                                            USA</li>
                                        <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                        <li><span class="icon fa fa-envelope"></span>globex@gmail.com</li>
                                        <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday:
                                            Closed</li>
                                    </ul>
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                    <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                    <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                    <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                    <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                                </ul>
                            </div>
                        </div>

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
                                    <li class="current"><a href="services-detail.html"><span
                                                class="arrow fa fa-angle-double-right"></span> QA & Testing</a></li>
                                    <li><a href="services-detail.html"><span
                                                class="arrow fa fa-angle-double-right"></span> UI/UX Design</a></li>
                                    <li><a href="services-detail.html"><span
                                                class="arrow fa fa-angle-double-right"></span> Dedicated Team</a></li>
                                    <li><a href="services-detail.html"><span
                                                class="arrow fa fa-angle-double-right"></span> Web Development</a></li>
                                    <li><a href="services-detail.html"><span
                                                class="arrow fa fa-angle-double-right"></span> IT Counsultancy</a></li>
                                    <li><a href="services-detail.html"><span
                                                class="arrow fa fa-angle-double-right"></span> Mobile Development</a>
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
                                        <li><span class="icon flaticon-call"></span>+1234567890</li>
                                        <li><span class="icon flaticon-envelope"></span>info@example.com</li>
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
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                            class="lightbox-image video-box"><span class="fa fa-play"><i
                                                    class="ripple"></i></span></a>
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
        <div class="our-shops text-center">

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
                            <img width="270" height="300" src="images/resource/products/2.jpg" class="" alt="">
                        </div>

                    </div>

                    <!-- Shop Item -->
                    <div class="single-product-item col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="img-holder">
                            <img width="270" height="300" src="images/resource/products/3.jpg" class="" alt="">
                        </div>

                    </div>
                    <div class="single-product-item col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="img-holder">
                            <img width="270" height="300" src="images/resource/products/4.jpg" class="" alt="">
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!-- Info Section -->
        <section class="info-section" style="background-image: url(images/background/6.jpg)">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Logo Column -->
                    <div class="logo-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo-2.png" alt="" /></a>
                            </div>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="icon-box"><span class="flaticon-pin"></span></div>
                            <ul>
                                <li><strong>Address</strong></li>
                                <li>125, Suitland Street, USA</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                            <ul>
                                <li><strong>Phone</strong></li>
                                <li>+94 70 208 3306
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="icon-box"><span class="flaticon-email-1"></span></div>
                            <ul>
                                <li><strong>E-Mail</strong></li>
                                <li>ovinplus@gmail.com</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Info Section -->

        <!-- Main Footer -->
        <footer class="main-footer style-three">
            <div class="pattern-layer-three" style="background-image: url(images/background/pattern-14.png)"></div>
            <div class="pattern-layer-four" style="background-image: url(images/background/pattern-15.png)"></div>
            <!--Waves end-->
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <h5>About Globex</h5>
                                <div class="text">We are the best world Information Technology Company. Providing the
                                    highest quality in hardware & Network solutions. About more than 25 years of
                                    experience and 1000 of innovative achievements. <br><br> It uses a dictionary of
                                    over 200 Latin words generated is therefore allow.</div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>Quick Links</h5>
                                <ul class="list-link">
                                    <li><a href="">Managed IT services</a></li>
                                    <li><a href="">Cloud Services</a></li>
                                    <li><a href="">IT support & helpdesk</a></li>
                                    <li><a href="">Cyber security</a></li>
                                    <li><a href="">Custom Software</a></li>
                                    <li><a href="">Free Consultation</a></li>
                                    <li><a href="">Our Business Growth</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget subscribe-widget">
                                <h5>Subscribe Newsletter</h5>
                                <div class="text">Sign up today for hints, tips and <br> the latest product news</div>
                                <!--Emailed Form-->
                                <div class="emailed-form">
                                    <form method="post" action="contact.html">
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Enter Your Email"
                                                required>
                                            <button type="submit" class="theme-btn">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="copyright">Copyright &copy; 2020 by Ovin+</div>
                        </div>
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <ul class="footer-nav">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </footer>


    </div>
    <!--End pagewrapper-->

    <!-- Color Palate / Color Switcher -->

    <div class="color-palate">
        <div class="color-trigger">
            <i class="fa fa-gear"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Your Color</h6>
        </div>

        <div class="various-color clearfix">
            <div class="colors-list">
                <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
                <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
                <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
                <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
                <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
                <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
            </div>
        </div>

        <ul class="rtl-version option-box">
            <li class="rtl">RTL Version</li>
            <li>LTR Version</li>
        </ul>

        <a href="#" class="purchase-btn">Purchase now $12</a>

        <div class="palate-foo">
            <span>You will find much more options for colors and styling in admin panel. This color picker is used only
                for demonstation purposes.</span>
        </div>

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
