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
<link rel="stylesheet" type="text/css" href="{{asset('bower_components/angular-ui-grid/ui-grid.min.css')}}">

<div ng-app="myApp" ng-controller="UsersController">
    <div class="gridStyle grid" ui-grid="gridOptions" ui-grid-pagination ui-grid-edit></div>
    <div id="deltail"></div>
</div>

<script src="{{asset('themes/admin/assets/plugins/angular/angular.js')}}"></script>
<script src="{{asset('themes/admin/assets/plugins/angular/angular-resource.js')}}"></script>
<script src="{{asset('bower_components/angular-ui-grid/ui-grid.min.js')}}"></script>
<script src="{{asset('app/Admin/user/user.js')}}"></script>
<script>
    var user=new user();
        user.datas={
            routes:{
                datatable:"{{route('admin.index.anyData')}}", 
                datatable2:"{{route('admin.index.anyData2')}}", 
            }
        }
        user.init();
</script> 
