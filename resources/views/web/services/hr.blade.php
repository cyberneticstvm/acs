@extends("web.base")
@section("content")
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">HR and Recruitment Service</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Services</li>
                    <li>HR and Recruitment Service</li>
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
                        <span class="sub-title style1">Your Premier Recruitment Partner in Dubai</span>
                        <h2 class="sec-title mb-20">HR and Recruitment Services in Dubai</h2>
                        <p class="text-justify">At AUERGA, we understand that the success of your business hinges on the quality of your workforce. As a leading recruitment service company based in the vibrant city of Dubai, we are dedicated to providing comprehensive staffing solutions that meet the evolving needs of your organization. With a relentless commitment to excellence and a passion for connecting top talent with forward-thinking companies, AUERGA is your trusted partner in recruitment success.</p>
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
<section class="service-sec overflow-hidden mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="mt-5">Our Range of Services</h5>
                <div class="checklist style4">
                    <ul>
                        <li><i class="fa-regular fa-arrow-right"></i><strong>Executive Search:</strong> Our executive search services are designed to identify and attract top-tier talent for C-suite and senior leadership positions. We employ a meticulous approach, leveraging our extensive industry knowledge and network to find the perfect match for your organization's strategic needs.</li>

                        <li><i class="fa-regular fa-arrow-right"></i><strong>Permanent Placement:</strong> From entry-level roles to mid-level management positions, our permanent placement services are tailored to source, screen, and select candidates who not only possess the requisite skills and experience but also align with your company culture and values.</li>
                        <li><i class="fa-regular fa-arrow-right"></i><strong>Temporary Staffing:</strong> Whether you require temporary staff to cover seasonal peaks, special projects, or short-term absences, AUERGA offers flexible staffing solutions to ensure uninterrupted business operations. Our extensive database of pre-screened candidates allows us to quickly match the right talent to your temporary staffing needs.</li>
                        <li><i class="fa-regular fa-arrow-right"></i><strong>Outsourcing Solutions:</strong> AUERGA's outsourcing solutions are designed to streamline your HR processes and reduce administrative burdens. From payroll management and benefits administration to compliance oversight and employee relations, our team of experts ensures smooth and efficient operations, allowing you to focus on your core business objectives.</li>
                        <li><i class="fa-regular fa-arrow-right"></i><strong>Consulting Services:</strong> Our HR consulting services provide strategic guidance and support across a range of workforce management areas, including talent acquisition, performance management, employee engagement, and succession planning. Whether you need assistance with organizational restructuring or leadership development initiatives, our consultants are here to help you navigate complex HR challenges with confidence.</li>
                    </ul>
                </div>
                <h5 class="mt-5">Why Choose AUERGA?</h5>
                <div class="checklist style4">
                    <ul>
                        <li><i class="fa-regular fa-arrow-right"></i><strong>Industry Expertise:</strong> With years of experience serving clients across diverse industries, AUERGA possesses deep industry knowledge and insights that enable us to understand your unique staffing requirements and deliver tailored solutions that drive results.</li>

                        <li><i class="fa-regular fa-arrow-right"></i><strong>Personalized Service:</strong> At AUERGA, we believe in forging strong, long-term partnerships with our clients. We take the time to understand your company culture, values, and goals, allowing us to provide personalized service that exceeds your expectations and fosters mutual success.</li>
                        <li><i class="fa-regular fa-arrow-right"></i><strong>Extensive Network:</strong> Our extensive network of professionals and candidates enables us to access top talent quickly and efficiently. Whether you're seeking local talent or international expertise, AUERGA has the connections and resources to find the right candidates for your organization.</li>
                        <li><i class="fa-regular fa-arrow-right"></i><strong>Competitive Pricing:</strong> We understand the importance of cost-effectiveness in today's competitive business environment. That's why AUERGA offers competitive pricing without compromising on the quality of our services, ensuring that you receive exceptional value for your investment.</li>

                    </ul>
                </div>
            </div>
            <div class="col-12 mt-5">
                <h5>Contact AUERGA to Elevate Your Recruitment Strategy:</h5>
                <p class="text-justify">Ready to elevate your recruitment strategy and unlock the full potential of your workforce? Contact AUERGA today to learn more about how our comprehensive range of recruitment services can help you achieve your business objectives. Whether you're a startup, SME, or multinational corporation, AUERGA is here to support your growth journey every step of the way.</p>
                <i>AUERGA - Your Partner in Recruitment Excellence</i>
            </div>
        </div>
    </div>
</section>
@endsection