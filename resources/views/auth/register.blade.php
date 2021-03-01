@extends('layouts.auth')

@section('content')

<div class="signup-page__form">
	<div data-v-1392eba8="" class="signup-single">
		<div data-v-0691003e="" 
    data-v-1392eba8="" class="am-card mdc-card mdc-elevation--z8" countrylist="[object Object]">
			<form data-v-0691003e="" class="sign-up form-signup" method="post">
				@csrf
					@if ($errors->any())
					@foreach ($errors->all() as $error)
					<div style="color:red; margin:1rem">{{ $error }}</div>
					@endforeach
					@endif
				<div data-v-0691003e="" class="am-card-body">
					<h5 data-v-0691003e="" class="am-typography am-typography--color-text am-typography-h5"> Sign up with Admiral Markets Pro</h5>
					<div data-v-0691003e="" class="am-spacing am-spacing--size-2 am-spacing--block"></div>
					<!---->
					
					<div data-v-347c04f5="" data-v-0691003e="" class="form-field">
						<div data-v-0691003e="" class="mdc-menu-surface--anchor am-autocomplete" data-v-347c04f5="">
							<div class="am-text-field">
								<div class="mdc-text-field mdc-text-field--with-trailing-icon mdc-text-field--outlined">
									<style>
										.text-fld
										{
											border: solid 1px #969393 !important;
											width: 100%;
											border-radius: 0.3rem;
											padding: 1rem;
											color:black
										}
										</style>
									<select  placeholder="Select option" ismxfilled="0" autocomplete="off"
									 data-cy="country" id="country" name="country" 
									 class="mdc-text-field__input -ym-disable-keys" required>
										<option>Afghanistan</option>
										<option>Albania</option>
										<option>Algeria</option>
										<option>American Samoa</option>
										<option>Andorra</option>
										<option>Angola</option>
										<option>Anguilla</option>
										<option>Antarctica</option>
										<option>Antigua and Barbuda</option>
										<option>Argentina</option>
										<option>Armenia</option>
										<option>Aruba</option>
										<option>Australia</option>
										<option>Austria</option>
										<option>Azerbaijan</option>
										<option>Bahamas</option>
										<option>Bahrain</option>
										<option>Bangladesh</option>
										<option>Barbados</option>
										<option>Belarus</option>
										<option>Belgium</option>
										<option>Belize</option>
										<option>Benin</option>
										<option>Bermuda</option>
										<option>Bhutan</option>
										<option>Bolivia</option>
										<option>Bosnia and Herzegovina</option>
										<option>Botswana</option>
										<option>Bouvet Island</option>
										<option>Brazil</option>
										<option>British Indian Ocean Territory</option>
										<option>Brunei Darussalam</option>
										<option>Bulgaria</option>
										<option>Burkina Faso</option>
										<option>Burundi</option>
										<option>Cambodia</option>
										<option>Cameroon</option>
										<option>Canada</option>
										<option>Cape Verde</option>
										<option>Cayman Islands</option>
										<option>Central African Republic</option>
										<option>Chad</option>
										<option>Chile</option>
										<option>China</option>
										<option>Christmas Island</option>
										<option>Cocos Islands</option>
										<option>Colombia</option>
										<option>Comoros</option>
										<option>Congo</option>
										<option>Congo, Democratic Republic of the</option>
										<option>Cook Islands</option>
										<option>Costa Rica</option>
										<option>Cote d'Ivoire</option>
										<option>Croatia</option>
										<option>Cuba</option>
										<option>Cyprus</option>
										<option>Czech Republic</option>
										<option>Denmark</option>
										<option>Djibouti</option>
										<option>Dominica</option>
										<option>Dominican Republic</option>
										<option>Ecuador</option>
										<option>Egypt</option>
										<option>El Salvador</option>
										<option>Equatorial Guinea</option>
										<option>Eritrea</option>
										<option>Estonia</option>
										<option>Ethiopia</option>
										<option>Falkland Islands</option>
										<option>Faroe Islands</option>
										<option>Fiji</option>
										<option>Finland</option>
										<option>France</option>
										<option>French Guiana</option>
										<option>French Polynesia</option>
										<option>Gabon</option>
										<option>Gambia</option>
										<option>Georgia</option>
										<option>Germany</option>
										<option>Ghana</option>
										<option>Gibraltar</option>
										<option>Greece</option>
										<option>Greenland</option>
										<option>Grenada</option>
										<option>Guadeloupe</option>
										<option>Guam</option>
										<option>Guatemala</option>
										<option>Guinea</option>
										<option>Guinea-Bissau</option>
										<option>Guyana</option>
										<option>Haiti</option>
										<option>Heard Island and McDonald Islands</option>
										<option>Honduras</option>
										<option>Hong Kong</option>
										<option>Hungary</option>
										<option>Iceland</option>
										<option>India</option>
										<option>Indonesia</option>
										<option>Iran</option>
										<option>Iraq</option>
										<option>Ireland</option>
										<option>Israel</option>
										<option>Italy</option>
										<option>Jamaica</option>
										<option>Japan</option>
										<option>Jordan</option>
										<option>Kazakhstan</option>
										<option>Kenya</option>
										<option>Kiribati</option>
										<option>Kuwait</option>
										<option>Kyrgyzstan</option>
										<option>Laos</option>
										<option>Latvia</option>
										<option>Lebanon</option>
										<option>Lesotho</option>
										<option>Liberia</option>
										<option>Libya</option>
										<option>Liechtenstein</option>
										<option>Lithuania</option>
										<option>Luxembourg</option>
										<option>Macao</option>
										<option>Madagascar</option>
										<option>Malawi</option>
										<option>Malaysia</option>
										<option>Maldives</option>
										<option>Mali</option>
										<option>Malta</option>
										<option>Marshall Islands</option>
										<option>Martinique</option>
										<option>Mauritania</option>
										<option>Mauritius</option>
										<option>Mayotte</option>
										<option>Mexico</option>
										<option>Micronesia</option>
										<option>Moldova</option>
										<option>Monaco</option>
										<option>Mongolia</option>
										<option>Montenegro</option>
										<option>Montserrat</option>
										<option>Morocco</option>
										<option>Mozambique</option>
										<option>Myanmar</option>
										<option>Namibia</option>
										<option>Nauru</option>
										<option>Nepal</option>
										<option>Netherlands</option>
										<option>Netherlands Antilles</option>
										<option>New Caledonia</option>
										<option>New Zealand</option>
										<option>Nicaragua</option>
										<option>Niger</option>
										<option>Nigeria</option>
										<option>Norfolk Island</option>
										<option>North Korea</option>
										<option>Norway</option>
										<option>Oman</option>
										<option>Pakistan</option>
										<option>Palau</option>
										<option>Palestinian Territory</option>
										<option>Panama</option>
										<option>Papua New Guinea</option>
										<option>Paraguay</option>
										<option>Peru</option>
										<option>Philippines</option>
										<option>Pitcairn</option>
										<option>Poland</option>
										<option>Portugal</option>
										<option>Puerto Rico</option>
										<option>Qatar</option>
										<option>Romania</option>
										<option>Russian Federation</option>
										<option>Rwanda</option>
										<option>Saint Helena</option>
										<option>Saint Kitts and Nevis</option>
										<option>Saint Lucia</option>
										<option>Saint Pierre and Miquelon</option>
										<option>Saint Vincent and the Grenadines</option>
										<option>Samoa</option>
										<option>San Marino</option>
										<option>Sao Tome and Principe</option>
										<option>Saudi Arabia</option>
										<option>Senegal</option>
										<option>Serbia</option>
										<option>Seychelles</option>
										<option>Sierra Leone</option>
										<option>Singapore</option>
										<option>Slovakia</option>
										<option>Slovenia</option>
										<option>Solomon Islands</option>
										<option>Somalia</option>
										<option>South Africa</option>
										<option>South Georgia</option>
										<option>South Korea</option>
										<option>Spain</option>
										<option>Sri Lanka</option>
										<option>Sudan</option>
										<option>Suriname</option>
										<option>Svalbard and Jan Mayen</option>
										<option>Swaziland</option>
										<option>Sweden</option>
										<option>Switzerland</option>
										<option>Syrian Arab Republic</option>
										<option>Taiwan</option>
										<option>Tajikistan</option>
										<option>Tanzania</option>
										<option>Thailand</option>
										<option>The Former Yugoslav Republic of Macedonia</option>
										<option>Timor-Leste</option>
										<option>Togo</option>
										<option>Tokelau</option>
										<option>Tonga</option>
										<option>Trinidad and Tobago</option>
										<option>Tunisia</option>
										<option>Turkey</option>
										<option>Turkmenistan</option>
										<option>Tuvalu</option>
										<option>Uganda</option>
										<option>Ukraine</option>
										<option>United Arab Emirates</option>
										<option>United Kingdom</option>
										<option>United States</option>
										<option>United States Minor Outlying Islands</option>
										<option>Uruguay</option>
										<option>Uzbekistan</option>
										<option>Vanuatu</option>
										<option>Vatican City</option>
										<option>Venezuela</option>
										<option>Vietnam</option>
										<option>Virgin Islands, British</option>
										<option>Virgin Islands, U.S.</option>
										<option>Wallis and Futuna</option>
										<option>Western Sahara</option>
										<option>Yemen</option>
										<option>Zambia</option>
										<option>Zimbabwe</option>
									</select>
									<!---->
										<div class="mdc-notched-outline mdc-notched-outline--upgraded mdc-notched-outline--notched">
											<div class="mdc-notched-outline__leading"
                            ></div>
											<div class="mdc-notched-outline__notch" style="width: 50.75px;">
												<label class="mdc-floating-label mdc-floating-label--float-above" style="">Country</label>
												<!---->
												<!---->
												<!---->
											</div>
											<div class="mdc-notched-outline__trailing"></div>
										</div>
										<!---->
										<i tabindex="-2" class="mdc-text-field__icon error-icon material-icons am-typography--color-inherit" role="button">arrow_drop_down</i>
										<!---->
									</div>
									<!---->
								</div>
								<div class="mdc-menu mdc-menu-surface" style="width: 500px;"></div>
							</div>
						</div>
						<div data-v-347c04f5="" data-v-0691003e="" class="form-field">
							<div data-v-0691003e class="am-text-field" name="name" autocomplete="off" ismxfilled="0" label="Name" placeholder="John Doe" data-cy="name" id="name" data-v-347c04f5="">
								<div class="mdc-text-field mdc-text-field--outlined">
									<input  autocomplete="off" ismxfilled="0" 
									placeholder="Full Name"
									 data-cy="name" id="name" name="name" required 
									 class="text-fld">
										<!---->
										
										<!---->
										<!---->
									</div>
									<!---->
								</div>
							</div>
								<div data-v-347c04f5="" data-v-0691003e="" class="form-field">
									<div data-v-0691003e="" class="am-text-field" type="email" label="Email" placeholder="john@example.com" data-cy="email" id="field_email" data-v-347c04f5="">
										<div class="mdc-text-field mdc-text-field--outlined">
											<input type="email" placeholder="Email" 
											data-cy="email" id="email" name="email" 
											required class="text-fld">
												<!---->
												
												<!---->
												<!---->
											</div>
											<!---->
										</div>
									</div>
									
									<div data-v-347c04f5="" data-v-0691003e="" class="form-field">
										<div data-v-0691003e="" class="am-text-field password-field" label="Password" placeholder="********" data-cy="password" id="field_password" data-v-347c04f5="">
											<div class="mdc-text-field mdc-text-field--with-trailing-icon mdc-text-field--outlined">
												<input type="password" placeholder="Password" 
												data-cy="password" id="password" name="password" 
												required class="text-fld">
													<!---->
													
													<!---->
													<i tabindex="-2" class="mdc-text-field__icon error-icon material-icons am-typography--color-inherit" role="button">visibility_off</i>
													<!---->
												</div>
												<!---->
											</div>
											<!---->
										</div>
									<div data-v-347c04f5="" data-v-0691003e="" class="form-field">
										<div data-v-0691003e="" class="am-text-field password-field" label="Password" placeholder="********" data-cy="password" id="password_confirmation" data-v-347c04f5="">
											<div class="mdc-text-field mdc-text-field--with-trailing-icon mdc-text-field--outlined">
												<input type="password" placeholder="Confirm Password" 
												data-cy="password" id="password_confirmation" 
												name="password_confirmation" required 
												class="text-fld">
													<!---->
													
													<!---->
													<i tabindex="-2" class="mdc-text-field__icon error-icon material-icons am-typography--color-inherit" role="button">visibility_off</i>
													<!---->
												</div>
												<!---->
											</div>
											<!---->
										</div>
<div data-v-347c04f5="" data-v-0691003e="" class="form-field">
									<div data-v-0691003e="" class="am-text-field" type="tel" label="Phone No" placeholder="+17267182717" data-cy="email" id="field_email" data-v-347c04f5="">
										<div class="mdc-text-field mdc-text-field--outlined">
											<input type="tel" placeholder="Phone Number" 
											data-cy="phone_no" id="phone_no" name="phone_no" 
											required 
											class="text-fld">
												<!---->
											
												<!---->
												<!---->
											</div>
											<!---->
										</div>
									</div>

									<div data-v-347c04f5="" data-v-0691003e="" class="form-field">
										<div data-v-0691003e="" class="am-text-field" type="tel" label="Trader ID" placeholder="+17267182717" data-cy="email" id="field_email" data-v-347c04f5="">
											<div class="mdc-text-field mdc-text-field--outlined">
												<input type="text" placeholder="Trader ID" 
												data-cy="traderID"
												 id="traderID" name="traderID" 
												 value="{{ app('request')->input('traderID')!=null?app('request')->input('traderID'):'' }}"required 
												 class="text-fld">
													<!---->
													
													<!---->
													<!---->
												</div>
												<!---->
											</div>
										</div>
                                  		
									<div data-v-347c04f5="" data-v-0691003e="" class="form-field">
										<div data-v-0691003e="" class="am-text-field" type="tel" label="Trader ID" placeholder="+17267182717" data-cy="email" id="field_email" data-v-347c04f5="">
											<div class="mdc-text-field mdc-text-field--outlined">
												<input type="text"  placeholder="Referral Code" data-cy="refferal_code" id="referral_code" 
												name="referral_code" class="text-fld">
													<!---->
													
													<!---->
													<!---->
												</div>
												<!---->
											</div>
										</div>
															<div data-v-0691003e="" class="am-typography am-typography--color-medium am-typography-body2">By proceeding, I agree to the 
																<a href="" >policy</a> and consent to Admiral Markets contacting me regarding available services and for marketing purposes. I understand that I can opt-out from marketing immediately by contacting 
															</a>
															<a href="" >support</a> or via editing my 
														</a>
													</div>
													<!---->
													<div data-v-480a9df3="" data-v-0691003e="" class="form-submit">
														<div data-v-0691003e="" data-v-480a9df3="" class="submit-steps">
															<button data-v-0691003e="" type="submit" data-cy="submit" id="btn_sign_up_signup_form" class="mdc-button mdc-button--color-positive mdc-button--unelevated mdc-button--large mdc-button--full-width mdc-ripple-upgraded" data-v-480a9df3="">
																<div class="mdc-button__ripple"></div>
																<!---->
																<span class="mdc-button__label"> Sign Up </span>
																<!---->
															</button>
														</div>
													</div>
												</div>
											</form>
										</div>
										<!---->
										<!---->
										<!---->
										<div data-v-1392eba8="" class="signup-single__bottom">
											<div data-v-1392eba8="" class="signup-single__login am-typography am-typography--color-medium am-typography-body2">Already have an account? 
												<a href="{{ route('login') }}" target="_self" class="">Login</a>
											</div>
										</div>
									</div>
									<link rel="stylesheet" href="https://dce5jani6jm7e.cloudfront.net/build/am-prod/forms.css?v=a249d19f5a21655fad5ea0282d6ae648">
										<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
											<script src="https://dce5jani6jm7e.cloudfront.net/build/am-prod/forms.js?v=5a0f8d20fff18677eae736341f9ca87e" type="text/javascript"></script>
										</div>
										<!--<div class="container"><div class="row justify-content-center"><div class="col-md-8"><div class="card"><div class="card-header">{{ __('Register') }}</div><div class="card-body"><form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row"><label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label><div class="col-md-6"><input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div></div><div class="form-group row"><label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label><div class="col-md-6"><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div></div><div class="form-group row"><label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label><div class="col-md-6"><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div></div><div class="form-group row"><label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label><div class="col-md-6"><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"></div></div><div class="form-group row mb-0"><div class="col-md-6 offset-md-4"><button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button></div></div></form></div></div></div></div></div>-->
@endsection
