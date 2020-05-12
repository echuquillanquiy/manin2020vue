<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name')}}</title>
    <link rel="apple-touch-icon" href="{{ asset('template/app-assets/images/ico/icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/app-assets/images/ico/icon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/app-assets/vendors/css/ui/prism.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/assets/css/style.css') }}">

    @yield('app-position')
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns navbar-floating footer-static pace-done menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    
    @include('template.includes.navbar')

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('template.includes.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('template/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('template/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('template/app-assets/vendors/js/ui/prism.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('template/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('template/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->
    @yield('positionScrips')
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>