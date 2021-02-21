@extends('layouts.master')
@section('head')
<style type="text/css">
	img.wp-smiley,
	img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 .07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
	</style>
	<link rel='stylesheet' id='contact-form-7-css'  href='{{ asset('copy/wp-content/plugins/contact-form-7/includes/css/styles5859.css?ver=4.9.1')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='rs-plugin-settings-css'  href='{{ asset('copy/wp-content/plugins/revslider/public/assets/css/settingsc225.css?ver=5.4.1')}}' type='text/css' media='all' />
	<style id='rs-plugin-settings-inline-css' type='text/css'>
	#rs-demo-id {}
	</style>
	<link rel='stylesheet' id='bodhi-svgs-attachment-css'  href='{{ asset('copy/wp-content/plugins/svg-support/css/svgs-attachmentfe9d.css?ver=4.7.3')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='js_composer_front-css'  href='{{ asset('copy/wp-content/plugins/js_composer/assets/css/js_composer.min972f.css?ver=5.0.1')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='dt-web-fonts-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A400%2C500%2C700%7CMuli%3A200%2C400%2C600%2C800&amp;ver=4.7.3' type='text/css' media='all' />
	<link rel='stylesheet' id='dt-main-css'  href='{{ asset('copy/wp-content/themes/dt-the7/css/main.min50fa.css?ver=4.2.1')}}' type='text/css' media='all' />
	<style id='dt-main-inline-css' type='text/css'>
	body #load {
	  display: block;
	  height: 100%;
	  overflow: hidden;
	  position: fixed;
	  width: 100%;
	  z-index: 9901;
	  opacity: 1;
	  visibility: visible;
	  -webkit-transition: all .35s ease-out;
	  transition: all .35s ease-out;
	}
	body #load.loader-removed {
	  opacity: 0;
	  visibility: hidden;
	}
	.load-wrap {
	  width: 100%;
	  height: 100%;
	  background-position: center center;
	  background-repeat: no-repeat;
	  text-align: center;
	}
	.load-wrap > svg {
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  -ms-transform: translate(-50%,-50%);
	  -webkit-transform: translate(-50%,-50%);
	  transform: translate(-50%,-50%);
	}
	#load {
	  background-color: #ffffff;
	}
	.uil-default rect:not(.bk) {
	  fill: #c4c4c4;
	}
	.uil-ring > path {
	  fill: #c4c4c4;
	}
	.ring-loader .circle {
	  fill: #c4c4c4;
	}
	.ring-loader .moving-circle {
	  fill: #c4c4c4;
	}
	.uil-hourglass .glass {
	  stroke: #c4c4c4;
	}
	.uil-hourglass .sand {
	  fill: #c4c4c4;
	}
	.spinner-loader .load-wrap {
	  background-image: url("data:image/svg+xml,%3Csvg width='75px' height='75px' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' preserveAspectRatio='xMidYMid' class='uil-default'%3E%3Crect x='0' y='0' width='100' height='100' fill='none' class='bk'%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(0 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(30 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.08333333333333333s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(60 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.16666666666666666s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(90 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.25s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(120 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.3333333333333333s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(150 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4166666666666667s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(180 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(210 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5833333333333334s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(240 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6666666666666666s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(270 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.75s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(300 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8333333333333334s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23c4c4c4' transform='rotate(330 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.9166666666666666s' repeatCount='indefinite'/%3E%3C/rect%3E%3C/svg%3E");
	}
	.ring-loader .load-wrap {
	  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='72' height='72' fill='%23c4c4c4'%3E   %3Cpath opacity='.25' d='M16 0 A16 16 0 0 0 16 32 A16 16 0 0 0 16 0 M16 4 A12 12 0 0 1 16 28 A12 12 0 0 1 16 4'/%3E   %3Cpath d='M16 0 A16 16 0 0 1 32 16 L28 16 A12 12 0 0 0 16 4z'%3E     %3CanimateTransform attributeName='transform' type='rotate' from='0 16 16' to='360 16 16' dur='0.8s' repeatCount='indefinite' /%3E   %3C/path%3E %3C/svg%3E");
	}
	.hourglass-loader .load-wrap {
	  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='72' height='72' fill='%23c4c4c4'%3E   %3Cpath transform='translate(2)' d='M0 12 V20 H4 V12z'%3E      %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline'  /%3E   %3C/path%3E   %3Cpath transform='translate(8)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.2' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline'  /%3E   %3C/path%3E   %3Cpath transform='translate(14)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.4' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E   %3Cpath transform='translate(20)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.6' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E   %3Cpath transform='translate(26)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.8' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E %3C/svg%3E");
	}
	
	</style>
	<!--[if lt IE 10]>
	<link rel='stylesheet' id='dt-old-ie-css'  href='https://admiralmarketsgroup.com/wp-content/themes/dt-the7/css/old-ie.css?ver=4.2.1' type='text/css' media='all' />
	<![endif]-->
	<link rel='stylesheet' id='dt-awsome-fonts-css'  href='{{ asset('copy/wp-content/themes/dt-the7/fonts/FontAwesome/css/font-awesome.min50fa.css?ver=4.2.1')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='dt-fontello-css'  href='{{ asset('copy/wp-content/themes/dt-the7/fonts/fontello/css/fontello.min50fa.css?ver=4.2.1')}}' type='text/css' media='all' />
	<!--[if lt IE 10]>
	<link rel='stylesheet' id='dt-custom-old-ie.less-css'  href='https://admiralmarketsgroup.com/wp-content/uploads/wp-less/dt-the7/css/custom-old-ie-20a7f04270.css?ver=4.2.1' type='text/css' media='all' />
	<![endif]-->
	<link rel='stylesheet' id='dt-custom.less-css'  href='{{ asset('copy/wp-content/uploads/wp-less/dt-the7/css/custom-20a7f0427050fa.css?ver=4.2.1')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='dt-media.less-css'  href='{{ asset('copy/wp-content/uploads/wp-less/dt-the7/css/media-20a7f0427050fa.css?ver=4.2.1')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='style-css'  href='{{ asset('copy/wp-content/themes/dt-the7/style50fa.css?ver=4.2.1')}}' type='text/css' media='all' />
	<style id='style-inline-css' type='text/css'>
	#primary-menu>li:nth-child(3), #primary-menu>li:nth-child(4), .main-nav>li:nth-child(3), .main-nav>li:nth-child(4) {
	width: 105px;
	}
	.sub-nav .sub-nav {
		top: 0;
	}
	.masthead:not(.sub-downwards) .sub-nav .sub-nav, .mini-nav .sub-nav .sub-nav {
		left: 260px !important;
	}
	.qtranxs-lang-menu > a[title="English"] .menu-item-text .menu-text {
		text-indent:-9999px;
		margin-top: 12px;
		background-image: url({{ asset('copy/wp-content/plugins/qtranslate-x/flags/gb.png') }}); 
		background-repeat: no-repeat;
	}
	.qtranxs-lang-menu > a[title="Eesti"] .menu-item-text .menu-text {
		text-indent:-9999px;
		margin-top: 12px;
		background-image: url({{ asset('copy/wp-content/plugins/qtranslate-x/flags/ee.png') }}); 
		background-repeat: no-repeat;
	}
	.no-margin { margin: 0 !important; }
	.rounded-block__shadow { box-shadow: -5px 9px 20px rgba(2,102,223,0.3); font-weight: 500; min-height: 170px; box-sizing: border-box; overflow: hidden; background-color: #2a7de2; border-radius: 4px; padding: 30px; }
	.rounded-block__shadow h3 { font-weight: 500; height: 100%; }
	.vc_tta-panel-heading { background-color: #F2F6FA; color: #99A9BE; padding: 12px; font-size: 18px; }
	.vc_tta-title-text { color: #99A9BE;  font-size: 18px; font-weight: 400; }
	.vc_tta-panel.vc_active .vc_tta-panel-heading { background-color: #2A7DE2 !important; color: #ffffff; }
	.vc_tta-panel.vc_active .vc_tta-title-text { color: #ffffff; }
	.vc_tta-panel-body { background-color: transparent !important; border: none !important; }
	.vc_tta-panel-heading { border: none !important; }
	.accordion_custom_title h5 { padding: 20px; }
	.accordion_custom_title h5 a { color: #2A7DE2; text-decoration: underline; }
	.accordion_custom_title h5 a:hover { text-decoration: none; }
	.custom-table {padding: 0; margin: 0; border-collapse: collapse; width: 100%;}
	.custom-table tbody tr:first-child td, .custom-table thead tr td, .custom-table thead tr th { background: #F2F5F9; font-weight: bold; }
	.custom-table tr td { border: 1px solid #DCE4ED; color: #37426A; padding: 15px; }
	.custom-table tr td a { color: #37426A; }
	.table-striped {padding: 0; margin: 0; border-collapse: collapse; width: 100%;}
	.table-striped tbody tr:first-child td, .custom-table thead tr td, .custom-table thead tr th { background: #3795ED; font-weight: bold; color: #fff; }
	.table-striped { border-bottom: none !important; }
	.table-striped tr:nth-child(2n) td { background: #FAFBFB; }
	.table-striped tr td { border: none; color: #37426A; padding: 20px; text-align: right; }
	.table-striped thead tr th:first-child, .table-striped tr:first-child td:first-child { border-right: 2px solid #2683DB; }
	.table-striped tbody tr td:first-child, .table-striped tr td:first-child { border-right: 2px solid #E8ECED; }
	.table-striped tr td a { color: #37426A; }
	.custom-link {color: #37426A; text-decoration: none;}
	.custom-link-decoration {color: #37426A; text-decoration: underline;}
	.custom-link:hover {color: #2A7DE2; text-decoration: underline;}
	.twoCol-table tbody tr td:first-child { color: #347FDB; font-weight: 600; }
	.twoCol-table tbody tr td, .twoCol-table {border:none !important;padding:0;}
	.simple-table tbody tr td, .simple-table {border: 1px solid rgba(173,176,182,0.3) !important;padding:0;}
	.main-nav .sub-nav, .mini-nav .sub-nav {padding: 0;}
	.bold-icons .branding .mini-contacts.email, .bold-icons .mixed-header .mini-contacts.email, .bold-icons .classic-header .mobile-mini-widgets .mini-contacts.email { background-image: url('../wp-content/uploads/2017/03/email-ico.png'); }
	.bold-icons .branding .mini-contacts.phone, .bold-icons .mixed-header .mini-contacts.phone, .bold-icons .classic-header .mobile-mini-widgets .mini-contacts.phone { background-image: url('../wp-content/uploads/2017/03/phone.png'); }
	.mini-contacts {padding-left: 25px;}
	.mini-contacts.email {padding-left: 28px;}
	.entry-meta a {pointer-events: none;}
	/*.hover-block, .hovered { transition: all .5s; cursor: pointer; }*/
	.hover-block-wrap { position: relative; }
	/*.hovered { display: none; position: absolute; bottom: 70px; background: #eee; padding: 20px; line-height: 1.4; font-size: .95rem; z-index: -9999;  -webkit-transition: opacity 600ms, visibility 600ms; transition: opacity 600ms, visibility 600ms;}
	.hover-block:hover + .hovered { display: block; visibility: visible; opacity: 1; animation: fadeIn .5s; z-index: 9999; }
	@keyframes fade { 0% { opacity: 0; } 100% { opacity: 1; } }*/
	.person-block-wrap {
	  position: relative;
	}
	.person-block-wrap .image {
	  display: block;
	  width: 100%;
	  margin: 0 auto 20px;
	  height: auto;
	}
	.person-block-wrap .title, .person-block-wrap .description { text-align: center; line-height: 1.4; }
	.person-block-wrap .overlay {
	  position: absolute;
	  bottom: 100%;
	  left: 0;
	  right: 0;
	  background-color: #173269;
	  overflow: hidden;
	  width: 100%;
	  height:0;
	  transition: .5s ease;
	}
	.person-block-wrap:hover .overlay {
	  bottom: 0;
	  height: 100%;
	}
	.person-block-wrap .text {
	  padding: 20px;
	  box-sizing: border-box;
	  color: white;
	  line-height: 1.5;
	  font-size: .97rem;
	  position: absolute;
	  overflow: hidden;
	  /*overflow-y: auto;*/
	  height: 100%;
	  width: 100%;
	  /*top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);*/
	}
	@media only screen and (min-width: 768px) and (max-width: 991px) {
	  .custom-col {
		width: 50%;
	  }
	  .custom-col-left {
		width: 50%;
		clear: none;
	  }
	}
	@media only screen and (min-width: 992px) {
	  .custom-col-left {
		clear: none;
	  }
	}
	@media only screen and (min-width: 1200px) {
	  .custom-col-left {
		clear: both;
	  }
	}
	.custom-content-nav-btn {
	  display: inline-block; margin: 0 5px;
	}
	.align-center { text-align: center; }
	.inner-tab-btn .vc_btn3.vc_btn3-color-grey.vc_btn3-style-modern { background-color: #3795ED; border-color: #3795ED; color: #fff; font-size: 16px; line-height: 28px; width: 200px; white-space: nowrap; }
	.inline-block {
	display: inline-block;
	}
	
	#content .wpb_content_element .wpb_tabs_nav {
	width: 350px;
	max-width: 350px;
	}
	.wpb_tour.tab-style-one .wpb_tour_tabs_wrapper .wpb_tabs_nav a {
	white-space: normal;
	}
	.post-entry-content {height: 100%;padding-bottom: 60px !important;}
	.post-details.details-type-link {position: absolute; bottom: 20px;}
	.blog-shortcode .post-thumbnail > a {padding-bottom: 60% !important;}
	@-moz-document url-prefix() {
	 #top-menu > li > a {display: block; width: 30px; height: 21px;}
	}
	/*.qtranxs-lang-menu.qtranxs-lang-menu-ru.menu-item.menu-item-type-custom.menu-item-object-custom {
	display: none !important;
	}*/
	</style>
	<link rel='stylesheet' id='bsf-Defaults-css'  href='{{ asset('copy/wp-content/uploads/smile_fonts/Defaults/Defaultsfe9d.css?ver=4.7.3')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='ultimate-style-min-css'  href='{{ asset('copy/wp-content/plugins/Ultimate_VC_Addons/assets/min-css/ultimate.minbcd2.css?ver=3.16.7')}}' type='text/css' media='all' />
	<script type='text/javascript' src='{{ asset('copy/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4')}}'></script>
	<script type='text/javascript' src='{{ asset('copy/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1')}}'></script>
	<script type='text/javascript' src='{{ asset('copy/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.minc225.js?ver=5.4.1')}}'></script>
	<script type='text/javascript' src='{{ asset('copy/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.minc225.js?ver=5.4.1')}}'></script>
	<script type='text/javascript' src='{{ asset('copy/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-form-move-tracker73b9.js?ver=1.10.1')}}'></script>
	<script type='text/javascript'>
	/* <![CDATA[ */
	var dtLocal = {"themeUrl":"https:\/\/admiralmarketsgroup.com\/wp-content\/themes\/dt-the7","passText":"To view this protected post, enter the password below:","moreButtonText":{"loading":"Loading..."},"postID":"28","ajaxurl":"https:\/\/admiralmarketsgroup.com\/wp-admin\/admin-ajax.php","contactNonce":"4198a24b27","ajaxNonce":"320cbc928b","pageData":{"type":"page","template":"page","layout":null},"themeSettings":{"smoothScroll":"off","lazyLoading":false,"accentColor":{"mode":"solid","color":"#307ae8"},"floatingHeader":{"showAfter":94,"showMenu":false,"height":56,"logo":{"showLogo":true,"html":"<img class=\" preload-me\" src=\"https:\/\/admiralmarketsgroup.com\/wp-content\/uploads\/2017\/03\/am-logo.png\" srcset=\"https:\/\/admiralmarketsgroup.com\/wp-content\/uploads\/2017\/03\/am-logo.png 130w, https:\/\/admiralmarketsgroup.com\/wp-content\/uploads\/2017\/03\/am-logo-retina.png 260w\" width=\"130\" height=\"35\"   sizes=\"130px\" alt=\"AM Group\" \/>"}},"mobileHeader":{"firstSwitchPoint":990,"secondSwitchPoint":500},"content":{"responsivenessTreshold":970,"textColor":"#243f75","headerColor":"#243f75"},"stripes":{"stripe1":{"textColor":"#787d85","headerColor":"#3b3f4a"},"stripe2":{"textColor":"#8b9199","headerColor":"#ffffff"},"stripe3":{"textColor":"#ffffff","headerColor":"#ffffff"}}},"VCMobileScreenWidth":"768"};
	/* ]]> */
	</script>
	<script type='text/javascript' src="{{ asset('copy/wp-content/themes/dt-the7/js/above-the-fold.min50fa.js?ver=4.2.1') }}"></script>
	<script type='text/javascript' src="{{ asset('copy/wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4') }}"></script>
	<script type='text/javascript' src="{{ asset('copy/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate.minbcd2.js?ver=3.16.7') }}"></script>
	<style type="text/css">
	.qtranxs_flag_en {background-image: url('copy/wp-content/plugins/qtranslate-x/flags/gb.png'); background-repeat: no-repeat;}
	.qtranxs_flag_et {background-image: url('copy/wp-content/plugins/qtranslate-x/flags/ee.png'); background-repeat: no-repeat;}
	</style>
	
@endsection
@section('content')
	<div id="page">
	<div class='dt-mobile-header'>
		<ul id="mobile-menu" class="mobile-main-nav" role="menu">
			<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-1251 act first has-children"><a href='https://admiralmarketsgroup.com/admiral-markets-group-as/' data-level='1'><span class="menu-item-text"><span class="menu-text">Admiral Markets Group AS</span></span></a><ul class="sub-nav hover-style-click-bg level-arrows-on"><li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-28 current_page_item menu-item-1256 act first"><a href='index.html' data-level='2'><span class="menu-item-text"><span class="menu-text">About Us</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1258"><a href='history/index.html' data-level='2'><span class="menu-item-text"><span class="menu-text">History</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1259"><a href='admiral-markets-group-management/index.html' data-level='2'><span class="menu-item-text"><span class="menu-text">Management</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1257"><a href='regulation/index.html' data-level='2'><span class="menu-item-text"><span class="menu-text">Regulation</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1260"><a href='https://admiralmarketsgroup.com/reports-group/' data-level='2'><span class="menu-item-text"><span class="menu-text">Reports</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1022 has-children"><a href='https://admiralmarketsgroup.com/admiral-markets-as/' data-level='1'><span class="menu-item-text"><span class="menu-text">Admiral Markets AS</span></span></a><ul class="sub-nav hover-style-click-bg level-arrows-on"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2476 first"><a href='https://admiralmarketsgroup.com/about-admiral-markets-as/' data-level='2'><span class="menu-item-text"><span class="menu-text">About Us</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2310"><a href='https://admiralmarketsgroup.com/bonds/' data-level='2'><span class="menu-item-text"><span class="menu-text">Bonds</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2314"><a href='https://admiralmarketsgroup.com/announcements/' data-level='2'><span class="menu-item-text"><span class="menu-text">Announcements</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1263"><a href='https://admiralmarketsgroup.com/admiral-markets-as/admiral-markets-as-management/' data-level='2'><span class="menu-item-text"><span class="menu-text">Management</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1376"><a href='https://admiralmarketsgroup.com/admiral-markets-as/regulation/' data-level='2'><span class="menu-item-text"><span class="menu-text">Regulation</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1262"><a href='https://admiralmarketsgroup.com/admiral-markets-as/reports/' data-level='2'><span class="menu-item-text"><span class="menu-text">Reports</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1261"><a href='https://admiralmarketsgroup.com/admiral-markets-as/contact/' data-level='2'><span class="menu-item-text"><span class="menu-text">Investor Relations</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1264"><a href='https://admiralmarketsgroup.com/press-section/' data-level='1'><span class="menu-item-text"><span class="menu-text">News</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1265"><a href='https://admiralmarketsgroup.com/contacts/' data-level='1'><span class="menu-item-text"><span class="menu-text">Contacts</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2711"><a href='https://admiralmarkets.ee/?regulator=efsa' data-level='1'><span class="menu-item-text"><span class="menu-text">Clients</span></span></a></li> 	</ul>
		<div class='mobile-mini-widgets-in-menu'></div>
	</div>
		
		
		<div id="main" class="sidebar-none"  >
	
			
			<div class="main-gradient"></div>
			<div class="wf-wrap">
				<div class="wf-container-main">
	
					
		
			
				<div id="content" class="content" role="main">
	
				
						
						<div class="vc_row wpb_row vc_row-fluid vc_custom_1490700968624 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ult-spacer spacer-6031fc1770d96" data-id="6031fc1770d96" data-height="150" data-height-mobile="150" data-height-tab="150" data-height-tab-portrait="" data-height-mobile-landscape="120" style="clear:both;display:block;"></div><div class="dt-fancy-separator h2-size style-disabled" style="width: 100%;"><div class="dt-fancy-title" style="color: #ffffff;"><span class="separator-holder separator-left"></span>About Us<span class="separator-holder separator-right"></span></div></div><div class="ult-spacer spacer-6031fc1770ed9" data-id="6031fc1770ed9" data-height="50" data-height-mobile="50" data-height-tab="50" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div></div></div></div></div><!-- Row Backgrounds --><div class="upb_bg_img" data-ultimate-bg="url(https://admiralmarketsgroup.com/wp-content/uploads/2017/03/am-banner-main.jpg)" data-image-id="id^98|url^http://admiralmarketsgroup.com/wp-content/uploads/2017/03/am-banner-main.jpg|caption^null|alt^null|title^am-banner-main|description^null" data-ultimate-bg-style="vcpb-default" data-bg-img-repeat="no-repeat" data-bg-img-size="cover" data-bg-img-position="" data-parallx_sense="30" data-bg-override="full" data-bg_img_attach="scroll" data-upb-overlay-color="" data-upb-bg-animation="" data-fadeout="" data-bg-animation="left-animation" data-bg-animation-type="h" data-animation-repeat="repeat" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.0.1"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div><div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 50px;margin-bottom: 50px"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="dt-fancy-separator h3-size style-disabled" style="width: 100%;"><div class="dt-fancy-title" style="color: #173269;"><span class="separator-holder separator-left"></span>General information<span class="separator-holder separator-right"></span></div></div><div class="ult-spacer spacer-6031fc1772cd3" data-id="6031fc1772cd3" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div>
		<div class="wpb_text_column wpb_content_element  vc_custom_1536246945635">
			<div class="wpb_wrapper">
				<p style="text-align: center;"><span style="font-weight: 400;">Under the international financial services trademark of Admiral Markets, customers are offered Forex and leveraged Contract for Difference (CFD) web-based trading services in the over-the-counter market as well as listed instruments. Since its foundation in 2001, Admiral Markets has continually expanded its reach, and today it services worldwide through regulated trading companies.</span></p>
	<p style="text-align: center;"><span style="font-weight: 400;">Admiral Markets Group AS is physically represented in 16 countries through its regulated trading companies with a customer portfolio covering over 110 countries.</span></p>
	
			</div>
		</div>
	</div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ult-spacer spacer-6031fc17734f0" data-id="6031fc17734f0" data-height="50" data-height-mobile="50" data-height-tab="50" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div><div class="dt-fancy-separator h3-size style-disabled" style="width: 100%;"><div class="dt-fancy-title" style="color: #173269;"><span class="separator-holder separator-left"></span>Vision<span class="separator-holder separator-right"></span></div></div><div class="ult-spacer spacer-6031fc1773622" data-id="6031fc1773622" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div>
		<div class="wpb_text_column wpb_content_element  vc_custom_1569420999661">
			<div class="wpb_wrapper">
				<p style="text-align: center;">To be the global financial hub in supporting people to make money.</p>
	
			</div>
		</div>
	<div class="ult-spacer spacer-6031fc177382b" data-id="6031fc177382b" data-height="50" data-height-mobile="50" data-height-tab="50" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div></div></div></div></div><!-- Row Backgrounds --><div class="upb_color" data-bg-override="full" data-bg-color="#f8fbfd" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.0.1"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ult-spacer spacer-6031fc1773e7c" data-id="6031fc1773e7c" data-height="50" data-height-mobile="50" data-height-tab="50" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div><div class="dt-fancy-separator h3-size style-disabled" style="width: 100%;"><div class="dt-fancy-title" style="color: #173269;"><span class="separator-holder separator-left"></span>Mission<span class="separator-holder separator-right"></span></div></div><div class="ult-spacer spacer-6031fc1773fbb" data-id="6031fc1773fbb" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div>
		<div class="wpb_text_column wpb_content_element  vc_custom_1569421217475">
			<div class="wpb_wrapper">
				<p style="text-align: center;">With leadership, education and quality, we bring the financial community together into one powerful marketplace.</p>
	
			</div>
		</div>
	<div class="ult-spacer spacer-6031fc17741e7" data-id="6031fc17741e7" data-height="50" data-height-mobile="50" data-height-tab="50" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div><div class="dt-fancy-separator h4-size style-disabled" style="width: 100%;"><div class="dt-fancy-title" style="color: #2a7de2;"><span class="separator-holder separator-left"></span>We at Admiral Markets want to help traders realise their full potential through:<span class="separator-holder separator-right"></span></div></div><div class="ult-spacer spacer-6031fc1774321" data-id="6031fc1774321" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_column-gap-15 vc_row-o-equal-height vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><h4 style="color: #ffffff;text-align: center" class="vc_custom_heading rounded-block__shadow vc_custom_1493278914118">Acting as a reliable partner</h4></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><h4 style="color: #ffffff;text-align: center" class="vc_custom_heading rounded-block__shadow vc_custom_1493278927658">Offering affordable, client-oriented services</h4></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><h4 style="color: #ffffff;text-align: center" class="vc_custom_heading rounded-block__shadow vc_custom_1493278940802">Promoting ethics and transparency in the industry</h4></div></div></div></div><div class="ult-spacer spacer-6031fc1777af4" data-id="6031fc1777af4" data-height="50" data-height-mobile="50" data-height-tab="50" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div></div></div></div></div><!-- Row Backgrounds --><div class="upb_color" data-bg-override="full" data-bg-color="#f2f6fa" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.0.1"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ult-spacer spacer-6031fc177813c" data-id="6031fc177813c" data-height="50" data-height-mobile="50" data-height-tab="50" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div><div class="dt-fancy-separator h3-size style-disabled" style="width: 100%;"><div class="dt-fancy-title" style="color: #173269;"><span class="separator-holder separator-left"></span>Goals<span class="separator-holder separator-right"></span></div></div><div class="ult-spacer spacer-6031fc177827d" data-id="6031fc177827d" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div></div></div></div></div><!-- Row Backgrounds --><div class="upb_color" data-bg-override="full" data-bg-color="#e8eef6" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.0.1"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="dt-fancy-separator title-left h4-size style-disabled" style="width: 100%;"><div class="dt-fancy-title" style="color: #2a7de2;"><span class="separator-holder separator-left"></span>Global Marketplace<span class="separator-holder separator-right"></span></div></div><div class="ult-spacer spacer-6031fc1778a10" data-id="6031fc1778a10" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div>
		<div class="wpb_text_column wpb_content_element  vc_custom_1493278976629">
			<div class="wpb_wrapper">
				<p style="text-align: left;">We want to create a worldwide marketplace where people can enjoy high-quality service and access a wide range of financial instruments, regardless of geographical location. We want every trader to become a part of our actively growing online community.</p>
	
			</div>
		</div>
	<div class="dt-fancy-separator title-left h4-size style-disabled" style="width: 100%;"><div class="dt-fancy-title" style="color: #2a7de2;"><span class="separator-holder separator-left"></span>Transparency<span class="separator-holder separator-right"></span></div></div><div class="ult-spacer spacer-6031fc1779a43" data-id="6031fc1779a43" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div>
		<div class="wpb_text_column wpb_content_element  vc_custom_1493722109081">
			<div class="wpb_wrapper">
				<p style="text-align: left;"><span style="font-weight: 400;">We want to make sure that our clients have confidence when using our services. We believe that trust is achievable only through full transparency and compliance with the regulation of the following financial institutions: EFSA, FCA, ASIC, CySEC.</span></p>
	
			</div>
		</div>
	</div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="dt-fancy-separator title-left h4-size style-disabled" style="width: 100%;"><div class="dt-fancy-title" style="color: #2a7de2;"><span class="separator-holder separator-left"></span>Information isn’t Knowledge<span class="separator-holder separator-right"></span></div></div><div class="ult-spacer spacer-6031fc1779f0a" data-id="6031fc1779f0a" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div>
		<div class="wpb_text_column wpb_content_element  vc_custom_1493278991235">
			<div class="wpb_wrapper">
				<div class="wpb_text_column wpb_content_element vc_custom_1491384833101">
	<div class="wpb_wrapper">
	<p>Trading in online financial markets requires a certain amount of knowledge. While information is abundant and available, it can be overwhelming for new traders. Through various educational practices, we aim to help our clients to translate this information into practical, applicable knowledge.</p>
	</div>
	</div>
	
			</div>
		</div>
	<div class="dt-fancy-separator title-left h4-size style-disabled" style="width: 100%;"><div class="dt-fancy-title" style="color: #2a7de2;"><span class="separator-holder separator-left"></span>Financial empowerment<span class="separator-holder separator-right"></span></div></div><div class="ult-spacer spacer-6031fc177a1ec" data-id="6031fc177a1ec" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div>
		<div class="wpb_text_column wpb_content_element  vc_custom_1495011679636">
			<div class="wpb_wrapper">
				<p style="text-align: left;">Admiral Markets recognises that different investors have different needs, based on their resources. As a well-established financial organization, we guarantee that our clients will receive appropriate trading conditions catering to their specific needs.</p>
	
			</div>
		</div>
	<div class="ult-spacer spacer-6031fc177a428" data-id="6031fc177a428" data-height="50" data-height-mobile="50" data-height-tab="50" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div></div></div></div></div><!-- Row Backgrounds --><div class="upb_color" data-bg-override="full" data-bg-color="#e8eef6" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.0.1"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ult-spacer spacer-6031fc177adb6" data-id="6031fc177adb6" data-height="50" data-height-mobile="50" data-height-tab="50" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div><div class="dt-fancy-separator h3-size style-disabled" style="width: 100%;"><div class="dt-fancy-title" style="color: #173269;"><span class="separator-holder separator-left"></span>Structure<span class="separator-holder separator-right"></span></div></div><div class="ult-spacer spacer-6031fc177aef2" data-id="6031fc177aef2" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="" data-height-mobile-landscape="20" style="clear:both;display:block;"></div>
		<div class="wpb_text_column wpb_content_element  vc_custom_1584529604074">
			<div class="wpb_wrapper">
				<p><img class="alignnone size-full wp-image-3101" src="copy/wp-content/uploads/2017/03/AM-20137-Scheme-ENG-2020.png" alt="" width="1786" height="1076" /></p>
	
			</div>
		</div>
	</div></div></div></div><!-- Row Backgrounds --><div class="upb_color" data-bg-override="full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.0.1"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div>
	
						
						
						
	
					
				
				</div><!-- #content -->
	
				
			
	
				</div><!-- .wf-container -->
			</div><!-- .wf-wrap -->
		</div><!-- #main -->
	
		
	
	</div><!-- #page -->
@endsection

@section('foot')
	<!-- End Google Tag Manager (noscript) --><script type='text/javascript' src='{{ asset('copy/wp-content/themes/dt-the7/js/main.min50fa.js?ver=4.2.1') }}'></script>

	<script type='text/javascript' src='{{ asset('copy/wp-content/plugins/contact-form-7/includes/js/scripts5859.js?ver=4.9.1') }}'></script>
	<script type='text/javascript' src='{{ asset('copy/wp-includes/js/wp-embed.minfe9d.js?ver=4.7.3') }}'></script>
	<script type='text/javascript' src='{{ asset('copy/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min972f.js?ver=5.0.1') }}'></script>
	
@endsection