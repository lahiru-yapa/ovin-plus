<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    @livewireStyles
    <title>Ovin+ | Contact</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Nunito+Sans:wght@300;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body class="hidden-bar-wrapper">
    <div class="page-wrapper">
        <div class="preloader"></div>
        @include('component/nav')
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

                        @include('component.sidebar')


                    </div>
                </div>
            </div>
        </div>
        <section class="page-title">
            <div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
            <div class="auto-container">
                <h2>Contact us</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </section>
        <section class="contact-info-section">
            <div class="auto-container">
                <div class="title-box">
                    <div class="title">GET IN TOUCH</div>
                    <h2>For your very specific industry,
                        we have highly-tailored solutions.</h2>

                </div>
                <div class="row clearfix">
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="content">
                                <div class="icon-box"><span class="flaticon-pin"></span></div>
                                <ul>
                                    <li><strong>Address</strong></li>
                                    <li>125, Suitland Street, USA</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="content">
                                <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                                <ul>
                                    <li><strong>Phone</strong></li>
                                    <li>+94 70 208 3306
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="content">
                                <div class="icon-box"><span class="flaticon-email-1"></span></div>
                                <ul>
                                    <li><strong>E-Mail</strong></li>
                                    <li>ovinplus@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-text">We are at 36 places over the country, <a href="#">see our branches.</a></div>
            </div>
        </section>
        <section class="contact-map-section">
            <div class="auto-container">
                <div class="map-boxed">
                    <div class="map-outer">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9776930190583!2d79.88717474988692!3d6.893271420643177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a414cc7d64d%3A0x19dc13345d002eb7!2sNawala%20Rd%2C%20Sri%20Jayawardenepura%20Kotte!5e0!3m2!1sen!2slk!4v1636361844134!5m2!1sen!2slk"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-map-section">
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
        </section>
        @include('component/footer2')

        @include('component/footer')

    </div>

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

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
    @livewireScripts
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
    <script src="js/validate.js"></script>
    <script src="js/nav-tool.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>

</body>

</html>
