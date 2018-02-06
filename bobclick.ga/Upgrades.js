var shop = angular.module('Shop',[]);
shop.controller('MainController', ['$scope', function($scope) { 
    $scope.title = 'The Bob Shop'; 
    $scope.products = [
        { 
        name: 'Bobs Guernsey Jumpers', 
        base: 50,
        //equation: ,
        price: ($scope.base*(1.01**($scope.bought))) ,
        bought: 0, 
        increase: 10,
        image: 'http://www.socialjusticesolutions.org/2013/01/17/there-is-work-to-be-done/',
        }, 
        { 
        name: 'Vaudins Gardens', 
        base: 100,
        //equation: ,
        price: ($scope.base*(1.05**($scope.bought))),
        bought: 0, 
        increase:0 ,
        image: 'Images/Shop/VGardens.gif',
        },
        {
        name: 'Yeah & Eahs',
        base: 1000000,
        //equation: ,
        price: ($scope.base*(1.01**($scope.bought))),
        bought: 0, 
        increase: 0,
        image: 'http://www.socialjusticesolutions.org/2013/01/17/there-is-work-to-be-done/',
        },
        {
        name: 'BetBob',
        base: 1000000000,
        price:($scope.base*(1.01**($scope.bought))), 
        bought: 0, 
        increase: 0,
        image: 'http://www.socialjusticesolutions.org/2013/01/17/there-is-work-to-be-done/',
        },
        {
        name: 'BobInc.',
        base: 1000000000000,
        price:($scope.base*(1.01**($scope.bought))),
        bought: 0, 
        increase: 0,
        image: 'http://www.socialjusticesolutions.org/2013/01/17/there-is-work-to-be-done/',
    }
    ];
    $scope.plusOne = function(index) {
      $scope.products[index].bought += 1;
      $scope.products[index].price += $scope.products[index].equation;
    };
  }]);
  