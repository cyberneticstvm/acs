@extends("web.base")
@section("content")
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Members</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Resources</li>
                    <li>Members</li>
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
<section class="team-area2 space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Team Members</span>
            <h2 class="sec-title">Chairman</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/ashraf.jpeg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/about-aurega-group/leadership" target="_blank">Mr. Ashraf M. Rahman</a></h3>
                    <span class="team-desig">Chairman & CEO</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="title-area text-center">
            <span class="sub-title">Team Members</span>
            <h2 class="sec-title">Board Members</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInDown">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/yogesh.jpg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/board-members" target="_blank">Mr. Yogesh Bhola</a></h3>
                    <span class="team-desig">Managing Director</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="title-area text-center">
            <span class="sub-title">Team Members</span>
            <h2 class="sec-title">Team Aurega</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInDown">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/rohit.jpeg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/Team-Members" target="_blank">Mr. Rohit Kavale</a></h3>
                    <span class="team-desig">Head of Finance and Taxation</span>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/mohammed.jpeg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/Team-Members" target="_blank">Mr. Mohammed Khalid</a></h3>
                    <span class="team-desig">Operations Manager</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/purushu.jpg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/Team-Members" target="_blank">Mr. Purushothaman Arunagiri</a></h3>
                    <span class="team-desig">Accounts and Admin Manager</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="title-area text-center">
            <span class="sub-title">Team Members</span>
            <h2 class="sec-title">Team Client Servicing</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInDown">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/tony.jpeg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/Team-Members" target="_blank">Mr. Tony Chakhtoura</a></h3>
                    <span class="team-desig">Business Development Manager</span>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/archana.jpeg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/Team-Members" target="_blank">Ms. Archana Uday</a></h3>
                    <span class="team-desig">Client Engagement Manager</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/renil.jpg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/Team-Members" target="_blank">Mr. Renil Thomas</a></h3>
                    <span class="team-desig">Accountant (VAT & TAX)</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('/web/assets/img/team/hafas.jpg') }}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="https://www.auregagroup.com/Team-Members" target="_blank">Mr. Hafas Ansar</a></h3>
                    <span class="team-desig">Business Development Manager</span>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection