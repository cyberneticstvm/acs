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
                    <span class="mystickyelements-social-icon social-whatsapp social-custom" style="background: #d8b06e">
                        <a href="https://api.whatsapp.com/send?phone=971528686158&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
                    </span>
                    <span class="mystickyelements-social-text" style="background: #d8b06e;">
                        <a href="https://api.whatsapp.com/send?phone=971528686158&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank" rel="noopener">WhatsApp</a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <!--==============================
     Preloader
  ==============================-->
    <!--<div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>-->
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
                    <div class="col-auto d-none d-lg-block">
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
            <div class="container th-container">
                <div class="menu-area">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('/web/assets/img/aurega-logo-small.webp') }}" alt="Aurega"></a>
                            </div>
                        </div>
                        <div class="col-auto me-lg-auto">
                        </div>
                        <div class="col-auto">
                            <div class="header-button">
                                <!--<button type="button" class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button>
                                <a href="#" class="icon-btn sideMenuToggler d-none d-lg-block"><i class="far fa-bars"></i></a>-->
                                <a href="{{ route('contact') }}" class="th-btn border-radius">Request a quote</a>
                                <!--<button class="icon-btn th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-shape"></div>
    </header>
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
    <div class="space-top why-area2 bg-top-center background-image" style="background-image: url('{{ asset('/web/assets/img/bg/1.png') }}');">
        <div class="container mt-5">
            <div class="row justify-content-end">
                <div class="col-xl-7 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="pe-xl-5">
                        <div class="title-area text-center text-xl-start mb-25">
                            <!--<span class="sub-title style1">Aurega Corporate Services LLC</span>-->
                            <h2 class="sec-title text-white">Business Setup in Dubai</h2>
                            <p class="text-justify text-white">Navigating the complexities of establishing a business in the UAE can pose considerable challenges. However, with over 30 Years extensive experience and a track record of serving over 20,000 clients, our expert consultants stand ready to guide you through every step of the process.</p>
                            <p class="text-justify text-white">With over 30 years of experience in the industry, we've proudly assisted over 20,000 satisfied clients. Our commitment is to swiftly facilitate the establishment of your dream company in Dubai, leveraging our extensive expertise and friendly team members. We excel in delivering seamless and cost-effective business solutions customized to your specific requirements. Our track record of numerous awards underscores our reputation as the foremost service provider in the UAE.</p>
                        </div>
                    </div>
                    <div class="info-card-wrap style2">
                        <div class="info-card">
                            <div class="info-card_icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="info-card_content">
                                <p class="info-card_text text-white">Phone Number:</p>
                                <a href="tel:+971528686158" class="info-card_link text-white">+(971) 52 868 6158</a>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="info-card_icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="info-card_content">
                                <p class="info-card_text text-white">Email Address</p>
                                <a href="mailto:mkt@auregagroup.com" class="info-card_link text-white">mkt@auregagroup.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <form method="post" action="{{ route('landing.form.submit') }}">
                        @csrf
                        <div class="appointment-form style2">
                            <h3 class="form-title text-center">Booking Appointment</h3>
                            <div class="row">
                                <div class="form-group col-12">
                                    <i class="fa-light fa-user"></i>
                                    <input type="text" placeholder="Your Name" class="form-control" name="name" required>
                                </div>
                                <div class="form-group col-12">
                                    <i class="fa-light fa-envelope"></i>
                                    <input type="email" placeholder="Your Email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group col-12">
                                    <i class="fa-light fa-phone"></i>
                                    <input type="text" placeholder="Your Phone Number with country Code" class="form-control" name="phone_number" required>
                                </div>
                                <div class="form-group col-12">
                                    <i class="fa-regular fa-tag"></i>
                                    <select name="service" id="service" class="form-select nice-select" required>
                                        <option value="">Select Service</option>
                                        @forelse($services as $key => $service)
                                        <option value="{{ $service->name }}">{{ $service->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write message...." required></textarea>
                                    <i class="fal fa-comment"></i>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn fw-btn">Appointment Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-hidden" data-bg-src="asset('/web/assets/img/bg/counter_bg_1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <h2>Your Gateway to Seamless Business Setup in UAE</h2>
                    <p class="text-center text-dark">
                        As specialists in company formation in Dubai, we understand the unique dynamics of the local business landscape.
                    </p>
                </div>
            </div>
            <div class="counter-sec">
                <div class="th-counterup wow fadeInLeft">
                    <div class="inner">
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="100">00</span>
                                <span class="counter-number">%</span>
                            </h3>
                            <p class="counter-card_text">Customer Satisfaction</p>
                        </div>
                    </div>
                </div>
                <div class="th-counterup wow fadeInLeft">
                    <div class="inner">
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="50">00</span>
                                <span class="counter-number">+</span>
                            </h3>
                            <p class="counter-card_text">Expert Team Members</p>
                        </div>
                    </div>
                </div>
                <div class="th-counterup wow fadeInLeft">
                    <div class="inner">
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="20,000">00</span>
                                <span class="counter-number">+</span>
                            </h3>
                            <p class="counter-card_text">Satisfied Customers</p>
                        </div>
                    </div>
                </div>
                <div class="th-counterup wow fadeInLeft">
                    <div class="inner">
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="30">00</span>
                                <span class="counter-number">+</span>
                            </h3>
                            <p class="counter-card_text">Years in Business</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-wrapper footer-layout1">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-4">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{ route('landing') }}"><img src="{{ asset('/web/assets/img/aurega-logo-transparent.png') }}" alt="Aurega"></a>
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

    <div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white popupForm">
            <div class="row gx-60">
                <div class="col align-self-center">
                    <div class="appointment-form style2">
                        <h3 class="form-title text-center">Booking Appointment</h3>
                        <form method="post" action="{{ route('landing.form.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <i class="fa-light fa-user"></i>
                                    <input type="text" placeholder="Your Name" class="form-control" name="name" required>
                                </div>
                                <div class="form-group col-12">
                                    <i class="fa-light fa-envelope"></i>
                                    <input type="email" placeholder="Your Email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group col-12">
                                    <i class="fa-light fa-phone"></i>
                                    <input type="text" placeholder="Your Phone Number with country Code" class="form-control" name="phone_number" required>
                                </div>
                                <!--<div class="form-group col-12">
                                    <i class="fa-regular fa-tag"></i>
                                    <select name="service" id="service" class="form-select nice-select" required>
                                        <option value="">Select Service</option>
                                        @forelse($services as $key => $service)
                                        <option value="{{ $service->name }}">{{ $service->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write message...." required></textarea>
                                    <i class="fal fa-comment"></i>
                                </div>-->
                                <div class="form-btn col-12">
                                    <button class="th-btn fw-btn">Appointment Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close text-dark">X</button>
        </div>
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

            setTimeout(function() {
                $.magnificPopup.open({
                    items: {
                        src: '#QuickView',
                        type: 'inline'
                    },
                    modal: true
                });
            }, 20000);
        })
    </script>

</body>

</html>