'use strict';

/**
 * @ngdoc function
 * @name yapp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of yapp
 */
angular.module('yapp')
  .controller('DashboardCtrl', function($scope, $state, $rootScope, $location, $http, $auth) {
  	$rootScope.token = localStorage.getItem('satellizer_token');
    $scope.$state = $state;
    $scope.dashStats = {};
    $scope.messages = [];
    $scope.emails = [];
    $scope.view = {};
    $scope.view.mails = true;
    $scope.form = {};

    $scope.customMenu = [
            ['bold', 'italic', 'underline', 'strikethrough', 'subscript', 'superscript'],
            ['format-block'],
            ['font'],
            ['font-size'],
            ['font-color', 'hilite-color'],
            ['remove-format'],
            ['ordered-list', 'unordered-list', 'outdent', 'indent'],
            ['left-justify', 'center-justify', 'right-justify'],
            ['code', 'quote', 'paragraph'],
            ['link', 'image']
        ];

    $http.get('api/v1/admin/dash?token=' + $rootScope.token).success(function(dash){
    	$scope.dashStats = dash.data;
    });

    $http.get('api/v1/admin/messages?token=' + $rootScope.token).success(function(messages){
    	$scope.messages = messages.data;
    });

    $http.get('api/v1/admin/emails?token=' + $rootScope.token).success(function(emails){
    	$scope.emails = emails.data;
    });

    $http.get('api/v1/admin/export?token=' + $rootScope.token).success(function(emailsArray){
        $scope.emailsArray = emailsArray.data;
    });

    $scope.delete = function(id){
    	$http.get('api/v1/admin/messages/delete/' + id + '?token=' + $rootScope.token).success(function(message){
    		$scope.messages = message.data;
    	alert(message.message);
    }).error(function(error){

    });
    }

    $scope.deleteEmail = function(id){
        $http.get('api/v1/admin/messages/deleteEmail/' + id + '?token=' + $rootScope.token).success(function(email){
            $scope.emails = email.data;
        alert(email.message);
    }).error(function(error){

    });
    }

    $scope.logout = function() {
        $auth.logout().then(function() {
            localStorage.removeItem('user');
            $rootScope.currentUser = null;
            $rootScope.token = null;
            $state.go('login');
            });
           }

    $scope.changeView = function(view){
        $scope.view.mails = false;
        $scope.view.send = false,
        $scope.view[view] = true;
    }

    $scope.sendMails = function(){
        $http({
          method  : 'POST',
          url     : 'api/v1/admin/sendMails?token=' + $rootScope.token,
          data    : $scope.form, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
          .success(function(data) {
            alert(data.message);
          }).error(function(error){
            alert("Could not send mails, Please check your mail settings in .env")
          });
    }

  });
