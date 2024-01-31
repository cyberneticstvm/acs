<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel=“canonical” href="{{ $canonical_url }}" />
    <meta name="author" content="Cybernetics">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link href="{{ asset('/web/assets/img/favicon.ico') }}" rel="shortcut icon">
    <link rel="manifest" href="{{ asset('/web/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/web/assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900&family=Outfit:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/slick.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/aurega.css') }}">

</head>

<body class="theme2">


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->



    <!--==============================
     Preloader
  ==============================-->
    <!--<div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>-->
    @include('web.nav-mobile')
    <div class="sidemenu-wrapper d-none d-lg-block ">
        <div class="sidemenu-content bg-black2">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="index.html"><img src="{{ asset('/web/assets/img/aurega-logo-transparent.png') }}" alt="Aurega"></a>
                    </div>
                    <p class="about-text">We provide specialized winterization services to safeguard your pool during the off-season, and when spring arrives, we handle the thorough opening process.</p>

                    <div class="th-social  footer-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('/web/assets/img/blog/recent-post-2-1.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Installation of new Equipment</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>12 Oct, 2023</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('/web/assets/img/blog/recent-post-2-2.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Installation of new Equipment</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>22 Oct, 2023</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h4 class="widget_title">Newsletter</h4>
                <div class="newsletter-widget">
                    <p class="md-10">Sign Up to get updates & news about us . Get Latest Deals from Walker's Inbox to our mail address.</p>
                    <div class="footer-search-contact mt-25">
                        <form>
                            <input class="form-control" type="email" placeholder="Enter your email">
                        </form>
                        <div class="footer-btn mt-10">
                            <button type="submit" class="th-btn style4 fw-btn">Subscribe Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
	Header Area
==============================-->
    <header class="th-header  header-layout2 header-absolute">
        <div class="header-top">
            <div class="container th-container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-phone"></i><a href="tel:+971528686158">(+971) 52 868 6158</a></li>
                                <li><i class="fa-regular fa-messages"></i><a href="mailto:mkt@auregagroup.com">mkt@auregagroup.com</a></li>
                                <li><i class="fa-light fa-clock"></i>Work Time: Mon - Fri 09AM - 6PM</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="social-links"><span class="social-title">Follow Us On:</span>
                            <a href="https://www.facebook.com/auregagroup/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/Auregagroup" target="_blank"><i class="fab fa-x"></i></a>
                            <a href="https://www.linkedin.com/company/auregaglobal/" target="_blank"><i class="fab fa-linkedin-in"></i> </a>
                            <a href="https://www.instagram.com/auregagroup/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@auregagroup7318" target="_blank"><i class="fab fa-youtube"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu -->
        @include('web.nav')
        <div class="logo-shape"></div>
    </header>
    @yield("content")
    <footer class="footer-wrapper footer-layout2">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-4 footer-border">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Quick link</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu style2">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Maintenance</a></li>
                                    <li><a href="gallery.html">gallery</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="contact.html">Teams & Conditions</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Repair</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="contact.html">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 footer-border">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo text-center">
                                    <a href="index.html"><img src="assets/img/logo-white2.svg" alt="Poolax"></a>
                                </div>
                                <p class="text-center">Provide specialized winterization services Sign Up to get updates & news about us.</p>
                                <div class="footer-search-contact mt-25">
                                    <form>
                                        <input class="form-control" type="email" placeholder="Enter your email">
                                    </form>
                                    <div class="">
                                        <button type="submit" class="th-btn"><i class="fa-light fa-paper-plane"></i></button>
                                    </div>
                                </div>
                                <div class="th-social footer-social mt-30 text-center">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 footer-border">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact Us</h3>
                            <div class="th-widget-about">
                                <p class="footer-info"><i class="fas fa-map-marker-alt"></i>445 S E St unit 12, Santa Rosa CA
                                    95404, United States</p>
                                <div class="footer-info"> <i class="fa-solid fa-phone"></i>
                                    <p class="footer-info_text">
                                        <a href="tel:+16326543554" class="text-inherit">+(163)-2654-3654</a>
                                        <a href="tel:+16326543564" class="text-inherit">+(163)-2654-3564</a>
                                    </p>
                                </div>
                                <p class="footer-info"><i class="fas fa-envelope"></i><a class="text-inherit" href="mailto:help24/7@Poolax.com">help24/7@Poolax.com</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <p class="copyright-text text-white text-center">© 2023 <a href="https://themeforest.net/user/themeholy">Poolax</a>. All Rights
                            Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-top="0%" data-left="0%"><img src="assets/img/shape/footer_shape_2_1.png" alt="shape">
        </div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="12%" data-right="0%"><img src="assets/img/shape/footer_shape_2_2.png" alt="shape"></div>
    </footer>



    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>



    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('/web/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('/web/assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/web/assets/js/bootstrap.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('/web/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('/web/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('/web/assets/js/jquery-ui.min.js') }}"></script>
    <!-- imagesloaded  -->
    <script src="{{ asset('/web/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- odometer -->
    <script src="{{ asset('/web/assets/js/odometer.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('/web/assets/js/nice-select.min.js') }}"></script>

    <!-- circle-progress -->
    <script src="{{ asset('/web/assets/js/circle-progress.js') }}"></script>

    <script src="{{ asset('/web/assets/js/jquery.ripples.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('/web/assets/js/main.js') }}"></script>

</body>

</html>