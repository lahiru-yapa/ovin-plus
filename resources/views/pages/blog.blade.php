<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ovin+ | Blog</title>
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
                <h2>Latest News</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>News Update</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Blog Page Section -->
        <section class="blog-page-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
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
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
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
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
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

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="news-detail.html"><img src="images/resource/news-14.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="post-date">22 <span>DEC</span></div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-comment"></span>3 comments</li>
                                    <li><span class="icon flaticon-user"></span>Admin</li>
                                </ul>
                                <h4><a href="news-detail.html">Plan Your Project with Your Software</a></h4>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has ...</div>
                                <a class="read-more" href="news-detail.html">Read More<span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="news-detail.html"><img src="images/resource/news-15.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="post-date">15 <span>DEC</span></div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-comment"></span>3 comments</li>
                                    <li><span class="icon flaticon-user"></span>Admin</li>
                                </ul>
                                <h4><a href="news-detail.html">You have a Great Business Idea?</a></h4>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has ...</div>
                                <a class="read-more" href="news-detail.html">Read More<span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="news-detail.html"><img src="images/resource/news-16.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="post-date">10 <span>oct</span></div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-comment"></span>3 comments</li>
                                    <li><span class="icon flaticon-user"></span>Admin</li>
                                </ul>
                                <h4><a href="news-detail.html">How to Make Website WCAG Compliant?</a></h4>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has ...</div>
                                <a class="read-more" href="news-detail.html">Read More<span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Post Share Options -->
                <div class="styled-pagination text-center">
                    <ul class="clearfix">
                        <li class="prev"><a href="#"><span class="fa fa-angle-left"></span> </a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="active"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
                    </ul>
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
