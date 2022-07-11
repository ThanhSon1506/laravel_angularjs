myApp.controller('userController', ['$scope', '$http', '$location', 'userModel', function ($scope, $http, $location, userModel) {
    var baseUrl = 'bds.ing.vn';

    angular.extend($scope, {
        handelLogin: function (loginForm) {
            var data = {
                email: $scope.login.email,
                password: $scope.login.password,
            };
            userModel.handelLogin(data).then(function () {
                $location.path('/home');
            }, function (error) { alert(error) });
        },
        handelAddData: function (loginForm) {
            var data = {
                title: $scope.news.title,
                content: $scope.news.content,
                img: $scope.news.img,
            };
            userModel.handelAddData(data).then(function () {
                alert('add');
            }, function (error) { alert(error) });
        },

    });

    $scope.gridOptions = {};
    $scope.sortType = 'full_name';
    $scope.sortReverse = false;
    $http.get(baseUrl + "/admin/data2")
        .then(function (response) {
            $scope.gridOptions = {
                paginationPageSizes: [5, 10, 15],
                paginationPageSize: 5,
                columnDefs: [
                    { field: 'id', displayName: 'id' },
                    { field: 'name', displayName: 'name' },
                    { field: 'email', displayName: 'email' },
                    {
                        field: 'title', name: 'edit', displayName: 'Edit',
                        cellTemplate: '<button id="editBtn" type="button" class="btn-small" ng-click="edit(row.id)" >Chi tiết</button> '
                    }
                ],
            };
            $scope.gridOptions.data = response.data;
        });

}]);

