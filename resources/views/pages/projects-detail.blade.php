<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ovin+ | Project Detail</title>
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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
                        <div class="image-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <!-- Sec Title -->
                                <div class="sec-title">
                                    <div class="title">IT-Solutions</div>
                                    <h2>Proud Projects That Make Us Stand Out</h2>
                                </div>
                                <div class="image">
                                    <img src="images/gallery/14.jpg" alt="" />
                                </div>
                            </div>
                        </div>

                        <!-- Info Column -->
                        <div class="info-column col-lg-4 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h4>Project Info</h4>
                                <div class="text">Etiam volutpat ultricies est id volutpat. Maecenas finibus risus
                                    purus, id lobortis urna rutrum id. Sed pellent esquevert pharetra consequat</div>
                                <ul class="info-list">
                                    <li><span class="icon flaticon-user"></span><strong>Client: </strong>John Amanda
                                    </li>
                                    <li><span class="icon fa fa-bookmark-o"></span><strong>Category: </strong>Business,
                                        Campaign</li>
                                    <li><span class="icon flaticon-timetable"></span><strong>Date: </strong>6 June 20
                                    </li>
                                    <li><span class="icon fa fa-globe"></span><strong>Website: </strong>Globex.com</li>
                                    <li><span class="icon fa fa-map-marker"></span><strong>Location: </strong>New York
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="lower-section">
                    <h3>Innovative Interfaces</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. remaining essentially unchanged.</p>
                    <h3>You May Also Know How it Uses In IT Field?</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. remaining essentially unchanged.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                    <h3>Project Result & Benefits of Project</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using ‘Content here, content here’, making it look like
                        readable English. Many desktop publishing packages and web page editors now.</p>
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
                                    <a href="projects-detail.html"
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects-detail.html">Social Media App</a></h5>
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
                                    <a href="projects-detail.html"
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects-detail.html">Social Media App</a></h5>
                                <div class="category">Ideas / Technology</div>
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
                                    <a href="projects-detail.html"
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
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
                                    <a href="projects-detail.html"
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
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
                                    <a href="projects-detail.html"
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
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
                                    <a href="projects-detail.html"
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects-detail.html">Social Media App</a></h5>
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
                                    <a href="projects-detail.html"
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects-detail.html">Social Media App</a></h5>
                                <div class="category">Ideas / Technology</div>
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
                                    <a href="projects-detail.html"
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
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
                                    <a href="projects-detail.html"
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
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
                                    <a href="projects-detail.html"
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
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
