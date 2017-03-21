var app = angular.module("myApp", []);

app.controller('Controller', function() { 
  alert("Hello from Controller");
});

app.controller('MainController', function($scope) { 
  $scope.myName="James";
  $scope.age = 32;
  $scope.Connaught = {
    popluation: 545000,
    numCounties: 5,
    counties: ["Galway","Leitrim","Mayo","Roscommon", "Sligo"],
    largestTown: "Galway",
    founded: new Date('988-11-12'),
    avgIndWage: 36500.00
  }
  $scope.list = [];
  $scope.addName = function(person) {
    $scope.list.push(person);
  }
  $scope.removeName = function() {
    $scope.list.pop();
  }
  $scope.bread = 1.99;
  $scope.bCount = 0;
  $scope.wine = 10.12;
  $scope.wCount = 0;
  $scope.cheese = 3.45;
  $scope.cCount = 0;
  $scope.total = 0;
  $scope.addBread = function() {
    $scope.bCount++;
    $scope.total += $scope.bread;
  };
  $scope.removeBread = function() {
    if($scope.bCount>0){
      $scope.bCount--;
      $scope.total -= $scope.bread;
    }
  };
  $scope.addWine = function() {
    $scope.wCount++;
    $scope.total += $scope.wine;
  };
  $scope.removeWine = function() {
    if($scope.wCount>0){
      $scope.wCount--;
      $scope.total -= $scope.wine;
    }
  };
  $scope.addCheese = function() {
    $scope.cCount++;
    $scope.total += $scope.cheese;
  };
  $scope.removeCheese = function() {
    if($scope.cCount>0){
      $scope.cCount--;
      $scope.total -= $scope.cheese;
    }
  };
  $scope.getName = function() {
    $scope.string=(prompt("Enter name/email here:"));
    $scope.char = $scope.string[0];
    $scope.num = $scope.string.length;
  }
  $scope.go = function() {
    var count = parseInt(document.getElementById("input").value);
    $scope.charGo = "";
    if(count>0) {
      for(i=0;i<$scope.num;)
      {
        i=i+count;
        if(i>$scope.num) break;
        $scope.charGo += $scope.string[i-1];
      }
    }
    else {$scope.charGo = $scope.string;}
  }



});

