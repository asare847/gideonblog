<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Transit by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/skel.min.js')}}"></script>
		<script src="{{asset('js/skel-layers.min.js')}}"></script>
		<script src="{{asset('js/init.js')}}"></script>
		<noscript>
			<link rel="stylesheet" href="{{asset('css/skel.css')}}'" />
			<link rel="stylesheet" href="{{asset('css/style.css')}}" />
			<link rel="stylesheet" href="{{asset('css/style-xlarge.css')}}" />
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
    		@include('inc.header')
            @yield('content')
		<!-- Footer -->
			

	</body>
</html>