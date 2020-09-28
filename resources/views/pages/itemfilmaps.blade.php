<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>
    <head>
        <meta charset="utf-8"/>

        {{-- Title Section --}}
        <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>

        {{-- Meta Data --}}
        <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

        {{-- Fonts --}}
        {{ Metronic::getGoogleFontsInclude() }}

        {{-- Global Theme Styles (used by all pages) --}}
        @foreach(config('layout.resources.css') as $style)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Layout Themes (used by all pages) --}}
        @foreach (Metronic::initThemes() as $theme)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Includable CSS --}}
  <link href="{{ asset('filmaps/css/filmaps.css') }}" rel="stylesheet">
  <link href="{{ asset('filmaps/css/owl.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @yield('styles')
    </head>
	<!--end::Head-->
	<!--begin::Body-->
	<body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }} class="tt">
<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fas fa-bars"></i></button>
	<!--begin::Header-->
     <header id="header" class="fixed-top header-transparent">
      <div class="container">
        <div class="logo float-left">
          <h1 class="text-light">
            <a href="index.html">
              <img src="{{ asset('/filmaps/img/logo-white.svg') }}" class="img-fluid" alt="" />
            </a>
          </h1>
          <!-- <a href="index.html"><img src="{{ asset('/filmaps/img/logo-rosa.svg') }}" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
          <ul>
            <li class="searcher">
              <input
                type="text"
                class="form-control searcher"
                placeholder="Try 'Venom' or 'Under the Tuscan sun' "
              />
              <i class="fas fa-search"></i>
            </li>
            <li class="user">
              <div class="detail-pic"></div>
            </li>
            <li class="info">
              <div class="info-detail-pic">
                <span class="welcome-message"
                  >Hello <strong>Sergi</strong></span
                >
                <span class="contributions-user">34 contributions</span>
              </div>
            </li>
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
    </header>
	<!--end::Header-->
	<!--begin::HERO-->
    <section id="hero3" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="container">
      <div class="row">
      <div class="col-md-12">
          <h2 class="animated fadeInDown">Discover where Justice League has been filmed</h2>
          <h4 class="animated fadeInDown">12 locations in New York, Barcelona and Berlín.</h4>
      </div>
      </div>
      </div>
      <div class="carousel-item active">
        <div class="carousel-container-custom">

        </div>
      </div>

  </section>
	<!--end::HERO-->
    <!--begin::MAPS-->
    <section class="how-it-works item-film">
    <!-- ======= 1st map ======= -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 np mb-3">
          <h3 class="home-trending-locations">Justice League film locations</h3>
        </div>
      </div>
    </div>
  <div class="container container-map-item np mb-5">
    <div class="row">
      <div class="col-md-12">
        <h4 class="home-trending-locations">Barcelona</h4>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 map-item">
        <div id="map"></div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 shoot-film">
        <img class="img-responsive mx-auto" src="{{ asset('filmaps/img/shoot1.png') }}" alt="" />
      </div>
    </div>
  </div>

  <!-- ======= 2nd map ======= -->
  <div class="container container-map-item np mb-5">
    <div class="row">
      <div class="col-md-12">
        <h4 class="home-trending-locations">New York</h4>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 map-item">
        <div id="map2"></div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 shoot-film">
        <img class="img-responsive mx-auto" src="{{ asset('filmaps/img/shoot1.png') }}" alt="" />
      </div>
    </div>
  </div>
  <!-- ======= 2nd map ======= -->
  <div class="container container-map-item np mb-5">
    <div class="row">
      <div class="col-md-12">
        <h4 class="home-trending-locations">Tokio</h4>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 map-item">
        <div id="map3"></div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 shoot-film">
        <img class="img-responsive mx-auto" src="{{ asset('filmaps/img/shoot1.png') }}" alt="" />
      </div>
    </div>
  </div>


</section>
	<!--end::MAPS-->
    	<!--begin::conbtributors-->
    <section class="np">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h3 class="home-contributors">Top Justice Leagues contributors</h3>
        </div>
        <!--begin::item conbtributors-->
        <div class="col-lg-3 col-md-6 col-sm-6 conts">
          <a href="resume-detail.html" class="img-user"><img src="{{ asset('filmaps/img/user.jpg') }}" class="img-responsive mx-auto img-circle" alt=""></a>
          <div class="details">
            <h4 class="user"><a href="resume-detail.html">daniplanas</a></h4>
            <h4 class="contributions"><a href="resume-detail.html">343 contributions</a></h4>
          </div>
        </div>
        <!--end::item conbtributors-->

        <!--begin::item conbtributors-->
        <div class="col-lg-3 col-md-6 col-sm-6 conts">
          <a href="resume-detail.html" class="img-user"><img src="{{ asset('filmaps/img/user.jpg') }}" class="img-responsive mx-auto img-circle" alt=""></a>
          <div class="details">
            <h4 class="user"><a href="resume-detail.html">daniplanas</a></h4>
            <h4 class="contributions"><a href="resume-detail.html">343 contributions</a></h4>
          </div>
        </div>
        <!--end::item conbtributors-->

        <!--begin::item conbtributors-->
        <div class="col-lg-3 col-md-6 col-sm-6 conts">
          <a href="resume-detail.html" class="img-user"><img src="{{ asset('filmaps/img/user.jpg') }}" class="img-responsive mx-auto img-circle" alt=""></a>
          <div class="details">
            <h4 class="user"><a href="resume-detail.html">daniplanas</a></h4>
            <h4 class="contributions"><a href="resume-detail.html">343 contributions</a></h4>
          </div>
        </div>
        <!--end::item conbtributors-->

        <!--begin::item conbtributors-->
        <div class="col-lg-3 col-md-6 col-sm-6 conts">
          <a href="resume-detail.html" class="img-user"><img src="{{ asset('filmaps/img/user.jpg') }}" class="img-responsive mx-auto img-circle" alt=""></a>
          <div class="details">
            <h4 class="user"><a href="resume-detail.html">daniplanas</a></h4>
            <h4 class="contributions"><a href="resume-detail.html">343 contributions</a></h4>
          </div>
        </div>
        <!--end::item conbtributors-->

        <!--begin::item conbtributors-->
        <div class="col-lg-3 col-md-6 col-sm-6 conts">
          <a href="resume-detail.html" class="img-user"><img src="{{ asset('filmaps/img/user.jpg') }}" class="img-responsive mx-auto img-circle" alt=""></a>
          <div class="details">
            <h4 class="user"><a href="resume-detail.html">daniplanas</a></h4>
            <h4 class="contributions"><a href="resume-detail.html">343 contributions</a></h4>
          </div>
        </div>
        <!--end::item conbtributors-->

        <!--begin::item conbtributors-->
        <div class="col-lg-3 col-md-6 col-sm-6 conts">
          <a href="resume-detail.html" class="img-user"><img src="{{ asset('filmaps/img/user.jpg') }}" class="img-responsive mx-auto img-circle" alt=""></a>
          <div class="details">
            <h4 class="user"><a href="resume-detail.html">daniplanas</a></h4>
            <h4 class="contributions"><a href="resume-detail.html">343 contributions</a></h4>
          </div>
        </div>
        <!--end::item conbtributors-->

        <!--begin::item conbtributors-->
        <div class="col-lg-3 col-md-6 col-sm-6 conts">
          <a href="resume-detail.html" class="img-user"><img src="{{ asset('filmaps/img/user.jpg') }}" class="img-responsive mx-auto img-circle" alt=""></a>
          <div class="details">
            <h4 class="user"><a href="resume-detail.html">daniplanas</a></h4>
            <h4 class="contributions"><a href="resume-detail.html">343 contributions</a></h4>
          </div>
        </div>
        <!--end::item conbtributors-->

        <!--begin::item conbtributors-->
        <div class="col-lg-3 col-md-6 col-sm-6 conts">
          <a href="resume-detail.html" class="img-user"><img src="{{ asset('filmaps/img/user.jpg') }}" class="img-responsive mx-auto img-circle" alt=""></a>
          <div class="details">
            <h4 class="user"><a href="resume-detail.html">daniplanas</a></h4>
            <h4 class="contributions"><a href="resume-detail.html">343 contributions</a></h4>
          </div>
        </div>
        <!--end::item conbtributors-->



      </div>
    </div>
  </section>
	<!--end::conbtributors-->

<!--begin::Footer-->
    <section class="footer-contact">

        <div class="footer-bottom">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- <p class="mb-0 d-xs-none langs">Languages</p> -->
                <ul class="footer-bottom-langs">
                  <li class="languages">Languages</li>
                  <li><a href="#">English</a></li>
                  <li class="sep">|</li>
                  <li><a href="#">Spanish</a></li>
                </ul>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 text-right">
                <ul class="footer-bottom-langs conditions">
                  <li><a href="#">About</a></li>
                  <li class="sep">|</li>
                  <li><a href="#">Privacy</a></li>
                  <li class="sep">|</li>
                  <li><a href="#">Cookies</a></li>
                  <li class="sep">|</li>
                  <li><a href="#">Conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="copy mb-0">© Filmaps 2020. Todos los derechos reservados.</p>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 text-right">
                <ul class="footer-bottom-social">
                  <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-instagram"></i></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>
	<!--end::Footer-->
        {{--  <div class="mobile-nav-overly"></div>  --}}

		<!--end::Main-->
		<script>var HOST_URL = "{{ route('quick-search') }}";</script>

        {{-- Global Config (global config for global JS scripts) --}}
        <script>
            var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
        </script>

        {{-- Global Theme JS Bundle (used by all pages)  --}}
        @foreach(config('layout.resources.js') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach

        {{-- Includable JS --}}
          <script>
  let map;
  let map2;
  let map3;
          function initMap() {
            // map = new google.maps.Map(document.getElementById("map"), {
            let center = { lat: 41.3809, lng: 2.1206311 };
            map = new google.maps.Map(document.getElementById("map"), {
              zoom: 15,
              center: center,
            });
            let marker = new google.maps.Marker({ position: center, map: map });
            map2 = new google.maps.Map(document.getElementById("map2"), {
              zoom: 15,
              center: center,
            });
            let marker2 = new google.maps.Marker({ position: center, map: map3 });
            map3 = new google.maps.Map(document.getElementById("map3"), {
              zoom: 15,
              center: center,
            });
            let marker3 = new google.maps.Marker({ position: center, map: map3 });

          }
        </script>
        <script
          async
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0tuTBU_UnJ081ADI_D-4nz3ttzcsJSco&callback=initMap"
          defer
        ></script>
        <script src="{{ asset('js/pages/custom/owl-carousel/owl.js') }}"></script>
        @yield('scripts')
	</body>
	<!--end::Body-->
</html>
