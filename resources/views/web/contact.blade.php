@extends("web.base")
@section("content")
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Contact Us</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Contact</li>
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
<div class="space" id="contact-sec">
    <div class="container">
        <div class="row gy-40">
            <div class="col-xl-12 col-xxl-12">
                <div class="title-area mb-10">
                    <h2 class="sec-title">Contact Information</h2>
                    <p class="mb-0">Your Gateway to Seamless Business Setup in UAE. Contact Us Now!</p>
                </div>
                <div class="contact-info-wrap">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fa-light fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Our Address</h3>
                            <span class="contact-info_text">#106, Bay Square 11, Business Bay, Dubai</span>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fa-light fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Phone Number</h3>
                            <span class="contact-info_text">
                                <a href="tel:+971528686158"> +(971) 52 868 6158</a>
                                <a href="tel:+971526939558">+(971) 50 693 9558</a>

                            </span>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fa-light fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Email Address</h3>
                            <span class="contact-info_text">
                                <a href="mailto:mkt@auregagroup.com"> mkt@auregagroup.com</a>
                                <a href="mailto:acs@auregagroup.com"> acs@auregagroup.com</a>

                            </span>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fa-light fa-clock"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Working Time</h3>
                            <span class="contact-info_text">Work Time: Mon - Fri 09AM - 6PM, Saturday 10AM - 4PM.</span>
                        </div>
                    </div>
                </div>
                <h5 class="mt-35">Follow The Social Media:</h5>
                <div class="th-social  footer-social style2">
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
<section class="space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="post" action="{{ route('contact.submit') }}" class="contact-form">
                    @csrf
                    <div class="title-area text-center">
                        <h3 class="sec-title">Have Any Other Question?</h3>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="contact_number" placeholder="Contact Number">
                            <i class="fal fa-mobile"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="service" class="form-select nice-select form-control">
                                <option value="" disabled selected hidden>Select Service</option>
                                @forelse($services as $key => $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                @endforelse
                            </select>
                            <i class="fal fa-tag"></i>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write message...."></textarea>
                            <i class="fal fa-comment"></i>
                        </div>
                        <div class="form-btn col-12">
                            <button class="th-btn fw-btn btn-submit">Submit Now</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="map-sec">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14441.857782445455!2d55.2611684!3d25.1875552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f693560ad9fe9%3A0xdb3b467956c16a9a!2sAurega%20Group!5e0!3m2!1sen!2sin!4v1676375849520!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
</div>
@endsection