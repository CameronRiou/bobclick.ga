shop.directive('product',function(){
    return {
        restrict: 'E',
        scope: {
            info: '=',
        },
        templateUrl: 'Directives/product.html',
    };
});