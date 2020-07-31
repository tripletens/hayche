@extends('layouts.landing')

@section('content')
    @include('const.landing.top-nav')
        <main class="page-content">
    <section style="background-image: url('landing/images/bell-notice-contact.jpg');" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
      <div class="shell">
        <div class="page-title">
          <h2>Qaulity Control</h2>
        </div>
      </div>
    </section>
    <section class="section-66 section-sm-90 section-lg-bottom-120">
      <div class="shell">
        <div class="range range-lg-justify offset-top-30">
            <div class="cell-sm-1 offset-top-40 offset-sm-top-0"></div>
          <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
            <div class="shift-sm-top-1">
              <img src="{{ asset('landing/images/quality-control-page.png') }}" alt="" class="resize-about-img">
            </div>
          </div>
          <div class="cell-sm-6 cell-lg-5 text-secondary">
            <div class="inset-sm-right-15 inset-lg-right-0">
              <h3 style="color: #c27ac0;">
                Ensuring Zero boundaries on quality
              </h3>
              <p>Hayche Network has established custom quality control services and systems to help our hotels succeed.</p>
              <p>We perform surveys, audits, and implement programs to monitor operations and ensure continuous quality improvement across departments.</p>
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
                <h3 style="color: #c27ac0; font-size: 25px; font-weight: 300;">Quality Control Services</h3> <br>
                <p>We take the time to look at hotel operations from the guest’s perspective so that we are able to make more meaningful customer service change recommendations. We follow the path of the guest from the first encounter throughout their stay. Details such as how long it takes for a guest services representative to pick up the phone, how clean the rooms are, and whether staff members are wearing name tags are documented for further review. We are also able to evaluate cash handling, food ticket and beverage controls, and other processes during a quality control auditing phase.</p>

                <h3 style="color: #c27ac0; font-size: 25px; font-weight: 300;">Safety Audits</h3> <br>
                <p>Our highly-trained loss prevention specialists can evaluate a hotel for total loss prevention and identify ‘hot spots’ to increase safety measures. We provide all of our hotels with comprehensive loss prevention training programs for hotel managers and line employees. We also provide manuals and programs for ongoing property maintenance.</p>
                <div class="cell-sm-1 cell-lg-1 text-secondary"></div>
            </div>
            <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
                <h3 style="color: #c27ac0; font-size: 25px; font-weight: 300;">Guest Feedback Program</h3> <br>
                <p>our custom hotel evaluation tool allows hotels to ask guests for feedback; then we use this data to take corrective action when needed. Guest feedback is essential for measuring performance and allows us to make recommendations or suggest initiatives that will improve the guest experience.</p>

                <h3 style="color: #c27ac0; font-size: 25px; font-weight: 300;">Manager on Duty Program</h3> <br>
                <p>Hayche has developed comprehensive and individualized ‘manager on duty programs’ that include a set of policy manuals, procedures, and reports. These programs are a vital component of any hotel management program.</p>

                <h3 style="color: #c27ac0; font-size: 25px; font-weight: 300;">Employee Survey Program</h3> <br>
                <p>Positive employee morale is linked to positive guest experiences. Hayche Hospitality Management custom survey tool helps hotels gauge employee morale and determine areas of strength and weakness. This information is valuable to general managers and hotel staff working to improve productivity and the customer service experience. A well-managed quality control system is essential for improving hotel operations and customer service.</p>

            </div>
            <div class="cell-sm-1 offset-top-40 offset-sm-top-0"></div>
          </div>
        </div>
    </section>
  </main>
    @include('const.landing.footer')
@endsection
