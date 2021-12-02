<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ovin+ | About Us</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Nunito+Sans:wght@300;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="css/color-switcher-design.css" rel="stylesheet">

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
                <h2>About us</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>About us</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- About Section -->
        <section class="about-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="title">ABOUT COMPANY</div>
                    <h2>You Can not Use Up <br> Creativity.</h2>
                </div>
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="text">Does any industry face a more complex audience journey and marketing sales
                                process than B2B technology? Consider the number of people who influence a sale, the
                                length of the decision-making cycle, the competing interests of the people who purchase,
                                implement, manage, and use the technology. It’s a lot meaningful content here.</div>
                            <div class="blocks-outer">

                                <!-- Feature Block -->
                                <div class="feature-block">
                                    <div class="inner-box">
                                        <div class="icon flaticon-award-1"></div>
                                        <h6>Experience</h6>
                                        <div class="feature-text">Our great team of more than 1400 software experts.
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature Block -->
                                <div class="feature-block">
                                    <div class="inner-box">
                                        <div class="icon flaticon-technical-support"></div>
                                        <h6>Quick Support</h6>
                                        <div class="feature-text">We’ll help you test bold new ideas while sharing your.
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                class="lightbox-image theme-btn btn-style-one"><span class="txt"><i
                                        class="play-icon"><img src="images/icons/play-icon.png" alt="" /></i>&ensp;
                                    intro Video</span></a>

                        </div>
                    </div>

                    <!-- Images Column -->
                    <div class="images-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column" style="background-image: url(images/icons/globe.png)">
                            <div class="pattern-layer" style="background-image: url(images/background/pattern-1.png)">
                            </div>
                            <div class="images-outer parallax-scene-1">
                                <div class="image" data-depth="0.10">
                                    <img src="images/resource/about-1.jpg" alt="" />
                                </div>
                                <div class="image-two" data-depth="0.30">
                                    <img src="images/resource/about-2.jpg" alt="" />
                                </div>
                                <div class="image-three" data-depth="0.20">
                                    <img src="images/resource/about-3.jpg" alt="" />
                                </div>
                                <div class="image-four" data-depth="0.30">
                                    <img src="images/resource/about-4.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <a href="{{route("about-us")}}" class="learn"><span
                                class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Learn More About
                            Company</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Counter Section -->
        <section class="counter-section">
            <div class="auto-container">
                <div class="inner-container">
                    <!-- Fact Counter -->
                    <div class="fact-counter">
                        <div class="row clearfix">

                            <!-- Column -->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="330">0</span>+
                                        </div>
                                        <h4 class="counter-title">ACTIVE CLIENTS</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Column -->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="count-outer count-box alternate">
                                            <span class="count-text" data-speed="5000" data-stop="850">0</span>+
                                        </div>
                                        <h4 class="counter-title">PROJECTS DONE</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Column -->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="2000" data-stop="25">0</span>+
                                        </div>
                                        <h4 class="counter-title">TEAM ADVISORS</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Column -->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3500" data-stop="10">0</span>+
                                        </div>
                                        <h4 class="counter-title">GLORIOUS YEARS</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Section -->

        <!-- About Section Two -->
        <section class="about-section-two" style="background-image: url(images/background/3.jpg)">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="circle-layer" style="background-image: url(images/background/pattern-10.png)">
                            </div>
                            <div class="image">
                                <img src="images/resource/about-5.jpg" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Skill Column -->
                    <div class="skill-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!-- Sec Title -->
                            <div class="sec-title light">
                                <div class="title">About Globax</div>
                                <h2>Transform Your Business With The Leading IT Solution rovider.</h2>
                                <div class="text">We listen. We advise. We design, together. Happy customers and ongoing
                                    relationships are what we strive for. Success is measured by results, the most
                                    important being how our clients feel about their experience with us.</div>
                            </div>

                            <!-- Skills -->
                            <div class="skills">

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">UI/UX Design</div>
                                        <div class="skill-percentage">
                                            <div class="count-box"><span class="count-text" data-speed="2000"
                                                    data-stop="93">0</span>%</div>
                                        </div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="93"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">App Development</div>
                                        <div class="skill-percentage">
                                            <div class="count-box"><span class="count-text" data-speed="2000"
                                                    data-stop="80">0</span>%</div>
                                        </div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="80"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Web Development</div>
                                        <div class="skill-percentage">
                                            <div class="count-box"><span class="count-text" data-speed="2000"
                                                    data-stop="73">0</span>%</div>
                                        </div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="73"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Learn
                                    More</span></a>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End About Section Two -->

        <!--Sponsors Section-->
        <section class="sponsors-section style-two">
            <div class="auto-container">

                <div class="carousel-outer">
                    <!--Sponsors Slider-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
        <!--End Sponsors Section-->

        <!-- Process Section -->
        {{-- <section class="process-section">
            <div class="pattern-layer-one" style="background-image: url(images/background/pattern-11.jpg)"></div>
            <div class="pattern-layer-two" style="background-image: url(images/background/pattern-12.jpg)"></div>
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="title">OUR PROCESS</div>
                    <h2>Driving Client Results Utilizing New <br> Innovation Points of view</h2>
                </div>
                <div class="row clearfix">

                    <!-- Process Block -->
                    <div class="process-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="number-box">01</div>
                            <h4><a href="{{route("services-detail")}}">End to End Solutions and Services Guaranteed</a>
        </h4>
        <div class="text">Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia
            arcu eget nulla. per inceptos himenaeos.</div>
        <a class="read-more" href="{{route("services-detail")}}"><span
                class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Read More</a>
    </div>
    </div>

    <!-- Process Block -->
    <div class="process-block col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="number-box">02</div>
            <h4><a href="{{route("services-detail")}}">Ahead of The Curve We Future-proof Your IT</a>
            </h4>
            <div class="text">Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia
                arcu eget nulla. per inceptos himenaeos.</div>
            <a class="read-more" href="{{route("services-detail")}}"><span
                    class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Read More</a>
        </div>
    </div>

    <!-- Process Block -->
    <div class="process-block col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="number-box">03</div>
            <h4><a href="{{route("services-detail")}}">Experience Certainty Every Project Executed
                    Successful</a></h4>
            <div class="text">Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia
                arcu eget nulla. per inceptos himenaeos.</div>
            <a class="read-more" href="{{route("services-detail")}}"><span
                    class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Read More</a>
        </div>
    </div>

    </div>
    </div>
    </section> --}}
    <!-- End Process Section -->

    <!-- Technology Section -->
    <section class="technology-section style-two" style="background-image: url(images/background/1.jpg)">
        <div class="pattern-layer-one" style="background-image: url(images/background/pattern-5.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(images/background/pattern-6.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="title">TECHNOLOGY INDEX</div>
                <h2>Real Time Monitoring Your Infrstracture <br> Branded Degital Solutions</h2>
            </div>
            <div class="row clearfix">

                <!-- Technology Block -->
                <div class="technology-block">
                    <div class="inner-box">
                        <a href="{{route("services-detail")}}" class="overlay-link"></a>
                        <div class="icon-box">
                            <span class="flaticon-dashboard"></span>
                        </div>
                        <h6>Data Analytics</h6>
                    </div>
                </div>

                <!-- Technology Block -->
                <div class="technology-block">
                    <div class="inner-box">
                        <a href="{{route("services-detail")}}" class="overlay-link"></a>
                        <div class="icon-box">
                            <span class="flaticon-coding-3"></span>
                        </div>
                        <h6>Web Develpment</h6>
                    </div>
                </div>

                <!-- Technology Block -->
                <div class="technology-block">
                    <div class="inner-box">
                        <a href="{{route("services-detail")}}" class="overlay-link"></a>
                        <div class="icon-box">
                            <span class="flaticon-design"></span>
                        </div>
                        <h6>Ul/UX Design</h6>
                    </div>
                </div>

                <!-- Technology Block -->
                <div class="technology-block">
                    <div class="inner-box">
                        <a href="{{route("services-detail")}}" class="overlay-link"></a>
                        <div class="icon-box">
                            <span class="flaticon-web-browser"></span>
                        </div>
                        <h6>QA & Testing</h6>
                    </div>
                </div>

                <!-- Technology Block -->
                <div class="technology-block">
                    <div class="inner-box">
                        <a href="{{route("services-detail")}}" class="overlay-link"></a>
                        <div class="icon-box">
                            <span class="flaticon-network-1"></span>
                        </div>
                        <h6>Dedicated Team</h6>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Technology Section -->

    <!-- Experiance Section -->
    <section class="experiance-section" style="background-image: url(images/background/pattern-9.png)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">EXPERIENCE. EXECUTION. EXCELLENCE.</div>
                <h2>What We Actually Do</h2>
            </div>

            <!-- Experiance Info Tabs -->
            <div class="experiance-info-tabs">
                <!-- Experiance Tabs -->
                <div class="experiance-tabs tabs-box">

                    <!-- Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#prod-html" class="tab-btn"><span class="icon flaticon-html"></span>HTML</li>
                        <li data-tab="#prod-bootstrap" class="tab-btn"><span
                                class="icon flaticon-bootstrap"></span>Bootstrap</li>
                        <li data-tab="#prod-css" class="tab-btn active-btn"><span class="icon flaticon-css"></span>CSS
                        </li>
                        <li data-tab="#prod-php" class="tab-btn"><span class="icon flaticon-php"></span>Php</li>
                        <li data-tab="#prod-java" class="tab-btn"><span class="icon flaticon-java"></span>JavaScript
                        </li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!--Tab / Active Tab-->
                        <div class="tab" id="prod-html">
                            <div class="content">
                                <h4>HTML Website Development Services</h4>
                                <div class="text">Engitech is the partner of choice for many of the world’s leading
                                    enterprises, SMEs and technology challengers. We help businesses <br> elevate
                                    their value through custom software development, product design, QA and
                                    consultancy services.</div>
                                <div class="btn-box text-center">
                                    <a href="{{route("services-detail")}}" class="theme-btn btn-style-three"><span
                                            class="txt">Learn More</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="prod-bootstrap">
                            <div class="content">
                                <h4>Bootstrap Website Development Services</h4>
                                <div class="text">Engitech is the partner of choice for many of the world’s leading
                                    enterprises, SMEs and technology challengers. We help businesses <br> elevate
                                    their value through custom software development, product design, QA and
                                    consultancy services.</div>
                                <div class="btn-box text-center">
                                    <a href="{{route("services-detail")}}" class="theme-btn btn-style-three"><span
                                            class="txt">Learn More</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab active-tab" id="prod-css">
                            <div class="content">
                                <h4>CSS Website Development Services</h4>
                                <div class="text">Engitech is the partner of choice for many of the world’s leading
                                    enterprises, SMEs and technology challengers. We help businesses <br> elevate
                                    their value through custom software development, product design, QA and
                                    consultancy services.</div>
                                <div class="btn-box text-center">
                                    <a href="{{route("services-detail")}}" class="theme-btn btn-style-three"><span
                                            class="txt">Learn More</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="prod-php">
                            <div class="content">
                                <h4>Php Website Development Services</h4>
                                <div class="text">Engitech is the partner of choice for many of the world’s leading
                                    enterprises, SMEs and technology challengers. We help businesses <br> elevate
                                    their value through custom software development, product design, QA and
                                    consultancy services.</div>
                                <div class="btn-box text-center">
                                    <a href="{{route("services-detail")}}" class="theme-btn btn-style-three"><span
                                            class="txt">Learn More</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="prod-java">
                            <div class="content">
                                <h4>JavaScript Website Development Services</h4>
                                <div class="text">Engitech is the partner of choice for many of the world’s leading
                                    enterprises, SMEs and technology challengers. We help businesses <br> elevate
                                    their value through custom software development, product design, QA and
                                    consultancy services.</div>
                                <div class="btn-box text-center">
                                    <a href="{{route("services-detail")}}" class="theme-btn btn-style-three"><span
                                            class="txt">Learn More</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('component/footer2')
    @include('component/footer')


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
