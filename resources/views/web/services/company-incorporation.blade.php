@extends("web.base")
@section("content")
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Company Incorporation</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Services</li>
                    <li>Company Incorporation</li>
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
                        <span class="sub-title style1">Simplifying Trade License Acquisition in Dubai</span>
                        <h2 class="sec-title mb-20">Streamlined Trade License Services in Dubai - Unlock Your Business Potential</h2>
                        <p class="text-justify">Obtaining a trade license in Dubai is a crucial step in establishing your business. Our team of professionals is well-versed in the complex procedure, ensuring a seamless experience for you. We assist in selecting the appropriate license type, guiding you through the registration process, and handling the necessary paperwork. With our expertise, you can focus on growing your business while we take care of the rest.</p>
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
                    <h4 class="mb-20">Tailored Solutions for Your Business License Needs</h4>
                    <p class="testi-item_text text-justify">Every business is unique, and so are its licensing requirements. Whether you need a commercial, industrial, or online business license in Dubai, we have tailored solutions to match your specific needs. Our comprehensive services cover everything from documentation to obtaining approvals, ensuring that your trade license is obtained efficiently and hassle-free.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="testi-item">
                    <h4 class="mb-20">Commercial License in Dubai - Navigating Business Services</h4>
                    <p class="testi-item_text text-justify">A commercial license in Dubai is a gateway to a world of trading and services opportunities. As experts in dubai business license , we navigate the complexities to ensure your commercial license is acquired efficiently. From preparing the required documents to liaising with authorities, we handle it all. Trust us to pave the way for your business services success in Dubai.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="testi-item">
                    <h4 class="mb-20">Online Business License in Dubai - Embrace the Digital Realm</h4>
                    <p class="testi-item_text text-justify">Embrace the future with an online business license in Dubai. Our consultants are well-versed in the digital landscape, providing tailored solutions for online businesses. We guide you through the virtual registration process, making it convenient and swift. With our assistance, your online venture will thrive in Dubai's ever-expanding digital marketplace.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="testi-item">
                    <h4 class="mb-20">Selecting the Right License for Your Trade</h4>
                    <p class="testi-item_text text-justify">With various trade licenses in Dubai, it's essential to choose the one that aligns with your business activities. Our experts help you make informed decisions, considering factors such as business type and location. Whether it's a commercial, industrial, or any other license, we guide you towards the best fit for your trade in the UAE.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="testi-item">
                    <h4 class="mb-20">Renewing Your Trade License - Seamless & Stress-free</h4>
                    <p class="testi-item_text text-justify">Maintaining an updated trading licence in uae is crucial for a successful business. Our team takes care of the annual renewal process, ensuring your license is valid and compliant with current regulations. With our seamless and stress-free approach to license renewal, you can focus on running your business while we handle the paperwork.</p>
                    <p class="testi-item_text text-justify">At Auerega, we are committed to facilitating your business's growth with our efficient and reliable trade license services in Dubai. Let us be your trusted partner on the journey to entrepreneurial success.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="testi-item">
                    <h4 class="mb-20">Dubai Business License - Empowering Your Venture</h4>
                    <p class="testi-item_text text-justify">Your Dubai business license opens doors to countless opportunities in this thriving market. At [Company Name], we understand the significance of a well-structured business license for your success. Our dedicated team assists you throughout the process, from selecting the right license category to securing approvals. Let us empower your venture with a commercial license in dubai that sets you on the path to prosperity.</p>
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
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What is a trade license, and why is it important in Dubai?</button>
                        </div>
                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">A trade license is a legal document that allows a business to operate within a specific jurisdiction. In Dubai, having a valid trade license is mandatory for all commercial activities. It demonstrates the legitimacy of your business and ensures compliance with local regulations.</p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-card ">
                        <div class="accordion-header" id="collapse-item-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">How can your trade license services help my business grow?</button>
                        </div>
                        <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">Our streamlined trade license services in Dubai facilitate a quicker and more efficient license acquisition process. We handle all the paperwork, liaise with government authorities, and ensure that you meet the necessary criteria. By obtaining your trade license promptly, you can focus on growing your business without unnecessary delays.</p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-card ">
                        <div class="accordion-header" id="collapse-item-3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">What are the different types of trade licenses available in Dubai?</button>
                        </div>
                        <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">In Dubai, there are three main types of trade licenses: Commercial License for general trading activities, Industrial License for manufacturing businesses, and Professional License for service-oriented companies. Our consultants will guide you in choosing the most appropriate license based on your business activities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection