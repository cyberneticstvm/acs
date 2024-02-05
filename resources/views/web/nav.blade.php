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
                    <nav class="main-menu d-none d-lg-block">
                        <ul>
                            <li>
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Business Setup</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('freezone') }}">UAE Free Zone</a></li>
                                    <li><a href="{{ route('offshore') }}">Offshore</a></li>
                                    <li><a href="{{ route('mainland') }}">Mainland</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('company.incorporation') }}">Company Incorporation & Trade Licenses</a></li>
                                    <li><a href="{{ route('golden.visa') }}">Golden Visa</a></li>
                                    <li><a href="{{ route('business.consulting') }}">Business Consulting</a></li>
                                    <li><a href="{{ route('pro.service') }}">PRO Services</a></li>
                                    <li><a href="{{ route('trademark') }}">Trademark Regstration & Intellectual Property</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Resources</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('blogs', 'Blog') }}">Blogs</a></li>
                                    <li><a href="{{ route('members') }}">Team Members</a></li>
                                    <li><a href="{{ route('partners') }}">Our Partenrs</a></li>
                                    <li><a href="{{ route('careers') }}">Careers</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-auto">
                    <div class="header-button">
                        <button type="button" class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button>
                        <a href="#" class="icon-btn sideMenuToggler d-none d-lg-block"><i class="far fa-bars"></i></a>
                        <a href="{{ route('contact') }}" class="th-btn border-radius">Request a quote</a>
                        <button class="icon-btn th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>