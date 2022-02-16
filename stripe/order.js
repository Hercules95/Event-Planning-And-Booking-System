var app = angular.module('App',[]);
app.controller('myCont',function($scope,$http){


		$scope.order = function()
		{
			if($scope.standard == "p")
			{
				alert('ok');
			}
		}


});