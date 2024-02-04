<!--==============================
    Mobile Menu
  ============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area">
        <div class="mobile-logo">
            <a href="{{ route('index') }}"><img src="{{ asset('/web/assets/img/aurega-logo-small.webp') }}" alt="Aurega"></a>
            <div class="close-menu">
                <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            </div>
        </div>
        <div class="th-mobile-menu">
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
                        <li><a href="{{ route('blogs') }}">Blogs</a></li>
                        <li><a href="{{ route('members') }}">Team Members</a></li>
                        <li><a href="{{ route('partners') }}">Our Partenrs</a></li>
                        <li><a href="{{ route('careers') }}">Careers</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
    Sidemenu
============================== -->