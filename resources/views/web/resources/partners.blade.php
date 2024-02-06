@extends("web.base")
@section("content")
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Partners</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Resources</li>
                    <li>Partners</li>
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
<div class="about-sec overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 wow fadeInLeft">
                <h5>Coming Soon</h5>
            </div>
        </div>
    </div>
</div>
@endsection