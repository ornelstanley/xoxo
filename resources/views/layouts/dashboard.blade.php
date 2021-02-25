<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/dashboard-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 07:53:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Admiral Markets Pro">

	<title>Admiral Markets Pro | Dashboard</title>

	<link rel="canonical" href="/" />
	<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="{{ asset('dashboard/css/light.css') }}" rel="stylesheet">
	<script src="{{ asset('dashboard/js/settings.js') }}"></script>
	
    <script src="https://use.fontawesome.com/f567287291.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- END SETTINGS --> 
	<link href="https://pagecdn.io/lib/toastr/2.1.4/toastr.min.css" rel="stylesheet" crossorigin="anonymous" integrity="sha256-R91pD48xW+oHbpJYGn5xR0Q7tMhH4xOrWn1QqMRINtA=" >

</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		@yield('nav')
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown"> 
								<span class="text-dark">{{ Auth::user()->name}}</span>
								<span class="badge badge-primary">${{number_format(Auth::user()->balance,2,'.',',')}}</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="{{ route('entry') }}"><i class="align-middle mr-1" data-feather="pie-chart"></i> Start Investing</a>
								<a class="dropdown-item" href="{{ route('wallet') }}"><i class="align-middle mr-1" data-feather="credit-card"></i> Wallet</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html">Settings & Privacy</a>
								<a class="dropdown-item" href="mailto:{{ $set->email }}">Help</a>
								<a class="dropdown-item" href="{{ route('logout') }}">Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			@yield('content')

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="mailto:{{ $set->email }}">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="{{ route('logout') }}">Logout</a>
								</li>
							</ul>
						</div>
						<div class="col-6 text-right">
							<p class="mb-0">
								&copy; {{ date('Y') }} - <a href="index.html" class="text-muted">Admiral Markets Pro</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="{{ asset('dashboard/js/app.js') }}"></script>
	<script src="https://pagecdn.io/lib/toastr/2.1.4/toastr.min.js" crossorigin="anonymous" integrity="sha256-Hgwq1OBpJ276HUP9H3VJkSv9ZCGRGQN+JldPJ8pNcUM=" ></script>
   
	@yield('footer')

	@if (session('success'))
    <script>
      "use strict";
        $(document).ready(function () {
            swal("Success!", "{{ session('success') }}", "success");
        });
    </script>
@endif

@if (session('error'))
    <script>
      "use strict";
        $(document).ready(function () {
            swal("Sorry!", "{{ session('error') }}", "error");
        });
    </script>
@endif
<script>
@if(Session::has('message'))
"use strict";
var type = "{{Session::get('alert-type','info')}}";
switch (type) {
    case 'info':
        toastr.info("{{Session::get('message')}}");
        break;
    case 'warning':
        toastr.warning("{{Session::get('message')}}");
        break;
    case 'success':
        toastr.success("{{Session::get('message')}}");
        break;
    case 'error':
        toastr.error("{{Session::get('message')}}");
        break;
}
@endif
</script>
<script>
window.addEventListener('load',function(){
    @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
@endif
});
</script>
</body>


<!-- Mirrored from appstack.bootlab.io/dashboard-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 07:55:10 GMT -->
</html>