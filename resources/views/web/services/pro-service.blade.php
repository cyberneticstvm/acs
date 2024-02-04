@extends("web.base")
@section("content")
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">PRO Service</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Services</li>
                    <li>PRO Service</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="animation-bubble">
        <div class="bubble-1"></div>
        <div class="bubble-2"></div>
        <div class="bubble-3"></div>
        <div class="bubble-4"></div>
        <div class="bubble-5"></div>
        <div class="bubble-6"></div>
        <div class="bubble-7"></div>
        <div class="bubble-8"></div>
        <div class="bubble-9"></div>
        <div class="bubble-10"></div>
    </div>
</div>
<div class="about-sec overflow-hidden space" id="about-sec" data-bg-src="{{ asset('/web/assets/img/bg/about_bg_1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="wow fadeInLeft">
                    <div class="title-area mb-25">
                        <span class="sub-title style1">Empowering Your Business with the Best Pro Services in Dubai</span>
                        <h2 class="sec-title mb-20">Welcome to Aurega - Your Gateway to Efficient Pro Services in Dubai</h2>
                        <p class="text-justify">At Aurega, we pride ourselves on providing exceptional Pro Services in Dubai, tailored to meet the diverse needs of companies and individuals. With our experienced team of professionals well-versed in the legal and regulatory framework of the UAE, we are committed to helping you navigate the complexities of government processes with ease.</p>
                        <p class="text-justify">When it comes to obtaining visas, trade licenses, and other essential documents, Aurega stands out as your trusted partner in pro services in Dubai . Our expertise in the field enables us to optimize the process, leading to significant cost savings for your business. Embrace seamless operations as we ensure compliance with all necessary rules and regulations, allowing you to focus on your core business activities.</p>
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
                    <h4 class="mb-20">Streamline Your Business Operations with Corporate Pro Services</h4>
                    <p class="testi-item_text text-justify">As a business owner, you understand the value of efficiency. Our Corporate pro services in uae cater to the specific needs of companies, large or small, to ease the burden of government-related procedures. Let us handle the intricacies while you focus on building your business empire.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="testi-item">
                    <h4 class="mb-20">Comprehensive Pro Services in UAE</h4>
                    <p class="testi-item_text text-justify">Whether you are based in Dubai or any other emirate, our best pro services in Dubai are designed to simplify your interactions with government entities. Rely on our expertise to establish and maintain fruitful relationships with the authorities, ensuring smooth and timely transactions for your business.</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="testi-item">
                    <h4 class="mb-20">Unparalleled Pro Services in UAE and Beyond</h4>
                    <p class="testi-item_text text-justify">Aurega extends its expertise beyond Dubai, offering Pro Services in Dubai and other regions. As your dedicated Pro Company in UAE, we are committed to saving you time, money, and stress associated with dealing with government entities. Experience a seamless process like never before.</p>
                    <p class="testi-item_text text-justify">Are you ready to experience the power of efficient Pro Services in Dubai? Embrace a future of streamlined success with Aurega by your side. Let us handle the complexities while you soar to new heights in your business endeavors. Discover the best Pro Services in Dubai and beyond - contact Aurega today!</p>
                    <div class="testi-quote">
                        <img src="{{ asset('/web/assets/img/icon/quote_3.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="testi-item">
                    <h4 class="mb-20">Types of Business Setup in Dubai</h4>
                    <div class="checklist">
                        <ul>
                            <li><strong>Sole Proprietorship:</strong> A sole proprietorship is the simplest and most common type of business structure in Dubai. It is owned and operated by a single individual who is personally responsible for all debts and liabilities incurred by the business. This setup offers low startup costs and is relatively easy to establish. The owner has full control over business decisions and the business is taxed at the owner's personal tax rate, which may be advantageous in certain cases. However, the sole proprietorship has limited financial resources and faces challenges in raising capital.</li>
                            <li><strong>Partnership:</strong> A partnership is a business structure owned by two or more individuals who share equal responsibility for the company's debts and liabilities. It is relatively easy to set up and taxed at the partners' individual tax rates. While partnerships offer shared ownership and decision-making, they suffer from a lack of separation between the owners and the business, meaning partners are personally liable for the business's obligations. Additionally, partnerships have a limited lifespan, as they dissolve when any one partner leaves or dies.</li>
                            <li><strong>Limited Liability Company (LLC):</strong> An LLC is a popular choice for business setup in Dubai due to the limited liability protection it provides to its owners. The owners, also known as members, are liable only for the amount they have invested in the company and are not personally responsible for the company's debts and liabilities. This setup is relatively easy to establish and can have foreign shareholders. However, forming an LLC might be more expensive than other business structures, and there could be restrictions on who can own it.</li>
                            <li><strong>Company Limited by Guarantee:</strong> This unique type of company does not have shareholders but instead has members who guarantee the company's debts and liabilities if it faces bankruptcy. While it offers members protection from personal liability, they may need to contribute money to cover the company's debts if necessary. This setup may be more affordable to establish compared to other business structures, but raising capital could be challenging. The company also has a limited lifespan as it dissolves when all members leave or pass away.</li>
                            <li><strong>Joint Stock Company:</strong> A joint-stock company is a business structure that has shareholders who own the company and are responsible for its debts and liabilities. Shareholders' liability is limited to the extent of their investment in the company, providing them with some protection. However, they are still liable for the company's obligations. The establishment of a joint-stock company may be more expensive in Dubai compared to other business structures, and there could be restrictions on ownership. Additionally, the company's lifespan is limited, as it dissolves when all shareholders exit the business or pass away.</li>
                        </ul>
                    </div>
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
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What do PRO services in Dubai entail?</button>
                        </div>
                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">PRO services, also known as Public Relations Officer services, are essential for handling government-related documentation and processes on behalf of businesses in Dubai. These services include visa processing, work permit applications, trade license renewals, document attestations, and other administrative tasks necessary for smooth business operations in the UAE.</p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-card ">
                        <div class="accordion-header" id="collapse-item-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Why should I consider using PRO services for my business in Dubai?</button>
                        </div>
                        <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">Utilizing PRO services ensures that your company remains compliant with local regulations and saves you valuable time and effort. Navigating government procedures can be complex and time-consuming, but with PRO services, you can streamline the process and focus on your core business activities while leaving the paperwork and formalities to experts.</p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-card ">
                        <div class="accordion-header" id="collapse-item-3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Can PRO services help with document attestation and translation in Dubai?</button>
                        </div>
                        <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">Yes, one of the key roles of PRO services is to assist with document attestation and translation. Whether you need to legalize your company documents or have them translated to Arabic for official use, PRO service providers can handle these tasks efficiently, ensuring your documents are recognized by government authorities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection