@extends("web.base")
@section("content")
<div class="breadcumb-wrapper" data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">About Us</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>About Us</li>
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
<div class="about-sec overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow fadeInLeft">
                <div class="img-box1">
                    <div class="img1">
                        <img src="{{ asset('/web/assets/img/normal/burj.svg') }}" alt="Aurega Corporate Services">
                    </div>
                    <div class="img2 global-img movingX">
                        <img src="{{ asset('/web/assets/img/normal/arab.svg') }}" alt="Aurega Business consulting">
                    </div>
                    <div class="th-experience jump">
                        <h3 class="experience-year"><span class="counter-number">30</span>+</h3>
                        <p class="experience-text">Years Experience In the Industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="wow fadeInRight">
                    <div class="title-area mb-25">
                        <span class="sub-title style1">About Us</span>
                        <h2 class="sec-title mb-20">Let's talk about Aurega Corporate Service</h2>
                        <blockquote class="about-blockquote">
                            <p>We believe “Service works as good as gold”, each company under the Aurega group works towards it. </p>
                        </blockquote>
                        <p class="about-desc text-justify">Aurega Group is the global gateway to multidisciplinary business requirements. We're one of the most trusted business setup advisory establishments which give comprehensive professional services to individuals, associations and large corporates. As we've times of experience in serving the trade and new business sector universally, we give largely substantiated business setup services and veritable cooperative platform to our clients.</p>
                        Contact us to begin your successful business journey in the UAE.
                    </div>
                    <div class="btn-group justify-content-center">
                        <a href="{{ route('contact') }}" class="th-btn">Book an Appointment</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 wow fadeInLeft mt-5">
                <p class="about-desc text-justify">We believe “Service works as good as gold”, each company under the Aurega group works towards it. We operate in an intertwined manner to give value and end- to- end results for clients and prospects globally. We provide high-end professional service in a variety of sectors - such as Company Incorporation Services, Trade License, PRO Services, Golden Visas, Accounting & Book- keeping, Consulting, Intellectual Property and Trade Mark Registration with the aid of our rich colony of high quality multi field professionals.<br />
                    We not only give bespoke business set- up advice but also act as a probative backbone for those companies to flourish- serve as a one- stop shop. We're with you from budding to seeding with excellent client service. Our customer base includes transnational and single- country entities. We enable clients across the globe to enhance their enterprise value and operate their business structures in colorful geographical locales. We've a cumulative customer portfolio of individuals and businesses.<br />
                </p>
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
                <p class="about-desc text-justify mt-5">Eventually, we aren't confined to the four walls of an office space nor lodgers and abysses. We've expansive clients in our fields and are equipped with the skillsets and knowledge demanded to help you make a better future. Together, we will help you to construct solid foundations with concrete imagination and invention.<br />
                    As a result of our growing reputation and our competent amies, we also enjoy unique connections with multitudinous Government and intra-Governmental associations, leading fiscal institutions and mid-size Businesses. We're the final word for connecting the world of business to its future.</p>
            </div>
        </div>
    </div>
    <div class="shape-mockup" data-top="-15%" data-left="-3%"><img src="{{ asset('/web/assets/img/shape/shape_1.png') }}" alt="shape">
    </div>
</div>
@endsection