myApp.controller('userController', ['$scope', '$http', '$location', 'userModel', function ($scope, $http, $location, userModel) {
    var baseUrl = 'https://api.e-gate.vn';

    angular.extend($scope, {
        handelLogin: function (loginForm) {
            var data = {
                email: $scope.login.email,
                password: $scope.login.password,
            };
            userModel.handelLogin(data).then(function () {
                $location.path('/home');
            }, function (error) { alert(error) });
        }
    });


    $scope.gridOptions = {};
    $scope.sortType = 'full_name';
    $scope.sortReverse = false;
    $http.get(baseUrl + "/api/news/getAll")
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
}]);

