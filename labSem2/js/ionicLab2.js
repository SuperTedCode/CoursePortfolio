var james = angular.module('examQ2', [])

//********************** Controller js *********************************

james.controller('homeCtrl', function($scope, addSubPopul) {
  $scope.connaught = [{name:"Galway",population: 258000},
                      {name:"Leitrim",population: 31000},
                      {name:"Mayo",population: 130000},
                      {name:"Roscommon",population: 64000},
                      {name:"Sligo",population: 65000}];

  $scope.add = function(popul,name) {
    var num = parseInt(prompt("Enter amount of Population Increase in "+name));
    if(isNaN(num)) {
    	alert("You entered an invalid number! Please enter whole number only")
    }
    else {
    	var name = name;
    	$scope.newPop = addSubPopul.setPop(popul,num);
    	for (var i in $scope.connaught) {
    		if ($scope.connaught[i].name == name) {
    			$scope.connaught[i].population = $scope.newPop;
    		}
    	}
	}
  };

  $scope.sub = function(popul,name) {
    var num = parseInt(prompt("Enter amount of Population Decrease in "+name));
    if(isNaN(num)) {
    	alert("You entered an invalid number! Please enter whole number only")
    }
    else {
    	var name = name;
    	num = num * -1; //convert the num to subtract from poopulation
    	$scope.newPop = addSubPopul.setPop(popul,num);
    	for (var i in $scope.connaught) {
    		if ($scope.connaught[i].name == name) {
    			$scope.connaught[i].population = $scope.newPop;
    		}
    	}
    }
  };
  
});

//********************** services js *********************************

james.service('addSubPopul', function() {
	this.setPop = function(popul,num) {
		var pop = parseInt(popul) + num;
		if (pop<0){
			return 0;
		}
		else {return pop;}
	}
});

