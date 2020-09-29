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
                            <div class="mywrapper">
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
                                </div>
                                <div class="job-details contract">
     <p>
  We know that during this time there are concerns around the actuality of
  hiring needs, we want to assure you that this job is posted for a need that we
  are eagerly looking to fill. We would love to see your application!
</p>
<p>
  Clevertech is a leading consultancy that is on a mission to build
  transformational digital solutions for the world’s most innovative
  organizations. Enterprise companies turn to Clevertech to help them launch
  innovative digital products that interact with hundreds of millions of
  customers, transactions, and data points. By partnering with Clevertech these
  companies are propelling forward and changing their industries, business
  models, and more.
</p>
<p><strong>Basic Requirements:</strong></p>
<ul>
  <li>Significant experience with React and Redux</li>
  <li>Clearly communicate complex concepts verbally in English</li>
  <li>Strong understanding of the agile software development process</li>
  <li>Experience consulting with large enterprises</li>
</ul>
<p>
  <strong>Expected timeline:</strong> We move quickly and if you are the right
  person, we want you here. In the past we have moved from application to hire
  in a matter of days!
</p>
<p><strong>Our Benefits</strong></p>
<p>
  We know that people do their best work when they’re taken care of. So we make
  sure to offer great benefits.
</p>
<p>
  Competitive Vacation Package Annual Financial Allowance for YOUR development
  Flexible Family Leave Clevertech Gives Back Program Clevertech U (Leadership
  Program, Habit Building, New Skills Training) Clevertech Swag Strong
  Clevertech Community
</p>
<p><strong>How We Work</strong></p>
<p>
  Are you curious about what its like to work at Clevertech? Check out our
  YouTube channel to hear directly from Clevertech developers.
</p>
<p>
  People join Clevertech to make an impact. To grow themselves. To be surrounded
  by developers who they can learn from.
</p>
<p>
  Weve found that innovation comes from an exchange of knowledge across all of
  our teams. To put people on the path for success, we nurture a culture built
  on trust, collaboration, and personal growth. You will work in small
  feature-based cross-functional teams and be empowered to take ownership.
</p>
<p>
  We make a point of constantly evolving our experience and skills. We value
  diverse perspectives and fostering personal growth by challenging everyone to
  push beyond our comfort level and try something new.
</p>
<p>The result? Meaningful work.</p>
<p><strong>Getting Hired</strong></p>
<p>
  We hire people from a variety of backgrounds who are respectful,
  collaborative, and introspective. Members of the tech team, for example, come
  from diverse backgrounds having worked as copy editors, graphic designers, and
  photographers prior to joining Clevertech.
</p>
<p>
  Our hiring process focuses not only on your skills but also on your
  professional and personal ambitions. We want to get to know you. We put a lot
  of thought into the interview process in order to get a holistic understanding
  of you while being mindful of your time. You will solve problems derived from
  the work we do on a daily basis followed by thoughtful discussions around
  potential fit. Whatever the outcome, we want you to have a great candidate
  experience.
</p>
<p>
  Want to learn more about Clevertech and the team? Check out clevertech.careers
</p>
<h1 id="location">Location</h1>
<p>North American, South America, Europe</p>
<div class="instructions">
    <h1 class="howdoyouapply">How do you apply?</h1>
    <div class="markdown">
        <a class="btn action-apply apply_99125" href="#" target="_new" rel="nofollow">Apply for this position</a>
    </div>
</div>


                            </article>
                        </div>
                    </div>
                </div>
            </article>
            <article class="page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="job_listings">
                        <div class="job_listings">
                             <article class="job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_type-health-care job-type-health-care job_position_featured featured">
                            <div class="mywrapper">
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
                                </div>
                                <div class="job-details">
     <p>
  We know that during this time there are concerns around the actuality of
  hiring needs, we want to assure you that this job is posted for a need that we
  are eagerly looking to fill. We would love to see your application!
</p>
<p>
  Clevertech is a leading consultancy that is on a mission to build
  transformational digital solutions for the world’s most innovative
  organizations. Enterprise companies turn to Clevertech to help them launch
  innovative digital products that interact with hundreds of millions of
  customers, transactions, and data points. By partnering with Clevertech these
  companies are propelling forward and changing their industries, business
  models, and more.
</p>
<p><strong>Basic Requirements:</strong></p>
<ul>
  <li>Significant experience with React and Redux</li>
  <li>Clearly communicate complex concepts verbally in English</li>
  <li>Strong understanding of the agile software development process</li>
  <li>Experience consulting with large enterprises</li>
</ul>
<p>
  <strong>Expected timeline:</strong> We move quickly and if you are the right
  person, we want you here. In the past we have moved from application to hire
  in a matter of days!
</p>
<p><strong>Our Benefits</strong></p>
<p>
  We know that people do their best work when they’re taken care of. So we make
  sure to offer great benefits.
</p>
<p>
  Competitive Vacation Package Annual Financial Allowance for YOUR development
  Flexible Family Leave Clevertech Gives Back Program Clevertech U (Leadership
  Program, Habit Building, New Skills Training) Clevertech Swag Strong
  Clevertech Community
</p>
<p><strong>How We Work</strong></p>
<p>
  Are you curious about what its like to work at Clevertech? Check out our
  YouTube channel to hear directly from Clevertech developers.
</p>
<p>
  People join Clevertech to make an impact. To grow themselves. To be surrounded
  by developers who they can learn from.
</p>
<p>
  Weve found that innovation comes from an exchange of knowledge across all of
  our teams. To put people on the path for success, we nurture a culture built
  on trust, collaboration, and personal growth. You will work in small
  feature-based cross-functional teams and be empowered to take ownership.
</p>
<p>
  We make a point of constantly evolving our experience and skills. We value
  diverse perspectives and fostering personal growth by challenging everyone to
  push beyond our comfort level and try something new.
</p>
<p>The result? Meaningful work.</p>
<p><strong>Getting Hired</strong></p>
<p>
  We hire people from a variety of backgrounds who are respectful,
  collaborative, and introspective. Members of the tech team, for example, come
  from diverse backgrounds having worked as copy editors, graphic designers, and
  photographers prior to joining Clevertech.
</p>
<p>
  Our hiring process focuses not only on your skills but also on your
  professional and personal ambitions. We want to get to know you. We put a lot
  of thought into the interview process in order to get a holistic understanding
  of you while being mindful of your time. You will solve problems derived from
  the work we do on a daily basis followed by thoughtful discussions around
  potential fit. Whatever the outcome, we want you to have a great candidate
  experience.
</p>
<p>
  Want to learn more about Clevertech and the team? Check out clevertech.careers
</p>
<h1 id="location">Location</h1>
<p>North American, South America, Europe</p>
<div class="instructions">
    <h1 class="howdoyouapply">How do you apply?</h1>
    <div class="markdown">
        <a class="btn action-apply apply_99125" href="#" target="_new" rel="nofollow">Apply for this position</a>
    </div>
</div>


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
                            <div class="mywrapper">
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
                                </div>
                                <div class="job-details">
     <p>
  We know that during this time there are concerns around the actuality of
  hiring needs, we want to assure you that this job is posted for a need that we
  are eagerly looking to fill. We would love to see your application!
</p>
<p>
  Clevertech is a leading consultancy that is on a mission to build
  transformational digital solutions for the world’s most innovative
  organizations. Enterprise companies turn to Clevertech to help them launch
  innovative digital products that interact with hundreds of millions of
  customers, transactions, and data points. By partnering with Clevertech these
  companies are propelling forward and changing their industries, business
  models, and more.
</p>
<p><strong>Basic Requirements:</strong></p>
<ul>
  <li>Significant experience with React and Redux</li>
  <li>Clearly communicate complex concepts verbally in English</li>
  <li>Strong understanding of the agile software development process</li>
  <li>Experience consulting with large enterprises</li>
</ul>
<p>
  <strong>Expected timeline:</strong> We move quickly and if you are the right
  person, we want you here. In the past we have moved from application to hire
  in a matter of days!
</p>
<p><strong>Our Benefits</strong></p>
<p>
  We know that people do their best work when they’re taken care of. So we make
  sure to offer great benefits.
</p>
<p>
  Competitive Vacation Package Annual Financial Allowance for YOUR development
  Flexible Family Leave Clevertech Gives Back Program Clevertech U (Leadership
  Program, Habit Building, New Skills Training) Clevertech Swag Strong
  Clevertech Community
</p>
<p><strong>How We Work</strong></p>
<p>
  Are you curious about what its like to work at Clevertech? Check out our
  YouTube channel to hear directly from Clevertech developers.
</p>
<p>
  People join Clevertech to make an impact. To grow themselves. To be surrounded
  by developers who they can learn from.
</p>
<p>
  Weve found that innovation comes from an exchange of knowledge across all of
  our teams. To put people on the path for success, we nurture a culture built
  on trust, collaboration, and personal growth. You will work in small
  feature-based cross-functional teams and be empowered to take ownership.
</p>
<p>
  We make a point of constantly evolving our experience and skills. We value
  diverse perspectives and fostering personal growth by challenging everyone to
  push beyond our comfort level and try something new.
</p>
<p>The result? Meaningful work.</p>
<p><strong>Getting Hired</strong></p>
<p>
  We hire people from a variety of backgrounds who are respectful,
  collaborative, and introspective. Members of the tech team, for example, come
  from diverse backgrounds having worked as copy editors, graphic designers, and
  photographers prior to joining Clevertech.
</p>
<p>
  Our hiring process focuses not only on your skills but also on your
  professional and personal ambitions. We want to get to know you. We put a lot
  of thought into the interview process in order to get a holistic understanding
  of you while being mindful of your time. You will solve problems derived from
  the work we do on a daily basis followed by thoughtful discussions around
  potential fit. Whatever the outcome, we want you to have a great candidate
  experience.
</p>
<p>
  Want to learn more about Clevertech and the team? Check out clevertech.careers
</p>
<h1 id="location">Location</h1>
<p>North American, South America, Europe</p>
<div class="instructions">
    <h1 class="howdoyouapply">How do you apply?</h1>
    <div class="markdown">
        <a class="btn action-apply apply_99125" href="#" target="_new" rel="nofollow">Apply for this position</a>
    </div>
</div>


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
