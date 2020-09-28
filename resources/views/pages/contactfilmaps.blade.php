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
	<!--begin::Section1-->
    <section class="contact-section" data-aos="fade-up">
      <div class="container contact_container">

        <!--begin::Left-->
        <div class="contact_left d-xs-none">
          <h6>Reprehenderit quis nulla sint?</h6>
          <h2>Envíanos un mensaje</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
            varius enim in eros elementum tristique.
          </p>
        </div>
        <!--end::Left-->
        <!--begin::Right-->
        <div class="form-block-2 contact-form">
            <form action="#" id="form-contact-form" class="form-filmaps">
                <div class="row">
                    <div class="col-xs-12 d-sm-none d-md-none d-lg-none d-xl-none mb-5">
                      <h6>Reprehenderit quis nulla sint?</h6>
                      <h2>Envíanos un mensaje</h2>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        varius enim in eros elementum tristique.
                      </p>
                    </div>
                    <div class="col-lg-6 mb-5">
                      <input type="text" class="form-control border-inputs" placeholder="Nombre*">
                    </div>
                    <div class="col-lg-6 mb-5">
                      <input type="text" class="form-control border-inputs" placeholder="Apellido">
                    </div>
                    <div class="col-lg-6 mb-5">
                      <input type="text" class="form-control border-inputs" placeholder="Email*">
                    </div>
                    <div class="col-lg-6 mb-5">
                      <input type="text" class="form-control border-inputs" placeholder="Website">
                    </div>
                    <div class="col-lg-12 mb-5">
                      <textarea name="message" id="inputmessage" class="form-control border-inputs" rows="3" required="required" placeholder="Tú mensaje"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" value="Enviar" class="btn btn-block btn-primary btn-contact-filmaps">
                    </div>
                  </div>
            </form>
        </div>
        <!--end::right-->
      </div>
      <img
        src="{{ asset('/filmaps/img/confetti-left.svg') }}"
        alt=""
        class="contact-confetti"
        width="400"
      />
    </section>
	<!--end::Section1-->
	<!--Begin::Footer-->
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
	<!--End::Footer-->
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
        @yield('scripts')
        <div class="mobile-nav-overly"></div>
	</body>
	<!--end::Body-->
</html>
