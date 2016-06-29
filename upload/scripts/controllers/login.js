'use strict';

/**
 * @ngdoc function
 * @name yapp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of yapp
 */
 angular.module('yapp')
 .controller('LoginCtrl', function($scope, $location, $auth, $state, $http, $rootScope) {

 	$scope.loginData = {}
 	$scope.loginError = false;
 	$scope.loginErrorText;

 	$scope.login = function() {

 		var credentials = {
 			email: $scope.loginData.email,
 			password: $scope.loginData.password
 		}

 		console.log(credentials);

 		$auth.login(credentials).then(function() {
            $rootScope.token = localStorage.getItem('satellizer_token');
                // Return an $http request for the authenticated user
                $http.get('api/v1/admin/authenticate/user?token=' + $rootScope.token).success(function(response){
                    // Stringify the retured data
                    var user = JSON.stringify(response.user);

                    // Set the stringified user data into local storage
                    localStorage.setItem('user', user);

                    // Getting current user data from local storage
                    $rootScope.currentUser = response.user;
                    // $rootScope.currentUser = localStorage.setItem('user');;

                    $state.go('dashboard');
                })
                .error(function(){
                	$scope.loginError = true;
                	$scope.loginErrorText = error.data.error;
                	console.log($scope.loginErrorText);
                    alert($scope.loginErrorText);
                })
            });
}

});
