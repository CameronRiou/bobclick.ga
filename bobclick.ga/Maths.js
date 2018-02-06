angular.module('Click',[]).controller('Add', ['$scope', function($scope) {
    $scope.Yeahs = 0;
    $scope.Score = function(){
        return $scope.Yeahs;
    };
    $scope.Click = 1;
    $scope.Increase = function(){
        $scope.Yeahs+=$scope.Click;
    };
}]);