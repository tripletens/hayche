@extends('layouts.landing')

@section('content')
    @include('const.landing.top-nav')
    <main class="page-content">
    <section style="background-image: url('landing/images/bell-notice-contact.jpg');" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
      <div class="shell">
        <div class="page-title">
          <h2>Our Services</h2>
        </div>
      </div>
    </section>
    <section class="section-66 section-sm-90 section-lg-bottom-120">
      <div class="shell">
        <div class="range range-lg-justify offset-top-30">
            <div class="cell-sm-1 offset-top-40 offset-sm-top-0"></div>
          <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
            <div class="shift-sm-top-1">
              <img src="{{ asset('landing/images/hotel-management.png') }}" alt="" class="resize-about-img-contact">
            </div>
          </div>
          <div class="cell-sm-6 cell-lg-5 text-secondary">
            <img src="{{ asset('landing/images/hotel-operations-services.png') }}" alt=""> <br> <br>
            <div class="inset-sm-right-15 inset-lg-right-0">
              <h3 style="font-weight: bold; font-size: 20px;">Hotel Operations</h3>
              <p>Hayche Network offers a variety of hotel and resort management services to boost financial returns from day-to-day operations.</p>
              <p>Our objective is to maximize services and minimize expenses, and we use a unique approach to monitor performance and provide indepth reports and feedback in all areas of operations.</p>
              <a href="{{ route('hotel-operations') }}" class="btn btn-md btn-purple">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-66 section-sm-90 section-lg-bottom-120 bg-gray-lighter">
        <div class="shell">
          <div class="range range-lg-justify offset-top-30">
              <div class="cell-sm-1 cell-lg-1 text-secondary"></div>
            <div class="cell-sm-6 cell-lg-5 text-secondary">
              <img src="{{ asset('landing/images/hr-operations-services.png') }}" alt=""> <br> <br>
              <div class="cell-sm-6 cell-lg-5 inset-sm-right-15 inset-lg-right-0">
                <h3 style="font-weight: bold; font-size: 20px;">Human Resources</h3>
                <p>Our Human Resource services are integrated with The Hayche Academy. The Academy supports our clients in the effective management of Human Resources.</p>
                <p>No matter what type of property you manage, managing human resources effectively is essential to the growth of your hotel. We help hotels identify the best candidates for various employment opportunities as well as assist with training programs, payroll, and benefits packages.</p>
                <a href="{{ route('human-resources') }}" class="btn btn-md btn-purple">Read More</a>
              </div>
              <div class="cell-sm-1 cell-lg-1 text-secondary"></div>
            </div>
            <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
              <div class="shift-sm-top-1">
                <img src="{{ asset('landing/images/huma-resource-img.png') }}" alt="" class="resize-about-img-contact">
              </div>
            </div>
            <div class="cell-sm-1 offset-top-40 offset-sm-top-0"></div>
          </div>
        </div>
    </section>
    <section class="section-60 section-sm-90  section-lg-bottom-120">
      <div class="shell">
        <div class="range">
            <div class="cell-xs-6 cell-sm-1 cell-md-1 offset-top-60 offset-md-top-0"></div>
          <div class="cell-xs-6 cell-sm-3 cell-md-5 offset-top-60 offset-md-top-0">
              <img src="{{ asset('landing/images/marketing-saless.png') }}" alt="" class="resize-about-img-contact">
          </div>
          <div class="cell-xs-6 cell-sm-1 cell-md-1 offset-top-60 offset-md-top-0"></div>

          <div class="cell-xs-6 cell-sm-3 cell-md-5">
            <img src="{{ asset('landing/images/sales-marketing.png') }}" alt=""> <br> <br>
            <h3 style="font-weight: bold; font-size: 20px;">Sales & Marketing</h3>
                <p>Sales and marketing play an important role in the success of any hotel. Without a cohesive plan, hotels can miss key revenue generation opportunities and lose guests to the competition.</p>
                <p>We use a multi-faceted approach for sales and marketing initiatives to ensure the implementation of strategies that provide long-term success.</p>
                <a href="{{ route('sales') }}" class="btn btn-md btn-purple">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <section class="section-66 section-sm-90 section-lg-bottom-120 bg-gray-lighter">
        <div class="shell">
          <div class="range range-lg-justify offset-top-30">
              <div class="cell-sm-1 cell-lg-1 text-secondary"></div>
            <div class="cell-sm-6 cell-lg-5 text-secondary">
              <img src="{{ asset('landing/images/quality-control-2.png')  }}" alt=""> <br> <br>
              <div class="cell-sm-6 cell-lg-5 inset-sm-right-15 inset-lg-right-0">
                <h3 style="font-weight: bold; font-size: 20px;">Quality Control Services</h3>
                <p>Hayche Network has established custom quality control services and systems to help our hotels succeed.</p>
                <p>We perform surveys, audits, and implement programs to monitor operations and ensure continuous quality improvement across departments.</p>
                <a href="{{ route('quality-control') }}" class="btn btn-md btn-purple">Read More</a>
              </div>
              <div class="cell-sm-1 cell-lg-1 text-secondary"></div>
            </div>
            <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
              <div class="shift-sm-top-1">
                <img src="{{ asset('landing/images/quality-control-main.png') }}" alt="" class="resize-about-img-contact">
              </div>
            </div>
            <div class="cell-sm-1 offset-top-40 offset-sm-top-0"></div>
          </div>
        </div>
    </section>
  </main>
    @include('const.landing.footer')
@endsection
