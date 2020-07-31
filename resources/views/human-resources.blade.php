@extends('layouts.landing')

@section('content')
    @include('const.landing.top-nav')
        <main class="page-content">
            <section style="background-image: url('landing/images/bell-notice-contact.jpg');" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
            <div class="shell">
                <div class="page-title">
                <h2>Human resources</h2>
                </div>
            </div>
            </section>
            <section class="section-66 section-sm-90 section-lg-bottom-120">
            <div class="shell">
                <div class="range range-lg-justify offset-top-30">
                    <div class="cell-sm-1 offset-top-40 offset-sm-top-0"></div>
                    <div class="cell-sm-6 cell-lg-5 text-secondary">
                        <div class="inset-sm-right-15 inset-lg-right-0">
                            <h3 style="color: #c27ac0; font-weight: 200;">
                                Increasing Value Through People
                            </h3>
                            <p>Our Human Resource services are integrated with The Hayche Academy. The Academy supports our clients in the effective management of Human Resources. <br>
                                No matter what type of property you manage, managing human resources effectively is essential to the growth of your hotel.</p>
                            <p>We help hotels identify the best candidates for various employment opportunities as well as assist with training programs, payroll, and benefits packages.</p>
                        </div>
                    </div>
                    <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
                        <div class="shift-sm-top-1">
                        <img src="{{ asset('landing/images/human-resources-main-page.png') }}" alt="" class="resize-about-img-resources">
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <section class="section-66 section-sm-90 section-lg-bottom-120 bg-gray-lighter">
                <div class="shell">
                    <h3 class="text-center">Our human resource services include:</h3> <br>
                    <div class="range range-lg-justify offset-top-30">
                    <div class="cell-sm-1 cell-lg-1 text-secondary"></div>

                    <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
                        <h3 style="color: #c27ac0; font-size: 25px; font-weight: 300;">Hiring Resources</h3> <br>
                        <p>Hayche Academy is staffed by bilingual and multi-cultural human resource team. We use custom screening tools, “SmartCheck” to identify prospective associates and communicate with new hires, making it easier than ever to attract and interview quality talent for all types of positions.</p>
                        <h3 style="color: #c27ac0; font-size: 25px; font-weight: 300;">Payroll & Benefit Programs</h3> <br>
                        <p>We have developed comprehensive payroll and benefits programs for franchised and independent hotels which allows us to improve operations while minimizing costs.</p>
                        <div class="cell-sm-1 cell-lg-1 text-secondary"></div>
                    </div>
                    <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
                        <h3 style="color: #c27ac0; font-size: 25px; font-weight: 300;">Training Resources</h3> <br>
                        <p>Our training programs are designed to produce high level professional who provide exceptional service. While our training focuses on new hires, there is also the provision of continuous education programs for existing employees, and other training materials to ensure all trainees are able to fulfill their job duties and meet company objectives. We interact with hotel-level employees on a personal level so that we are better able to understand their needs from a management perspective.</p>
                    </div>
                    <div class="cell-sm-1 offset-top-40 offset-sm-top-0"></div>
                </div>
                </div>
            </section>
        </main>
    @include('const.landing.footer')
@endsection
