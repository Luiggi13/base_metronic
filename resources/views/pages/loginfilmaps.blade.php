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

        @yield('styles')
    </head>
	<!--end::Head-->
	<!--begin::Body-->
	<body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }} class="tt">
	 <div class="container-fluid container-fluid-login">

    <main id="content" class="content" role="main">
        <div class="row login-page align-item-center">
            <div class="col-xl-3 offset-sm-1 offset-0 col-md-6 my-auto">
                <div class="widget widget-login bg-transparent animated fadeInUp">
                    <header class="logo-content">
                        <img class="img-fluid" alt="" src="{{ asset('/filmaps/img/logo-rosa.svg') }}">
                        <hr/>
                    </header>
                    <div class="widget-body">
                        <div class="login-form mt-lg">
                            <div class="form-group">
                                <label for="username" class="d-block">Usuario</label>
                                <div>
                                    <div class="input-group">
                                        <input id="username" type="text" value="pedro_lopez12" required="required" placeholder="Nombre usuario" class="form-control border-inputs">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="d-block">Contraseña</label>
                                <div>
                                    <div class="input-group">
                                        <input id="password" type="password" required="required" placeholder="tucontraseña" class="form-control border-inputs">
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox abc-checkbox mb-4 d-flex form-check">
                                <input id="checkbox1" type="checkbox" class="form-check-input">
                                <label for="checkbox1" class="mr-auto form-check-label">Recuérdame</label>
                                <a class="forgot-password" href="/">Olvidé la contraseña</a>
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Iniciar sesión" class="btn btn-block btn-primary btn-contact-filmaps">
                        </div>
                        <div class="group">
                            <div class="widget-login-info">
                                <p class="widget-login-info text-center line">O</p>
                                <div class="mb-4 mt-3 text-center">
                                    <p class="mb-3">Login con</p>
                                    <a href="/">
                                        <img src="{{ asset('/filmaps/img/facebook.svg') }}" alt="facebook" class="ml-3">
                                    </a>
                                    <a href="/">
                                        <img src="{{ asset('/filmaps/img/facebook.svg') }}" alt="facebook" class="ml-3">
                                    </a>
                                    <a href="/">
                                        <img src="{{ asset('/filmaps/img/facebook.svg') }}" alt="facebook" class="ml-3">
                                    </a>
                                    <a href="/">
                                        <img src="{{ asset('/filmaps/img/facebook.svg') }}" alt="facebook" class="ml-3">
                                    </a>
                                    <a href="/">
                                        <img src="{{ asset('/filmaps/img/facebook.svg') }}" alt="facebook" class="ml-3">
                                    </a>
                                </div>
                                <p class="new-account text-center">No tienes una cuenta?</p>
                                <a class="mr-n-lg text-center" href="register.html">Regístrate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('/filmaps/img/signin.svg') }}" class="singin d-none d-md-block" alt="signin">
        </div>
    </main>
   </div>
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
	</body>
	<!--end::Body-->
</html>
