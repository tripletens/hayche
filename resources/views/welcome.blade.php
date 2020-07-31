@extends('layouts.landing')

@section('content')
    @include('const.landing.top-nav')
        <main class="page-content">
        <section>
        <div data-loop="false" data-autoplay="false" data-simulate-touch="true" class="swiper-container swiper-slider swiper-variant-1 bg-gray-base">
            <div class="swiper-wrapper text-center">
            <div data-slide-bg="{{ asset('landing/images/hayche-slider-background-e.png') }}" class="swiper-slide">
                <div class="swiper-slide-caption">
                <div class="shell">
                    <div class="range range-sm-center">
                    <div class="cell-sm-11 cell-md-10 cell-lg-9">
                        <h2 data-caption-animate="fadeInUp" data-caption-delay="0.001s" class="slider-header-welcome" style="color:#000;">Welcome to</h2>
                        <h2 data-caption-animate="fadeInUp" data-caption-delay="0.001s" class="slider-header" style="color:#000;">The Hayche Network</h2>
                        <p data-caption-animate="fadeInUp" data-caption-delay="100" class="text-bigger slider-text" style="color:#000; font-weight: bold;">The Network of Hospitality Professionals</p>
                        <div class="group-xl-responsive offset-top-30 offset-sm-top-45">
                            <a data-caption-animate="fadeInUp" data-caption-delay="250" href="{{ route('company-register') }}" data-custom-scroll-to="section-start-journey" class="btn btn-xl btn-white-outline-variant-1">
                                Join Us As a Company</a><a data-caption-animate="fadeInUp" data-caption-delay="250" href="{{ route('register') }}" class="btn btn-xl btn-white-outline-variant-1">Join Us As an Applicant</a></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        <section id="section-start-journey" class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145">
        <div class="shell">
            <div class="range range-md-bottom range-sm-center">
            <div data-wow-duration="2s" data-wow-offset="200" class="cell-sm-10 cell-md-5 wow fadeInLeft">
                <h6 class="small-size">WE ARE THE HOSPITALITY EXPERIENCE</h6>
                <h2 class="text-red-orange">Most Flexible</h2>
                <p class="h3 offset-top-0">We provide complete hospitality experience</p>
                <p class="offset-top-40 text-secondary">Established in 2012, The Hayche Network has quickly become a leading hospitality management and recruitment agency, specializing in the training and supply of top industry professionals into the Hospitality industry.</p>
                <a href="{{ route('about-us') }}" class="btn btn-xl btn-purple">Read More About Us</a> </div>
            <div class="cell-sm-11 cell-md-7 offset-top-40 offset-sm-top-60 offset-md-top-0">
                <div class="image-group">
                <figure data-wow-duration=".6s" data-wow-delay=".0s" data-wow-offset="80" class="wow fadeInRightSmall"><img src="{{ asset('landing/images/home_hayche_pic3.jpg') }}" alt="" width="243" height="199"/> </figure>
                <figure data-wow-duration=".9s" data-wow-delay=".4s" data-wow-offset="200" class="wow fadeInRightMedium"><img src="{{ asset('landing/images/Facchinaggio.jpg') }}" alt="" width="508" height="341"/> </figure>
                <figure data-wow-duration=".9s" data-wow-delay=".8s" data-wow-offset="300" class="wow fadeInRightSmall"><img src="{{ asset('landing/images/bell-notice.jpg') }}" alt="" width="689" height="469"/> </figure>
                </div>
            </div>
            </div>
        </div>
        </section>
        <div class="divider-spectrum"></div>
        <section data-on="false" data-md-on="true" style="background-image: url('landing/images/butler-993388_1920.jpg');" class="rd-parallax bg-gray-base bg-image">
        <div data-speed="0.33" data-type="media" data-url="{{ asset('landing/images/butler-993388_1920.jpg') }}" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="section-50 section-sm-75 section-lg-top-100 section-lg-bottom-120">
            <div class="shell">
                <div class="range range-sm-center">
                <div class="cell-sm-11 cell-md-10 cell-lg-9 text-center">
                    <h3><span>What</span><em style="color:#fff;">we</em><span>Do</span></h3>
                    <h3>Our Hospitality Management Services Include.</h3>
                </div>
                </div>
                <div class="range">
                <div class="cell-sm-6 cell-md-4">
                    <article class="icon-box-vertical"> <img src="{{ asset('landing/images/hotel-operations.png') }}" alt="">
                    <p class="small-size">MAXIMIZING SERVICES AND MINIMIZING EXPENSES</p>
                    <h5 class="icon-box-header">Hotel Operations</h5>
                    <p>Our Management Information System (MIS) are designed to monitor hotel-level performance and produce reports and metrics about room yields utilization, labor and cash management, expense variances, and other critical items on a daily or weekly basis.</p>
                    </article>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
                    <article class="icon-box-vertical"> <img src="{{ asset('landing/images/hr-operations.png') }}" alt="">
                    <p class="small-size">INCREASING VALUETHROUGH PEOPLE.</p>
                    <h5 class="icon-box-header">Human Resources</h5>
                    <p>Our Human Resource services are integrated with The Hayche Academy. The Academy supports our clients in the effective management of Human Resources. No matter what type of property you manage, managing human resources effectively is essential to the growth of your hotel.</p>
                    </article>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">
                    <article class="icon-box-vertical"><img src="{{ asset('landing/images/sales.png') }}" alt="">
                    <p class="small-size">HELPING CLIENTS WIN AND KEEP CUSTOMERS</p>
                    <h5 class="icon-box-header">Sales & Marketing</h5>
                    <p>From tapping into strategic marketing partnerships to executing a robust public relations campaign, the Hayche team is here to help your establishment receive maximum exposure and connect with your target market.</p>
                    </article>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-50 offset-lg-top-60">
                    <article class="icon-box-vertical"><img src="{{ asset('landing/images/quality-control.png') }}" alt="">
                    <p class="small-size">WE DON’T COMPROMISE ON QUALITY</p>
                    <h5 class="icon-box-header">Quality Control Services</h5>
                    <p>Hayche Network has established custom quality control services and systems to help our clients succeed. We perform surveys, audits, and implement programs to monitor operations and ensure continuous quality improvement across departments.</p>
                    </article>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-50 offset-lg-top-60">

                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-50 offset-lg-top-60">
                    <div class="range offset-top-30 offset-sm-top-45">
                    <div class="cell-xs-12 text-center"><a href="{{ route('services') }}" class="btn btn-xl btn-pink">Learn More</a></div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <section class="section-50 section-sm-90 section-lg-120 bg-gray-lighter">
        <div class="shell">

        </div>
        </section>
        <section data-on="false" data-md-on="true" style="background-image: url('landing/images/Bakubung_Lodge_Housekeeping.jpg')" class="rd-parallax bg-gray-base bg-image">
        <div data-speed="0.33" data-type="media" data-url="{{ asset('landing/images/cape-town-lodge-hotel-14.jpg') }}" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="section-60 section-sm-90 section-lg-120">
            <div class="shell text-center">
                <h3>What People Say</h3>
                <div class="range range-md-center offset-top-40">
                <div class="cell-md-11 cell-lg-9">
                    <div class="owl-carousel-inverse">
                    <div data-items="1" data-stage-padding="0" data-loop="false" data-margin="30" data-nav="true" data-numbering="#owl-numbering-1" data-animation-in="fadeIn" data-animation-out="fadeOut" class="owl-carousel owl-nav-position-numbering">
                        <div class="item">
                        <blockquote class="quote-minimal quote-minimal-inverse">
                            <div class="quote-body border-edge">
                            <p> <q>In my opinion, Hayche is the most experienced independent hotel management team operating in Nigeria. They are simply result oriented.</q> </p>
                            </div>
                            <div class="quote-meta"> <cite>Kefeller and associates Ltd.</cite>
                            <p class="caption">Anugo Osadebe</p>
                            </div>
                        </blockquote>
                        </div>
                        <div class="item">
                        <blockquote class="quote-minimal quote-minimal-inverse">
                            <div class="quote-body">
                            <p> <q>Hayche is our recruiter of choice. They take the time to understand our needs and always delivers. She is a true extension of our People Development Department.</q> </p>
                            </div>
                            <div class="quote-meta"> <cite>Blueafric Media</cite>
                            <p class="caption">Michael EI</p>
                            </div>
                        </blockquote>
                        </div>
                        <div class="item">
                        <blockquote class="quote-minimal quote-minimal-inverse">
                            <div class="quote-body">
                            <p> <q>We have purchased several themes and contacted support once, the case had to be passed to technical support but it was resolved within the day. Very fast responses and excellent templates to choose from. Would highly recommend.</q> </p>
                            </div>
                            <div class="quote-meta"> <cite>Sam Cole</cite>
                            <p class="caption">Business owner</p>
                            </div>
                        </blockquote>
                        </div>
                    </div>
                    <div id="owl-numbering-1" class="owl-numbering owl-numbering-default">
                        <div class="numbering-current"></div>
                        <div class="numbering-separator"></div>
                        <div class="numbering-count"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        <section class="section-50 section-sm-90 section-lg-top-120">
        <div class="shell">


        </div>
        </section>
    </main>
    @include('const.landing.footer')
@endsection
