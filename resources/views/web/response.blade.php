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
<div class="about-sec overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 wow fadeInLeft">
                @if(session()->has('success'))
                <div class="alert alert-success text-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-danger text-danger">
                    {{ session()->get('error') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection