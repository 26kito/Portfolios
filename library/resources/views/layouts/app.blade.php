<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset("assets/Login_v1/images/icons/favicon.ico")}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("assets/Login_v1/vendor/bootstrap/css/bootstrap.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("assets/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("assets/Login_v1/vendor/animate/animate.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("assets/Login_v1/vendor/css-hamburgers/hamburgers.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("assets/Login_v1/vendor/select2/select2.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("assets/Login_v1/css/util.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("assets/Login_v1/css/main.css")}}">
<!--===============================================================================================-->
</head>
<body>
	
	@yield('content')
	
<!--===============================================================================================-->
	<script src="{{asset("assets/Login_v1/vendor/jquery/jquery-3.2.1.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("assets/Login_v1/vendor/bootstrap/js/popper.js")}}"></script>
	<script src="{{asset("assets/Login_v1/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("assets/Login_v1/vendor/select2/select2.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("assets/Login_v1/vendor/tilt/tilt.jquery.min.js")}}"></script>
	<script >
		$('.js")}}-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset("assets/Login_v1/js/main.js")}}"></script>

</body>
</html>