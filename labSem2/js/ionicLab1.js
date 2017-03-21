var james = angular.module('exam', [])

//****   Controler js **********************************************
james.controller('homeCtrl', function($scope, ageService) {
	var emp = function (name,town,county,dob,salary) {
		this.name = name;
		this.town = town;
		this.county = county;
		this.dob = new Date(dob);
		this.salary = salary;
	}

	$scope.employees = [];

	$scope.getAge = function (dob) {
    var y = dob.getFullYear();
    return ageService.age(y);
	}

	$scope.addEmp = function(name,town,county,dob,salary) {
		var newEmp = new emp(name,town,county,dob,salary);
		$scope.employees.push(newEmp);
	}

});

//****   Service js **********************************************

james.service('ageService', function() {
	this.age = function(y) {
		var date = new Date();
		var year = date.getFullYear();
		return year-y;
	}
});

