<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Favicon -->
	<link href="{{asset('asset/img/favicon.ico')}}" rel="shortcut icon"/>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/jquery-ui.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	@livewireStyles
</head>
<body>
	@include('layout.header')

	@yield('content')

	@include('layout.footer')

	{{-- Bootstrap CDN --}}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--====== Javascripts & Jquery ======-->
	{{-- Ajax CDN --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="{{asset('asset/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('asset/js/main.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	@livewireScripts
</body>
</html>