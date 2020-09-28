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
     <header id="header" class="fixed-top">
  <div class="container">
    <div class="logo float-left">
      <h1 class="text-light">
        <a href="index.html">
          <img src="{{ asset('/filmaps/img/logo-white.svg') }}" class="img-fluid" alt="" />
        </a>
      </h1>
    </div>

    <nav class="nav-menu float-right d-none d-lg-block">
      <ul>
        <li class="user">
          <div class="detail-pic"></div>
        </li>
        <li class="info">
          <div class="info-detail-pic">
            <span class="welcome-message">Hello <strong>Sergi</strong></span>
            <span class="contributions-user">34 contributions</span>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</header>

	<!--end::Header-->
	<!--begin::contenido-->
    <section class="content-search-map">
      <!-- side bar filter -->
      <!-- <div class="full-page-sidebar hidden-sidebar" style="visibility: visible;opacity: 1;max-width: 360px;"> -->
      <div class="full-page-sidebar hidden-sidebar">
          <div class="full-page-sidebar-inner">
              <div class="simplebar-scroll-content">
                  <div class="simplebar-content">
                      <div class="sidebar-container">
                          <div class="sidebar-widget">
                              <h3>Location</h3>
                              <div class="input-with-icon">
                                <div id="autocomplete-container" data-children-count="1" class="autocomplete-container">
                                    <input id="autocomplete-input" type="text" placeholder="Location">
                                </div>
                                <i class="fa fa-map-marker"></i>
                            </div>
                          </div>

                          <div class="sidebar-widget">
                              <h3>Keywords</h3>
                              <div class="input-with-icon keywords-container">
                                <div id="autocomplete-container2" class="autocomplete-container" data-children-count="1">
                                    <input id="autocomplete-input2" type="text" placeholder="Keywords" class="keyword-input">
                                    <button class="keyword-input-button ripple-effect"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="keywords-list"></div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="sidebar-widget">
                              <h3>Category</h3>
                              <div class="input-with-icon">
                                <div id="autocomplete-container2" class="autocomplete-container" data-children-count="1">
                                    <div class="dropdown category">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          All categories
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">Cat 1</a>
                                          <a class="dropdown-item" href="#">Cat 2</a>
                                          <a class="dropdown-item" href="#">Cat 3</a>
                                          <a class="dropdown-item" href="#">Cat 4</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                          </div>
                      </div>
                      <div class="sidebar-search-button-container">
                        <button class="button ripple-effect search-button">Search</button>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- side bar filter -->
        <div class="full-page-content-container-search">
            <div class="full-page-content-inner">
                <h3 class="page-title">Search Results</h3>
                <div class="notify-box margin-top-15">
                    <div class="switch-container">
                        <label for="mailaction" class="switch">
                            <input type="checkbox" name="mailaction" class="mailaction">
                            <span class="switch-button"></span>
                            <p class="switch-text">Recibir alertas de esta búsqueda</p>
                        </label>
                    </div>
                    <div class="sort-by">
                        <span>Sort by:</span>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Relevance
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Ciudad</a>
                              <a class="dropdown-item" href="#">Followers</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="listings-container compact-list-layout margin-top-35 margin-bottom-25">
                     <!--resultado individual  -->
                    <a href="#" class="job-listing">
                            <div class="job-listing-details">
                                <div class="job-listing-film-logo">
                                    <img src="{{ asset('/filmaps/img/buscador/logo-search.png') }}" alt="">
                                </div>
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                    <i class="fa fa-star bookmark-icon"></i>
                            </div>
                        </a>
                     <!--resultado individual  -->
                     <!--resultado individual  -->
                    <a href="#" class="job-listing">
                            <div class="job-listing-details">
                                <div class="job-listing-film-logo">
                                    <img src="{{ asset('/filmaps/img/buscador/logo-search.png') }}" alt="">
                                </div>
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                    <i class="fa fa-star bookmark-icon"></i>
                            </div>
                        </a>
                     <!--resultado individual  -->
                     <!--resultado individual  -->
                    <a href="#" class="job-listing">
                            <div class="job-listing-details">
                                <div class="job-listing-film-logo">
                                    <img src="{{ asset('/filmaps/img/buscador/logo-search.png') }}" alt="">
                                </div>
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                    <i class="fa fa-star bookmark-icon"></i>
                            </div>
                        </a>
                     <!--resultado individual  -->
                     <!--resultado individual  -->
                    <a href="#" class="job-listing">
                            <div class="job-listing-details">
                                <div class="job-listing-film-logo">
                                    <img src="{{ asset('/filmaps/img/buscador/logo-search.png') }}" alt="">
                                </div>
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                    <i class="fa fa-star bookmark-icon"></i>
                            </div>
                        </a>
                     <!--resultado individual  -->
                     <!--resultado individual  -->
                    <a href="#" class="job-listing">
                            <div class="job-listing-details">
                                <div class="job-listing-film-logo">
                                    <img src="{{ asset('/filmaps/img/buscador/logo-search.png') }}" alt="">
                                </div>
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                    <i class="fa fa-star bookmark-icon"></i>
                            </div>
                        </a>
                     <!--resultado individual  -->
                     <!--resultado individual  -->
                    <a href="#" class="job-listing">
                            <div class="job-listing-details">
                                <div class="job-listing-film-logo">
                                    <img src="{{ asset('/filmaps/img/buscador/logo-search.png') }}" alt="">
                                </div>
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                    <i class="fa fa-star bookmark-icon"></i>
                            </div>
                        </a>
                     <!--resultado individual  -->
                     <!--resultado individual  -->
                    <a href="#" class="job-listing">
                            <div class="job-listing-details">
                                <div class="job-listing-film-logo">
                                    <img src="{{ asset('/filmaps/img/buscador/logo-search.png') }}" alt="">
                                </div>
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                    <i class="fa fa-star bookmark-icon"></i>
                            </div>
                        </a>
                     <!--resultado individual  -->
                     <!--resultado individual  -->
                    <a href="#" class="job-listing">
                            <div class="job-listing-details">
                                <div class="job-listing-film-logo">
                                    <img src="{{ asset('/filmaps/img/buscador/logo-search.png') }}" alt="">
                                </div>
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-map"></i> San Francisco</li>
                                            <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                    <i class="fa fa-star bookmark-icon"></i>
                            </div>
                        </a>
                     <!--resultado individual  -->

                </div>
                <div class="clearfix"></div>
                <div class="pagination-container margin-top-20 margin-bottom-20">
                    <nav class="pagination">
                        <ul>
                            <li class="pagination-arrow">
                                <a href="#" class="ripple-effect"><i class="fa fa-chevron-left"></i></a>
                            </li>
                            <li><a href="#" class="ripple-effect">1</a></li>
                            <li><a href="#" class="ripple-effect current-page">2</a></li>
                            <li><a href="#" class="ripple-effect">3</a></li>
                            <li><a href="#" class="ripple-effect">4</a></li>
                            <li class="pagination-arrow">
                                <a href="#" class="ripple-effect"><i class="fa fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="clearfix"></div>
                <div class="small-footer margin-top-15">
                    <div class="small-footer-copyrights">
                        © 2020 <strong>Filmaps</strong>. Todos los derechos reservados
                    </div>
                    <ul class="footer-bottom-langs">
                        <li class="languages"><strong>Languages</strong></li>
                        <li><a href="#">English</a></li>
                        <li class="sep">|</li>
                        <li><a href="#">Spanish</a></li>
                      </ul>
                </div>
                <div class="small-footer no-border">
                    <ul class="footer-social-links">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="full-page-map-container">
            <div class="filter-button-container">
                <button class="enable-filters-button">
                    <i class="fa fa-filter"></i>
                    <span class="show-text">Ver filtros</span>
                    <span class="hide-text">Esconder filtros</span>
                </button>
            </div>
            <div id="mapa"></div>

        </div>
  </section>
<!-- banners -->
	<!--end::contenido-->

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

        <script src="{{ asset('js/pages/custom/search/search.js') }}"></script>
<script>
                       let map;

function initMap() {
// map = new google.maps.Map(document.getElementById("map"), {
let center = { lat: 41.3809, lng: 2.1206311 };
let map = new google.maps.Map(document.getElementById("mapa"), {zoom:15, center:center} );
let marker = new google.maps.Marker({position:center,map:map});
// });
}
              </script>
              <script async
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0tuTBU_UnJ081ADI_D-4nz3ttzcsJSco&callback=initMap"
defer
></script>
        @yield('scripts')
	</body>
	<!--end::Body-->
</html>
