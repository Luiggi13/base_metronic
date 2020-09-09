@extends('layouts.app')

@section('content')
  <link href="{{ asset('css/pages/login/login-3.css') }}" rel="stylesheet">
<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
						<!--begin::Aside header-->
						<a href="#" class="login-logo text-center pt-lg-25 pb-10">
							<img src="{{ asset('/nixus/media/logos/nixus-1.png') }}" class="max-h-60px" alt="" />
						</a>
						<!--end::Aside header-->
						<!--begin::Aside Title-->
						<h3 class="font-weight-bolder text-center font-size-h4 text-dark-50 line-height-xl">User Experience &amp; Interface Design
						<br />Strategy SaaS Solutions</h3>
						<!--end::Aside Title-->
					</div>
					<!--end::Aside Top-->
					<!--begin::Aside Bottom-->
					{{--  <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center" style="background-position-y: calc(100% + 5rem); background-image: url(assets/media/svg/illustrations/login-visual-5.svg)"></div>  --}}
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center" style="background-position-y: calc(100% + 5rem); background-image: url({{ asset('media/svg/illustrations/login-visual-5.svg') }})"></div>
					<!--end::Aside Bottom-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="login-content flex-row-fluid d-flex flex-column p-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-row-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form">
							<!--begin::Form-->
							<form class="form" id="kt_login_singin_form" method="POST" action="{{ route('login') }}">
                            @csrf
								<!--begin::Title-->
								<div class="pb-5 pb-lg-15">
									<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Iniciar sesión</h3>
									<div class="text-muted font-weight-bold font-size-h4">No tienes una cuenta?
									<a href="{{ route('register') }}" class="text-primary font-weight-bolder">{{ __('Register') }}</a></div>
								</div>
								<!--begin::Title-->
								<!--begin::Form group-->
								<div class="form-group">
									<label for="email" class="font-size-h6 font-weight-bolder text-dark">{{ __('E-Mail Address') }}</label>
									<input class="form-control h-auto py-7 px-6 rounded-lg border-0 @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<div class="d-flex justify-content-between mt-n5">
										<label for="password" class="font-size-h6 font-weight-bolder text-dark pt-5">{{ __('Password') }}</label>
										<a href="{{ route('password.request') }}" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">{{ __('Forgot Your Password?') }}</a>
									</div>
									<input class="form-control h-auto py-7 px-6 rounded-lg border-0 @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<!--end::Form group-->
								<!--begin::Action-->
								<div class="pb-lg-0 pb-5">
									<button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>

								</div>
								<!--end::Action-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
@endsection
