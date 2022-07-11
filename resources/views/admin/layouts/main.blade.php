<!doctype html>
<html lang="en" dir="ltr" ng-app="myApp">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('themes/admin/assets/images/brand/favicon.ico')}}" />

    <!-- TITLE -->
    <title>Resource and Asset Management</title>
    @include('Admin.partials.stylesheet')

   
</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- /GLOBAL-LOADER -->
    @include('admin.includes.preload')

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            @include('admin.includes.header')
            @include('admin.includes.sidebar')
            <!-- @yield('main') -->
            <div ng-view></div>
        </div>
        @include('admin.includes.footer')
        @include('admin.includes.backtotop')
        @include('admin.partials.scripts')
        <script src="{{asset('themes/admin/assets/plugins/angular/angular.js')}}"></script>
        <script src="{{asset('themes/admin/assets/plugins/angular/angular-resource.js')}}"></script>
        <script src="{{asset('bower_components/angular-ui-grid/ui-grid.min.js')}}"></script>
        <script src="{{asset('bower_components/angular-route/angular-route.min.js')}}"></script>
        <script src="{{asset('bower_components/angular-cookies/angular-cookies.min.js')}}"></script>
        <script src="{{asset('app/Admin/main.js')}}"></script>
        <script src="{{asset('app/Admin/app.js')}}"></script>
        @yield('jsAdmin')
    </div>

</body>

</html>