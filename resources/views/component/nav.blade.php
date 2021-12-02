<header class="main-header header-style-one">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">
                <!-- Top Left -->
                <div class="top-left">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li><a href="mailto:info@webmail.com"><span class="icon flaticon-email"></span>
                                ovinplus@gmail.com</a></li>
                        <li><a href="tel:786-875-864-75"><span class="icon flaticon-telephone"></span> +94 70 208
                                3306</a></li>
                    </ul>
                </div>

                <!-- Top Right -->
                <div class="top-right pull-right">
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li><a href="https://www.facebook.com/OvinPlusOfficail/"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        {{-- <li><a href="https://youtube.com/channel/UCBeLl9ZB1vkbOY5-TgeGTPg"><i class="fab fa-youtube-square"></i></a></li> --}}
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container clearfix">

            <div class="pull-left logo-box">
                <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
            </div>

            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li><a href="{{route("home")}}">Home</a></li>
                            <li class="dropdown"><a href="#">About</a>
                                <ul>
                                    <li><a href="{{route("about-us")}}">About Us</a></li>
                                    <li><a href="{{route("faq")}}">Faq</a></li>
                                    <li><a href="{{route("team")}}">Team</a></li>
                                    <li><a href="{{route("testimonial")}}">Testimonial</a></li>

                                </ul>
                            </li>
                            <li><a href="{{route("services")}}">Services</a>

                            </li>
                            <li class="dropdown"><a href="{{route("projects")}}">Projects</a>

                                {{-- <li><a href="{{route("projects-detail")}}">Projects Detail</a>
                            </li> --}}

                            </li>
                            {{-- <li><a href="{{route("blog")}}">Our Blog</a></li> --}}

                            <li><a href="{{route("contact")}}">Contact us</a></li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">


                    <!-- Nav Btn -->
                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>

                    <!-- Quote Btn -->
                    <div class="btn-box">
                        <a href="{{route("contact")}}" class="theme-btn btn-style-one"><span class="txt">Free
                                Consulting</span></a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{route("home")}}" title=""><img src="images/logo-small.png" style="width:90px;"></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">


                    <!-- Nav Btn -->
                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>

                </div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
