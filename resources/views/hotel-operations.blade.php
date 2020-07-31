@extends('layouts.landing')

@section('content')
    @include('const.landing.top-nav')
      <main class="page-content">
    <section style="background-image: url('landing/images/bell-notice-contact.jpg');" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
      <div class="shell">
        <div class="page-title">
          <h2>Hotel Operations</h2>
        </div>
      </div>
    </section>
    <section class="section-66 section-sm-90 section-lg-bottom-120">
      <div class="shell">
        <div class="range range-lg-justify offset-top-30">
            <div class="cell-sm-1 offset-top-40 offset-sm-top-0"></div>
          <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
            <div class="shift-sm-top-1">
              <img src="{{ asset('landing/images/hotel-management.png') }}" alt="" class="resize-about-img">
            </div>
          </div>
          <div class="cell-sm-6 cell-lg-5 text-secondary">
            <div class="inset-sm-right-15 inset-lg-right-0">
              <h3 style="color: #c27ac0;">
                We Are Maximizing Services and Minimizing Expenses
              </h3>
              <p>Hayche Network offers a variety of hotel and resort management services to boost financial returns from day-to-day operations. Our objective is to maximize services and minimize expenses, and we use a unique approach to monitor performance and provide indepth reports and feedback in all areas of operations.</p>
              <p>One of the biggest challenges hospitality business owners face is streamlining operations. We are here to help with all areas of productivity management, food and beverage controls, and procurement. Our Management Information System (MIS) are designed to monitor hotel-level performance and produce reports and metrics about room yields utilization, labor and cash management, expense variances, and other critical items on a daily or weekly basis.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-66 section-sm-90 section-lg-bottom-120 bg-gray-lighter">
        <div class="shell">
            <h3 class="text-center">Our hotel operations services include:</h3> <br>
            <div class="range range-lg-justify offset-top-30">
            <div class="cell-sm-1 cell-lg-1 text-secondary"></div>

            <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
                <h3 style="color: #c27ac0; font-size: 25px; font-weight: 300;">Productivity Management</h3> <br>
                <p>Our team assists clients in maximizing resources using custom productivity management tools. We use sales and service forecasts to allocate human resources effectively as well as target hours per occupied room, hours per cover, and dollars per server.</p>

                <h3 style="color: #c27ac0; font-size: 25px; font-weight: 300;">Food and Beverage Controls</h3> <br>
                <p>We are able to streamline food and beverage operations so that hotels are better able to manage costs. Our “SmartServe” program helps to maintain costs and minimize waste and pilfering. We also offer programs that help hotel staff design menus that minimize costs, while appealing to guests and maximizing customer satisfaction.</p>
                <div class="cell-sm-1 cell-lg-1 text-secondary"></div>
            </div>
            <div class="cell-sm-5 offset-top-40 offset-sm-top-0">
                <h3 style="color: #c27ac0; font-size: 25px; font-weight: 300;">Procurement</h3> <br>
                <p>We have nationally and regionally-negotiated contracts with various vendors to ensure Hayche-managed hotels can obtain quality goods and services at the best price. This allows our property managers to exercise more cost control and better manage the budget.</p>
            </div>
            <div class="cell-sm-1 offset-top-40 offset-sm-top-0"></div>
          </div>
        </div>
    </section>
  </main>
    @include('const.landing.footer')
@endsection
