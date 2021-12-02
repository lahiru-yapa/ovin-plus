<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ovin+ | Projects</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Nunito+Sans:wght@300;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Color Themes -->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
        </div>
        <!-- END sidebar widget item -->

        <!--Page Title-->
        <section class="page-title">
            <div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
            <div class="auto-container">
                <h2>Projects</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="title">LATEST CASE STUDIES</div>
                    <h2>Reads Now Our Recent <br> Projects Studies</h2>
                </div>
                <!--MixitUp Galery-->
                <div class="mixitup-gallery">

                    <!--Filter-->
                    <div class="filters clearfix">

                        <ul class="filter-tabs filter-btns text-center clearfix">
                            <li class="active filter" data-role="button" data-filter="all">All</li>
                            <li class="filter" data-role="button" data-filter=".design">Design</li>
                            <li class="filter" data-role="button" data-filter=".development">Development</li>
                            <li class="filter" data-role="button" data-filter=".ideas">Ideas</li>
                            <li class="filter" data-role="button" data-filter=".technology">Technology</li>
                        </ul>

                    </div>

                    <div class="filter-list row clearfix">

                        <!-- Case Block -->
                        <div class="case-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('images/project/project1/hotel.jpeg')}}">
                                    <div class="overlay-box">
                                        <a href="images/project/project1/hotel.jpeg" data-fancybox="case"
                                            data-caption="" class="search-icon"><span
                                                class="icon flaticon-search"></span></a>
                                        <div class="content">
                                            <h4><a href="{{route("projectone")}}">hotel management</a></h4>
                                            <div class="category">Ideas / Technology</div>
                                        </div>
                                        <a href="{{route("projectone")}}"
                                            class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Case Block -->
                        <div class="case-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('images/project/project2/cons.jpeg')}}">
                                    <div class="overlay-box">
                                        <a href="images/project/project2/cons.jpeg" data-fancybox="case" data-caption=""
                                            class="search-icon"><span class="icon flaticon-search"></span></a>
                                        <div class="content">
                                            <h4><a href="{{route("projecttwo")}}">Construction Company Site</a></h4>
                                            <div class="category">Ideas / Technology</div>
                                        </div>
                                        <a href="{{route("projecttwo")}}"
                                            class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="case-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('images/project/project3/driving1.jpeg')}}">
                                    <div class="overlay-box">
                                        <a href="images/project/project3/driving1.jpeg" data-fancybox="case"
                                            data-caption="" class="search-icon"><span
                                                class="icon flaticon-search"></span></a>
                                        <div class="content">
                                            <h4><a href="{{route("projectthree")}}">Driving Dchool </a></h4>
                                            <div class="category">Ideas / Technology</div>
                                        </div>
                                        <a href="{{route("projectthree")}}"
                                            class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <!-- Case Block -->
                        <div class="case-block mix all ideas development col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/gallery/4.jpg" alt="" />
                                    <div class="overlay-box">
                                        <a href="images/gallery/4.jpg" data-fancybox="gallery" data-caption=""
                                            class="search-icon"><span class="icon flaticon-search"></span></a>
                                        <div class="content">
                                            <h4><a href="projects-detail.html">Social Media App</a></h4>
                                            <div class="category">Ideas / Technology</div>
                                        </div>
                                        <a href="projects-detail.html"
                                            class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Case Block -->
                        <div class="case-block mix all technology design ideas col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/gallery/5.jpg" alt="" />
                                    <div class="overlay-box">
                                        <a href="images/gallery/5.jpg" data-fancybox="gallery" data-caption=""
                                            class="search-icon"><span class="icon flaticon-search"></span></a>
                                        <div class="content">
                                            <h4><a href="projects-detail.html">Social Media App</a></h4>
                                            <div class="category">Ideas / Technology</div>
                                        </div>
                                        <a href="projects-detail.html"
                                            class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Case Block -->
                        <div class="case-block mix all design development col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/gallery/11.jpg" alt="" />
                                    <div class="overlay-box">
                                        <a href="images/gallery/11.jpg" data-fancybox="gallery" data-caption=""
                                            class="search-icon"><span class="icon flaticon-search"></span></a>
                                        <div class="content">
                                            <h4><a href="projects-detail.html">Social Media App</a></h4>
                                            <div class="category">Ideas / Technology</div>
                                        </div>
                                        <a href="projects-detail.html"
                                            class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Case Block -->
                        <div class="case-block mix all design technology development col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/gallery/12.jpg" alt="" />
                                    <div class="overlay-box">
                                        <a href="images/gallery/12.jpg" data-fancybox="gallery" data-caption=""
                                            class="search-icon"><span class="icon flaticon-search"></span></a>
                                        <div class="content">
                                            <h4><a href="projects-detail.html">Social Media App</a></h4>
                                            <div class="category">Ideas / Technology</div>
                                        </div>
                                        <a href="projects-detail.html"
                                            class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Case Block -->
                        <div class="case-block mix all design technology ideas col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/gallery/13.jpg" alt="" />
                                    <div class="overlay-box">
                                        <a href="images/gallery/13.jpg" data-fancybox="gallery" data-caption=""
                                            class="search-icon"><span class="icon flaticon-search"></span></a>
                                        <div class="content">
                                            <h4><a href="projects-detail.html">Social Media App</a></h4>
                                            <div class="category">Ideas / Technology</div>
                                        </div>
                                        <a href="projects-detail.html"
                                            class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>

                    <div class="btn-box text-center">
                        <a href="{{route("contact")}}" class="theme-btn btn-style-three"><span class="txt">Send
                                Massage</span></a>
                    </div>

                </div>
            </div>
        </section>
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

</body>

</html>
