<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Globex HTML-5 Template | Project Detail</title>
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
    <style>
        a {
            color: #ccc;
            text-decoration: none;
        }

        h1 {
            font-family: 'Courgette', cursive;
            color: #0D5212;
        }

        .wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            max-width: 90%;
            margin: 20px auto 0;
        }

        .box {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 25%;
            flex: 1 1 25%;
            margin: 50px 10px 10px 25px;
            position: relative;
        }

        .abc {
            width: 280px;
            height: 200px;
            -webkit-box-shadow: 0px 0px 15px -1px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 0px 15px -1px rgba(0, 0, 0, 0.75);
        }

        .overlay {
            position: absolute;
            margin: 0;
            top: 0;
            height: 200px;
            z-index: 98;
            background: rgba(13, 82, 137, 1);
        }

        .ovrl-left {
            width: 160px;
            left: 50%;
            -webkit-box-shadow: 9px 0px 19px 0px rgba(105, 109, 122, 1);
            box-shadow: 9px 0px 19px 0px rgba(105, 109, 122, 1);
            border-left: 0.5px solid rgba(255, 255, 255, 0.8);
        }

        .ovrl-right {
            width: 160px;
            right: 50%;
            -webkit-box-shadow: -9px 0px 19px 0px rgba(105, 109, 122, 1);
            box-shadow: -9px 0px 19px 0px rgba(105, 109, 122, 1);
        }

        .locker {
            position: absolute;
            height: 20px;
            width: 20px;
            background: #fff;
            top: 43%;
            left: 48%;
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            z-index: 99;
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        i.arrow {
            font-size: 0.8em;
            color: #bcbcbc;
        }

        .move-right {
            -webkit-animation-name: myRight;
            animation-name: myRight;
            -webkit-animation-duration: 0.5s;
            animation-duration: 0.5s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        .move-left {
            -webkit-animation-name: myLeft;
            animation-name: myLeft;
            -webkit-animation-duration: 1.3s;
            animation-duration: 1.3s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        @-webkit-keyframes myRight {
            0% {
                left: 50%;
                opacity: 1;
            }

            100% {
                left: 80%;
                opacity: 0;
                display: none;
            }
        }

        @keyframes myRight {
            0% {
                left: 50%;
                opacity: 1;
            }

            100% {
                left: 80%;
                opacity: 0;
                display: none;
            }
        }

        @-webkit-keyframes myLeft {
            0% {
                right: 50%;
                opacity: 1;
            }

            100% {
                right: 80%;
                opacity: 0;
                display: none;
            }
        }

        @keyframes myLeft {
            0% {
                right: 50%;
                opacity: 1;
            }

            100% {
                right: 80%;
                opacity: 0;
                display: none;
            }
        }

    </style>
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
                <h2>Project Detail</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>Project Detail</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Project Detail Section -->
        <section class="project-detail-section">
            <div class="auto-container">
                <div class="upper-section">
                    <div class="row clearfix">

                        <!-- Image Column -->
                        <div class="image-column col-lg-12 col-md-12 col-sm-12">
                            <html>

                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width,initial-scale=1">
                                <title>photo show</title>
                                <link rel="stylesheet" href="normalize.css" type="text/css">
                                <link rel="stylesheet" href="myStyles.css" type="text/css">
                                <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
                                <link rel="stylesheet"
                                    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                            </head>

                            <body>
                                <section class="cases-section">
                                    <div class="auto-container">
                                        <!-- Sec Title -->
                                        <div class="sec-title centered">
                                            <div class="title">LATEST CASE STUDIES</div>
                                            <h2>Construction company website</h2>
                                        </div>
                                        <div class="row clearfix">

                                            <!-- Case Block -->
                                            <div class="case-block col-lg-4 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="{{asset('images/project/project2/cons1.jpg')}}">
                                                        <div class="overlay-box">

                                                            <div class="content">
                                                                <h4>Construction company
                                                                    website
                                                                </h4>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case-block col-lg-4 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="{{asset('images/project/project2/cons2.jpg')}}">
                                                        <div class="overlay-box">

                                                            <div class="content">
                                                                <h4>Construction company
                                                                    website
                                                                </h4>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case-block col-lg-4 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="{{asset('images/project/project2/cons3.jpg')}}">
                                                        <div class="overlay-box">

                                                            <div class="content">
                                                                <h4>Construction company
                                                                    website
                                                                </h4>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case-block col-lg-4 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="{{asset('images/project/project2/cons5.webp')}}">
                                                        <div class="overlay-box">

                                                            <div class="content">
                                                                <h4>Road construction company
                                                                    website
                                                                </h4>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case-block col-lg-4 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="{{asset('images/project/project2/cons6.webp')}}">
                                                        <div class="overlay-box">

                                                            <div class="content">
                                                                <h4>Road construction company
                                                                    website
                                                                </h4>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case-block col-lg-4 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="{{asset('images/project/project2/cons7.webp')}}">
                                                        <div class="overlay-box">

                                                            <div class="content">
                                                                <h4>Road construction company
                                                                    website
                                                                </h4>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                        </div>



        </section>

</body>
</div>
</div>
</div>
<div class="lower-section">
    <h3 class="text-center">Why do construction companies need a website?</h3>
    <p>Your website can provide information about your business: how long your company has been around, your specific
        experience and credentials, and exact services you offer. Your website can provide online testimonials and
        reviews from previous clients, as well as pictures of projects you have completed.</p>
    <div class="buttons-box clearfix">
        <div class="pull-left">
            <a href="#" class="theme-btn btn-style-three"><span class="txt"><i
                        class="fa fa-angle-double-left"></i>&nbsp; Previous</span></a>
        </div>
        <div class="pull-right">
            <a href="#" class="theme-btn btn-style-three"><span class="txt">Send Massage &nbsp;<i
                        class="fa fa-angle-double-right"></i></span></a>
        </div>
    </div>
</div>
</div>
</section>

<!-- Cases Section Two -->
<section class="cases-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="title">LATEST CASE STUDIES</div>
            <h2>Reads Our Recent <br> Case Studies</h2>
        </div>
    </div>

    <div class="outer-container">

        <div class="five-item-carousel owl-carousel owl-theme">

            <!-- Case Block Two -->
            <div class="case-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/6.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/6.jpg" data-fancybox="case-2" data-caption=""
                                class="search-icon"><span class="icon flaticon-search"></span></a>
                            <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h5><a href="projects-detail.html">hotel management website project</a></h5>
                        <div class="category">Consulting / Technology</div>
                    </div>
                </div>
            </div>

            <!-- Case Block Two -->
            <div class="case-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/7.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/7.jpg" data-fancybox="case-2" data-caption=""
                                class="search-icon"><span class="icon flaticon-search"></span></a>
                            <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h5><a href="projects-detail.html">hotel management website project</a></h5>

                    </div>
                </div>
            </div>

            <!-- Case Block Two -->
            <div class="case-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/8.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/8.jpg" data-fancybox="case-2" data-caption=""
                                class="search-icon"><span class="icon flaticon-search"></span></a>
                            <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h5><a href="projects-detail.html">eCommerce Website</a></h5>
                        <div class="category">Design / Development</div>
                    </div>
                </div>
            </div>

            <!-- Case Block Two -->
            <div class="case-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/9.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/9.jpg" data-fancybox="case-2" data-caption=""
                                class="search-icon"><span class="icon flaticon-search"></span></a>
                            <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h5><a href="projects-detail.html">Develop Your IT Bussiness </a></h5>
                        <div class="category">Project / IT Business</div>
                    </div>
                </div>
            </div>

            <!-- Case Block Two -->
            <div class="case-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/10.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/10.jpg" data-fancybox="case-2" data-caption=""
                                class="search-icon"><span class="icon flaticon-search"></span></a>
                            <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h5><a href="projects-detail.html">Manage Your IT Solution</a></h5>
                        <div class="category">IT Solution</div>
                    </div>
                </div>
            </div>

            <!-- Case Block Two -->
            <div class="case-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/6.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/6.jpg" data-fancybox="case-2" data-caption=""
                                class="search-icon"><span class="icon flaticon-search"></span></a>
                            <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h5><a href="projects-detail.html">hotel management website project</a></h5>

                    </div>
                </div>
            </div>

            <!-- Case Block Two -->
            <div class="case-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/7.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/7.jpg" data-fancybox="case-2" data-caption=""
                                class="search-icon"><span class="icon flaticon-search"></span></a>
                            <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h5><a href="projects-detail.html">hotel management website project</a></h5>

                    </div>
                </div>
            </div>

            <!-- Case Block Two -->
            <div class="case-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/8.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/8.jpg" data-fancybox="case-2" data-caption=""
                                class="search-icon"><span class="icon flaticon-search"></span></a>
                            <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h5><a href="projects-detail.html">eCommerce Website</a></h5>
                        <div class="category">Design / Development</div>
                    </div>
                </div>
            </div>

            <!-- Case Block Two -->
            <div class="case-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/9.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/9.jpg" data-fancybox="case-2" data-caption=""
                                class="search-icon"><span class="icon flaticon-search"></span></a>
                            <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h5><a href="projects-detail.html">Develop Your IT Bussiness </a></h5>
                        <div class="category">Project / IT Business</div>
                    </div>
                </div>
            </div>

            <!-- Case Block Two -->
            <div class="case-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/10.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/10.jpg" data-fancybox="case-2" data-caption=""
                                class="search-icon"><span class="icon flaticon-search"></span></a>
                            <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h5><a href="projects-detail.html">Manage Your IT Solution</a></h5>
                        <div class="category">IT Solution</div>
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
<script src="js/mixitup.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>
<script>
    $(function () {
        $(".box").on("mousedown", function (e) {
            const gate = $(this).children("div");
            $(this).children(".locker").hide();
            for (var i = 0; i < gate.length; i++) {
                if ($(gate[i]).hasClass("ovrl-left")) {
                    $(gate[i]).toggleClass("move-right");
                }
                if ($(gate[i]).hasClass("ovrl-right")) {
                    $(gate[i]).toggleClass("move-left");
                }
            }
            // removes the click event after reveling the image
            $(this).off();
        });
    });

</script>
</body>

</html>
