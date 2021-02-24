@extends('layouts.auth')

@section('content')

<div class="signup-page__form">
	<script src="https://dce5jani6jm7e.cloudfront.net/app/modules/sentry/js/sentry.js"></script>
	<div data-v-1392eba8="" class="signup-single">
		<div data-v-0691003e="" 
    data-v-1392eba8="" class="am-card mdc-card mdc-elevation--z8" countrylist="[object Object]">
			<form data-v-0691003e="" class="sign-up form-signup" method="post">
				@csrf
				<div data-v-0691003e="" class="am-card-body">
					<h5 data-v-0691003e="" class="am-typography am-typography--color-text am-typography-h5"> Sign up with Admiral Markets </h5>
					<div data-v-0691003e="" class="am-spacing am-spacing--size-2 am-spacing--block"></div>
					<!---->
								<div data-v-347c04f5="" data-v-0691003e="" class="form-field">
									<div data-v-0691003e="" class="am-text-field" type="email" label="Email" placeholder="john@example.com" data-cy="email" id="field_email" data-v-347c04f5="">
										<div class="mdc-text-field mdc-text-field--outlined">
											<input type="email" placeholder="john@example.com" data-cy="email" id="email" name="email" class="mdc-text-field__input -ym-disable-keys">
												<!---->
												<div class="mdc-notched-outline mdc-notched-outline--upgraded">
													<div class="mdc-notched-outline__leading"></div>
													<div class="mdc-notched-outline__notch">
														<label class="mdc-floating-label" style=""></label>
														<!---->
														<!---->
														<!---->
														<!---->
													</div>
													<div class="mdc-notched-outline__trailing"></div>
												</div>
												<!---->
												<!---->
											</div>
											<!---->
										</div>
									</div>
									<div data-v-347c04f5="" data-v-0691003e="" class="form-field">
										<div data-v-0691003e="" class="am-text-field password-field" label="Password" placeholder="********" data-cy="password" id="field_password" data-v-347c04f5="">
											<div class="mdc-text-field mdc-text-field--with-trailing-icon mdc-text-field--outlined">
												<input type="password" placeholder="********" data-cy="password" id="password" name="password" class="mdc-text-field__input -ym-disable-keys">
													<!---->
													<div class="mdc-notched-outline mdc-notched-outline--upgraded">
														<div class="mdc-notched-outline__leading"></div>
														<div class="mdc-notched-outline__notch">
															<label class="mdc-floating-label" style=""></label>
															<!---->
															<!---->
															<!---->
														</div>
														<div class="mdc-notched-outline__trailing"></div>
													</div>
													<!---->
													<i tabindex="-2" class="mdc-text-field__icon error-icon material-icons am-typography--color-inherit" role="button">visibility_off</i>
													<!---->
												</div>
												<!---->
											</div>
											<!---->
										</div> 
													<!---->
													<div data-v-480a9df3="" data-v-0691003e="" class="form-submit">
														<div data-v-0691003e="" data-v-480a9df3="" class="submit-steps">
															<button data-v-0691003e="" data-cy="submit" id="btn_sign_up_signup_form" class="mdc-button mdc-button--color-positive mdc-button--unelevated mdc-button--large mdc-button--full-width mdc-ripple-upgraded" data-v-480a9df3="">
																<div class="mdc-button__ripple"></div>
																<!---->
																<span class="mdc-button__label"> Log In </span>
																<!---->
															</button>
														</div>
													</div>
													<br/>
													@if (Route::has('password.request'))
													<a class="btn btn-link" href="{{ route('password.request') }}">
														{{ __('Forgot Your Password?') }}
													</a>
													@endif
												</div>
											</form>
										</div>
										<!---->
										<!---->
										<!---->
										<div data-v-1392eba8="" class="signup-single__bottom">
											<div data-v-1392eba8="" class="signup-single__login am-typography am-typography--color-medium am-typography-body2">Dont have an account? 
												<a href="{{ route('register')}}" target="_self" class="">Sign Up</a>
											</div>
										</div>
									</div>
									<link rel="stylesheet" href="https://dce5jani6jm7e.cloudfront.net/build/am-prod/forms.css?v=a249d19f5a21655fad5ea0282d6ae648">
										<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
											<script src="https://dce5jani6jm7e.cloudfront.net/build/am-prod/forms.js?v=5a0f8d20fff18677eae736341f9ca87e" type="text/javascript"></script>
										</div>

<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
