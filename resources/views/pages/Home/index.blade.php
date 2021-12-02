<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ovin+ | Homepage</title>
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

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        @include('component.nav')

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

        <!-- Banner Section -->
        <section class="banner-section">
            <div class="main-slider-carousel owl-carousel owl-theme">

                <div class="slide" style="background-image: url(images/main-slider/image-1.jpg)">
                    <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                    <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
                    <div class="auto-container">

                        <!-- Content Column -->
                        <div class="content-column">
                            <div class="inner-column">
                                <div class="patern-layer-three"
                                    style="background-image: url(images/main-slider/pattern-3.png)"></div>
                                <div class="title">IT Business Consulting</div>
                                <h1>Our Agency Provide <br> Best IT Solutions</h1>
                                <div class="text">Ovin+ Your Trusted Solutions Partner.</div>
                                <div class="btns-box">
                                    <a href="{{route("contact")}}" class="theme-btn btn-style-one"><span class="txt">Get
                                            a free quote</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="slide" style="background-image: url(images/main-slider/image-1.jpg)">
                    <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                    <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
                    <div class="auto-container">

                        <!-- Content Column -->
                        <div class="content-column">
                            <div class="inner-column">
                                <div class="patern-layer-three"
                                    style="background-image: url(images/main-slider/pattern-3.png)"></div>
                                <div class="title">IT Business Consulting</div>
                                <h1>Our Agency Provide <br> Best IT Solutions</h1>
                                <div class="text">Ovin+ Your Trusted Solutions Partner.</div>
                                <div class="btns-box">
                                    <a href="about.html" class="theme-btn btn-style-one"><span class="txt">Get
                                            a free quote</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="slide" style="background-image: url(images/main-slider/image-1.jpg)">
                    <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                    <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
                    <div class="auto-container">

                        <!-- Content Column -->
                        <div class="content-column">
                            <div class="inner-column">
                                <div class="patern-layer-three"
                                    style="background-image: url(images/main-slider/pattern-3.png)"></div>
                                <div class="title">IT Business Consulting</div>
                                <h1>Our Agency Provide <br> Best IT Solutions</h1>
                                <div class="text">Ovin+ Your Trusted Solutions Partner.</div>
                                <div class="btns-box">
                                    <a href="about.html" class="theme-btn btn-style-one"><span class="txt">Get
                                            a free quote</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>
        <!-- End Banner Section -->

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
                                        <h6>Why we are</h6>
                                        <div class="feature-text">To Be The Hope for every living thing in this planet.
                                            We help everyone to grow and survive by helping them to satisfy expectations
                                            with high-tech solutions and physical and mental support.
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

                            <a href="https://youtu.be/70PM55O2oRc" class="lightbox-image theme-btn btn-style-one"><span
                                    class="txt"><i class="play-icon"><img src="images/icons/play-icon.png"
                                            alt="" /></i>&ensp;
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

        <!-- Featured Section -->
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
                            <h5>Business Process Automation</h5>
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
                            <div class="text">Automate tasks of your workspace to reduce human effort and increase
                                efficiency using software or robots.
                            </div>

                        </div>
                    </div>
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-laptop"></span>
                            </div>
                            <h5>Web Development</h5>
                            <div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.
                            </div>

                        </div>
                    </div>
                    <!-- Service Block -->
                    {{-- <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-laptop"></span>
                            </div>
                            <h5>Business Procestomation</a></h5>
                            <div class="text">
                            </div>

                        </div>
                    </div> --}}

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
                        <div class="title ">WHO WE ARE</div>
                        <h2>We deal with the aspects of <br> professional IT Services</h2>
                    </div>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
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
                            <div class="inner-box">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-mobile-app"></span>
                                </div>
                                <h5 class="text">Mobile Developm/a></h5>
                                <div class="text">Create complex enterprise software, ensure reliable software
                                    integration, modernise your legacy system.</div>
                            </div>
                        </div>

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
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
                            <div class="inner-box">
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
                            <div class="inner-box">
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
                            <div class="inner-box">
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

        <!-- Call To Action Section -->
        <section class="call-to-action-section" style="background-image: url(images/background/pattern-3.png)">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Heading Column -->
                    <div class="heading-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2>Preparing For Your Business <br> Success With IT Solution</h2>
                        </div>
                    </div>
                    <!-- Button Column -->
                    <div class="button-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <a href="{{route("contact")}}" class="theme-btn btn-style-two"><span class="txt">Meet With
                                    Us</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call To Action Section -->

        <!-- Cases Section -->
        <livewire:home.projects>
            <!-- End Cases Section -->

            <!--Sponsors Section-->
            <section class="sponsors-section">
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

            <!-- Testimonial Section -->
            <section class="testimonial-section">
                <div class="auto-container">

                    <div class="testimonial-carousel owl-carousel owl-theme">

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box" style="background-image: url(images/background/pattern-4.png)">
                                <div class="upper-box">
                                    <div class="icon">
                                        <img src="images/resource/testimonial-icon-1.png" alt="" />
                                    </div>
                                    <h4>peeter</h4>
                                    <div class="designation">Client of Company</div>
                                </div>
                                <div class="text">"I have to say there was a bit of a misunderstanding / break down in
                                    communication to begin with, which resulted in myself having to draw out and scan
                                    pretty much exactly what I wanted. BUT, once this was sorted, I became extremely
                                    happy with JDESIGNS4ALL approach, feedback and willingness to work with me to make
                                    changes. Nothing was too much trouble, and I'm VERY happy. Thank you."
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box" style="background-image: url(images/background/pattern-4.png)">
                                <div class="upper-box">
                                    <div class="icon">
                                        <img src="images/resource/testimonial-icon-2.png" alt="" />
                                    </div>
                                    <h4>Alanzub</h4>
                                    <div class="designation">Client of Company</div>
                                </div>
                                <div class="text">"Absolutely incredible work, was very patient and did everything I
                                    asked for! I would recommend jdesigns to anyone looking to have a website built.
                                    Thank you again."
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box" style="background-image: url(images/background/pattern-4.png)">
                                <div class="upper-box">
                                    <div class="icon">
                                        <img src="images/resource/testimonial-icon-1.png" alt="" />
                                    </div>
                                    <h4>ann mery</h4>
                                    <div class="designation">Client of Company</div>
                                </div>
                                <div class="text">"I am so happy with my website and the quality of service that was
                                    provided. jdesigns was very responsive and made sure that I had everything I needed
                                    in terms of the functionality of my website. I highly recommended this seller"
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box" style="background-image: url(images/background/pattern-4.png)">
                                <div class="upper-box">
                                    <div class="icon">
                                        <img src="images/resource/testimonial-icon-2.png" alt="" />
                                    </div>
                                    <h4>josep mid</h4>
                                    <div class="designation">Client of Company</div>
                                </div>
                                <div class="text">"This company provided the service in the agreed upon time. The end
                                    product looks good. I look forward to using and maximizing my use of the site. I
                                    would definitely recommend them service.."
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->

                    </div>
                </div>

                <div class="lower-text">More than 5k customers share their thoughts to us. . . <a
                        href="{{route("testimonial")}}">Read All Reviews</a></div>

    </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Technology Section -->
    <section class="technology-section" style="background-image: url(images/background/1.jpg)">
        <div class="pattern-layer-one" style="background-image: url(images/background/pattern-5.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(images/background/pattern-6.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <div class="title">TECHNOLOGY INDEX</div>
                            <h2>We Deliver Solutions with the Goal of Trusting Workships</h2>
                        </div>
                    </div>
                </div>
                <!-- Blocks Column -->
                <div class="blocks-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row clearfix">

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="services-detail.html" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <span class="flaticon-coding-2"></span>
                                    </div>
                                    <h6>WEB</h6>
                                </div>
                            </div>

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="services-detail.html" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <span class="flaticon-android"></span>
                                    </div>
                                    <h6>ANDROID</h6>
                                </div>
                            </div>

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="services-detail.html" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <span class="flaticon-apple"></span>
                                    </div>
                                    <h6>IOS</h6>
                                </div>
                            </div>

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="services-detail.html" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <span class="flaticon-iot"></span>
                                    </div>
                                    <h6>IOT</h6>
                                </div>
                            </div>

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="services-detail.html" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <span class="flaticon-smartband"></span>
                                    </div>
                                    <h6>WEARALABLES</h6>
                                </div>
                            </div>

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="services-detail.html" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <span class="flaticon-tv"></span>
                                    </div>
                                    <h6>TV</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Technology Section -->

    <!-- Team Section -->
    {{-- <section class="team-section" style="background-image: url(images/background/2.jpg)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">OUR DEDICATED TEAM</div>
                        <h2>We have Large No <br> of Expert Team Member</h2>
                    </div>
                    <div class="pull-right">
                        <div class="text">Our goal is to help our companies maintain or achieve best- in-class
                            <br>
                            positions in their respective industries and our team works.</div>
                    </div>
                </div>
            </div>
            <div class="clearfix">

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="team.html"><img src="images/resource/team-1.jpg" alt="" /></a>
                        </div>
                        <div class="lower-box">
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook-f"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                            </ul>
                            <div class="content">
                                <h5><a href="team.html">Jennifer Garcia</a></h5>
                                <div class="designation">Consultant Officer</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="team.html"><img src="images/resource/team-2.png" alt="" /></a>
                        </div>
                        <div class="lower-box">
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook-f"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                            </ul>
                            <div class="content">
                                <h5><a href="team.html">Robert Liam</a></h5>
                                <div class="designation">Web Designer</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="team.html"><img src="images/resource/team-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-box">
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook-f"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                            </ul>
                            <div class="content">
                                <h5><a href="team.html">Jassica Ethan</a></h5>
                                <div class="designation">Project Manager</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="team.html"><img src="images/resource/team-4.jpg" alt="" /></a>
                        </div>
                        <div class="lower-box">
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook-f"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                            </ul>
                            <div class="content">
                                <h5><a href="team.html">Adaim Mrala</a></h5>
                                <div class="designation">IT Service Officer</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- End Team Section -->

    {{-- <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Our Blog</div>
                <h2>Click Out Our <br> Latest News & Artical</h2>
            </div>
            <div class="row clearfix">

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="news-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">22 <span>DEC</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-comment"></span>3 comments</li>
                                <li><span class="icon flaticon-user"></span>Admin</li>
                            </ul>
                            <h4><a href="news-detail.html">Define World Best IT Solution Technology</a></h4>
                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has ...</div>
                            <a class="read-more" href="news-detail.html">Read More<span
                                    class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="news-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">15 <span>DEC</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-comment"></span>3 comments</li>
                                <li><span class="icon flaticon-user"></span>Admin</li>
                            </ul>
                            <h4><a href="news-detail.html">You Must Try 20 Secret Of Digital Transform</a></h4>
                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has ...</div>
                            <a class="read-more" href="news-detail.html">Read More<span
                                    class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="news-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">10 <span>oct</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-comment"></span>3 comments</li>
                                <li><span class="icon flaticon-user"></span>Admin</li>
                            </ul>
                            <h4><a href="news-detail.html">Digital Conference Of IT Tech Events in 2020</a></h4>
                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has ...</div>
                            <a class="read-more" href="news-detail.html">Read More<span
                                    class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    @include('component/footer2')

    @include('component/footer')


    </div>
    <!--End pagewrapper-->

    <!-- Color Palate / Color Switcher -->


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
