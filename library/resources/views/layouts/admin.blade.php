<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("assets/Light_Bootstrap/img/apple-icon.png") }}">
    <link rel="icon" type="image/png" href="{{ asset("assets/Light_Bootstrap/img/favicon.ico") }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min" />
    <!-- CSS Files -->
    <link href="{{ asset("assets/Light_Bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" />
    <link href="{{ asset("assets/Light_Bootstrap/css/light-bootstrap-dashboard.css") }}" rel="stylesheet" />
</head>

<body>
    @yield('content')
</body>

 <!--   Core JS Files   -->
 <script src="{{ asset("assets/Light_Bootstrap/js/core/jquery.3.2.1.min.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/Light_Bootstrap/js/core/popper.min.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/Light_Bootstrap/js/core/bootstrap.min.js") }}" type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="{{ asset("assets/Light_Bootstrap/js/plugins/bootstrap-switch.js") }}"></script>
 <!--  Chartist Plugin  -->
 <script src="{{ asset("assets/Light_Bootstrap/js/plugins/chartist.min.js") }}"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="{{ asset("assets/Light_Bootstrap/js/light-bootstrap-dashboard.js") }}?v=2.0.0 " type="text/javascript"></script>
 
 </html>