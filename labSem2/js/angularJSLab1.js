var app = angular.module("myApp", []);

app.directive("myGmit", function() {
 return {
  template: "<h3>GMIT</h3><ul>Schools:<li>Science</li><li>Engineering</li><li>Business</li></ul>",
}
});

app.directive("gmitScience", function() {
 return {
 template: "<h3>School of Science</h3>",
 }
});

app.directive("scienceCourses", function() {
 return {
 template: "<p>School of Science Courses are as follows:</p>",
 }
});