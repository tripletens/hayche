<header class="page-head">
        <div class="rd-navbar-wrap">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="53px" data-lg-stick-up-offset="53px" data-md-stick="true" data-lg-stick-up="true" class="rd-navbar rd-navbar-corporate-light">
            <div class="rd-navbar-inner">
                <div class="rd-navbar-aside-wrap">
                    <div class="rd-navbar-aside">
                      <div data-rd-navbar-toggle=".rd-navbar-aside" class="rd-navbar-aside-toggle"><span></span></div>
                      <div class="rd-navbar-aside-content">
                        <ul class="rd-navbar-aside-group list-units">
                          <li>
                              <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                                <div class="unit-left"><span class="icon icon-xxs icon-primary material-icons-phone"></span></div>
                                <div class="unit-body"><a href="callto:#" class="link-secondary">+234 907 136 8869</a></div>
                              </div>
                            </li>
                            <li>
                              <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                                <div class="unit-left"><span class="icon icon-xxs icon-primary fa-envelope-o"></span></div>
                                <div class="unit-body"><a href="" class="link-secondary"><span class="__cf_email__" data-cfemail="81e8efe7eec1e5e4eceeede8efeaafeef3e6">info@hayche.net</span></a></div>
                              </div>
                            </li>
                        </ul>
                        <div class="rd-navbar-aside-group">
                            @guest
                                <a href="{{ route('login') }}" style="color: #c27ac0; padding: 0px 10px;">Sign In</a>
                            @endguest
                            @auth
                                <a href="/dashboard" style="color: #c27ac0; padding: 0px 10px;">Go to Dashboard</a>
                            @endauth
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="rd-navbar-group">
                <div class="rd-navbar-panel">
                  <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                  <a href="/" class="rd-navbar-brand brand"><img src="{{ asset('landing/images/Hayche-logo_standard.png') }}" width="65" height="15" alt="logo"/></a> </div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-inner">
                    <ul class="rd-navbar-nav">
                      <li><a href="/">Home</a> </li>
                      <li><a href="#">Who We Are</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="{{ route('about-us') }}">About Us</a> </li>
                          <li><a href="{{ route('services') }}">Our Services</a> </li>
                          <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        </ul>
                      </li>
                      <li><a href="{{ route('hayche-review') }}">Hayche Review</a></li>
                      <li><a href="{{ route('register') }}">Join The Network</a></li>
                      <li><a href="#">The Hayche Academy</a></li>
                      <li><a href="#">Blog</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
