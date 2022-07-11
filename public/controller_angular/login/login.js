myApp.controller('loginController', ['$scope', '$http', '$location', 'userModel', function ($scope, $location, userModel) {
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

}]);