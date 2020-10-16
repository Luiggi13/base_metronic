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
        <link rel='stylesheet' id='wp-block-library-css'  href='http://fishing-club.ancorathemes.com/wp-includes/css/dist/block-library/style.min.css?ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='fishing_club-font-google_fonts-css'  href='http://fonts.googleapis.com/css?family=Hind%3A400%2C700%7COswald%3A400%2C700%7CGreat+Vibes%3A400%2C400italic%2C700%2C700italic&#038;subset=latin%2Clatin-ext&#038;ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='fishingclub-colors-css'  href='http://fishing-club.ancorathemes.com/wp-content/themes/fishingclub/css/__colors.css?ver=5.5.1' type='text/css' media='all' />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

        {{-- Layout Themes (used by all pages) --}}
        @foreach (Metronic::initThemes() as $theme)
            {{--  <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>  --}}
        @endforeach

        {{-- Includable CSS --}}
  <link href="{{ asset('barco/css/barco.bundle.css') }}" rel="stylesheet">
  <link href="{{ asset('barco/css/barco.css') }}" rel="stylesheet">

        @yield('styles')
    </head>
	<!--end::Head-->
	<!--begin::Body-->
	<body {{ Metronic::printAttrs('body') }} class="home page-template-default page page-id-332 theme-fishingclub ua_gecko preloader woocommerce-js blog_mode_home body_tag body_style_wide scheme_default  is_stream blog_style_excerpt sidebar_hide expand_content remove_margins header_style_header-1 header_position_over header_title_off menu_style_top menu_fixed_on wpb-js-composer js-comp-ver-6.4.1 vc_responsive desktop_layout" >
<div class="body_wrap">
    <div class="page_wrap">
       {{--  header  --}}
       <header class="top_panel heigh-item top_panel_style_1 with_bg_image fishing_club_inline_0 scheme_default" style="background-repeat: no-repeat; background-size: cover; background-position: center center; width: 100%; opacity: 1; visibility: inherit; z-index: 20;">
          <a class="menu_mobile_button icon-menu-2"></a>
          <div class="top_panel_fixed_wrap"></div>
          <div class="top_panel_navi with_bg_image scheme_default">
             <div class="menu_main_wrap clearfix menu_hover_fade">
                <div class="content_wrap">
                   <a class="logo" href="#"><img src="{{ asset('barco/img/broker-mini.png') }}" class="logo_main" alt="logo" width="222" height="44"></a>
                   <div class="additional-element">
                      <a href="/make-a-reservation" class="custom_link_button in_header sc_button_hover_slide_top">ANUNCIA TU BARCO</a><a href="/login" class="custom_link_button in_header sc_button_hover_slide_top btn-login">INICIAR SESIÓN</a>
                   </div>
                   <nav class="menu_main_nav_area menu_show">
                      <ul id="menu_main" class="menu_main_nav inited sf-js-enabled sf-arrows">
                         <li id="menu-item-131" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-131">
                            <a href="#" class="sf-with-ul"><span>Home</span></a>
                            <ul class="sub-menu animated fast fadeOut" style="display: none;">
                               <li id="menu-item-360" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-332 menu-item-360"><a href="https://fishing-club.ancorathemes.com/" aria-current="page"><span>Homepage 1</span></a></li>
                               <li id="menu-item-770" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-770"><a href="https://fishing-club.ancorathemes.com/homepage-2/"><span>Homepage 2</span></a></li>
                               <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="https://fishing-club.ancorathemes.com/boxedpage/"><span>Boxedpage</span></a></li>
                            </ul>
                         </li>
                         <li id="menu-item-363" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-363">
                            <a href="#" class="sf-with-ul"><span>Item</span></a>
                            <ul class="sub-menu animated fast fadeOut" style="display: none;">
                               <li id="menu-item-361" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-361"><a href="https://fishing-club.ancorathemes.com/about-1/"><span>About 1</span></a></li>
                               <li id="menu-item-362" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-362"><a href="https://fishing-club.ancorathemes.com/about-2/"><span>About 2</span></a></li>
                            </ul>
                         </li>
                         <li id="menu-item-132" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-132">
                            <a href="#" class="sf-with-ul"><span>Item</span></a>
                            <ul class="sub-menu fadeOut animated fast" style="display: none;">
                               <li id="menu-item-133" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-133">
                                  <a href="#" class="sf-with-ul"><span>Item</span></a>
                                  <ul class="sub-menu animated fast fadeOut" style="display: none;">
                                     <li id="menu-item-135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-135"><a href="https://fishing-club.ancorathemes.com/typography/"><span>Typography</span></a></li>
                                     <li id="menu-item-134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134"><a href="https://fishing-club.ancorathemes.com/shortcodes/"><span>Shortcodes</span></a></li>
                                  </ul>
                               </li>
                               <li id="menu-item-140" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-140">
                                  <a href="#" class="sf-with-ul"><span>Item</span></a>
                                  <ul class="sub-menu animated fast fadeOut" style="display: none;">
                                     <li id="menu-item-246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-246"><a href="https://fishing-club.ancorathemes.com/shop/"><span>Shop</span></a></li>
                                     <li id="menu-item-141" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-141">
                                        <a href="#" class="sf-with-ul"><span>Item</span></a>
                                        <ul class="sub-menu animated fast fadeOut" style="display: none;">
                                           <li id="menu-item-144" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-144"><a href="https://fishing-club.ancorathemes.com/gallery-grid/"><span>Gallery Grid</span></a></li>
                                           <li id="menu-item-143" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-143"><a href="https://fishing-club.ancorathemes.com/gallery-masonry/"><span>Gallery Masonry</span></a></li>
                                           <li id="menu-item-142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142"><a href="https://fishing-club.ancorathemes.com/cobbles-cobbles/"><span>Cobbles Cobbles</span></a></li>
                                        </ul>
                                     </li>
                                  </ul>
                               </li>
                               <li id="menu-item-1227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1227"><a href="https://fishing-club.ancorathemes.com/service-plus/"><span>Service Plus</span></a></li>
                               <li id="menu-item-1262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1262"><a href="https://fishing-club.ancorathemes.com/privacy-policy/"><span>Privacy Policy</span></a></li>
                            </ul>
                         </li>
                         <li id="menu-item-296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-296"><a href="https://fishing-club.ancorathemes.com/fishing/"><span>Item</span></a></li>
                         <li id="menu-item-637" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-637"><a href="https://fishing-club.ancorathemes.com/camping/"><span>Item</span></a></li>
                         <li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="https://fishing-club.ancorathemes.com/travel/"><span>Item</span></a></li>
                         <li id="menu-item-145" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-145">
                            <a href="#" class="sf-with-ul"><span>Item</span></a>
                            <ul class="sub-menu fadeOut animated fast" style="display: none;">
                               <li id="menu-item-152" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-152">
                                  <a href="#" class="sf-with-ul"><span>Item</span></a>
                                  <ul class="sub-menu animated fast fadeOut" style="display: none;">
                                     <li id="menu-item-151" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151"><a href="https://fishing-club.ancorathemes.com/blog-classic/"><span>1 Column</span></a></li>
                                     <li id="menu-item-150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-150"><a href="https://fishing-club.ancorathemes.com/blog-classic-2-columns/"><span>2 Columns</span></a></li>
                                     <li id="menu-item-149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-149"><a href="https://fishing-club.ancorathemes.com/blog-classic-3-columns/"><span>3 Columns</span></a></li>
                                  </ul>
                               </li>
                               <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-153">
                                  <a href="#" class="sf-with-ul"><span>Item</span></a>
                                  <ul class="sub-menu animated fast fadeOut" style="display: none;">
                                     <li id="menu-item-148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-148"><a href="https://fishing-club.ancorathemes.com/blog-chess-2-columns/"><span>2 Columns</span></a></li>
                                     <li id="menu-item-147" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147"><a href="https://fishing-club.ancorathemes.com/blog-chess-4-columns/"><span>4 Columns</span></a></li>
                                     <li id="menu-item-146" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-146"><a href="https://fishing-club.ancorathemes.com/blog-chess-6-columns/"><span>6 Columns</span></a></li>
                                  </ul>
                               </li>
                            </ul>
                         </li>
                         <li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a href="https://fishing-club.ancorathemes.com/contacts/"><span>Item</span></a></li>
                      </ul>
                   </nav>
                </div>
             </div>
          </div>
       </header>
       <main>
            {{--  <img src="https://s3-us-west-2.amazonaws.com/yachtdb-prod/wp-content/uploads/2016/11/30000022/large_1875011-1920x1016.jpg" alt="">  --}}

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://s3-us-west-2.amazonaws.com/yachtdb-prod/wp-content/uploads/2016/11/30000022/large_1875011-1920x1016.jpg" class="d-block w-100 height-500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://s3-us-west-2.amazonaws.com/yachtdb-prod/wp-content/uploads/2016/11/30000022/large_1875011-1920x1016.jpg" class="d-block w-100 height-500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://s3-us-west-2.amazonaws.com/yachtdb-prod/wp-content/uploads/2016/11/30000022/large_1875011-1920x1016.jpg" class="d-block w-100 height-500" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	<div class="c-detail-body">
		<div class="c-detail-body__intro">

			<h1 class="c-detail-body__title">Ex nostrud proident pariatur consequat irure dolore commodo ex qui magna.</h1>
			<p>Esse enim id irure adipisicing sunt velit nulla sunt aute et duis.Ipsum nulla ad est nostrud. Esse enim id irure adipisicing sunt velit nulla sunt aute et duis.Ipsum nulla ad est nostrud. </p>
<p>Eu qui aute non sunt esse dolor.</p>
<p>Elit non incididunt labore excepteur consequat Lorem fugiat.</p>
<p>Culpa esse proident tempor ullamco occaecat irure tempor amet reprehenderit.</p>
				{{--  <h2>Title</h2>
				<p>Lorem adipisicing sit aliqua duis pariatur quis id aute eu dolore et esse.</p>  --}}

		</div>




		<div class="c-detail-body__other item">


					{{--  <h2>Features</h2>
				<ul class="c-detail-features-list"><li class="c-detail-features-list__item">Terrace</li><li class="c-detail-features-list__item">Lift</li><li class="c-detail-features-list__item">High ceilings</li><li class="c-detail-features-list__item">Natural light</li><li class="c-detail-features-list__item">Period Building</li><li class="c-detail-features-list__item">Wooden flooring</li><li class="c-detail-features-list__item">Air conditioning</li><li class="c-detail-features-list__item">Built-in wardrobes</li><li class="c-detail-features-list__item">Double glazing</li><li class="c-detail-features-list__item">Equipped Kitchen</li><li class="c-detail-features-list__item">Exterior</li><li class="c-detail-features-list__item">Heating</li><li class="c-detail-features-list__item">Interior</li><li class="c-detail-features-list__item">Near international schools</li><li class="c-detail-features-list__item">Renovated</li><li class="c-detail-features-list__item">Security</li><li class="c-detail-features-list__item">Transport nearby</li><li class="c-detail-features-list__item">Walk-in wardrobe</li></ul>  --}}
					<h2>XXXXXX</h2>
				<ul class="item-desc">
<li class="item-desc">Año: 2020</li>
<li class="item-desc">Estado: Nuevo</li>
<li class="item-desc">Eslora: 3,70 metros</li>
<li class="item-desc">Manga: 1,64 metros</li>
<li class="item-desc">Calado: 0,00 metros</li>
<li class="item-desc">Marca motor: n/s</li>
<li class="item-desc">Motores: 1</li>
<li class="item-desc">Potencia motor: 30</li>
<li class="item-desc">Combustible: n/s</li>
<li class="item-desc">Capacidad combustible: litros</li>
<li class="item-desc">Localización: Madrid / Zona centro</li>
<li class="item-desc">Capacidad agua: litros</li>
<li class="item-desc">Personas: n/s </li>
<li class="item-desc">Baños: n/s </li>
</ul>

		</div>

		<div class="c-detail-body__cta js-detail-cta-form">
        <span class="price-item-right">
            3500€
        </span>

			<div class="c-detail-showcase-titles c-detail-showcase-titles--cta">
				<span class="c-detail-showcase-titles__ref">Náutica Madrid </span>
					<div class="c-detail-showcase-titles__price">Virgen del Coro 3, 28027, Madrid, España
				</div>
				<a href="#" class="c-detail-showcase-titles__type">
					www.nauticamadrid.com
				</a>
			</div>
			<ul class="c-link-list">
				{{--  <li>
					<button class="c-icon-link" data-fancybox="" data-focus="false" data-toolbar="false" data-src="/call-me-back.html?reference=BCNR25553" data-type="ajax" data-filter="#minimalbody">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
	<path d="M16 4c-7.732 0-14 6.268-14 14s6.268 14 14 14 14-6.268 14-14-6.268-14-14-14zM16 29.25c-6.213 0-11.25-5.037-11.25-11.25s5.037-11.25 11.25-11.25c6.213 0 11.25 5.037 11.25 11.25s-5.037 11.25-11.25 11.25zM29.212 8.974c0.501-0.877 0.788-1.892 0.788-2.974 0-3.314-2.686-6-6-6-1.932 0-3.65 0.913-4.747 2.331 4.121 0.851 7.663 3.287 9.96 6.643v0zM12.748 2.331c-1.097-1.418-2.816-2.331-4.748-2.331-3.314 0-6 2.686-6 6 0 1.082 0.287 2.098 0.788 2.974 2.297-3.356 5.838-5.792 9.96-6.643z"></path>
	<path d="M16 18v-8h-2v10h8v-2z"></path>
</svg> Call me about this property
					</button>
				</li>  --}}


					<li>
						<a class="c-icon-link" href="tel:+34914071351">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" aria-hidden="true">
	<path d="M34.5 36v-28.031h-21v28.031h21zM28.031 42v-1.969h-8.063v1.969h8.063zM31.969 1.969c3.281 0 6 2.719 6 6v32.063c0 3.281-2.719 6-6 6h-15.938c-3.281 0-6-2.719-6-6v-32.063c0-3.281 2.719-6 6-6h15.938z"></path>
</svg> +34 91 407 13 51
						</a>
					</li>



						<li>
							<a class="c-icon-link" href="https://api.whatsapp.com/send?phone=34652794327&amp;text=Hello%2C%20I%27m%20interested%20in%20property%20BCNR25553%2E" rel="noopener noreferrer">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
	<path d="M27.337 4.65c-3.008-2.998-7.008-4.649-11.271-4.65-8.782 0-15.929 7.112-15.933 15.855-0.001 2.795 0.732 5.523 2.127 7.928l-2.26 8.217 8.446-2.204c2.327 1.263 4.947 1.929 7.614 1.931h0.006c8.782 0 15.93-7.115 15.934-15.857 0.001-4.238-1.654-8.223-4.663-11.22zM16.066 29.047h-0.005c-2.377 0-4.707-0.636-6.74-1.837l-0.483-0.285-5.013 1.308 1.338-4.862-0.315-0.498c-1.326-2.099-2.026-4.524-2.024-7.015 0.002-7.268 5.943-13.18 13.248-13.18 3.538 0.002 6.862 1.375 9.362 3.866s3.877 5.803 3.875 9.324c-0.002 7.266-5.943 13.179-13.243 13.179zM23.331 19.176c-0.397-0.197-2.354-1.156-2.722-1.287-0.364-0.134-0.629-0.199-0.896 0.197s-1.028 1.288-1.261 1.553c-0.232 0.266-0.465 0.299-0.862 0.101s-1.682-0.616-3.202-1.968c-1.184-1.051-1.982-2.348-2.215-2.745-0.231-0.397-0.024-0.611 0.175-0.809 0.18-0.177 0.398-0.462 0.598-0.694s0.265-0.396 0.397-0.661c0.133-0.265 0.066-0.496-0.033-0.694s-0.896-2.149-1.228-2.942c-0.322-0.772-0.651-0.667-0.896-0.68-0.231-0.012-0.497-0.014-0.763-0.014s-0.695 0.099-1.060 0.496c-0.364 0.396-1.393 1.355-1.393 3.306s1.427 3.834 1.626 4.099c0.198 0.265 2.807 4.267 6.801 5.982 0.949 0.41 1.691 0.652 2.27 0.836 0.953 0.301 1.821 0.258 2.507 0.157 0.766-0.115 2.355-0.959 2.688-1.886 0.332-0.926 0.332-1.719 0.232-1.885-0.1-0.163-0.365-0.264-0.763-0.462z"></path>
</svg> +34 652 79 43 27
							</a>
						</li>

						<li>
							<a class="c-icon-link" href="mailto:info@xxxxx.com">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
	<path d="M26.667 0h-21.333c-2.934 0-5.334 2.4-5.334 5.334v21.332c0 2.936 2.4 5.334 5.334 5.334h21.333c2.934 0 5.333-2.398 5.333-5.334v-21.332c0-2.934-2.399-5.334-5.333-5.334zM26.667 4c0.25 0 0.486 0.073 0.688 0.198l-11.355 9.388-11.355-9.387c0.202-0.125 0.439-0.198 0.689-0.198h21.333zM5.334 28c-0.060 0-0.119-0.005-0.178-0.013l7.051-9.78-0.914-0.914-7.293 7.293v-19.098l12 14.512 12-14.512v19.098l-7.293-7.293-0.914 0.914 7.051 9.78c-0.058 0.008-0.117 0.013-0.177 0.013h-21.333z"></path>
</svg> info@xxxxx.com
							</a>
						</li>

			</ul><!-- end CTA link lists -->

			<button class="btn c-detail-body__cta__btn" data-fancybox="test" data-toolbar="false" data-src="/information-request.html?reference=BCNR25553" data-type="ajax" data-filter="#minimalbody">Solicita información sobre este barco</button>
			<noscript>
				<ul class="c-link-list">
					<li><a href="/information-request.html?reference=BCNR25553" rel="nofollow" class="btn btn--cta">Send message</a></li>
					<li><a href="/viewing-request.html?reference=BCNR25553" rel="nofollow" class="btn btn--cta">Arrange a viewing</a></li>
				</ul>
			</noscript>
		</div>
	</div><!-- end .c-detail-body -->






	</div>






</main>
<div class="row">
    <div class="container">
        <div class="col">
        <div class="form-block-2 contact-form">
            <form action="#" id="form-contact-form" class="form-filmaps">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                      <h2>Envíanos un mensaje</h2>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        varius enim in eros elementum tristique.
                      </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 mb-5">
                      <input type="text" class="form-control input-bg-white" id="name-contact-item" placeholder="Nombre*">
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 mb-5">
                      <input type="phone" class="form-control input-bg-white" id="phone-contact-item" placeholder="Teléfono">
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 mb-5">
                      <input type="text" class="form-control input-bg-white" id="email-contact-item" placeholder="Email*">
                    </div>
                    <div class="col-lg-12 mb-5">
                      <textarea name="message" id="message-contact-item" class="form-control input-bg-white" rows="3" required="required" placeholder="Tú mensaje"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" value="Enviar" class="btn btn-block btn-primary btn-contact-filmaps">
                    </div>
                  </div>
            </form>
        </div></div>


    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 relacionados">
            <h5>Barcos relacionados con Rigiflex cap 470</h5>
            <h6>En esta sección podrás encontrar embarcaciones similares a las características del barco que estas buscando.</h6>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-5">
      <img itemprop="image" alt="Astec fiber 400" src="http://anunciosdelbarco.es/barcos-nuevos/astec/fiber-400/9537/thumbnail/fiber-400%20(2).jpeg" title="fiber 400" width="98" height="74" class="card-img">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title">Astec 480</h5>
        <p class="card-text desc">Topen de 480 para paseo pesca o esqui con motores desde 40 a 70 hp</p>
        <ul class="relationship">
        <li>
            <strong>Eslora:</strong> 5,60 m
        </li>
        <li>
            <strong>Motores:</strong> 1
        </li>
        <li>
            <strong>Año:</strong> 2017
        </li>
        </ul>
        <ul class="price mt-5">
        <li>
            <a href="#"> Nautica XXXX</a>
        </li>
        <li>
            <strong>3000€</strong>
        </li>
        </ul>
      </div>
    </div>
  </div>
</div>
    </div>

<div class="col-md-6">
            <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-5">
      <img itemprop="image" alt="Astec fiber 400" src="http://anunciosdelbarco.es/barcos-nuevos/astec/fiber-400/9537/thumbnail/fiber-400%20(2).jpeg" title="fiber 400" width="98" height="74" class="card-img">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title">Astec 480</h5>
        <p class="card-text desc">Topen de 480 para paseo pesca o esqui con motores desde 40 a 70 hp</p>
        <ul class="relationship">
        <li>
            <strong>Eslora:</strong> 5,60 m
        </li>
        <li>
            <strong>Motores:</strong> 1
        </li>
        <li>
            <strong>Año:</strong> 2017
        </li>
        </ul>
        <ul class="price mt-5">
        <li>
            <a href="#"> Nautica XXXX</a>
        </li>
        <li>
            <strong>3000€</strong>
        </li>
        </ul>
      </div>
    </div>
  </div>
</div>
    </div>


<div class="col-md-6">
            <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-5">
      <img itemprop="image" alt="Astec fiber 400" src="http://anunciosdelbarco.es/barcos-nuevos/astec/fiber-400/9537/thumbnail/fiber-400%20(2).jpeg" title="fiber 400" width="98" height="74" class="card-img">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title">Astec 480</h5>
        <p class="card-text desc">Topen de 480 para paseo pesca o esqui con motores desde 40 a 70 hp</p>
        <ul class="relationship">
        <li>
            <strong>Eslora:</strong> 5,60 m
        </li>
        <li>
            <strong>Motores:</strong> 1
        </li>
        <li>
            <strong>Año:</strong> 2017
        </li>
        </ul>
        <ul class="price mt-5">
        <li>
            <a href="#"> Nautica XXXX</a>
        </li>
        <li>
            <strong>3000€</strong>
        </li>
        </ul>
      </div>
    </div>
  </div>
</div>
    </div>

<div class="col-md-6">
            <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-5">
      <img itemprop="image" alt="Astec fiber 400" src="http://anunciosdelbarco.es/barcos-nuevos/astec/fiber-400/9537/thumbnail/fiber-400%20(2).jpeg" title="fiber 400" width="98" height="74" class="card-img">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title">Astec 480</h5>
        <p class="card-text desc">Topen de 480 para paseo pesca o esqui con motores desde 40 a 70 hp</p>
        <ul class="relationship">
        <li>
            <strong>Eslora:</strong> 5,60 m
        </li>
        <li>
            <strong>Motores:</strong> 1
        </li>
        <li>
            <strong>Año:</strong> 2017
        </li>
        </ul>
        <ul class="price mt-5">
        <li>
            <a href="#"> Nautica XXXX</a>
        </li>
        <li>
            <strong>3000€</strong>
        </li>
        </ul>
      </div>
    </div>
  </div>
</div>
    </div>

<div class="col-md-6">
            <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-5">
      <img itemprop="image" alt="Astec fiber 400" src="http://anunciosdelbarco.es/barcos-nuevos/astec/fiber-400/9537/thumbnail/fiber-400%20(2).jpeg" title="fiber 400" width="98" height="74" class="card-img">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title">Astec 480</h5>
        <p class="card-text desc">Topen de 480 para paseo pesca o esqui con motores desde 40 a 70 hp</p>
        <ul class="relationship">
        <li>
            <strong>Eslora:</strong> 5,60 m
        </li>
        <li>
            <strong>Motores:</strong> 1
        </li>
        <li>
            <strong>Año:</strong> 2017
        </li>
        </ul>
        <ul class="price mt-5">
        <li>
            <a href="#"> Nautica XXXX</a>
        </li>
        <li>
            <strong>3000€</strong>
        </li>
        </ul>
      </div>
    </div>
  </div>
</div>
    </div>

<div class="col-md-6">
            <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-5">
      <img itemprop="image" alt="Astec fiber 400" src="http://anunciosdelbarco.es/barcos-nuevos/astec/fiber-400/9537/thumbnail/fiber-400%20(2).jpeg" title="fiber 400" width="98" height="74" class="card-img">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title">Astec 480</h5>
        <p class="card-text desc">Topen de 480 para paseo pesca o esqui con motores desde 40 a 70 hp</p>
        <ul class="relationship">
        <li>
            <strong>Eslora:</strong> 5,60 m
        </li>
        <li>
            <strong>Motores:</strong> 1
        </li>
        <li>
            <strong>Año:</strong> 2017
        </li>
        </ul>
        <ul class="price mt-5">
        <li>
            <a href="#"> Nautica XXXX</a>
        </li>
        <li>
            <strong>3000€</strong>
        </li>
        </ul>
      </div>
    </div>
  </div>
</div>
    </div>

<div class="col-md-6">
            <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-5">
      <img itemprop="image" alt="Astec fiber 400" src="http://anunciosdelbarco.es/barcos-nuevos/astec/fiber-400/9537/thumbnail/fiber-400%20(2).jpeg" title="fiber 400" width="98" height="74" class="card-img">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title">Astec 480</h5>
        <p class="card-text desc">Topen de 480 para paseo pesca o esqui con motores desde 40 a 70 hp</p>
        <ul class="relationship">
        <li>
            <strong>Eslora:</strong> 5,60 m
        </li>
        <li>
            <strong>Motores:</strong> 1
        </li>
        <li>
            <strong>Año:</strong> 2017
        </li>
        </ul>
        <ul class="price mt-5">
        <li>
            <a href="#"> Nautica XXXX</a>
        </li>
        <li>
            <strong>3000€</strong>
        </li>
        </ul>
      </div>
    </div>
  </div>
</div>
    </div>


</div>

       {{--  header  --}}
    </div>
</div>

<footer class="page-footer font-small stylish-color-dark pt-9">

  <div class="container text-center text-md-left">

    <div class="row">

      <div class="col-md-4 mx-auto">

        {{--  <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>  --}}
        <img src="{{ asset('barco/img/broker-mini.png') }}" class="logo_main" alt="logo" width="222" height="44">
        <p>Here you can suse rows asnd columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-2 mx-auto">

        <ul class="list-unstyled">
          <li>
            <a href="#">Veleros de ocasión</a>
          </li>
          <li>
            <a href="#">Motoras de ocasión</a>
          </li>
          <li>
            <a href="#">Neumáticas de ocasión</a>
          </li>
          <li>
            <a href="#">Semirrigidas</a>
          </li>
          <li>
            <a href="#">Lanchas</a>
          </li>
          <li>
            <a href="#">Llauds</a>
          </li>
        </ul>

      </div>



      <div class="col-md-2 mx-auto">

        <ul class="list-unstyled">
          <li>
            <a href="#">Beneteau</a>
          </li>
          <li>
            <a href="#">Jeanneau</a>
          </li>
          <li>
            <a href="#">Quicksilver</a>
          </li>
          <li>
            <a href="#">Sea Ray</a>
          </li>
          <li>
            <a href="#">Zodiac</a>
          </li>
          <li>
            <a href="#">Todas las marcas</a>
          </li>
        </ul>

      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-2 mx-auto">

        <ul class="list-unstyled">
          <li>
            <a href="#">Lanchas de segunda mano</a>
          </li>
          <li>
            <a href="#">Motos acuaticas</a>
          </li>
          <li>
            <a href="#">Cruiser</a>
          </li>
          <li>
            <a href="#">Yates</a>
          </li>
          <li>
            <a href="#">Crucero</a>
          </li>
          <li>
            <a href="#">Motoveleros</a>
          </li>
        </ul>

      </div>

    </div>

  </div>


  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>

  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>

  <ul class="list-unstyled list-inline text-center mt-5">
    <li class="list-inline-item">
      <a href="/barcoCondiciones" class="btn-floating btn-fb mx-1">
        Condiciones legales
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        Mapa web
      </a>
    </li>
    <li class="list-inline-item">
        <a href="/barcoContact" class="btn-floating btn-gplus mx-1">
            Contactar
        </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        Blog
      </a>
    </li>
  </ul>


</footer>



		<script>var HOST_URL = "{{ route('quick-search') }}";</script>

        {{-- Global Config (global config for global JS scripts) --}}
        <script>
            var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
        </script>

        {{-- Global Theme JS Bundle (used by all pages)  --}}
        @foreach(config('layout.resources.js') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
            {{--  <script src="{{ asset('barco/js/barco.js') }}" type="text/javascript"></script>  --}}


        {{-- Includable JS --}}
        @yield('scripts')

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
	</body>
	<!--end::Body-->
</html>
