@extends('layouts.landing')

@section('content')
    @include('const.landing.top-nav')
    <main class="page-content">
    <section style="background-image: url('landing/images/about_home_hayche.jpg');" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
      <div class="shell">
        <div class="page-title">
          <h2>Contact us</h2>
        </div>
      </div>
    </section>    <section class="section-60 section-sm-top-90 section-sm-bottom-100">
      <div class="shell">
        <div class="range range-md-justify">
          <div class="cell-md-5 cell-lg-4">
            <div class="inset-md-right-15 inset-lg-right-0">
              <div class="range">
                <div class="cell-sm-10 cell-md-12">
                  <h3>How to find us</h3>
                  <p class="offset-sm-top-40 text-secondary"> If you have any questions, just fill in the contact form, and we will answer you shortly. If you are living nearby, come visit Hayche in one of our comfortable offices. </p>
                </div>
                <div class="cell-sm-6 cell-md-12 offset-top-30 offset-sm-top-45">
                  <h5>Headquarters</h5>
                  <address class="contact-info">
                  <p class="text-uppercase">Plot 550, Cadastal
                      Zone B06, Mabushi, Abuja,
                      Nigeria.</p>
                  <dl class="list-terms-inline">
                    <dt>Telephone</dt>
                    <dd><a href="callto:#" class="link-secondary">+234 907 136 8869</a></dd>
                  </dl>
                  <dl class="list-terms-inline">
                    <dt>E-mail</dt>
                    <dd><a href="" class="link-primary"><span class="__cf_email__" data-cfemail="cda0aca4a18da9a8a0a2a1a4a3a6e3a2bfaa">info@hayche.net
                      </span></a></dd>
                  </dl>
                  </address>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-md-7 cell-lg-6 offset-top-50 offset-md-top-0">
            <h3>Get in Touch</h3>
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform form-modern offset-top-30">
              <div class="range">
                <div class="cell-sm-6">
                  <div class="form-group">
                    <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
                    <label for="contact-name" class="form-label">Name</label>
                  </div>
                </div>
                <div class="cell-sm-6 offset-top-30 offset-sm-top-0">
                  <div class="form-group">
                    <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                    <label for="contact-email" class="form-label">Email</label>
                  </div>
                </div>
                <div class="cell-xs-12 offset-top-30">
                  <div class="form-group">
                    <div class="textarea-lined-wrap">
                      <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
                      <label for="contact-message" class="form-label">Message</label>
                    </div>
                  </div>
                </div>
                <div class="cell-xs-8 offset-top-30 offset-xs-top-30 offset-sm-top-50">
                  <button type="submit" class="btn btn-purple btn-block">Send</button>
                </div>
                <div class="cell-xs-4 offset-top-22 offset-xs-top-30 offset-sm-top-50">
                  <button type="reset" class="btn btn-silver-outline btn-block">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
    @include('const.landing.footer')
@endsection
