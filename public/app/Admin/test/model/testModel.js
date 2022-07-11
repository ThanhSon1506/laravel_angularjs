myApp.factory('userModel', ['$http', function ($http) {
    var userModel = {};
    var baseUrl = 'https://api.e-gate.vn';
    userModel.handelLogin = function (data) {
        return $http({
            headers: {
                'Content-Type': 'application/json'
            },
            url: baseUrl + "/api/mobile/auth/login",
            method: "POST",
            data: {
                email: data.email,
                password: data.password,
            }
        });
    };
    userModel.handelSignin = function (data) {
        return $http({
            headers: {
                'Content-Type': 'application/json'
            },
            url: baseUrl + "/api/mobile/auth/login",
            method: "POST",
            data: {
                email: data.email,
                password: data.password,
            }
        });
    };
    return userModel;
}]);