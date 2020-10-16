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
       <header class="top_panel top_panel_style_1 with_bg_image fishing_club_inline_0 scheme_default" style="background-image: url({{ asset('barco/img/slider-1.jpg') }});background-repeat: no-repeat; background-size: cover; background-position: center center; width: 100%; height: 400px; opacity: 1; visibility: inherit; z-index: 20;">
          <a class="menu_mobile_button icon-menu-2"></a>
          <div class="top_panel_fixed_wrap"></div>
          <div class="top_panel_navi with_bg_image scheme_default home_bg">
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
          <div class="top_panel_title_wrap">
             <div class="content_wrap">
                <div class="top_panel_title">
                   <div class="page_title">
                      <h1 class="page_caption">Lorem ipsum jacta est</h1>
                   </div>
                   <div class="breadcrumbs"><a class="breadcrumbs_item home" href="http://fishing-club.ancorathemes.com/">Title</a><span class="breadcrumbs_item current"> Subtitle two</span>
                   </div>
                </div>
             </div>
            </div>
       </header>
<div class="candidate-listing-section content-area-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget-4 advanced-search">
                        <form method="GET" class="informeson">


                            <div class="form-group">
                                <div class="dropdown bootstrap-select search-fields"><select class="selectpicker search-fields" name="Location" tabindex="-98">
                                    <option>Marca</option>
                                    <option>Marca 1</option>
                                    <option>Marca 2</option>
                                    <option>Marca 3</option>
                                    <option>Marca 4</option>
                                    <option>Marca 5</option>
                                </select>
                                <div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                            </div>
                             <div class="form-group">
                                <div class="form-group">
                                    <label class="sr-only" for="textsearch2">Modelo</label>
                                    <input type="text" class="form-control" id="textsearch2" placeholder="Modelo">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="dropdown bootstrap-select search-fields"><select class="selectpicker search-fields" name="tipo" tabindex="-98">
                                    <option>Tipo</option>
                                    <option>Tipo 1</option>
                                    <option>Tipo 2</option>
                                    <option>Tipo 3</option>
                                    <option>Tipo 4</option>
                                </select>
                                {{--  <button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories"><div class="filter-option"><div class="filter-option-inner">All Categories</div></div>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>  --}}
                                <div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                            </div>
                             <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label class="label-eslora" for="min-eslora">Eslora desde</label>
      <input type="text" class="form-control" id="min-eslora" placeholder="0">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label class="label-eslora" for="max-eslora">Hasta</label>
      <input type="text" class="form-control" id="max-eslora" placeholder="150">
    </div>
  </div>
                             <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label class="label-price" for="min-price">Precio desde</label>
      <input type="text" class="form-control" id="min-price" placeholder="0">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label class="label-price" for="max-price">Hasta</label>
      <input type="text" class="form-control" id="max-price" placeholder="150">
    </div>
<div class="form-group col-md-12">
<h3 class="status-yatch-title mb-5">Estado</h3>
    <div class="form-check status-yatch">
  <input type="radio" class="form-check-input" id="new-yatch" name="status-yatch">
  <label class="form-check-label" for="new-yatch">Nuevo</label>
</div>

<!-- Material checked -->
<div class="form-check status-yatch">
  <input type="radio" class="form-check-input" id="ocasion-yatch" name="status-yatch" checked>
  <label class="form-check-label" for="ocasion-yatch">Ocasión</label>
</div>
</div>

  </div>

                            <div class="form-group">
                                <div class="dropdown bootstrap-select search-fields"><select class="selectpicker search-fields" name="categories" tabindex="-98">
                                    <option>Categoría</option>
                                    <option>Categoría 1</option>
                                    <option>Categoría 2</option>
                                    <option>Categoría 3</option>
                                    <option>Categoría 4</option>
                                </select>
                                {{--  <button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories"><div class="filter-option"><div class="filter-option-inner">All Categories</div></div>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>  --}}
                                <div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                            </div>
                            <div class="form-group">
                                <div class="dropdown bootstrap-select search-fields"><select class="selectpicker search-fields" name="localization" tabindex="-98">
                                    <option>Localización</option>
                                    <option>Localización 1</option>
                                    <option>Localización 2</option>
                                    <option>Localización 3</option>
                                    <option>Localización 4</option>
                                </select>
                                {{--  <button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories"><div class="filter-option"><div class="filter-option-inner">All Categories</div></div>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>  --}}
                                <div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                            </div>


<button type="button" class="btn btn-large btn-block btn-primary buscar-yatch">Buscar barco</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="sorting-options2 services">
                                <span class="sort">Localización:</span>
                                <div class="dropdown bootstrap-select search-fields">
                                <select class="selectpicker search-fields" name="default-order" tabindex="-98">
                                    <option>------</option>
                                    <option value="andalucia">Andalucia</option>
                                    <option value="baleares">Baleares</option>
                                    <option value="cataluna">Cataluna</option>
                                    <option value="cdad-valenciana-y-murcia">Ciudad Valenciana y Murcia</option>
                                    <option value="galicia-y-norte-de-espana">Galicia y norte de España</option>
                                    <option value="islas-canarias">Islas canarias</option>
                                    <option value="madrid-zona-centro">Madrid zona centro</option>
                                    <option value="espana">Espana</option>
                                    <option value="portugal">Portugal</option>
                                    <option value="francia">Francia</option>
                                    <option value="alemania">Alemania</option>
                                    <option value="austria">Austria</option>
                                    <option value="belgica">Belgica</option>
                                    <option value="croacia">Croacia</option>
                                    <option value="dinamarca">Dinamarca</option>
                                    <option value="emiratos-arabes">Emiratos arabes</option>
                                    <option value="eslovenia">Eslovenia</option>
                                    <option value="finlandia">Finlandia</option>
                                    <option value="grecia">Grecia</option>
                                    <option value="hungria">Hungria</option>
                                    <option value="irlanda">Irlanda</option>
                                    <option value="israel">Israel</option>
                                    <option value="italia">Italia</option>
                                    <option value="letonia">Letonia</option>
                                    <option value="monaco">Monaco</option>
                                    <option value="montenegro">Montenegro</option>
                                    <option value="paises-bajos">Paises bajos</option>
                                    <option value="polonia">Polonia</option>
                                    <option value="reino-unido">Reino unido</option>
                                    <option value="republica-checa">Republica checa</option>
                                    <option value="suecia">Suecia</option>
                                    <option value="suiza">Suiza</option>
                                    <option value="turquia">Turquia</option>
                                </select>
                                {{--  <button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="Relevance"><div class="filter-option"><div class="filter-option-inner">Relevance</div></div>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>  --}}
                                <div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="title-servicios">321 puertos en anunciosdelbarco.com</h3>
                <p class="title-servicios">Lorem quis eiusmod non labore incididunt culpa consequat pariatur ipsum laborum. Ex mollit ut dolore dolor proident Lorem. Aute magna velit sit labore ullamco elit quis. Minim duis do sunt ipsum deserunt occaecat et deserunt. Elit dolor velit dolor ut sunt. Reprehenderit nostrud laboris nostrud cupidatat tempor duis nisi enim non consequat et deserunt mollit. Laboris velit sint eiusmod eiusmod velit quis eu.</p>

<div class="row">
<div class="col-lg-6 mb-5">
 <div class="card">
<h3 class="title-card">CN Sant Feliu</h3>
    <div class="card-body">
      
      <p class="card-text">
        <a href="https://www.clubnauticsantfeliu.com"> www.clubnauticsantfeliu.com</a>
      </p>
      <p class="card-text">
        <strong>Posición</strong>: 41º46,5´N 03º1,9´E
      </p>
      <p class="card-text">
        <strong>Exlora máx</strong>: 60m
      </p>
      {{--  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>  --}}
    </div>
  </div>
  
  </div>
<div class="col-lg-6 mb-5">
 <div class="card">
    <h3 class="title-card">CN Sant Feliu</h3>
    <div class="card-body">
      
      <p class="card-text">
        <a href="https://www.clubnauticsantfeliu.com"> www.clubnauticsantfeliu.com</a>
      </p>
      <p class="card-text">
        <strong>Posición</strong>: 41º46,5´N 03º1,9´E
      </p>
      <p class="card-text">
        <strong>Exlora máx</strong>: 60m
      </p>
      {{--  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>  --}}
    </div>
  </div>
  
  </div>
<div class="col-lg-6 mb-5">
 <div class="card">
    <h3 class="title-card">CN Sant Feliu</h3>
    <div class="card-body">
      
      <p class="card-text">
        <a href="https://www.clubnauticsantfeliu.com"> www.clubnauticsantfeliu.com</a>
      </p>
      <p class="card-text">
        <strong>Posición</strong>: 41º46,5´N 03º1,9´E
      </p>
      <p class="card-text">
        <strong>Exlora máx</strong>: 60m
      </p>
      {{--  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>  --}}
    </div>
  </div>
  
  </div>
<div class="col-lg-6 mb-5">
 <div class="card">
    <h3 class="title-card">CN Sant Feliu</h3>
    <div class="card-body">
      
      <p class="card-text">
        <a href="https://www.clubnauticsantfeliu.com"> www.clubnauticsantfeliu.com</a>
      </p>
      <p class="card-text">
        <strong>Posición</strong>: 41º46,5´N 03º1,9´E
      </p>
      <p class="card-text">
        <strong>Exlora máx</strong>: 60m
      </p>
      {{--  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>  --}}
    </div>
  </div>
  
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
