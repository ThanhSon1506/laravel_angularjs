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
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/angular-ui-grid/ui-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/angular-material/angular-material.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/boostrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/angular-ui-grid/ui-grid.min.css')}}">

    <!-- <script>var baseUrl="https://api.e-gate.vn'";</script> -->
    <!-- TITLE -->
    <title>Resource and Asset Management</title>

    <style>
    .ui-grid-header{
        height: 40px;
    }
    .ui-grid-viewport {
        height: 480px;
    }
    .ui-grid-contents-wrapper{
        height: 40% !important;
    }
</style>
   
</head>

<body >
    <div class="container">
        <div ng-view></div>
    </div>
    <script src="{{asset('themes/admin/assets/plugins/angular/angular.js')}}"></script>
    <script src="{{asset('themes/admin/assets/plugins/angular/angular-resource.js')}}"></script>
    <script src="{{asset('bower_components/angular-aria/angular-aria.js')}}"></script>
    <script src="{{asset('bower_components/angular-animate/angular-animate.js')}}"></script>
    <script src="{{asset('bower_components/angular-messages/angular-messages.js')}}"></script>
    <script src="{{asset('bower_components/angular-material/angular-material.js')}}"></script>
    <script src="{{asset('bower_components/angular-ui-grid/ui-grid.min.js')}}"></script>
    <script src="{{asset('bower_components/angular-route/angular-route.min.js')}}"></script>
    <script src="{{asset('bower_components/angular-cookies/angular-cookies.min.js')}}"></script>
    <script src="{{asset('bower_components/boostrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bower_components/boostrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('controller_angular/app.js')}}"></script>
    <script src="{{asset('controller_angular/user/user.js')}}"></script>
    <script src="{{asset('model_angular/user/user.js')}}"></script>
</body>

</html>