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
                      <h1 class="page_caption">Contacta con nosotros</h1>
                   </div>
                   {{--  <div class="breadcrumbs"><a class="breadcrumbs_item home" href="http://fishing-club.ancorathemes.com/">Home </a><span class="breadcrumbs_item current"> Contacto</span>  --}}
                   </div>
                </div>
             </div>
            </div>
       </header>
       {{--  header  --}}
    </div>
</div>

<div class="container mt-20">
    <div class="row">
        <div class="col-md-12">
            <div class="legal">
        <h1>Condiciones legales</h1> 
        <h2>1.- Condiciones de uso y acceso:</h2>
        <p>El acceso y el uso de la página web www.anunciosdelbarco.es otorga a quien lo realiza la condición de usuario de la misma, aceptando desde ese momento y sin reserva alguna las Condiciones Generales contenidas en el presente “Aviso Legal”.</p>
        <p>El usuario expresa su comprensión y aceptación plena y sin reservas del contenido de este "Aviso Legal", así como de todas y cada una de las cláusulas y condiciones en él incorporadas. Igualmente, el usuario se obliga a hacer un uso de la página web conforme a la ley, la buena fe y el orden público, así como a no utilizar los servicios que en ella se facilitan con fines ilícitos.</p>
        <p>Anunciosdelbarco.es  se reserva el derecho a modificar las presentes condiciones generales de uso con el objeto de adecuarlas a la legislación vigente aplicable en cada momento, las novedades jurisprudenciales y las prácticas habituales de mercado.</p>
        <h2>2.- Objeto</h2>
        <p>Anunciosdelbarco.es es un portal dedicado al mundo náutico donde particulares y empresas interactúan y comparten, de manera fácil y rápida, todo tipo de servicios e información sobre el sector náutico.</p>
        <p>El objeto de la presente web es dar a conocer y permitir el acceso general de cualquier usuario a la información, actividades, productos y servicios diversos propios del sector náutico. El acceso a este sitio web y la contratación de los servicios que en ella se ofrezcan, exige la aceptación de las presentes condiciones generales, así como las particulares que en cada momento se ofrezcan.</p>
        <p>El acceso a determinados apartados restringidos puede encontrarse sometido a ciertas condiciones particulares propias, que según los casos, sustituyen, completan y/o modifican estas condiciones generales. En estos casos, como requisito previo para poder acceder al servicio, el usuario deberá registrarse facilitando toda la información que se le solicite, de forma actualizada y real, con la seguridad de que será tratada según la legislación actual sobre política de privacidad.
        </p><p>Alguna de las partes de la web podrá albergar contenidos publicitarios o estar patrocinada. Los anunciantes y patrocinadores son los únicos responsables de la exactitud y veracidad de su contenido, así como de asegurarse que el material remitido para su inclusión cumple con las leyes que en cada caso puedan ser de aplicación.</p>
        <h2>3.- Compromiso</h2>
        <p>El usuario se compromete a no utilizar sin la correspondiente autorización previa y expresa de su titular ninguno de los contenidos que se ponen a su disposición en la Web. El uso de los mismos es la mera participación informativa entre partes con el objeto de promocionar sus productos.</p>
        <p>Cualquier consideración particular al respecto debe ser objeto de acuerdo entre las partes.</p>
        <h2>4.- Condiciones generales de uso</h2>
        <p>Responsabilidad de los anuncios de usuarios</p>
        <p>Anunciosdelbarco.es no se hará responsable de manifestaciones, anuncios y opiniones publicadas por los usuarios así como de la actualización y veracidad de las informaciones publicadas por los mismos. Anunciosdelbarco.es no tiene la obligación de controlar el uso que los usuarios hacen del servicio. Así pues, ante el contacto con cualquier anunciante se sugiere la máxima cautela y atención con las medidas de seguridad especialmente para la compra de productos y servicios anunciados. Con el fin de evitar posibles fraudes y errores se recomienda la mediación de una gestoría náutica o profesional especializado.</p>
        <p>La publicación de anuncios en el Portal estará sujeta a las siguientes reglas:</p>
        <ul>
            <li>Completar todos los apartados del formulario indicados como obligatorio en el alta del anuncio.</li>
            <li>Insertar correctamente los anuncios con los campos obligatorios indicados.</li>
            <li>No está permitido la publicación de anuncios duplicados o repetidos.</li>
            <li>No está permitido la publicación de anuncios que incluyan fotografías con URL (direcciones Internet) o números de teléfono.</li>
            <li>No está permitido la publicación de anuncios que deberían estar en otras categorías.</li>
            <li>No está permitido la publicación de anuncios que deberían estar en categorías de pago, pero se insertan en categorías gratuitas si las hubiera mediante promociones especiales.</li>
            <li>No se publicarán anuncios con contenidos sexuales, de juego, armas o cualquier otro producto, servicio o información que pueda ser contrario a la Ley, la moral, el Orden Público o las Normas del portal.</li>
        </ul>
        <p>Responsabilidad de los contenidos en el portal</p>
        <p>Anunciosdelbarco.es se reserva el derecho a actualizar, eliminar o modificar los contenidos publicados en el portal así como limitar su acceso ya sea parcial o total durante el tiempo que considere oportuno tanto a empresas como a usuarios. Especialmente podrán ser eliminados los anuncios que incluyan publicidad en las imágenes o textos en las imágenes, enlaces en los campos de texto, no se correspondan a anuncios de barcos, amarres y empresas publicadas, confundan al usuario o cualquier otro criterio que se considere inadecuado. Dichos criterios podrán cambiar sin previo aviso. 
        </p><p>El Usuario se compromete a no trasmitir, introducir, difundir y poner a disposición de terceros, cualquier tipo de material e información (datos contenidos, mensajes, dibujos, archivos de sonido e imagen, fotografías, software, etc.) que sean contrarios a la ley, la moral, el orden público y las presentes Condiciones Generales de Uso y, en su caso, a las Condiciones Particulares que le sean de aplicación. A título enunciativo, y en ningún caso limitativo o excluyente, el Usuario se compromete a:
        </p><ul>
            <li>No introducir o difundir contenidos o propaganda de carácter racista, xenófobo, pornográfico, de apología del terrorismo o que atenten contra los derechos humanos.</li>
            <li>No introducir o difundir en la red programas de datos (virus y software nocivo) susceptibles de provocar daños en los sistemas informáticos del proveedor de acceso, sus proveedores o terceros usuarios de la red Internet.</li>
            <li>No difundir, transmitir o poner a disposición de terceros cualquier tipo de información, elemento o contenido que atente contra los derechos fundamentales y las libertades públicas reconocidos constitucionalmente y en los tratados internacionales.</li>
            <li>No difundir, transmitir o poner a disposición de terceros cualquier tipo de información, elemento o contenido que constituya publicidad ilícita o desleal.</li>
            <li>No transmitir publicidad no solicitada o autorizada, material publicitario, "correo basura", "cartas en cadena", "estructuras piramidales", o cualquier otra forma de solicitación, excepto en aquellas áreas (tales como espacios comerciales) que hayan sido exclusivamente concebidas para ello.</li>
            <li>No introducir o difundir cualquier información y contenidos falsos, ambiguos o inexactos de forma que induzca a error a los receptores de la información.</li>
            <li>No suplantar a otros usuarios utilizando sus claves de registro a los distintos servicios y/o contenidos de los Portales.</li>
            <li>No difundir, transmitir o poner a disposición de terceros cualquier tipo de información, elemento o contenido que suponga una violación de los derechos de propiedad intelectual e industrial, patentes, marcas o copyright que correspondan a los titulares de los portales o a terceros.</li>
            <li>No difundir, transmitir o poner a disposición de terceros cualquier tipo de información, elemento o contenido que suponga una violación del secreto de las comunicaciones y la legislación de datos de carácter personal.</li>
        </ul>
        <p>Garantías del anunciante</p>
        <p>La inserción de anuncios en el portal se efectúa en consideración a las presentes  garantías que efectúa el anunciante.</p>
        <ul>
            <li>El anunciante tiene derecho a publicar el contenido del anuncio, sin que ello infrinja la Ley y ningún derecho de terceros, incluyendo los derechos de propiedad industrial e intelectual. Será responsabilidad del anunciante obtener todas las autorizaciones, públicas o privadas, y efectuar todos los pagos por la utilización de los derechos de propiedad intelectual e industrial que se contengan en el anuncio. </li>
            <li>El anunciante, así como el anuncio, su contenido y cualquier material del anunciante a que puedan acceder los usuarios del portal a través del anuncio, cumplen las normas vigentes sobre publicidad, incluida la efectuada por medios electrónicos y online, así como cualquier otra normativa aplicable, y, en especial, la relativa a telecomunicaciones, protección de consumidores y usuarios, derecho al honor, a la intimidad y a la propia imagen, y protección del menor y de la infancia.</li>
            <li>La inclusión del anuncio en el portal o en cualquiera de las websites no supone el incumplimiento ni la violación de ninguna obligación legal y/o contractual asumida por el anunciante con terceras personas.</li>
            <li>El anunciante será el único responsable, frente a los usuarios del portal y terceras personas del texto e información contenidas en el anuncio. </li>
            <li>El anunciante reconoce y acepta que cualquier relación contractual o extracontractual que, en su caso, formalice con usuarios del portal o terceras personas contactadas a través del portal, se entienden realizados única y exclusivamente entre el anunciante y el usuario del portal y/o la tercera persona. </li>
        </ul>
        <p>Limitación de la responsabilidad</p>
        <p>Anunciosdelbarco.es no responderá por los retrasos, publicación errónea ni por la falta de la publicación del anuncio que sean consecuencia de hechos o circunstancias que estén fuera de su control, incluido, a título enunciativo y no limitativo, acción gubernativa, incendio, inundación, insurrección, terremoto, fallo técnico, motín, explosión, embargo, huelga legal o ilegal, escasez de personal o de material, interrupción del transporte de cualquier tipo, retraso en el trabajo, o cualquier otra circunstancia fuera de su control.</p>
        <p>Servicios ofrecidos </p>
        <p>Las empresas podrán:</p>
        <ul>
            <li>Disponer de un panel de gestión con acceso restringido a su usuario y pass con el fin de administrar el contenido publicable en la web.</li>
            <li>Acceder al mismo para corregir o reponer los datos de la empresa, gestionar la publicación o modificación de las fichas de barcos asignadas en las categorías correspondientes.</li>
            <li>Verificar el link pasarela de mails entre los usuarios interesados y su mail de recepción.</li>
        </ul>
        <h2>5. Responsabilidad respecto de la Web</h2>
        <p>Anunciosdelbarco.es  ofrece un servicio ininterrumpido y con carácter indefinido, aunque se reserva el derecho a interrumpir su acceso, así como la prestación de cualquier servicio que se presta a través de la misma en cualquier momento y sin previo aviso, ya sea por motivos técnicos, de seguridad, de control, de mantenimiento, por fallos de suministro eléctrico o por cualquier causa de fuerza mayor. Dicha interrupción podrá tener carácter temporal o definitivo, en cuyo caso se comunicará tal circunstancia a los usuarios.</p>
        <p>No se asume ninguna responsabilidad por los daños que puedan causarse en los equipos de los usuarios por posibles virus informáticos contraídos a causa de su navegación por la web, o por cualquier otro daño derivado de esa navegación.</p>
        <p>Así mismo, los dispositivos de enlace y publicidad (links, banners, botones...) que aparecen en la Web, que tienen por objeto poner en conocimiento del usuario la existencia de otras fuentes de información sobre la materia solicitada no suponen una invitación o recomendación para la visita de los lugares de destino.</p>
        <h2>6.- Protección de datos personales</h2>
        <p>A los efectos de lo dispuesto en la normativa vigente relativa a la protección de datos de carácter personal, el usuario acepta que los datos facilitados desde el formulario de registro así como la información complementaria a través de su menú privado pasarán a formar parte de los ficheros titularidad de Anunciosdelbarco.es con la finalidad de poder gestionar su petición así como informar de nuevos servicios, recomendaciones, avisos así como ofertas de productos y servicios de terceros, que podrán ser enviados por cualquier medio, incluido el correo electrónico.</p>
        <p>Nos comprometemos al cumplimiento de la obligación de secreto de los datos de carácter personal y de su deber de guardarlos y adoptar las medidas técnicas y organizativas necesarias para evitar su alteración, pérdida, tratamiento o acceso no autorizado de los mismos, todo ello según la ley Orgánica 15/1999 de Protección de Datos de carácter personal y su normativa de desarrollo</p>
        <p>Privacidad, Cookies e IP’s</p>
        <p>Navegación con Cookies: Este Sitio web no utiliza ninguna aplicación que permita la obtención de datos personales sin el consentimiento del afectado.</p>
        <p>Nuestro software y el analizador de tráfico del site utiliza cookies y seguimientos de IPs que nos permiten recoger datos únicamente a efectos estadísticos como: fecha de la primera visita, número de veces que se ha visitado, fecha de la última visita, URL y dominio de la que proviene, explorador utilizado y resolución de la pantalla. No obstante, el usuario si lo desea puede desactivar y/o eliminar estas cookies siguiendo las instrucciones de su navegador de Internet aunque su capacidad de utilizar las funcionalidades del site puede verse mermada sensiblemente y no ser compatible con las necesidades del usuario.</p>
        <p>No utilizamos técnicas de Spamming y únicamente tratamos los datos que el usuario transmita mediante los Sitios Web y mediante los formularios electrónicos habilitados en los mismos.</p>
    </div>
        </div>


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
