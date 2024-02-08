@extends("web.base")
@section("content")
<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper  hero-4" data-bg-src="{{ asset('/web/assets/img/bg/hero_bg_2_1.jpg') }}">
    <div class="hero-slider-4 th-carousel" id="heroSlide4" data-slide-show="1" data-md-slide-show="1" data-fade="true">

        <div class="th-hero-slide">
            <div class="th-hero-bg">
                <img src="{{ asset('/web/assets/img/hero/hero_overlay_2_1.png') }}" alt="Hero Image">
                <div class="th-hero-shape" data-ani="slideinup" data-ani-delay="0.7s">
                    <img src="{{ asset('/web/assets/img/shape/hero_shape_2.png') }}" alt="">
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
                            <img src="{{ asset('/web/assets/img/hero/business-setup1.webp') }}" alt="Aurega Business Setup">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="th-hero-slide">
            <div class="th-hero-bg">
                <img src="{{ asset('/web/assets/img/hero/hero_overlay_2_1.png') }}" alt="Hero Image">
                <div class="th-hero-shape" data-ani="slideinup" data-ani-delay="0.7s">
                    <img src="{{ asset('/web/assets/img/shape/hero_shape_2.png') }}" alt="">
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
                            <img src="{{ asset('/web/assets/img/hero/pro-service.webp') }}" alt="Aurega PRO Service">
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
                    <span class="sub-title">Our commitment to our clients</span>
                    <h2 class="sec-title">Your Gateway to Seamless Business Setup in UAE</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="feature-card wow fadeInUp">
                    <div class="feature-card_img global-img">
                        <img src="{{ asset('/web/assets/img/service/medium-shot-men-women-work.webp') }}" alt="feature">
                    </div>
                    <div class="feature-card_content">
                        <div class="feature-card_icon"><i class="fa-sharp fa-light fa-badge-check fa-2xl text-info"></i></div>
                        <h3 class="box-title"><a href="{{ route('pro.service') }}">Trusted Business Setup Advisory Services</a></h3>
                        <p class="feature-card_text">When it comes to setting up a business in Dubai, navigating through the intricate processes and legal requirements can be overwhelming.</p>
                        <a href="{{ route('pro.service') }}" class="th-btn border">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-card wow fadeInDown">
                    <div class="feature-card_img global-img">
                        <img src="{{ asset('/web/assets/img/service/medium-shot-smiley-woman-with-passport.webp') }}" alt="feature">
                    </div>
                    <div class="feature-card_content">
                        <div class="feature-card_icon"><i class="fa-sharp fa-light fa-badge-check fa-2xl text-info"></i></div>
                        <h3 class="box-title"><a href="{{ route('company.incorporation') }}">Expert Company Formation in Dubai</a></h3>
                        <p class="feature-card_text">As specialists in company formation in Dubai, we understand the unique dynamics of the local business landscape.</p>
                        <a href="{{ route('company.incorporation') }}" class="th-btn border">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-card wow fadeInUp">
                    <div class="feature-card_img global-img">
                        <img src="{{ asset('/web/assets/img/service/male-female-office-workers.webp') }}" alt="feature">
                    </div>
                    <div class="feature-card_content">
                        <div class="feature-card_icon"><i class="fa-sharp fa-light fa-badge-check fa-2xl text-info"></i></div>
                        <h3 class="box-title"><a href="{{ route('business.consulting') }}">Comprehensive Business Setup Companies in UAE</a></h3>
                        <p class="feature-card_text">Expanding your business to the UAE can be a game-changer, but it requires comprehensive solutions.</p>
                        <a href="{{ route('business.consulting') }}" class="th-btn border">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--==============================
About Area  
==============================-->
<div class="about-sec overflow-hidden space" id="about-sec" data-bg-src="{{ asset('/web/assets/img/bg/about_bg_1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="wow fadeInLeft">
                    <div class="title-area mb-25">
                        <span class="sub-title style1">Know who we are</span>
                        <h2 class="sec-title mb-20">Aurega Corporate Service</h2>
                        <p class="text-justify">At <a href="{{ route('index') }}">Aurega Group</a>, we take pride in being your premier partner for all your business setup Dubai needs in the UAE. With decades of experience in serving the global market, we have earned a reputation as one of the most trusted business setup advisory establishments worldwide. Our commitment to excellence and dedication to our clients have made us a preferred choice for individuals, associations, and large corporations seeking to establish their presence in this thriving region.</p>
                    </div>
                    <div class="checklist style2">
                        <ul>
                            <li>Experienced Professionals</li>
                            <li>Satisfaction Guaranteed</li>
                            <li>Comprehensive Service Offerings</li>
                            <li>Transparent Pricing</li>
                            <li>Customized Solutions</li>
                            <li>Prompt and Reliable</li>
                        </ul>
                    </div>
                    <div class="btn-group justify-content-start">
                        <a href="{{ route('about') }}" class="th-btn">More About Us</a>
                        <div class="feature-wrapper">
                            <div class="icon-btn">
                                <a class="" href="tel:+971528686158"><i class="fa-light fa-phone"></i></a>
                            </div>
                            <div class="media-body">
                                <span class="header-info_label">Call to make an appointment</span>
                                <p class="header-info_link"><a href="tel:+971528686158">(+971) 52 868 6158</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight">
                <div class="img-box2">
                    <div class="img1 global-img">
                        <img src="{{ asset('/web/assets/img/normal/bg1.webp') }}" alt="About">
                    </div>
                    <div class="img2 global-img movingX">
                        <img src="{{ asset('/web/assets/img/normal/bg2.webp') }}" alt="About">
                    </div>
                    <div class="img3 global-img jump">
                        <img src="{{ asset('/web/assets/img/normal/bg3.webp') }}" alt="About">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Counter Area  
==============================-->
<div class="overflow-hidden" data-bg-src="asset('/web/assets/img/bg/counter_bg_1.jpg') }}">
    <div class="container">
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
                        <h3 class="counter"><span class="odometer" data-count="5,000">00</span>
                            <span class="counter-number">+</span>
                        </h3>
                        <p class="counter-card_text">Satisfied Customers</p>
                    </div>
                </div>
            </div>


            <div class="th-counterup wow fadeInLeft">
                <div class="inner">
                    <div class="content">
                        <h3 class="counter"><span class="odometer" data-count="15">00</span>
                            <span class="counter-number">+</span>
                        </h3>
                        <p class="counter-card_text">Years in Business</p>
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
                        <img src="{{ asset('/web/assets/img/team/ashraf.jpeg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/about-aurega-group/leadership" target="_blank">Mr. Ashraf M. Rahman</a></h3>
                    <span class="team-desig">Chairman & CEO</span>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInDown">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/dipesh.jpg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/board-members" target="_blank">Mr. Dipesh Samji</a></h3>
                    <span class="team-desig">CEO - Aurega Global Chauffeur</span>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/sufia.jpg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/board-members" target="_blank">Ms. Sufia Alam I</a></h3>
                    <span class="team-desig">CFO & Senior Tax Accounting Manager</span>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInDown">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/yogesh.jpg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/board-members" target="_blank">Mr. Yogesh Bhola</a></h3>
                    <span class="team-desig">Managing Director</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Service Area  
==============================-->
<section class="service-sec overflow-hidden space" id="service-sec" data-bg-src="{{ asset('/web/assets/img/bg/service_bg_2.jpg') }}">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">What we do</span>
            <h2 class="sec-title">Business Setup Is Just The Beginning!</h2>
        </div>
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="service-card_wrap style2">
                <div class="service-card style1 wow fadeInUp" data-bg-src="{{ asset('/web/assets/img/shape/service_shape_2.png') }}">
                    <div class="service-card_img">
                        <img src="{{ asset('/web/assets/img/bg/bg5.webp') }}" alt="image">
                    </div>
                    <div class="service-card_content">
                        <div class="service-card_icon">
                            <img src="{{ asset('/web/assets/img/icon/dubai.webp') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="{{ route('mainland') }}">Dubai Mainland</a></h3>
                        <p class="service-card_text text-justify">A Dubai mainland company is licensed by the Department of Economic Development (DED) in the respective Emirate of the United Arab Emirates. This type of company offers numerous benefits, such as a broad scope of trade, 100% ownership, and location flexibility. Entrepreneurs often opt for mainland company formation in the UAE due to these advantages.</p>
                        <a href="{{ route('mainland') }}" class="th-btn border">Read More</a>
                    </div>
                </div>
                <div class="service-card_wrap">

                    <div class="service-card wow fadeInRight" data-bg-src="{{ asset('/web/assets/img/shape/service_shape_3.png') }}">
                        <div class="service-card_content">
                            <div class="service-card_icon">
                                <img src="{{ asset('/web/assets/img/icon/dubai.webp') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="{{ route('freezone') }}">Free Zone</a></h3>
                            <p class="service-card_text text-justify">Navigating the intricate landscape of company incorporation in the UAE's free zones can be challenging.</p>
                            <a href="{{ route('freezone') }}" class="th-btn border">Read More</a>
                        </div>
                    </div>


                    <div class="service-card wow fadeInRight" data-bg-src="{{ asset('/web/assets/img/shape/service_shape_3.png') }}">
                        <div class="service-card_content">
                            <div class="service-card_icon">
                                <img src="{{ asset('/web/assets/img/icon/dubai.webp') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="{{ route('offshore') }}">Offshore</a></h3>
                            <p class="service-card_text text-justify">Dubai, renowned as a global business hub, has always been at the forefront of offering unparalleled opportunities.</p>
                            <a href="{{ route('offshore') }}" class="th-btn border">Read More</a>
                        </div>
                    </div>


                    <div class="service-card wow fadeInRight" data-bg-src="{{ asset('/web/assets/img/shape/service_shape_3.png') }}">
                        <div class="service-card_content">
                            <div class="service-card_icon">
                                <img src="{{ asset('/web/assets/img/icon/dubai.webp') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="{{ route('mainland') }}">Abu Dhabi Mainland</a></h3>
                            <p class="service-card_text text-justify">Abu Dhabi, the capital of the United Arab Emirates, is one of the best places to consider when starting a business.</p>
                            <a href="{{ route('mainland') }}" class="th-btn border">Read More</a>
                        </div>
                    </div>


                    <div class="service-card wow fadeInRight" data-bg-src="{{ asset('/web/assets/img/shape/service_shape_3.png') }}">
                        <div class="service-card_content">
                            <div class="service-card_icon">
                                <img src="{{ asset('/web/assets/img/icon/dubai.webp') }}" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="{{ route('mainland') }}">International</a></h3>
                            <p class="service-card_text text-justify">To further accelerate and diversify of economic growth, some countries have established various free zones.</p>
                            <a href="{{ route('mainland') }}" class="th-btn border">Read More</a>
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
<div class=" space-top why-area2 bg-top-center" data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-7 wow fadeInLeft">
                <div class="pe-xl-5">
                    <div class="title-area text-center text-xl-start mb-25">
                        <span class="sub-title style1">Experience and Experts</span>
                        <h2 class="sec-title text-white">15+ Years of Experience in Business Consulting Services</h2>
                        <p class="text-justify">Aurega Corporate Service has established itself as the one-stop shop for companies seeking business solutions. Our services cover every aspect of business setup, from seamless licensing processes to customised value-added solutions. With flexible payment plans and tailored services, we empower companies to promote, sustain and accelerate their operations.</p>
                    </div>
                </div>
                <div class="info-card-wrap style2">
                    <div class="info-card">
                        <div class="info-card_icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="info-card_content">
                            <p class="info-card_text">Phone Number:</p>
                            <a href="tel:+971528686158" class="info-card_link text-white">+(971) 52 868 6158</a>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-card_icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="info-card_content">
                            <p class="info-card_text">Email Address</p>
                            <a href="mailto:mkt@auregagroup.com" class="info-card_link text-white">mkt@auregagroup.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight">
                <div class="appointment-form style2">
                    <h5 class="form-title text-center">Talk to Our Business Setup Advisors</h5>
                    <form class="" method="post" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <i class="fa-light fa-user"></i>
                                <input type="text" placeholder="Your Full Name" name="name" class="form-control">
                            </div>
                            <div class="form-group col-12">
                                <i class="fa-light fa-mobile"></i>
                                <input type="text" placeholder="Your Contact Number" name="contact_number" class="form-control">
                            </div>
                            <div class="form-group col-12">
                                <i class="fa-light fa-envelope"></i>
                                <input type="text" placeholder="Your Email ID" name="email" class="form-control">
                            </div>
                            <div class="form-group col-12">
                                <i class="fa-regular fa-tag"></i>
                                <select name="service" class="form-select nice-select">
                                    <option value="" disabled selected hidden>Select Service</option>
                                    @forelse($services as $key => $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write your message...."></textarea>
                                <i class="fal fa-comment"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn fw-btn btn-submit">Submit</button>
                            </div>
                        </div>
                    </form>
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
                                <img src="{{ asset('/web/assets/img/testimonial/testi_2_1.jpg') }}" alt="Avater">
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
                                <div class="testi-quote"><img src="{{ asset('/web/assets/img/shape/quote-2.svg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <div class="testi-card_img">
                                <img src="{{ asset('/web/assets/img/testimonial/testi_2_2.jpg') }}" alt="Avater">
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
                                <div class="testi-quote"><img src="{{ asset('/web/assets/img/shape/quote-2.svg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <div class="testi-card_img">
                                <img src="{{ asset('/web/assets/img/testimonial/testi_2_3.jpg') }}" alt="Avater">
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
                                <div class="testi-quote"><img src="{{ asset('/web/assets/img/shape/quote-2.svg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-card-tab" data-thnavfor=".testi-card-slide">
                    <button class="tab-btn active" type="button"><img src="{{ asset('/web/assets/img/testimonial/testi_thumb_2_1.png') }}" alt="tab-btn image"></button>
                    <button class="tab-btn" type="button"><img src="{{ asset('/web/assets/img/testimonial/testi_thumb_2_2.png') }}" alt="tab-btn image"></button>
                    <button class="tab-btn" type="button"><img src="{{ asset('/web/assets/img/testimonial/testi_thumb_2_3.png') }}" alt="tab-btn image"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Process Area  
==============================-->
<section class="space overflow-hidden position-relative space" data-bg-src="{{ asset('/web/assets/img/bg/process_bg_1.jpg') }}">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Work Process</span>
            <h2 class="sec-title">How it Work Processing</h2>
        </div>
        <div class="step-wrap">
            <div class="process-line">
                <img src="{{ asset('/web/assets/img/shape/process-line.png') }}" alt="">
            </div>
            <div class="process-card_wrapp">
                <div class="process-card">
                    <div class="process-card_icon">
                        <span class="number">01</span>
                    </div>
                    <div class="process-card_content">
                        <h2 class="box-title">Business Activity</h2>
                        <p class="process-card_text">We begin by understanding your specific needs and gathering essential information.</p>
                    </div>
                    <div class="process-card_img">
                        <img src="{{ asset('/web/assets/img/icon/process_1_1.svg') }}" alt="Process">
                    </div>
                </div>
                <div class="process-card">
                    <div class="process-card_icon">
                        <span class="number">02</span>
                    </div>
                    <div class="process-card_content">
                        <h2 class="box-title">Jurisdiction</h2>
                        <p class="process-card_text">Choose the Jurisdiction best suited for your business. If you are not sre about that, we will helps you to choose the best.</p>
                    </div>
                    <div class="process-card_img">
                        <img src="{{ asset('/web/assets/img/icon/jurisdiction.webp') }}" alt="Process">
                    </div>
                </div>
                <div class="process-card">
                    <div class="process-card_icon">
                        <span class="number">03</span>
                    </div>
                    <div class="process-card_content">
                        <h2 class="box-title">Office Space</h2>
                        <p class="process-card_text">We will help you to find out budget friendly office space in specified Jurisdiction according to your busniness needs.</p>
                    </div>
                    <div class="process-card_img">
                        <img src="{{ asset('/web/assets/img/icon/office.webp') }}" alt="Process">
                    </div>
                </div>
                <div class="process-card">
                    <div class="process-card_icon">
                        <span class="number">04</span>
                    </div>
                    <div class="process-card_content">
                        <h2 class="box-title">Business Name</h2>
                        <p class="process-card_text">Name your business and start. We will obtain the Trade License for you to establishing your business.</p>
                    </div>
                    <div class="process-card_img">
                        <img src="{{ asset('/web/assets/img/icon/bname.svg') }}" alt="Process">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Cta Area  
==============================-->
<section class="cta-area" data-bg-src="{{ asset('/web/assets/img/bg/bg4.webp') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 mb-5 mb-lg-0">
                <div class="title-area mb-0 text-center text-lg-start">
                    <span class="sub-title style1 text-gold">Feel Free to Contact Use</span>
                    <h2 class="sec-title text-white">Get Premium Services From Aurega!</h2>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="btn-group justify-content-lg-end justify-content-center">
                    <a href="{{ route('contact') }}" class="th-btn style4">Get Our Services</a>
                    <a href="{{ route('contact') }}" class="th-btn th-border">Contact Us</a>
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
            @forelse($blogs as $key => $blog)
            <div class="col-md-6 col-xl-4">
                <div class="blog-box wow fadeInUp">
                    <div class="blog-img global-img">
                        <img src="{{ asset($blog->featured_image) }}" alt="blog image">
                    </div>
                    <div class="blog-box_content">
                        <div class="blog-wrapper">
                            <span class="blog-box_date">{{ $blog->created_at->format('d') }}</span>
                            <span class="blog-box_month">{{ $blog->created_at->format('M Y') }}</span>
                        </div>
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fa-regular fa-file"></i>{{ $blog->categoryname->name }}</a>
                            <a href="blog.html"><i class="fa-regular fa-comments"></i>Comments ({{ $blog->comments->count() }})</a>
                        </div>
                        <h3 class="box-title"><a href="{{ route('blogs.blog', $blog->slug) }}">{{ $blog->title }}</a></h3>
                        <a href="{{ route('blogs.blog', $blog->slug) }}" class="th-btn border">Read More</a>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
        </div>
    </div>

</section>
@endsection