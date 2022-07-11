function user() {
    this.datas = null;
    var datas = null;
    this.init = function () {
        datas = this.datas;
        var me = this;
        me.datatables();
    }
    this.datatables = function () {
        var app = angular.module('myApp', ['ngResource', 'ui.grid',
            'ui.grid.edit', 'ui.grid.pagination']);
        app.controller('UsersController', function ($scope, $http) {
            $scope.gridOptions = {};
            $scope.sortType = 'full_name';
            $scope.sortReverse = false;
            $http.get(datas.routes.datatable2)
                .then(function (response) {
                    $scope.gridOptions = {
                        paginationPageSizes: [5, 10, 15],
                        paginationPageSize: 5,
                        columnDefs: [
                            { field: '_id', displayName: '_id' },
                            { field: 'title', displayName: 'title' },
                            { field: 'image', displayName: 'image' },
                            {
                                field: 'title', name: 'edit', displayName: 'Edit',
                                cellTemplate: '<button id="editBtn" type="button" class="btn-small" ng-click="edit(row.title)" >Chi tiết</button> '
                            }
                        ],
                    };
                    $scope.gridOptions.data = response.data.result.table.rows;
                });
            $scope.edit = function (response) {
                document.getElementById('deltail').innerHTML = response
            }
        });
    }

}