<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>@yield('title')</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('admin/images/fav-icon.png') }}" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}" />

</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="{{ asset('admin/images/pre-loader/loader-01.svg') }}" alt="">
</div>

<!--=================================
 preloader -->


@yield('contact')



<!--=================================
 jquery -->

<!-- jquery -->
<script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>

<!-- plugins-jquery -->
<script src="{{ asset('admin/js/plugins-jquery.js') }}"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>

<!-- chart -->
<script src="{{ asset('admin/js/chart-init.js') }}"></script>

<!-- calendar -->
<script src="{{ asset('admin/js/calendar.init.js') }}"></script>

<!-- charts sparkline -->
<script src="{{ asset('admin/js/sparkline.init.js') }}"></script>

<!-- charts morris -->
<script src="{{ asset('js/morris.init.js') }}"></script>

<!-- datepicker -->
<script src="{{ asset('js/datepicker.js') }}"></script>

<!-- sweetalert2 -->
<script src="{{ asset('admin/js/sweetalert2.js') }}"></script>

<!-- toastr -->
<script src="{{ asset('admin/js/toastr.js') }}"></script>

<!-- validation -->
<script src="{{ asset('admin/js/validation.js') }}"></script>

<!-- lobilist -->
<script src="{{ asset('admin/js/lobilist.js') }}"></script>

<!-- custom -->
<script src="{{ asset('admin/js/custom.js') }}"></script>

</body>
</html>
