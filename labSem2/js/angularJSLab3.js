var lab7 = angular.module('starter', []);

lab7.controller('enterUserAge', function($scope, addAgeService) {
  $scope.uAge = 0;
  $scope.newAge = 0;
  $scope.getAge = function(uAge) {
    $scope.newAge = addAgeService.calculateAge(uAge);
  }
});

lab7.controller('StudentController',function($scope, ageService) {

  var student = function (name,address,dob) {
    this.name = name;
    this.address=address;
    this.dob= new Date(dob);
  }
  var s1 = new student("Tom", "Galway","November 19 1995");
  var s2 = new student("John", "Tuam", "August 11 1996");
  var s3 = new student("Mary", "Ballinasloe", "September 1 1995");
  var s4 = new student("Fred", "Athenry", "August 11 1994");
  $scope.students = [s1,s2,s3,s4];
  $scope.getAge = function (dob) {
    var y = dob.getFullYear();
    return ageService.age(y);
  }
});

lab7.controller('GMITController',function($scope, ageService) {
  $scope.GMIT = {name:"Galway-Mayo Institute of Technology", address:"Galway, Letterfrack, Mountbellew, Castlebar", founded: new Date("September 18 1972")};
  $scope.age = function(dob) {
    var y = dob.getFullYear();
    return ageService.age(y);
  }
});

lab7.controller('USPresidents', function($scope, USPresidents) {
  $scope.list = USPresidents.getPres(function(list) {
    $scope.list = list;
    
  });
 });

lab7.service('addAgeService', function() {
  this.calculateAge = function(uAge) {
  var age = parseInt(uAge);
    if (age && age>0) {
      age++;
    }
  else {
      age="??"
   }
  return age;
  }
});

lab7.service('ageService', function() {
 this.age = function(y) {
  var date = new Date();
  var year = date.getFullYear();
  return year-y;
  }
});

lab7.service('USPresidents', function($http) {
 this.getPres = function(callbackOK) {
 var URL = "https://api.myjson.com/bins/po22";

$http.get(URL).then(funOK, funNOK);

function funOK(response) {
callbackOK(response.data);
 };

function funNOK(response) {
alert("Error in retreving data from URL: Check console!");
console.log("Failed URL: "+URL);
};
}
});
