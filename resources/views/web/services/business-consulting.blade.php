@extends("web.base")
@section("content")
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Business Consulting</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Services</li>
                    <li>Business Consulting</li>
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
                        <span class="sub-title style1">Proven Expertise for Thriving Business Setup in Dubai</span>
                        <h2 class="sec-title mb-20">Unleash Your Potential with Top-notch Business Setup Consultants in Dubai</h2>
                        <p class="text-justify">Are you ready to embark on a journey of entrepreneurial success in Dubai and the UAE? Look no further! Our top-notch business setup consultants in Dubai are here to guide you at every step of the way. With proven expertise and in-depth knowledge of the local market, we ensure your business setup is seamless and efficient. From company registration to licensing and beyond, trust us to handle it all while you focus on realizing your business aspirations.</p>
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
<section class="service-sec overflow-hidden space">
    <div class="container">
        <div class="row testi-slide2 slider-shadow">
            <div class="col-md-6 col-lg-6">
                <div class="testi-item">
                    <h4 class="mb-20">Tailored Solutions for Your Dubai Business Adventure</h4>
                    <p class="testi-item_text text-justify">Your business deserves personalized attention and solutions tailored to its unique needs. At Aurega Group, we understand that no two ventures are alike, and our consultants work closely with you to craft strategies that align with your vision. Whether you are a startup, SME, or a large corporation, our expertise spans across industries, giving you the confidence to take your business to new heights in the bustling markets of the UAE.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="testi-item">
                    <h4 class="mb-20">Navigating Success: Business Setup Consultants in UAE</h4>
                    <p class="testi-item_text text-justify">Setting up a business in the UAE can be a daunting task, but with our expert consultants by your side, success is within reach. We know the intricacies of the UAE business landscape, and our guidance empowers you to make informed decisions. From choosing the right location to understanding legal requirements, we smooth the path for your business journey, allowing you to navigate toward your goals with ease.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="testi-item">
                    <h4 class="mb-20">Your Trusted Partners for Dubai Business Consultancy</h4>
                    <p class="testi-item_text text-justify">In the ever-evolving business landscape of Dubai, having a trusted partner is crucial. At Aurega Group, we value trust, transparency, and long-lasting relationships with our clients. When you choose us as your business setup consultants, you gain a dedicated team that genuinely cares about your success. Our open communication and ethical practices ensure that you have the support you need, whenever you need it.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="testi-item">
                    <h4 class="mb-20">Streamlined Business Setup Services in Dubai and Beyond</h4>
                    <p class="testi-item_text text-justify">Time is of the essence when establishing your business. Our streamlined business consultancy services dubai ensure that the process is efficient and hassle-free. From handling legal documentation to liaising with government authorities, we take care of the nitty-gritty, leaving you with more time to focus on launching and growing your business in Dubai and beyond.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="testi-item">
                    <h4 class="mb-20">Elevate Your Business with Dubai's Finest Consultants</h4>
                    <p class="testi-item_text text-justify">When you choose Aurega Group, you are partnering with the finest business setup consultants in uae.Our commitment to excellence and unwavering dedication to your success set us apart within the industry.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 mt-5">
                <h4 class="mb-20">FAQs</h4>
                <div class="accordion-area accordion" id="faqAccordion">

                    <div class="accordion-card active">
                        <div class="accordion-header" id="collapse-item-1">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Why do I need a business setup consultant in Dubai?</button>
                        </div>
                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">Business setup consultants in Dubai provide expert guidance and support throughout the entire process of establishing a business. They possess in-depth knowledge of local regulations, licensing requirements, and market conditions, ensuring a smooth and efficient setup that saves you time and resources.</p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-card ">
                        <div class="accordion-header" id="collapse-item-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">What services do your business setup consultants offer?</button>
                        </div>
                        <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">Our business setup consultants in Dubai offer a comprehensive range of services, including company registration, trade license acquisition, visa processing, office space solutions, PRO services, and ongoing business support. We tailor our services to meet the specific needs of your business.</p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-card ">
                        <div class="accordion-header" id="collapse-item-3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How can your business setup consultants help me with company formation?</button>
                        </div>
                        <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">Our consultants will assess your business objectives, help you choose the most suitable legal structure (e.g., LLC, Free Zone Company), assist with document preparation, liaise with government authorities, and ensure compliance with all legal and regulatory requirements, making the entire process hassle-free and efficient.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection