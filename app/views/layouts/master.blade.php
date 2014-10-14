<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Share your codes &middot; snippets.dev</title>

		<!-- Bootstrap CSS -->
		<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
		<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/vendor.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/app.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/cm.min.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div id="ip-container">
		@include('partials.preloader')
		<div class="header">
			@include('partials.menu')
			@yield('header')
		</div>
		<div class="container ip-main">
			@yield('content')
		</div>
	</div>
		<!-- jQuery -->
		<!-- // <script src="//code.jquery.com/jquery.js"></script> -->
		<!-- Bootstrap JavaScript -->
		<!-- // <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/vendor.min.js"></script>
		<script type="text/javascript" src="assets/js/app.min.js"></script>
		<!-- <script type="text/javascript" src="assets/js/cm.min.js"></script> -->
		<script>
			$(function(){
				@yield('script')
			});
		</script>
	</body>
</html>