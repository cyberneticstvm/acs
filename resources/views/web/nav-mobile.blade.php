<!--==============================
    Mobile Menu
  ============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area">
        <div class="mobile-logo">
            <a href="index.html"><img src="{{ '/web/assets/img/aurega-logo-small.webp' }}" alt="Poolax"></a>
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
                        <li><a href="{{ route('index') }}">UAE Free Zone</a></li>
                        <li><a href="{{ route('index') }}">Offshore</a></li>
                        <li><a href="{{ route('index') }}">Mainland</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('index') }}">Company Incorporation & Trade Licenses</a></li>
                        <li><a href="{{ route('index') }}">Golden Visa</a></li>
                        <li><a href="{{ route('index') }}">Business Consulting</a></li>
                        <li><a href="{{ route('index') }}">PRO Services</a></li>
                        <li><a href="{{ route('index') }}">Trademark Regstration & Intellectual Property</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Resources</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('index') }}">Blogs</a></li>
                        <li><a href="{{ route('index') }}">Team Members</a></li>
                        <li><a href="{{ route('index') }}">Our Partenrs</a></li>
                        <li><a href="{{ route('index') }}">Careers</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
    Sidemenu
============================== -->