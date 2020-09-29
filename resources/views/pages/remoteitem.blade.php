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
  <link href="{{ asset('remote/css/remote.css') }}" rel="stylesheet">

        @yield('styles')
    </head>
	<!--end::Head-->
	<!--begin::Body-->
	<body {{ Metronic::printAttrs('body') }} class="remoteok frontpage expand-top loaded">


<div id="page" class="site">
	<!--begin::Header-->
<header id="masthead" class="site-header header-one sticky-header sticky">
    <div class="header-main">
        <div class="container">
            <div class="site-branding">
                <div class="site-title-wrap">
                    <h1 class="site-title" itemprop="name">
                        <a href="https://rarathemesdemo.com/jobscout-pro/" rel="home" itemprop="url">name company site</a>
                    </h1>
                    <p class="site-description" itemprop="description">Laboris irure labore quis est minim id</p>
                </div>
            </div>
            <div class="menu-wrap">
                <nav id="site-navigation" class="main-navigation">
                    <button class="toggle-btn">
                        <span class="toggle-bar"></span>
                        <span class="toggle-bar"></span>
                        <span class="toggle-bar"></span>
                    </button>
                    <ul id="primary-menu" class="nav-menu">
                        <li class="menu-item current-menu-item page_item current_page_item">
                            <a href="#" aria-current="XXXXX">XXXX</a>
                        </li>
                        <li class="menu-item page_item">
                            <a href="#" aria-current="XXXXX">XXXX</a>
                        </li>
                        <li class="menu-item page_item">
                            <a href="#" aria-current="XXXXX">XXXX</a>
                        </li>
                        <li class="menu-item page_item">
                            <a href="#" aria-current="XXXXX">XXXX</a>
                        </li>
                        <li class="menu-item page_item">
                            <a href="#" aria-current="XXXXX">XXXX</a>
                        </li>
                        <li class="menu-item page_item">
                            <a href="#" aria-current="XXXXX">XXXX</a>
                        </li>
                        <li class="menu-item page_item">
                            <a href="#" aria-current="XXXXX">XXXX</a>
                        </li>
                    </ul>
                </nav>
                <div class="btn-wrap">
                    <a class="btn" href="#">Post Jobs</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!--end::Header-->
<!--begin:: content-->
<div class="cs-subheader align-left">
    <div class="container">
        <div class="cs-page-title">
            <h1>Title job position - Non irure amet id adipisicing sint.</h1>
        </div>
    </div>
</div>
<!--end:: content-->
<!--begin:: details-->
<div class="main-section">
    <div class="content-area" id="primary">
        <main class="site-main" id="main">
            <article class="post type-post status-publish format-standard hentry category-uncategorized">
            <div class="main-section jobs-detail-3">
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="jobs-info">
                <div class="cs-media">
                  <figure>
                    <a
                      href="http://jobcareer.chimpgroup.com/jobsecure/employer/markmartin/"
                      ><img
                        src="http://jobcareer.chimpgroup.com/jobsecure/wp-content/uploads/wp-jobhunt-users/employer-logo-09-180x135.png"
                        alt=""
                    /></a>
                  </figure>
                </div>
                <div class="cs-text">
                  <strong>Altes Bank</strong>
                  <ul class="post-options">
                    <li>
                      <i class="fa fa-map"></i
                      ><a href="#">Armagh, United Kingdom </a>
                    </li>
                    <li>
                      <i class="fa fa-calendar"></i>Post Date:
                      <span>February 1, 2020</span>
                    </li>
                    <li class="application-deadline-date">
                      <i class="fa fa-calendar"></i>Apply Before:
                      <span>January 1, 2027</span>
                    </li>
                  </ul>
                </div>
                <div class="social-media">
                  <span>Share</span>
                  <ul>
                    <li>
                      <a
                        class="addthis_button_facebook at300b"
                        data-original-title="Facebook"
                        title="Facebook"
                        href="#"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        class="addthis_button_twitter at300b"
                        data-original-title="twitter"
                        title="Twitter"
                        href="#"
                        ><i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                      <a
                        class="addthis_button_dribbble at300b"
                        data-original-title="Dribbble"
                        target="_blank"
                        title="Dribbble"
                        href="#"
                        ><i class="fab fa-twitter"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="section-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xs-12">
              <div class="rich-editor-text">
                <h6>Job Overview</h6>
                <p>
                  Far much that one rank beheld bluebird after outside ignobly
                  allegedly more when oh arrogantly vehement irresistibly fussy
                  penguin insect additionally wow absolutely crud meretriciously
                  hastily dalmatian a glowered inset one echidna cassowary some
                  parrot and much as goodness some froze the sullen much
                  connected bat wonderfully on instantaneously eel valiantly
                  petted this along across highhandedly much dog out the much
                  alas evasively neutral lazy reset.
                </p>
                <p>
                  Repeatedly dreamed alas opossum but dramatically despite
                  expeditiously that jeepers loosely yikes that as or eel
                  underneath kept and slept compactly far purred sure abidingly
                  up above fitting to strident wiped set waywardly far the and
                  pangolin horse approving paid chuckled cassowary oh above a
                  much opposite far much hypnotically more therefore wasp less
                  that hey apart well like while superbly orca and far hence
                  one.Far much that one rank beheld bluebird after outside
                  ignobly allegedly more when oh arrogantly vehement
                  irresistibly fussy penguin insect additionally wow absolutely
                  crud meretriciously hastily dalmatian a glowered inset one
                  echidna cassowary some parrot and much as goodness some froze
                  the sullen much connected bat wonderfully on instantaneously
                  eel valiantly petted this along across highhandedly much dog
                  out the much alas evasively neutral lazy reset.
                </p>
                <p>
                  Repeatedly dreamed alas opossum but dramatically despite
                  expeditiously that jeepers loosely yikes that as or eel
                  underneath kept and slept compactly far purred sure abidingly
                  up above fitting to strident wiped set waywardly far the
                  and.
                  <strong>Skills Required</strong>
                </p>
                <p>
                  Far much that one rank beheld bluebird after outside ignobly
                  allegedly more when oh arrogantly vehement irresistibly fussy
                  penguin insect additionally wow absolutely crud meretriciously
                  hastily dalmatian a glowered inset one echidna cassowary some
                  parrot and much as goodness some froze the sullen much
                  connected bat wonderfully on instantaneously. Far much that
                  one rank beheld bluebird after outside ignobly allegedly more
                  when oh arrogantly vehement irresistibly fussy penguin insect
                  additionally.
                </p>
                <ul class="item-details-jos">
                  <li>
                    Strong Market connections for business development of the
                    bank.
                  </li>
                  <li>
                    Strong knowledge of Corporate products and regulatory
                    requirements.
                  </li>
                  <li>
                    Proficiency in spoken and written English.
                  </li>
                  <li>
                    Analytical skills
                  </li>
                  <li>
                    Knowledge of Corporate Banking, Risk Management, Compliance
                    and Central Bank regulations.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="cs-content-holder">
            <section class="cs-featured-jobs list">
              <div class="featured-holder"></div>
            </section>
          </div>
        </div>
        <div class="section-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <div class="jobs-detail-listing jobs-detial-listing-custom">
                <h6>Job Detail</h6>
                <ul class="row">
                  <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="listing-inner">
                      <i class="fas fa-dollar-sign"></i>
                      <div class="cs-text">
                        <span> Offerd Salary</span><strong>0- £15,000</strong>
                      </div>
                    </div>
                  </li>
                  <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="listing-inner">
                      <i class="far fa-paper-plane"></i>
                      <div class="cs-text">
                        <span> Career Level</span><strong>Officer</strong>
                      </div>
                    </div>
                  </li>
                  <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="listing-inner">
                      <i class="fas fa-graduation-cap"></i>
                      <div class="cs-text">
                        <span> Experience</span><strong>8 Years +</strong>
                      </div>
                    </div>
                  </li>
                  <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="listing-inner">
                      <i class="far fa-user"></i>
                      <div class="cs-text">
                        <span> Gender</span><strong>Female</strong>
                      </div>
                    </div>
                  </li>
                  <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="listing-inner">
                      <i class="fas fa-project-diagram"></i>
                      <div class="cs-text">
                        <span> INDUSTRY</span><strong>Seo</strong>
                      </div>
                    </div>
                  </li>
                  <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="listing-inner">
                      <i class="fas fa-graduation-cap"></i>
                      <div class="cs-text">
                        <span> Qualification</span
                        ><strong>Doctorate Degree</strong>
                      </div>
                    </div>
                  </li>
                  <li class="col-lg-12 col-md-12 col-sm-12">
                    <div class="listing-inner"></div>
                  </li>
                </ul>
                <a class="btn btn-block action-apply apply_99125" href="#" target="_new" rel="nofollow">Apply for this position</a>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>
            </article>
        </main>
    </div>
</div>
<!--end:: details-->
<!--begin::footer-->
<footer class="c-footer">
<nav class="container" aria-label="site">
    <h2 class="sr-only">Site Navigation</h2>
    <section class="c-footer__bottom">
        <p>Copyright © 2020 XXXX, Inc. All rights reserved.</p>
        <div class="c-footer__social dflex align-items-center">
        <a href="#">
            <i class="fab fa-facebook-f"></i
        </a>
        <a href="#">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="#">
            <i class="fab fa-twitter"></i>
        </a>
        </div>
    </section>
</nav>
</footer>
<!--end::footer-->

</div>



		<script>var HOST_URL = "{{ route('quick-search') }}";</script>

        {{-- Global Config (global config for global JS scripts) --}}
        <script>
            var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
        </script>

        {{-- Global Theme JS Bundle (used by all pages)  --}}
        @foreach(config('layout.resources.js') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
            <script src="{{ asset('remote/js/remote.js') }}" type="text/javascript"></script>


        {{-- Includable JS --}}
        @yield('scripts')
	</body>
	<!--end::Body-->
</html>
