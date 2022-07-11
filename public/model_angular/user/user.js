myApp.factory('userModel', ['$http', function ($http) {
    var userModel = {};
    var baseUrl = 'https://api.e-gate.vn';
    var baseUrl2 = 'bds.ing.vn';
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
    userModel.handelAddData = function (data) {
        return $http({
            headers: {
                'Content-Type': 'application/json'
            },
            url: baseUrl2 + "/insert",
            method: "POST",
            data: {
                email: data.email,
                password: data.password,
            }
        });
    };
    return userModel;
}]);