'use strict';

/**
 * @ngdoc overview
 * @name yapp
 * @description
 * # yapp
 *
 * Main module of the application.
 */
 angular
 .module('yapp', [
  'ui.router',
  'ngAnimate',
  'satellizer',
  'angularUtils.directives.dirPagination',
  'ngSanitize',
  'ngCsv',
  'textAngular'
    ])


 .config(function($stateProvider, $urlRouterProvider) {
  $urlRouterProvider.when('/dashboard', '/dashboard/overview');
  $urlRouterProvider.otherwise('/login');

  $stateProvider
  .state('base', {
    abstract: true,
    url: '',
    templateUrl: 'views/base.html'
  })
  .state('login', {
    url: '/login',
    parent: 'base',
    templateUrl: 'views/login.html',
    controller: 'LoginCtrl'
  })
  .state('dashboard', {
    url: '/dashboard',
    parent: 'base',
    templateUrl: 'views/dashboard.html',
    controller: 'DashboardCtrl'
  })
  .state('overview', {
    url: '/overview',
    parent: 'dashboard',
    templateUrl: 'views/dashboard/overview.html'
  })
  .state('maillist', {
    url: '/maillist',
    parent: 'dashboard',
    templateUrl: 'views/dashboard/maillist.html'
  })

  .state('messages', {
    url: '/messages',
    parent: 'dashboard',
    templateUrl: 'views/dashboard/messages.html'
  });

});