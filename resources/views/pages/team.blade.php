<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ovin+ | Our Team</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Nunito+Sans:wght@300;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="css/color-switcher-design.css" rel="stylesheet">

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
        <!-- END sidebar widget item -->

        <!--Page Title-->
        <section class="page-title">
            <div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
            <div class="auto-container">
                <h2>Our Team</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>Team</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Team Page Section -->
        <section class="team-page-section">
            <div class="auto-container">
                <div class="row clearfix">

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
                                    <h5><a href="team.html">Uditha Premadasa</a></h5>
                                    <div class="designation">CEO</div>
                                </div>
                            </div>
                        </div>
                    </div>


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
                                    <h5><a href="team.html">L.Yapa Abewardhana</a></h5>
                                    <div class="designation">software engineer</div>
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
                                    <h5><a href="team.html">Udara S Maduwantha</a></h5>
                                    <div class="designation">software engineer</div>
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
                                    <h5><a href="team.html">Eshintha Hashippriya</a></h5>
                                    <div class="designation">software engineer</div>
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
