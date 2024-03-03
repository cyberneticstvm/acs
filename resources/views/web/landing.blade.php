<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NCJ2MCZH');
    </script>
    <!-- End Google Tag Manager -->
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
    <link rel="stylesheet" href="{{ asset('/web/assets/css/animation.css') }}">
    <link href="{{ asset('/web/assets/css/mystickyelement.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/landing.css') }}">

</head>

<body>


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCJ2MCZH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Whatsapp -->
    <div class="mystickyelements-fixed mystickyelements-position-right mystickyelements-position-screen-center mystickyelements-position-mobile-right mystickyelements-on-hover mystickyelements-size-medium mystickyelements-mobile-size-medium mystickyelements-templates-default">
        <div class="mystickyelement-lists-wrap">
            <ul class="mystickyelements-lists mystickyno-minimize">
                <li id="mystickyelements-social-whatsapp" class="mystickyelements-social-icon-li mystickyelements-social-whatsapp  element-desktop-on element-mobile-on">
                    <span class="mystickyelements-social-icon social-whatsapp social-custom" style="background: #D4AF37">
                        <a href="https://api.whatsapp.com/send?phone=971528686158&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
                    </span>
                    <span class="mystickyelements-social-text" style="background: #D4AF37;">
                        <a href="https://api.whatsapp.com/send?phone=971528686158&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank" rel="noopener">WhatsApp</a>
                    </span>
                </li>
            </ul>
        </div>
    </div>



    <!--********************************
   		Code Start From Here 
	******************************** -->



    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader ">
        <!--<button class="th-btn preloaderCls">Cancel Preloader </button>-->
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area">
            <div class="mobile-logo">
                <a href="{{ route('landing') }}"><img src="{{ asset('/web/assets/img/aurega-logo-small.webp') }}" alt="Aurega"></a>
                <div class="close-menu">
                    <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout3 header-absolute onepage-nav">
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
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.html"><img src="{{ asset('/web/assets/img/aurega-logo-small.webp') }}" alt="Aurega"></a>
                            </div>
                        </div>
                        <div class="col-auto me-lg-auto">
                        </div>
                        <div class="col-auto">
                            <div class="header-button">
                                <a href="{{ route('contact') }}" class="th-btn style2 radius-none">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==============================
Hero Area
==============================-->
    <div class="th-hero-wrapper  hero-3" data-bg-src="{{ asset('/web/assets/img/bg/bg1.webp') }}">
        <div class="hero-slider-3 th-carousel " data-slide-show="1" data-md-slide-show="1" data-fade="true">

            <div class="th-hero-slide">
                <div class="th-hero-bg ">
                    <img src="{{ asset('/web/assets/img/hero/hero_overlay_3_1.png') }}" alt="Hero Image">
                </div>
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-12">
                            <div class="hero-style3">
                                <span class="hero-subtitle text-gold" data-ani="slideindown" data-ani-delay="0.7s">Comprehensive Service Offerings</span>
                                <h1 class="hero-title mb-0" data-ani="slideinleft" data-ani-delay="0.3s">Aurega</h1>
                                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.4s">Business Setup in Dubai</h1>
                                <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s">Your Gateway to Seamless Business Setup in UAE</p>
                                <div class="btn-group  justify-content-center justify-content-lg-start" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="{{ route('about') }}" class="th-btn radius-none">Discover More</a>
                                    <a href="{{ route('business.consulting') }}" class="th-btn radius-none">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--======== / Hero Section ========-->
    <!--==============================
Booking Area  
==============================-->
    <div class="booking-section" data-pos-for=".service-sec" data-sec-pos="bottom-half">
        <div class="container">
            <form action="mail.php" method="POST" class="booking-form ajax-contact wow fadeInUp">
                <div class="input-wrap">
                    <h3 class="sec-title mb-10">Book An Appointment</h3>
                    <div class="row">
                        <div class="form-group col-lg-12 col-sm-6 border-1">
                            <textarea class="form-control" placeholder="Your Message" name="message"></textarea>
                            <i class="fa-regular fa-message"></i>
                        </div>
                        <div class="form-group col-lg-4 col-sm-6">
                            <input type="text" class="form-control" name="name" maxlength="50" placeholder="Full Name">
                            <i class="fa-light fa-user"></i>
                        </div>
                        <div class="form-group col-lg-4 col-sm-6">
                            <input type="text" placeholder="Your Email" name="email" class="form-control">
                            <i class="fa-light fa-envelope"></i>
                        </div>
                        <div class="form-group col-lg-4 col-sm-6">
                            <input type="text" class="form-control" name="phone_number" maxlength="15" placeholder="Phone Number with Country Code">
                            <i class="fa-regular fa-phone"></i>
                        </div>
                        <div class="form-group col-lg-4 col-sm-6">
                            <select name="service" id="service" class="form-select nice-select" name="service">
                                <option value="" disabled selected hidden>Select Service</option>
                                @forelse($services as $key => $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="form-btn col-lg-4 col-sm-6">
                            <button class="th-btn fw-btn radius-none">Appointment Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--==============================
	Footer Area
==============================-->
    <footer class="footer-wrapper footer-layout1">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-4">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="index.html"><img src="{{ asset('/web/assets/img/aurega-logo-transparent.png') }}" alt="Aurega"></a>
                                </div>
                                <p class="about-text text-justify">Aurega Group is the global gateway to multidisciplinary business requirements. We're one of the most trusted business setup advisory establishments which give comprehensive professional services to individuals, associations and large corporates.</p>

                                <div class="th-social  footer-social">
                                    <a href="https://www.facebook.com/auregagroup/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/Auregagroup" target="_blank"><i class="fab fa-x"></i></a>
                                    <a href="https://www.linkedin.com/company/auregaglobal/" target="_blank"><i class="fab fa-linkedin-in"></i> </a>
                                    <a href="https://www.instagram.com/auregagroup/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/@auregagroup7318" target="_blank"><i class="fab fa-youtube"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-2">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('freezone') }}">UAE Free Zone</a></li>
                                    <li><a href="{{ route('mainland') }}">Mainland</a></li>
                                    <li><a href="{{ route('offshore') }}">Offshore</a></li>
                                    <li><a href="{{ route('careers') }}">Careers</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Popular Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('business.consulting') }}">Business Setup</a></li>
                                    <li><a href="{{ route('golden.visa') }}">Golden Visa</a></li>
                                    <li><a href="{{ route('pro.service') }}">PRO Services</a></li>
                                    <li><a href="{{ route('company.incorporation') }}">Company Incorporation</a></li>
                                    <li><a href="{{ route('trademark') }}">Trademark Registration</a></li>
                                    <li><a href="{{ route('hr.service') }}">HR and Recruitment</a></li>
                                    <li><a href="{{ route('digital.service') }}">Digital Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact Us</h3>
                            <div class="th-widget-about">
                                <p class="footer-info"><i class="fas fa-map-marker-alt"></i>#106, Bay Square 11, Business Bay, Dubai</p>
                                <div class="footer-info"> <i class="fa-solid fa-phone"></i>
                                    <p class="footer-info_text">
                                        <a href="tel:+971528686158" class="text-inherit">+(971) 52 868 6158</a>
                                        <a href="tel:+971506939558" class="text-inherit">+(971) 50 693 9558</a>
                                    </p>
                                </div>
                                <p class="footer-info"><i class="fas fa-envelope"></i><a class="text-inherit" href="mailto:mkt@auregagroup.com">mkt@auregagroup.com</a></p>

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
                        <p class="copyright-text text-white text-center">© {{ date('Y') }} <a target="_blank" href="https://auregagroup.com" class="text-gold">Aurega Group Limited</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-top="0%" data-left="0%"><img src="{{ asset('/web/assets/img/shape/footer_shape_1.png') }}" alt="shape">
        </div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="12%" data-right="0%"><img src="{{ asset('/web/assets/img/shape/footer_shape_2.png') }}" alt="shape"></div>
    </footer>

    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--******************************** 
			Code End  Here 
	******************************** -->


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
    <script src="{{ asset('/web/assets/js/jquery.ripples.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('/web/assets/js/main.js') }}"></script>

    <script src="{{ asset('/web/assets/js/sharer.js') }}"></script>

    <script>
        $(function() {
            "use strict"
            $('form').submit(function() {
                $(".btn-submit").attr("disabled", true);
                $(".btn-submit").html("Loading...<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>");
            });
            $(".mystickyelements-fixed").hover(function() {
                $("#mystickyelements-social-whatsapp").addClass("elements-active elements-hover-active");
                $(".mystickyelements-fixed").addClass("mystickyelements-on-click");
            });

            $(".mystickyelements-fixed").mouseleave(function() {
                $("#mystickyelements-social-whatsapp").removeClass("elements-active elements-hover-active");
                $(".mystickyelements-fixed").removeClass("mystickyelements-on-click");
            });
        })
    </script>

</body>

</html>