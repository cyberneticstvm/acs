@extends("web.base")
@section("content")
<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper  hero-4" data-bg-src="{{ '/web/assets/img/bg/hero_bg_2_1.jpg' }}">
    <div class="hero-slider-4 th-carousel" id="heroSlide4" data-slide-show="1" data-md-slide-show="1" data-fade="true">

        <div class="th-hero-slide">
            <div class="th-hero-bg">
                <img src="{{ '/web/assets/img/hero/hero_overlay_2_1.png' }}" alt="Hero Image">
                <div class="th-hero-shape" data-ani="slideinup" data-ani-delay="0.7s">
                    <img src="{{ '/web/assets/img/shape/hero_shape_2.png' }}" alt="">
                </div>
            </div>
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-7">
                        <div class="hero-style4">
                            <span class="hero-subtitle text-gold" data-ani="slideindown" data-ani-delay="0.7s">Quality Service, Clear Results</span>
                            <h1 class="hero-title mb-0" data-ani="slideindown" data-ani-delay="0.4s">
                                Business setup in</h1>
                            <h2 class="hero-big-title text-white" data-ani="slideindown" data-ani-delay="0.6s">
                                Dubai</h2>
                            <div class="btn-group mt-30" data-ani="slideindown" data-ani-delay="0.5s">
                                <a href="{{ route('index') }}" class="th-btn style4 border-radius">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="th-hero-img" data-ani="slideinup" data-ani-delay="0.2s">
                            <img src="{{ '/web/assets/img/hero/business-setup1.webp' }}" alt="Aurega Business Setup">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="th-hero-slide">
            <div class="th-hero-bg">
                <img src="{{ '/web/assets/img/hero/hero_overlay_2_1.png' }}" alt="Hero Image">
                <div class="th-hero-shape" data-ani="slideinup" data-ani-delay="0.7s">
                    <img src="{{ '/web/assets/img/shape/hero_shape_2.png' }}" alt="">
                </div>
            </div>
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-7">
                        <div class="hero-style4">
                            <span class="hero-subtitle text-gold" data-ani="slideindown" data-ani-delay="0.7s">Quality Service, Clear Results</span>
                            <h1 class="hero-title mb-0" data-ani="slideindown" data-ani-delay="0.4s">
                                PRO Services in </h1>
                            <h2 class="hero-big-title text-white" data-ani="slideindown" data-ani-delay="0.6s">
                                Dubai</h2>
                            <div class="btn-group mt-30" data-ani="slideindown" data-ani-delay="0.5s">
                                <a href="{{ route('index') }}" class="th-btn style4 border-radius">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="th-hero-img" data-ani="slideinup" data-ani-delay="0.2s">
                            <img src="{{ '/web/assets/img/hero/pro-service.webp' }}" alt="Aurega PRO Service">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-box">
        <button data-slick-prev="#heroSlide4" class="slick-arrow default"><i class="fa-regular fa-arrow-right"></i></button>
        <button data-slick-next="#heroSlide4" class="slick-arrow default"><i class="fa-regular fa-arrow-left"></i></button>
    </div>

</div>

<!--======== / Hero Section ========-->
<!--==============================
feature Area  
==============================-->
<div class="feature-sec space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-area text-center">
                    <span class="sub-title">Our Core Features</span>
                    <h2 class="sec-title">Quality feature Crystal Clear Results</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="feature-card wow fadeInUp">
                    <div class="feature-card_img global-img">
                        <img src="assets/img/service/feature_1_1.jpg" alt="feature">
                    </div>
                    <div class="feature-card_content">
                        <div class="feature-card_icon"><img src="assets/img/icon/feature_2_1.svg" alt="feature"> </div>
                        <h3 class="box-title"><a href="service-details.html">Residential Pool Service</a></h3>
                        <p class="feature-card_text">Residential pool service refers maintenance of swimming pools </p>
                        <a href="service-details.html" class="th-btn border">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-card wow fadeInDown">
                    <div class="feature-card_img global-img">
                        <img src="assets/img/service/feature_1_2.jpg" alt="feature">
                    </div>
                    <div class="feature-card_content">
                        <div class="feature-card_icon"><img src="assets/img/icon/feature_2_2.svg" alt="feature"> </div>
                        <h3 class="box-title"><a href="service-details.html">Commercial Pool Service</a></h3>
                        <p class="feature-card_text">Commercial pool service refers to the maintenance, cleaning </p>
                        <a href="service-details.html" class="th-btn border">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-card wow fadeInUp">
                    <div class="feature-card_img global-img">
                        <img src="assets/img/service/feature_1_3.jpg" alt="feature">
                    </div>
                    <div class="feature-card_content">
                        <div class="feature-card_icon"><img src="assets/img/icon/feature_2_3.svg" alt="feature"> </div>
                        <h3 class="box-title"><a href="service-details.html">Fast Servicing Process</a></h3>
                        <p class="feature-card_text">A fast servicing process, whether or commercial pool</p>
                        <a href="service-details.html" class="th-btn border">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--==============================
About Area  
==============================-->
<div class="about-sec overflow-hidden space" id="about-sec" data-bg-src="assets/img/bg/about_bg_1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="wow fadeInLeft">
                    <div class="title-area mb-25">
                        <span class="sub-title style1">About Us Our Comoany</span>
                        <h2 class="sec-title mb-20">Discover The Difference In Our Pool Maintenance</h2>
                        <p class="">Welcome to Poolax, your trusted partner in pool service and maintenance. With a passion for pools and a commitment to excellence, we have been serving united states and the surrounding areas for 25 years.</p>
                    </div>
                    <div class="checklist style2">
                        <ul>
                            <li>Experienced Professionals</li>
                            <li>Satisfaction Guaranteed</li>
                            <li>Comprehensive Service Offerings</li>
                            <li>Transparent Pricing</li>
                            <li>Customized Solutions</li>
                            <li>Prompt and Reliable</li>
                            <li>Quality Products and Equipment</li>
                        </ul>
                    </div>
                    <div class="btn-group justify-content-start">
                        <a href="about.html" class="th-btn">More About Us</a>
                        <div class="feature-wrapper">
                            <div class="icon-btn">
                                <a class="" href="tel:+46825476243"><i class="fa-light fa-phone"></i></a>
                            </div>
                            <div class="media-body">
                                <span class="header-info_label">Call any time for pool services</span>
                                <p class="header-info_link"><a href="tel:+46825476243">(+468) 254 76243</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight">
                <div class="img-box2">
                    <div class="img1 global-img">
                        <img src="assets/img/normal/about_2_1.jpg" alt="About">
                    </div>
                    <div class="img2 global-img movingX">
                        <img src="assets/img/normal/about_2_2.jpg" alt="About">
                    </div>
                    <div class="img3 global-img jump">
                        <img src="assets/img/normal/about_2_3.jpg" alt="About">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Counter Area  
==============================-->
<div class="overflow-hidden" data-bg-src="assets/img/bg/counter_bg_1.jpg">
    <div class="container">
        <div class="counter-sec">

            <div class="th-counterup wow fadeInLeft">
                <div class="inner">
                    <div class="content">
                        <h3 class="counter"><span class="odometer" data-count="2,564">00</span>
                            <span class="counter-number">+</span>
                        </h3>
                        <p class="counter-card_text">Successfully Projects Complete</p>
                    </div>
                </div>
            </div>


            <div class="th-counterup wow fadeInLeft">
                <div class="inner">
                    <div class="content">
                        <h3 class="counter"><span class="odometer" data-count="164">00</span>
                            <span class="counter-number">+</span>
                        </h3>
                        <p class="counter-card_text">Expert Team Members</p>
                    </div>
                </div>
            </div>


            <div class="th-counterup wow fadeInLeft">
                <div class="inner">
                    <div class="content">
                        <h3 class="counter"><span class="odometer" data-count="2,985">00</span>
                            <span class="counter-number">+</span>
                        </h3>
                        <p class="counter-card_text">Our Satisfied Customers</p>
                    </div>
                </div>
            </div>


            <div class="th-counterup wow fadeInLeft">
                <div class="inner">
                    <div class="content">
                        <h3 class="counter"><span class="odometer" data-count="80">00</span>
                            <span class="counter-number">+</span>
                        </h3>
                        <p class="counter-card_text">Best Company Awards</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--==============================
Team Area  
==============================-->
<section class="team-area bg-top-center overflow-hidden space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Team Members</span>
            <h2 class="sec-title">Our Professional Expert</h2>
        </div>
        <div class="row slider-shadow th-carousel teamSlide1" id="teamSlide1" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="assets/img/team/team_1_1.jpg" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="team-details.html">Emanuel Maclin</a></h3>
                    <span class="team-desig">Pool Technician</span>
                    <div class="team-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i> </a>
                    </div>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInDown">
                    <div class="team-img">
                        <img src="assets/img/team/team_1_2.jpg" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="team-details.html">Jonson Anderson</a></h3>
                    <span class="team-desig">Pool Technician</span>
                    <div class="team-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i> </a>
                    </div>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="assets/img/team/team_1_3.jpg" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="team-details.html">Charlie William</a></h3>
                    <span class="team-desig">Pool Technician</span>
                    <div class="team-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i> </a>
                    </div>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInDown">
                    <div class="team-img">
                        <img src="assets/img/team/team_1_4.jpg" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="team-details.html">Daniel Thomas</a></h3>
                    <span class="team-desig">Pool Technician</span>
                    <div class="team-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i> </a>
                    </div>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="assets/img/team/team_1_5.jpg" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="team-details.html">Daniel Thomas</a></h3>
                    <span class="team-desig">Pool Technician</span>
                    <div class="team-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i> </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--==============================
Service Area  
==============================-->
<section class="service-sec overflow-hidden space" id="service-sec" data-bg-src="assets/img/bg/service_bg_2.jpg">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Our Best Services</span>
            <h2 class="sec-title">Our Best Pool Services For You!</h2>
        </div>
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="service-card_wrap style2">
                <div class="service-card style1 wow fadeInUp" data-bg-src="assets/img/shape/service_shape_2.png">
                    <div class="service-card_img">
                        <img src="assets/img/service/service_2_1.jpg" alt="image">
                    </div>
                    <div class="service-card_content">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service_2_1.svg" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Pool Cleaning</a></h3>
                        <p class="service-card_text">Skimming involves removing leaves, twigs, insects, and other debris from the surface of the pool using a skimmer net or skimming tool.</p>
                        <a href="service-details.html" class="th-btn border">Read More</a>
                    </div>
                </div>
                <div class="service-card_wrap">

                    <div class="service-card wow fadeInRight" data-bg-src="assets/img/shape/service_shape_3.png">
                        <div class="service-card_content">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service_2_2.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Water Analysis</a></h3>
                            <p class="service-card_text">The first step in water analysis is collecting source of interest.</p>
                            <a href="service-details.html" class="th-btn border">Read More</a>
                        </div>
                    </div>


                    <div class="service-card wow fadeInRight" data-bg-src="assets/img/shape/service_shape_3.png">
                        <div class="service-card_content">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service_2_3.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Equipment Install</a></h3>
                            <p class="service-card_text">Please schedule the equipment installation for next week equipment.</p>
                            <a href="service-details.html" class="th-btn border">Read More</a>
                        </div>
                    </div>


                    <div class="service-card wow fadeInRight" data-bg-src="assets/img/shape/service_shape_3.png">
                        <div class="service-card_content">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service_2_4.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Tile & Surface Cleaning</a></h3>
                            <p class="service-card_text">For professional tile and surface cleaning services, their original.</p>
                            <a href="service-details.html" class="th-btn border">Read More</a>
                        </div>
                    </div>


                    <div class="service-card wow fadeInRight" data-bg-src="assets/img/shape/service_shape_3.png">
                        <div class="service-card_content">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service_2_5.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Drain & Clean</a></h3>
                            <p class="service-card_text">Efficient drain and clean services keep your systems running smoothly</p>
                            <a href="service-details.html" class="th-btn border">Read More</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Feature Area  
==============================-->
<div class=" space-top why-area2 bg-top-center" data-bg-src="assets/img/bg/why_bg_2.jpg">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-7 wow fadeInLeft">
                <div class="pe-xl-5">
                    <div class="title-area text-center text-xl-start mb-25">
                        <span class="sub-title style1">Experience of Pool Services</span>
                        <h2 class="sec-title text-white">25 Years Experiences of Pool Cleaning & Services</h2>
                        <p>Our team consists of certified technicians with a wealth of experience in pool maintenance
                            and servicing. We stay updated on the latest industry trends and best practices to deliver
                            exceptional results.</p>
                    </div>
                    <div class="skill-card style2">
                        <div class="skill-feature style2">
                            <div class="progress-bar" data-percentage="85%">
                                <h4 class="progress-title-holder">Equipment Installation <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                        </span>
                                    </span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-feature style2">
                            <div class="progress-bar" data-percentage="90%">
                                <h4 class="progress-title-holder">Pool Cleaning <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                        </span>
                                    </span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-feature style2">
                            <div class="progress-bar" data-percentage="65%">
                                <h4 class="progress-title-holder">Water Analysis <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                        </span>
                                    </span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="info-card-wrap style2">
                    <div class="info-card">
                        <div class="info-card_icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="info-card_content">
                            <p class="info-card_text">Phone Number:</p>
                            <a href="tel:+46825476243" class="info-card_link">(+468) 254 76243</a>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-card_icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="info-card_content">
                            <p class="info-card_text">Email Address</p>
                            <a href="mailto:info@polax.com" class="info-card_link">info@polax.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight">
                <div class="appointment-form style2">
                    <h3 class="form-title text-center">Booking Appointment</h3>
                    <div class="row">
                        <div class="form-group col-12">
                            <i class="fa-light fa-user"></i>
                            <input type="text" placeholder="Your Name" class="form-control">
                        </div>
                        <div class="form-group col-12">
                            <i class="fa-light fa-envelope"></i>
                            <input type="text" placeholder="Your Email" class="form-control">
                        </div>
                        <div class="form-group col-12">
                            <i class="fa-regular fa-tag"></i>
                            <select name="subject" id="subject" class="form-select nice-select">
                                <option value="" disabled selected hidden>Select Subject</option>
                                <option value="Equipment Install">Equipment Install</option>
                                <option value="Commercial Pool">Commercial Pool</option>
                                <option value="Water Analysis">Water Analysis</option>
                                <option value="Pool Maintenance">Pool Maintenance</option>
                                <option value="Drain & Clean">Drain & Clean</option>
                                <option value="Pool Inspections">Pool Inspectionsn</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write message...."></textarea>
                            <i class="fal fa-comment"></i>
                        </div>
                        <div class="form-btn col-12">
                            <button class="th-btn fw-btn">Appointment Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============================== 
Testimonial Area  
==============================-->
<div class="testi-area2 position-relative overflow-hidden space">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="testi-card_wrapper">
                    <div class="title-area">
                        <span class="sub-title style1">Testimonials</span>
                        <h2 class="sec-title">Our Trusted Clients Feedback</h2>
                    </div>
                </div>
                <div class="testi-card-slide th-carousel" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-fade="true" data-slide-show="1">
                    <div>
                        <div class="testi-card">
                            <div class="testi-card_img">
                                <img src="assets/img/testimonial/testi_2_1.jpg" alt="Avater">
                            </div>
                            <div class="testi-card_content">
                                <p class="testi-card_text">“We're here to make pool maintenance easy & hassle free for
                                    you. Contact us today to schedule a service or to learn more about our maintenance
                                    plan. Thank you for considering poolax as your trusted pool service and maintenance
                                    partner. We look forward to serving you!”</p>
                                <h3 class="testi-card_name">Alex Michel</h3>
                                <span class="testi-card_desig">Ui/Ux Designer</span>
                                <div class="testi-card_review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="testi-quote"><img src="assets/img/shape/quote-2.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <div class="testi-card_img">
                                <img src="assets/img/testimonial/testi_2_2.jpg" alt="Avater">
                            </div>
                            <div class="testi-card_content">
                                <p class="testi-card_text">“We're here to make pool maintenance easy & hassle free for
                                    you. Contact us today to schedule a service or to learn more about our maintenance
                                    plan. Thank you for considering poolax as your trusted pool service and maintenance
                                    partner. We look forward to serving you!”</p>
                                <h3 class="testi-card_name">David Milton</h3>
                                <span class="testi-card_desig">Ui/Ux Designer</span>
                                <div class="testi-card_review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="testi-quote"><img src="assets/img/shape/quote-2.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <div class="testi-card_img">
                                <img src="assets/img/testimonial/testi_2_3.jpg" alt="Avater">
                            </div>
                            <div class="testi-card_content">
                                <p class="testi-card_text">“We're here to make pool maintenance easy & hassle free for
                                    you. Contact us today to schedule a service or to learn more about our maintenance
                                    plan. Thank you for considering poolax as your trusted pool service and maintenance
                                    partner. We look forward to serving you!”</p>
                                <h3 class="testi-card_name">Abraham Khalil</h3>
                                <span class="testi-card_desig">Ui/Ux Designer</span>
                                <div class="testi-card_review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="testi-quote"><img src="assets/img/shape/quote-2.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-card-tab" data-thnavfor=".testi-card-slide">
                    <button class="tab-btn active" type="button"><img src="assets/img/testimonial/testi_thumb_2_1.png" alt="tab-btn image"></button>
                    <button class="tab-btn" type="button"><img src="assets/img/testimonial/testi_thumb_2_2.png" alt="tab-btn image"></button>
                    <button class="tab-btn" type="button"><img src="assets/img/testimonial/testi_thumb_2_3.png" alt="tab-btn image"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Process Area  
==============================-->
<section class="space overflow-hidden position-relative space" data-bg-src="assets/img/bg/process_bg_1.jpg">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Work Process</span>
            <h2 class="sec-title">How it Work Processing</h2>
        </div>
        <div class="step-wrap">
            <div class="process-line">
                <img src="assets/img/shape/process-line.png" alt="">
            </div>
            <div class="process-card_wrapp">
                <div class="process-card">
                    <div class="process-card_icon">
                        <span class="number">01</span>
                    </div>
                    <div class="process-card_content">
                        <h2 class="box-title">Initial Consultatio</h2>
                        <p class="process-card_text">We begin by understanding your specific pool needs and gathering essential information.</p>
                    </div>
                    <div class="process-card_img">
                        <img src="assets/img/icon/process_1_1.svg" alt="Process">
                    </div>
                </div>
                <div class="process-card">
                    <div class="process-card_icon">
                        <span class="number">02</span>
                    </div>
                    <div class="process-card_content">
                        <h2 class="box-title">Regular Cleaning</h2>
                        <p class="process-card_text">Our certified technicians perform routine pool cleaning and skimming. This includes removing debris.</p>
                    </div>
                    <div class="process-card_img">
                        <img src="assets/img/icon/process_1_2.svg" alt="Process">
                    </div>
                </div>
                <div class="process-card">
                    <div class="process-card_icon">
                        <span class="number">03</span>
                    </div>
                    <div class="process-card_content">
                        <h2 class="box-title">Water Analysis</h2>
                        <p class="process-card_text">This involves adjusting pH, alkalinity, and chlorine levels to maintain a safe and comfortable swimming.</p>
                    </div>
                    <div class="process-card_img">
                        <img src="assets/img/icon/process_1_3.svg" alt="Process">
                    </div>
                </div>
                <div class="process-card">
                    <div class="process-card_icon">
                        <span class="number">04</span>
                    </div>
                    <div class="process-card_content">
                        <h2 class="box-title">Equipment Inspection</h2>
                        <p class="process-card_text">We inspect critical pool equipment, including pumps, motors, heaters, and filters, to ensure everything</p>
                    </div>
                    <div class="process-card_img">
                        <img src="assets/img/icon/process_1_4.svg" alt="Process">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Cta Area  
==============================-->
<section class="cta-area" data-bg-src="assets/img/bg/cta_bg_1.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 mb-5 mb-lg-0">
                <div class="title-area mb-0 text-center text-lg-start">
                    <span class="sub-title style1">Feel Free to Contact Use</span>
                    <h2 class="sec-title text-white">Get Premium Pool Services From With Us!</h2>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="btn-group justify-content-lg-end justify-content-center">
                    <a href="service.html" class="th-btn style4">Get Our Services</a>
                    <a href="contact.html" class="th-btn th-border">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Blog Area  
==============================-->
<section class="space overflow-hidden" id="blog-sec">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title style2">Blog Posts</span>
            <h2 class="sec-title">Our Latest News & Updates</h2>
        </div>
        <div class="row slider-shadow th-carousel" id="blogSlide1" data-slide-show="2" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
            <div class="col-md-6 col-xl-4">
                <div class="blog-box wow fadeInUp">
                    <div class="blog-img global-img">
                        <img src="assets/img/blog/blog_2_1.jpg" alt="blog image">
                    </div>
                    <div class="blog-box_content">
                        <div class="blog-wrapper">
                            <span class="blog-box_date">12</span>
                            <span class="blog-box_month">Oct, 2023</span>
                        </div>
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                            <a href="blog.html"><i class="fa-regular fa-comments"></i>Comments (3)</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">How to Prepare Your Pool for Winter A Step-by-Step Guide</a></h3>
                        <a href="blog-details.html" class="th-btn border">Read More</a>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-xl-4">
                <div class="blog-box wow fadeInDown">
                    <div class="blog-img global-img">
                        <img src="assets/img/blog/blog_2_2.jpg" alt="blog image">
                    </div>
                    <div class="blog-box_content">
                        <div class="blog-wrapper">
                            <span class="blog-box_date">24</span>
                            <span class="blog-box_month">oct 2023</span>
                        </div>
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                            <a href="blog.html"><i class="fa-regular fa-comments"></i>Comments (3)</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">How to Revamp Your Pool Area for a Stylish Makeover</a></h3>
                        <a href="blog-details.html" class="th-btn border">Read More</a>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-xl-4">
                <div class="blog-box wow fadeInUp">
                    <div class="blog-img global-img">
                        <img src="assets/img/blog/blog_2_3.jpg" alt="blog image">
                    </div>
                    <div class="blog-box_content">
                        <div class="blog-wrapper">
                            <span class="blog-box_date">26</span>
                            <span class="blog-box_month">nov 2023</span>
                        </div>
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fa-regular fa-user"></i>By Jonson</a>
                            <a href="blog.html"><i class="fa-regular fa-comments"></i>Comments (3)</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">The Science of Pool Chemistry Keeping Your Water</a></h3>
                        <a href="blog-details.html" class="th-btn border">Read More</a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>
<!--==============================
Brand Area  
==============================-->
<div class="brand-area overflow-hidden">
    <div class="container">
        <div class="title-area text-center">
            <span class="brand-title">
                <span class="counter-card_number"><span class="counter-number">10</span>k+<span class="counter-title">Our Trusted Partner</span></span>
            </span>
        </div>
        <div class="row brand-slide th-carousel" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
            <div class="col-auto brand-img style2  wow fadeInLeft">
                <img src="assets/img/brand/brand_1_1.png" alt="Brand Logo">
            </div>
            <div class="col-auto brand-img style2  wow fadeInLeft">
                <img src="assets/img/brand/brand_1_2.png" alt="Brand Logo">
            </div>
            <div class="col-auto brand-img style2  wow fadeInLeft">
                <img src="assets/img/brand/brand_1_3.png" alt="Brand Logo">
            </div>
            <div class="col-auto brand-img style2  wow fadeInLeft">
                <img src="assets/img/brand/brand_1_4.png" alt="Brand Logo">
            </div>
            <div class="col-auto brand-img style2  wow fadeInLeft">
                <img src="assets/img/brand/brand_1_5.png" alt="Brand Logo">
            </div>
        </div>
    </div>
</div>
<!--==============================
			Footer Area
==============================-->
@endsection