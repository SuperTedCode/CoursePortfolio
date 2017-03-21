var james = angular.module('starter', [])

//********************** Controller js *********************************

james.controller('TaoisighCtrl', function($scope,httpData) {
	
	var url = "https://api.myjson.com/bins/49iru";
	$scope.taoisigh = [];

  
	$scope.data = httpData.getData(function(data) {
			$scope.taoisigh=data;
		},url);	
})


//********************** services js *********************************

james.service("httpData", function($http) {
	

  	this.getData = function(callback,url) {
  		$http.get(url).then(data, error);

  		function data (response) {
  			callback (response.data);
  		};
  	
  		function error (response) {
  			alert("HTTP get service failed:");
  		};
  	}


});

