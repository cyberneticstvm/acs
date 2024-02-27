@extends("web.base")
@section("content")
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Digital Marketing & Web Development</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Services</li>
                    <li>Digital Marketing & Web Development</li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<div class="about-sec overflow-hidden space" id="about-sec" data-bg-src="{{ asset('/web/assets/img/bg/about_bg_1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="wow fadeInLeft">
                    <div class="title-area mb-25">
                        <span class="sub-title style1">Your Premier Digital Marketing and Website Development Partner in Dubai</span>
                        <h2 class="sec-title mb-20">Delve into an array of Top Notch Web Solutions</h2>
                        <p class="text-justify">At AUERGA, we are dedicated to empowering businesses with the tools and strategies they need to thrive in the digital landscape. As a trusted provider of digital marketing and website development services based in Dubai, we offer a comprehensive suite of solutions designed to elevate your brand and drive tangible results. From custom website development to strategic digital marketing campaigns, we are committed to delivering excellence at every step of the journey.</p>
                    </div>
                    <div class="service-feature-wrap">
                        <div class="service-feature style2">
                            <div class="service-feature_icon">
                                <img src="{{ asset('/web/assets/img/icon/service_feature_1_2.svg') }}" alt="Icon">
                            </div>
                            <div class="service-feature_content">
                                <h4 class="service-feature_title">Quality Service</h4>
                                <p class="service-feature_text">Aurega's mission is to be a one-stop company for all your business needs.</p>
                            </div>
                        </div>
                        <div class="service-feature style2">
                            <div class="service-feature_icon">
                                <img src="{{ asset('/web/assets/img/icon/service_feature_1_3.svg') }}" alt="Icon">
                            </div>
                            <div class="service-feature_content">
                                <h4 class="service-feature_title">Industry Experts</h4>
                                <p class="service-feature_text">We offer tailored solutions to help your business from pre-setup to growth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group justify-content-center mt-5">
                        <a href="{{ route('contact') }}" class="th-btn">Contact Us</a>
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
                        <img src="{{ asset('/web/assets/img/normal/dm-bg-1.webp') }}" alt="About">
                    </div>
                    <div class="img2 global-img movingX">
                        <img src="{{ asset('/web/assets/img/normal/dm-bg-2.webp') }}" alt="About">
                    </div>
                    <div class="img3 global-img jump">
                        <img src="{{ asset('/web/assets/img/normal/dm-bg-3.webp') }}" alt="About">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="service-sec overflow-hidden space">
    <div class="container">
        <div class="row testi-slide2 slider-shadow">
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">Web Designing & Development</h5>
                    <p class="testi-item_text text-justify">Our Web Designing Company in Dubai, UAE provides you with Web Designing solutions to enhance your digital presence.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">E-commerce Development</h5>
                    <p class="testi-item_text text-justify">With our ecommerce development services in Dubai, you can increase your sales and ROI to build a trusted brand among your audiences.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">Wordpress Development</h5>
                    <p class="testi-item_text text-justify">Our experts in Wordpress Development Company in Dubai provide best in class Wordpress Websites at affordable prices.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">Content Management System (CMS)</h5>
                    <p class="testi-item_text text-justify">Our CMS development company in Dubai, UAE helps to develop fully functioned CMS within their brand style.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">ERP Solutions and Development</h5>
                    <p class="testi-item_text text-justify">For best in class ERP Solutions in Dubai you can always rely on intersmart solutions</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">Mobile App Development</h5>
                    <p class="testi-item_text text-justify">Experts in mobile app and web app development ensuring the best customized app for you.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">Graphic Designing</h5>
                    <p class="testi-item_text text-justify">Our Graphics Designing Services in Dubai provides you with unique design that standout among others.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">Online Reputation Management</h5>
                    <p class="testi-item_text text-justify">Our online reputation management (ORM) services would place you among the most credible entities that could be relied upon.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">Content Writing</h5>
                    <p class="testi-item_text text-justify">Intersmart offers professional content wrting services that can improve your website's quality to a great extent.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">Digital Marketing</h5>
                    <p class="testi-item_text text-justify">Our Digital Marketing company in Dubai, UAE provides you best & affordable Digital Marketing Services for your Business Growth.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">SEO Services</h5>
                    <p class="testi-item_text text-justify">Are you looking for the best SEO services in Dubai, well you landed on the right place.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">Local SEO</h5>
                    <p class="testi-item_text text-justify">Enhance the visibility of your business to customers searching for a product or service at a specific geographical location.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">PPC Services</h5>
                    <p class="testi-item_text text-justify">Collborate with us to formulate cost-effective Pay Per Click (PPC) campaigns to grab customer attention, enhance web traffic, increase qualified leads, and boost conversions.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">Social Media Marketing</h5>
                    <p class="testi-item_text text-justify">For you business growth in social media you can trust on the social media marketing company in Dubai to experience the better results.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="testi-item">
                    <h5 class="mb-20">Social Media Optimization</h5>
                    <p class="testi-item_text text-justify">For your business growth in social media you can trust on the social media marketing company in Dubai to experience the better results.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5 class="mt-5">Why Choose Us?</h5>
                <div class="checklist style4">
                    <ul>
                        <li><i class="fa-regular fa-arrow-right"></i><strong>Expertise:</strong> With years of experience in the digital marketing and website development industry, our team brings a wealth of knowledge and expertise to every project. From designing user-friendly websites to executing strategic marketing campaigns, we have the skills and resources to help you achieve your goals.</li>
                        <li><i class="fa-regular fa-arrow-right"></i><strong>Tailored Solutions:</strong> We understand that every business is unique, which is why we take a personalized approach to every project. Whether you're a small startup or a large enterprise, we take the time to understand your specific needs and goals, developing customized solutions that deliver maximum impact and value.</li>
                        <li><i class="fa-regular fa-arrow-right"></i><strong>Proven Track Record:</strong> Our track record speaks for itself. Over the years, we have helped countless clients achieve success online through our innovative digital marketing strategies and website development solutions. From increasing website traffic to generating leads and sales, our proven methods have consistently delivered measurable results.</li>
                        <li><i class="fa-regular fa-arrow-right"></i><strong>Competitive Pricing:</strong> We believe that high-quality digital marketing and website development services should be accessible to businesses of all sizes. That's why we offer competitive pricing that provides exceptional value for your investment. With transparent pricing and no hidden fees, you can trust that you're getting the best possible service at a fair price.</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 mt-5">
                <h5>Get Started Today</h5>
                <p class="text-justify">Ready to take your brand to new heights? Contact AUERGA today to schedule a consultation and learn more about how our digital marketing and website development services can help you achieve your goals. Let's work together to build a stronger, more successful online presence for your business.</p>
            </div>
        </div>
    </div>
</section>
@endsection