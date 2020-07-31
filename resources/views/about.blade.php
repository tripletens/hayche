@extends('layouts.landing')

@section('content')
    @include('const.landing.top-nav')
    <main class="page-content">
    <section style="background-image: url('landing/images/about_home_hayche.jpg');" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
      <div class="shell">
        <div class="page-title">
          <h2>About us</h2>
        </div>
      </div>
    </section>
    <section class="section-66 section-sm-90 section-lg-bottom-120">
      <div class="shell">
        <div class="range range-lg-justify offset-top-30">
            <div class="cell-sm-1 offset-top-40 offset-sm-top-0"></div>
          <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
            <div class="shift-sm-top-1">
              <img src="{{ asset('landing/images/about-pic-bg.png') }}" alt="" class="resize-about-img">
              <p style="color: #000;">We are absolutely focused on, and dedicated to, the long-term success of our clients. Hayche Recruitment has both the ability and expertise to offer temporary and permanent careers within the hospitality sector.</p>
            </div>
          </div>
          <div class="cell-sm-6 cell-lg-5 text-secondary">
            <br><br><br><br>
            <div class="inset-sm-right-15 inset-lg-right-0">
              <p class="small-size">DELIVERING EXCELLENCE SINCE 2012</p>
              <h3 style="color: #c27ac0;">Who we are?</h3>
              <p>Established in 2012, The Hayche Network has quickly become a leading hospitality management and recruitment agency, specializing in the training and supply of top industry professionals into the Hospitality industry.</p>
              <p>The Hayche Network team is made up of professionals who have real-world operating experience in the hospitality industry as general managers, food and beverage directors, chefs, and other senior management roles. Our recruitment agency takes time to understand your business goals, company culture, and specific job requirements so that we can recruit and deploy the perfect candidate. Our client relationships are informed by trust, discretion and confidentiality.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-66 section-sm-90 section-lg-bottom-120">
        <div class="shell">
          <div class="range range-lg-justify offset-top-30">
              <div class="cell-sm-1 offset-top-40 offset-sm-top-0"></div>
            <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
              <div class="shift-sm-top-1">
                <h3 style="font-size: 35px; color: #c27ac0;">Our Vision</h3>
                <p style="color: #000;">To be recognized globally, and highly respected as an industry leader in hospitality.</p>
                <h3 style="font-size: 35px; color: #c27ac0;">Our Values</h3>
                <p style="color: #000;">

                    <span style="color: #e1b756; font-weight: bolder;">Passion ||</span>&nbsp;  Our energy and enthusiasm are contagious. We are inspired to make a lasting impact. <br>
                    <span style="color: #e1b756; font-weight: bolder;">Pursuit of Excellence ||</span>&nbsp; We continually strive to exceed the expectations of our clients. <br>
                    <span style="color: #e1b756; font-weight: bolder;">Integrity ||</span>&nbsp; We do the right thing regardless of the consequences. <br>
                    <span style="color: #e1b756; font-weight: bolder;">Accountability ||</span>&nbsp; We take responsibility for individual and collective actions. <br>
                    <span style="color: #e1b756; font-weight: bolder;">Collaboration ||</span>&nbsp; We work together to achieve collective and individual goals. <br>

                </p>
              </div>
            </div>
            <div class="cell-sm-6 cell-lg-5 text-secondary">
              <div class="inset-sm-right-15 inset-lg-right-0">
                <h3 style="font-size: 35px; color: #c27ac0;">Our Mission</h3>
                <p>To provide distinguished Hospitality through four key components: <br> <b>Service, Relationships, Careers,</b> and <b>Results.</b> <br> <br>
                <b>i. SERVICE:</b> To serve our clients by providing the highest quality professional services that address their business needs. <br>
                <b>ii. RELATIONSHIPS:</b> To raise the standard of hospitality work ethics and customer relations service by improving the skills, abilities, and efficiencies of hospitality service providers. <br>
                <b>iii. CAREERS:</b> Invest in building careers in the hospitality industry by contributing to the community in which we live and work. <br>
                <b>iv. RESULTS:</b> Our results oriented approach aims to achieve maximum results based on clear and measurable agreements made upfront. Our management style is based on the premise that people will work with more enthusiasm and commitment when</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="section-60 section-sm-90 bg-gray-lighter">
      <div class="shell">
        <div class="range">
          <div class="cell-xs-6 cell-sm-1 cell-md-1 offset-top-60 offset-md-top-0"></div>
          <div class="cell-xs-6 cell-sm-3 cell-md-5">
            <p class="small-size">WHAT WE DO</p>
            <h3>
                Our Hospitality Management Services Includes
            </h3>
            <p class="text-dark">
                <b>| | Hotel Operations</b> <br>
                <b>| | Human Resources</b> <br>
                <b>| | Sales & Marketing</b> <br>
                <b>| | Quality Control Services (Brand Compliance)</b>
            </p>
            <a href="{{ route('services') }}" class="btn btn-xl btn-purple">Read More About Us</a>
          </div>
          <div class="cell-xs-6 cell-sm-3 cell-md-5 offset-top-60 offset-md-top-0">
              <img src="{{ asset('landing/images/about-service.png') }}" alt="" class="resize-about-img">
          </div>
          </div>
          <div class="cell-xs-6 cell-sm-1 cell-md-1 offset-top-60 offset-md-top-0"></div>
        </div>

    </section>
  </main>

    @include('const.landing.footer')
@endsection
