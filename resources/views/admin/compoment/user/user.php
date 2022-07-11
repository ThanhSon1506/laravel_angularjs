<div ng-app="myApp" ng-controller="UsersController">
        <table class="table  border text-nowrap text-md-nowrap mg-b-0">
              <thead>
                <tr>
                  <th ng-repeat="item in users.headList">
                    {{item.name}}
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="index in users.rowList | orderBy:sortType:sortReverse">
                  <td>{{ index.id}}</td>
                  <td>{{ index.full_name }}</td>
                  <td>{{ index.email }}</td>
                </tr>
              </tbody>
        </table>
        <pagination total-items="totalItems" ng-model="currentPage"
            max-size="5" boundary-links="true"
            items-per-page="numPerPage" class="pagination-sm pull-right">
        </pagination>
    </div>
    <script src="<?php echo asset('themes/admin/assets/plugins/angular/angular.js')?>"></script>
    <script src="<?php echo asset('themes/admin/assets/plugins/angular/angular-resource.js')?>"></script>
    <script src="<?php echo asset('themes/admin/assets/plugins/ui-boostrap/ui-bootstrap-tpls-2.5.0.min.js')?>"></script>
    <script src="<?php echo asset('app/Admin/user/user.js') ?>"></script>
<script>
    var user=new user();
        user.datas={
        routes:{
            datatable:"<?php route('admin.index.anyData')?>", 
            datatable2:"<?php echo route('admin.index.anyData2')?>", 
        }
        }
        user.init();
</script> 
