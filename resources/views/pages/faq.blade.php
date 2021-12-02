<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ovin+ | Faq's</title>
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

        <!--Page Title-->
        <section class="page-title">
            <div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
            <div class="auto-container">
                <h2>Some FAQ’s</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>Faq's</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Faq's Page Section -->
        <section class="faq-page-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="title">Some FAQ’s</div>
                    <h2>Read Most <br> Frequent Questions</h2>
                </div>

                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">What is the first stage in the project? <div
                                        class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">In the first instance we'll help you create a design brief to
                                            explore any thoughts that you might for your project. At this stage you can
                                            also supply examples of any particular designs you might like. We'll never
                                            duplicate anything you show us, but it's always useful to have a visual
                                            reference..</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Can I edit my site and if so how? <div
                                        class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">All of our sites come with a fully featured Content Management
                                            System [CMS] and this means you can login from any device with an internet
                                            connection to quickly and easily make simple changes to text and images or
                                            add blog posts. No technical knowledge is required!.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active">Do you offer support to help me use my site?<div
                                        class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Of course! We’ll provide you with assistance to to help you
                                            get to grips with your site and we also include a free telephone or Skype
                                            consultation where we’ll walk you through everything you need to know to get
                                            the most out of your shiny new website.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">What about social media? <div class="icon fa fa-angle-right">
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">We can integrate all of your social media accounts into your
                                            website for you. From Facebook to Instragram we can integrate all of your
                                            accounts so all of your visitors can easily keep in touch with you across
                                            platforms. All at no extra cost.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">What if I need a help from you after delivery?<div
                                        class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">No problem. You can just send a message so we can come up
                                            with a solution.</div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Can you maintain my site for me? <div
                                        class="icon fa fa-angle-right">
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Yes, I can. I can provide you with ongoing support for an
                                            additional fee.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Are your designs pre-made templates? <div
                                        class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Absolutely not.So the uniqueness is guaranteed.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Show me some work you have done in the past? <div
                                        class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Yes, I have multiple options in styling and designing and I
                                            can show you my past work in this niche as well.send me a message so i can
                                            show you my portfolio.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">What about the logo design, Business Cards, Flyers, Letterheads?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Yeah i offer the logo design ,Business Cards, Flyers,
                                            Letterheads, services as well on very reasonable prices</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">What is required from me to build a Mobile phone friendly website?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">You just need to send me complete details of your company
                                            along with the Logo( i can create one if you dont have )and images then let
                                            me do the rest of the job.</div>
                                    </div>
                                </div>
                            </li>

                        </ul>

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
