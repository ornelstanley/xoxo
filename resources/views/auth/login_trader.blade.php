@extends('layouts.auth')

@section('content')

<div class="signup-page__form">
	<script src="https://dce5jani6jm7e.cloudfront.net/app/modules/sentry/js/sentry.js"></script>
	<sign-up-form-single json='{"cid":null,"ref_id":null,"form_label":"signup-single","class":"signup","type":"text-form","method":"post","advanced":false,"header":"Sign up with Admiral Markets","subHeader":"","fields":{"name":{"class":"name","type":"text","related-to":"","hints":"","hintHeader":"","hintRules":"","oc_id":"","label":"Full Name","groupName":"","groupClass":"","value":"","isMask":"","advancedView":"","name":"name","dayOptions":"","monthOptions":"","yearOptions":"","day_placeholder":"","month_placeholder":"","year_placeholder":"","buttons":[],"selectOptionPlaceholder":"","placeholder":"John Doe","validationRules":{"errors":{"noMatch":"Please, provide valid Full Name (latin letters only)","minLength":"Full Name should be at least 1 characters","maxLength":"Full Name can be maximum 225 characters","required":"Full Name field cannot be left blank","errors":"Validation Rule errors"},"pattern":"^[a-zA-Z .-]*$","minLengthRule":1,"maxLengthRule":225,"requiredRule":true,"errorsRule":{"minLength":"Full Name should be at least 1 characters","maxLength":"Full Name can be maximum 225 characters","required":"Full Name field cannot be left blank","noMatch":"Please, provide valid First Name (latin letters only)"}}},"email":{"class":"email","type":"email","related-to":"","hints":"","hintHeader":"","hintRules":"","oc_id":"","label":"Email","groupName":"","groupClass":"","value":"","isMask":"","advancedView":"","name":"email","dayOptions":"","monthOptions":"","yearOptions":"","day_placeholder":"","month_placeholder":"","year_placeholder":"","buttons":[],"selectOptionPlaceholder":"","placeholder":"john@example.com","validationRules":{"errors":{"noMatch":"Please provide valid Email","minLength":"Email should be at least 4 characters","maxLength":"Email can be maximum 255 characters","required":"Email field cannot be left blank","errors":"Validation Rule errors"},"pattern":"^(([^<>()\\[\\]\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$","minLengthRule":4,"maxLengthRule":255,"requiredRule":true,"errorsRule":{"minLength":"Email should be at least 4 characters","maxLength":"Email can be maximum 255 characters","required":"Email field cannot be left blank","noMatch":"Please provide valid Email"}}},"password":{"class":"password","type":"password","related-to":"","hints":{"uppercase":"Uppercase letter (A-Z)","lowercase":"Lowercase letter (a-z)","number":"Number (0-9)","specialChar":"Special character ( !#@$%^&()+_ )","minLength":"And be at least 8 characters","latinOnly":"Password must be created using only Latin letters."},"hintHeader":"Your password must contain at least one:","hintRules":{"uppercase":"[A-Z]","lowercase":"[a-z]","number":"\\d","specialChar":"[\\x20-\\x2F\\x3A-\\x40\\x5B-\\x60\\x7B-\\x7E]"},"oc_id":"","label":"Password","groupName":"","groupClass":"","value":"","isMask":"","advancedView":"","name":"password","dayOptions":"","monthOptions":"","yearOptions":"","day_placeholder":"","month_placeholder":"","year_placeholder":"","buttons":[],"selectOptionPlaceholder":"","placeholder":"********","hint":true,"hintText":{"groupName":"password","header":"What Is the Trader\u2019s Room?","body":"The Trader\u2019s Room is your personal account management space, it\u2019s your central hub, your one-stop-shop for all things trading-related! Through your Trader\u2019s Room you\u2019re able to:","bodyTwo":"A login link to your Trader\u2019s Room will be emailed to you upon completion of your registration.","listOne":"Check the status of your Demo account(s), and change the conditions;","listTwo":"Open additional Demo accounts;","listThree":"Open Live accounts and deposit or withdraw funds;","listFour":"Manage your trading profile;","listFive":"Update your settings and preferences.","closeButtonText":"Close"},"validationRules":{"errors":{"minLength":"Password should be at least 8 characters","maxLength":"Password should be maximum 12 characters","required":"\"Create password\" field cannot be left blank","notSame":"Passwords are not matching","errors":"Validation Rule errors"},"minLengthRule":8,"maxLengthRule":128,"requiredRule":true,"isSame":true,"errorsRule":{"minLength":"Password should be at least 8 characters","maxLength":"Password should be maximum 12 characters","noMatch":"Incorrect password format","required":"\"Create password\" field cannot be left blank","notSame":"Passwords are not matching"}},"repeat":false},"phone_number":{"class":"phone","type":"tel","related-to":"","hints":"","hintHeader":"","hintRules":"","oc_id":"","label":"Phone","groupName":"","groupClass":"","value":"","isMask":"","advancedView":"","name":"phone_no","dayOptions":"","monthOptions":"","yearOptions":"","day_placeholder":"","month_placeholder":"","year_placeholder":"","buttons":[],"selectOptionPlaceholder":"","placeholder":"Please enter your phone number","validationRules":{"errors":{"noMatch":"Please provide valid Phone number","minLength":"Phone number should be at least 5 characters","maxLength":"Phone number should be maximum 15 characters","required":"Phone number field cannot be left blank","errors":"Validation Rule errors"},"pattern":"^(\\+)*[0-9 (\\s)\\-]+$","minLengthRule":5,"maxLengthRule":15,"requiredRule":true,"errorsRule":{"minLength":"Phone number should be at least 5 characters","noMatch":"Please provide valid Phone number","maxLength":"Phone number should be maximum 15 characters","required":"Phone number field cannot be left blank","alreadyExists":"Please use a different phone number"}}},"country":{"class":"country","type":"select","related-to":"","hints":"","hintHeader":"","hintRules":"","oc_id":"","label":"Country","groupName":"","groupClass":"","value":"","isMask":"","advancedView":"","name":"country","dayOptions":"","monthOptions":"","yearOptions":"","day_placeholder":"","month_placeholder":"","year_placeholder":"","buttons":[],"selectOptionPlaceholder":"Select option","placeholder":158,"validationRules":{"errors":{"required":"Country field cannot be left blank","errors":"Validation Rule errors"},"requiredRule":true,"errorsRule":{"required":"Country field cannot be left blank"}},"search":true,"options":{"1":"Afghanistan","2":"Aland Islands","3":"Albania","4":"Algeria","5":"American Samoa","6":"Andorra","7":"Angola","8":"Anguilla","9":"Antarctica","10":"Antigua and Barbuda","11":"Argentina","12":"Armenia","13":"Aruba","14":"Australia","15":"Austria","16":"Azerbaijan","17":"Bahamas","18":"Bahrain","19":"Bangladesh","20":"Barbados","21":"Belarus","22":"Belgium","23":"Belize","24":"Benin","25":"Bermuda","26":"Bhutan","27":"Bolivia","28":"Bosnia and Herzegovina","29":"Botswana","30":"Bouvet Island","31":"Brazil","32":"British Indian Ocean Territory","33":"Brunei","34":"Bulgaria","35":"Burkina Faso","36":"Burundi","37":"Cambodia","38":"Cameroon","39":"Canada","40":"Cape Verde","41":"Cayman Islands","42":"Central African Republic","43":"Chad","44":"Chile","45":"China","46":"Christmas Island","47":"Cocos Islands","48":"Colombia","49":"Comoros","50":"Republic of the Congo","51":"Democratic Republic of the Congo","52":"Cook Islands","53":"Costa Rica","54":"Ivory Coast","55":"Croatia","56":"Cuba","57":"Cyprus","58":"Czech Republic","59":"Denmark","60":"Djibouti","61":"Dominica","62":"Dominican Republic","63":"East Timor","64":"Ecuador","65":"Egypt","66":"El Salvador","67":"Equatorial Guinea","68":"Eritrea","69":"Estonia","70":"Ethiopia","71":"Falkland Islands","72":"Faroe Islands","73":"Fiji","74":"Finland","75":"France","78":"French Southern Territories","79":"Gabon","80":"Gambia","81":"Georgia","82":"Germany","83":"Ghana","84":"Gibraltar","85":"Greece","86":"Greenland","87":"Grenada","89":"Guam","90":"Guatemala","91":"Guernsey","92":"Guinea-Bissau","93":"Guinea","94":"Guyana","95":"Haiti","96":"Heard Island and McDonald Islands","97":"Honduras","98":"Hong Kong","99":"Hungary","100":"Iceland","101":"India","102":"Indonesia","103":"Iran","104":"Iraq","105":"Ireland","106":"Isle of Man","107":"Israel","108":"Italy","109":"Jamaica","110":"Japan","111":"Jersey","112":"Jordan","113":"Kazakhstan","114":"Kenya","115":"Kiribati","116":"Kuwait","117":"Kyrgyzstan","118":"Laos","119":"Latvia","120":"Lebanon","121":"Lesotho","122":"Liberia","123":"Libya","124":"Liechtenstein","125":"Lithuania","126":"Luxembourg","128":"Macedonia","129":"Madagascar","130":"Malawi","131":"Malaysia","132":"Maldives","133":"Mali","134":"Malta","135":"Marshall Islands","137":"Mauritania","138":"Mauritius","139":"Mayotte","140":"Mexico","141":"Micronesia","142":"Moldova","143":"Monaco","144":"Mongolia","145":"Montserrat","146":"Morocco","147":"Mozambique","148":"Myanmar","149":"Namibia","150":"Nauru","151":"Nepal","152":"Netherlands","153":"Netherlands Antilles","155":"New Zealand","156":"Nicaragua","157":"Niger","158":"Nigeria","159":"Niue","160":"Norfolk Island","161":"North Korea","162":"Northern Mariana Islands","163":"Norway","164":"Oman","165":"Pakistan","166":"Palau","167":"Palestinian Territory","168":"Panama","169":"Papua New Guinea","170":"Paraguay","171":"Peru","172":"Philippines","173":"Pitcairn","174":"Poland","175":"Portugal","176":"Puerto Rico","177":"Qatar","179":"Romania","180":"Russia","181":"Rwanda","182":"Saint Helena","183":"Saint Kitts and Nevis","184":"Saint Lucia","185":"Saint Pierre and Miquelon","186":"Saint Vincent and the Grenadines","187":"Samoa","188":"San Marino","189":"Sao Tome and Principe","190":"Saudi Arabia","191":"Senegal","192":"Serbia","193":"Seychelles","194":"Sierra Leone","195":"Singapore","196":"Slovakia","197":"Slovenia","198":"Solomon Islands","199":"Somalia","200":"South Africa","201":"South Georgia and the South Sandwich Islands","202":"South Korea","203":"Spain","204":"Sri Lanka","205":"Sudan","206":"Suriname","207":"Svalbard and Jan Mayen","208":"Swaziland","209":"Sweden","210":"Switzerland","211":"Syria","212":"Taiwan","213":"Tajikistan","214":"Tanzania","215":"Thailand","216":"Togo","217":"Tokelau","218":"Tonga","219":"Trinidad and Tobago","220":"Tunisia","221":"Turkey","222":"Turkmenistan","223":"Turks and Caicos Islands","224":"Tuvalu","225":"Uganda","226":"Ukraine","227":"United Arab Emirates","228":"United Kingdom","229":"United States","230":"United States Minor Outlying Islands","231":"Uruguay","232":"Uzbekistan","233":"Vanuatu","234":"Vatican","235":"Venezuela","236":"Vietnam","237":"British Virgin Islands","238":"U.S. Virgin Islands","239":"Wallis and Futuna","240":"Western Sahara","241":"Yemen","242":"Zambia","243":"Zimbabwe","244":"Montenegro","245":"Kosovo","251":"Macau","254":"Bonaire, Saint Eustatius and Saba","257":"Curacao","263":"Sint Maarten"}}},"request":[],"credentials":null,"virtual_page_view_unverified_user":null,"virtual_page_view_verified_user":null,"virtual_page_view_new_user_form":null,"first_ep":null,"registration_event":"Submitted Reg Form","errors":{"email_exists":"This email cannot be used. If you already have an account with us, try logging in."},"locale":"en","langPrefix":"\/","platform":"","leverage":"","downloadFormExistingCustomer":"","requiredError":"Please fill all the fields.","badResponseError":"Something went wrong, please, try again later.","wrongPasswordLogin":"Inserted password from your Trader`s Room is wrong. Please, try one more time.","throttlingError":"You have exceeded the amount of log-in attempts. Please try again in {interval} minute(s).","alreadyExists":"Please use a different phone number","passwordsShouldMatchError":"Passwords are not matching","badFormatError":"Please, fill in the field(s) in a right format.","policyText":"By proceeding, I agree to the Privacy policyand consent to Admiral Markets Pro contacting me regarding available services and for marketing purposes. I understand that I can opt-out from marketing immediately by contacting Customer Support","signUp":true,"isLastStep":true,"oc_id":9,"oc_name":"pty","signUpText":"Sign Up","goPreviousButtonText":"Return to previous step","ocList":[{"label":"Admiral Markets UK Ltd","value":12,"regulator":"fca","oc":"ukltd"},{"label":"Admiral Markets Pty Ltd","value":9,"regulator":"asic","oc":"pty"}],"ptyId":9,"isAsicTraffic":false,"loginText":"Already have an account? <a href=\".\/register\" target=\"_self\" class=\"\">Login<\/a>","entityText":"Entity:","popupText":{"text1":"Important information","text2":"You have chosen to register for an account with Admiral Markets Pty Ltd, which is authorised and regulated by the <strong>Australian Securities & Investments Commission (ASIC)<\/strong> in Australia. Admiral Markets Pty Ltd falls outside the European regulatory framework and the level of investor protection offered to you may not be equal to the protections offered by an investment firm authorised in the European Union.","text3":"I hereby confirm the following:","text4":"The provision of services by Admiral Markets Pty Ltd was initiated by my own exclusive initiative. If I\u2019m a non-Australian resident, I understand that my activities are out of the scope of my local regulatory framework and protection and I understand the potential risks they entail.","button1":"Confirm","button2":"Decline"},"isProhibitedCountry":false,"notSupportedCountry":"Unfortunately, Admiral Markets services are not available for the residents of the chosen country. Please <a href=https:\/\/admiralmarkets.com\/u0022https:\/\/\/\/admiralmarkets.com\/\/about-us\/\/contact-us\/u0022 target=\"_self\" class=\"\">contact us<\/a> if you believe there has been a mistake.","country":"NG"}'></sign-up-form-single>
    
    									<link rel="stylesheet" href="https://dce5jani6jm7e.cloudfront.net/build/am-prod/forms.css?v=a249d19f5a21655fad5ea0282d6ae648">
										<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
											<script src="https://dce5jani6jm7e.cloudfront.net/build/am-prod/forms.js?v=5a0f8d20fff18677eae736341f9ca87e" type="text/javascript"></script>
										</div>
@endsection