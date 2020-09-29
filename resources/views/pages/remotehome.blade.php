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
<!--Begin::Banner-->
<div id="banner-section" class="site-banner">
    <div class="item">
        <div class="wp-custom-header">
            <img src="{{ asset('remote/img/banner-image.jpg') }}" alt="ssdasdsa" class="lazyloaded" data-ll-status="loaded" width="1920" height="704">
        </div>
        <div class="banner-caption">
            <div class="container">
                <div class="caption-inner">
                    <h2 class="title">Aim Higher, Dream Bigger</h2>
                    <div class="description">
                        <p>Exercitation velit incididunt et deserunt pariatur minim ullamco culpa.</p>
                    </div>
                    <div class="form-wrap">
                        <div class="search-filter-wrap">
                            <div class="job_listings">
                                <form action="#" class="jobscout_job_filters">
                                    <div class="search_jobs">
                                        <div class="search_keywords">
                                            <label for="search_keywords">Keywords</label>
                                            <input type="text" id="search_keywords" name="search_keywords" placeholder="Ex: Flutter, UX Designer...">
                                        </div>
                                        <div class="search_submit">
                                            <input type="submit" value="Search">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Banner-->
<!--begin:: content-->
<div id="content" class="site-content">
    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <header class="entry-header">
                    <h1 class="entry-title">
                        Minim cillum irure minim reprehenderit consequat.
                    </h1>
                </header>
            <article class="page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="job_listings">
                        <div class="job_listings">
                            <article class="job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_type-health-care job-type-health-care job_position_featured featured">
                                <figure class="company-logo">
                                    <img class="company_logo" src="{{ asset('remote/img/logo-1.png') }}" alt="FFFFFF">
                                    <a class="btn" href="#">Apply</a>
                                </figure>
                                <div class="job-title-wrap">
                                    <h2 class="entry-title">
                                        <a href="#">Web Designer/Developer</a>
                                    </h2>
                                    <div class="company-name">
                                        company name
                                    </div>
                                    <div class="entry-meta">
                                        <div class="salary-amt">
                                            <span class="currency">
                                                <i class="fa fa-clock"></i>
                                            </span>
                                            <span class="salary">
                                                6h
                                            </span>
                                        </div>
                                      <div class="salary-amt">
                                            <span class="currency">
                                                <i class="fa fa-map-pin"></i>
                                            </span>
                                            <span class="salary">
                                                Spain Only
                                            </span>
                                        </div>
                                      <div class="salary-amt">
                                            <span class="currency">
                                                <i class="fa fa-briefcase"></i>
                                            </span>
                                            <span class="salary">
                                                Full time
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="job-tags-dev">
                                        <li class="job-type it-services front">
                                            <a href="#">FRONTEND</a>
                                        </li>
                                        <li class="job-type it-services back">
                                            <a href="#">BACKEND</a>
                                        </li>
                                        <li class="job-type it-services flutter">
                                            <a href="#">FLUTTER</a>
                                        </li>
                                        <li class="job-type it-services angular">
                                            <a href="#">ANGULAR</a>
                                        </li>
                                        <li class="job-type it-services react">
                                            <a href="#">REACT</a>
                                        </li>
                                        <li class="job-type it-services sistemas">
                                            <a href="#">SISTEMAS</a>
                                        </li>
                                        <li class="job-type it-services rrhh">
                                            <a href="#">RECURSOS HUMANOS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="featured-label">Verified</div>
                            </article>
                        </div>
                    </div>
                </div>
            </article>
            <article class="page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="job_listings">
                        <div class="job_listings">
                            <article class="job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_type-health-care job-type-health-care job_position_featured">
                                <figure class="company-logo">
                                    <img class="company_logo" src="{{ asset('remote/img/logo-1.png') }}" alt="FFFFFF">
                                    <a class="btn" href="#">Apply</a>
                                </figure>
                                <div class="job-title-wrap">
                                    <h2 class="entry-title">
                                        <a href="#">Web Designer/Developer</a>
                                    </h2>
                                    <div class="company-name">
                                        company name
                                    </div>
                                    <div class="entry-meta">
                                        <div class="salary-amt">
                                            <span class="currency">
                                                <i class="fa fa-clock"></i>
                                            </span>
                                            <span class="salary">
                                                6h
                                            </span>
                                        </div>
                                      <div class="salary-amt">
                                            <span class="currency">
                                                <i class="fa fa-map-pin"></i>
                                            </span>
                                            <span class="salary">
                                                Spain Only
                                            </span>
                                        </div>
                                      <div class="salary-amt">
                                            <span class="currency">
                                                <i class="fa fa-briefcase"></i>
                                            </span>
                                            <span class="salary">
                                                Full time
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="job-tags-dev">
                                        <li class="job-type it-services front">
                                            <a href="#">FRONTEND</a>
                                        </li>
                                        <li class="job-type it-services back">
                                            <a href="#">BACKEND</a>
                                        </li>
                                        <li class="job-type it-services flutter">
                                            <a href="#">FLUTTER</a>
                                        </li>
                                        <li class="job-type it-services angular">
                                            <a href="#">ANGULAR</a>
                                        </li>
                                        <li class="job-type it-services react">
                                            <a href="#">REACT</a>
                                        </li>
                                        <li class="job-type it-services sistemas">
                                            <a href="#">SISTEMAS</a>
                                        </li>
                                        <li class="job-type it-services rrhh">
                                            <a href="#">RECURSOS HUMANOS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="featured-label">Verified</div>
                            </article>
                        </div>
                    </div>
                </div>
            </article>
            <article class="page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="job_listings">
                        <div class="job_listings">
                            <article class="job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_type-health-care job-type-health-care job_position_featured">
                                <figure class="company-logo">
                                    <img class="company_logo" src="{{ asset('remote/img/logo-1.png') }}" alt="FFFFFF">
                                    <a class="btn" href="#">Apply</a>
                                </figure>
                                <div class="job-title-wrap">
                                    <h2 class="entry-title">
                                        <a href="#">Web Designer/Developer</a>
                                    </h2>
                                    <div class="company-name">
                                        company name
                                    </div>
                                    <div class="entry-meta">
                                        <div class="salary-amt">
                                            <span class="currency">
                                                <i class="fa fa-clock"></i>
                                            </span>
                                            <span class="salary">
                                                6h
                                            </span>
                                        </div>
                                      <div class="salary-amt">
                                            <span class="currency">
                                                <i class="fa fa-map-pin"></i>
                                            </span>
                                            <span class="salary">
                                                Spain Only
                                            </span>
                                        </div>
                                      <div class="salary-amt">
                                            <span class="currency">
                                                <i class="fa fa-briefcase"></i>
                                            </span>
                                            <span class="salary">
                                                Full time
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="job-tags-dev">
                                        <li class="job-type it-services front">
                                            <a href="#">FRONTEND</a>
                                        </li>
                                        <li class="job-type it-services back">
                                            <a href="#">BACKEND</a>
                                        </li>
                                        <li class="job-type it-services flutter">
                                            <a href="#">FLUTTER</a>
                                        </li>
                                        <li class="job-type it-services angular">
                                            <a href="#">ANGULAR</a>
                                        </li>
                                        <li class="job-type it-services react">
                                            <a href="#">REACT</a>
                                        </li>
                                        <li class="job-type it-services sistemas">
                                            <a href="#">SISTEMAS</a>
                                        </li>
                                        <li class="job-type it-services rrhh">
                                            <a href="#">RECURSOS HUMANOS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="featured-label not-verified">NOT Verified</div>
                            </article>
                        </div>
                    </div>
                </div>
            </article>
            </main>
        </div>
    </div>
</div>
<!--end:: content-->
<!--begin::banner ad-->
<div class="bg-cta-section">
    <div class="widget widget_raratheme_companion_cta_widget">
        <div class="centered bttk-cta-bg">
            <div class="raratheme-cta-container">
                <h2 class="widget-title">Title ad jobs</h2>
                <div class="text-holder">
                <p>
                    Eiusmod incididunt laboris et sit amet esse labore labore id incididunt sit.
                </p>
                <div class="button-wrap">
                    <a target="_blank" href="#" class="btn-cta btn-1">Learn More</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::banner ad-->
<!--begin::footer-->
<footer>

  <div class="inner white">
    <p>© 2020 XXXXXXXXXXX. <a class="spain-responsible" href="#"> http://www.example.com/ </a></p>
    <p>XXXXXXX es una marca registrada de XXXXXXXXX.</p>
    <ul class="legal-links font-s-m cf">
      <li><a href="/terms-and-conditions">Términos</a></li>
      <li><span class="dot big"></span></li>
      <li><a href="/privacy-policy">Privacidad</a></li>
      <li><span class="dot big"></span></li>
      <li>
        <div class="control drop-down-control btn-icon">
          <span class="font-s-m">Idioma preferido</span>
        </div>
      </li>
    </ul>
  </div>


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

        {{-- Includable JS --}}
        @yield('scripts')
	</body>
	<!--end::Body-->
</html>
