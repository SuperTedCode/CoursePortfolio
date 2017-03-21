<?php
$page_title = 'Lab Excercises for Integrated Mobile Application Development';
include ('../includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <h2>Integrated Mobile Application Development</h2>
    <h3>Lab excercises for semester one: Choose from the list below.</h3>
  </div>
</div>

<div class="container-fluid">
<div class="row">
    
    <div class="col-sm-4">
    <div class="thumbnail">
      <h4 class="title">Java Script</h4>
      <div class="caption">
      <p>Below are the txt files you can copy and paste into jsbin.com in the JavaScript window. Comments are included for your ref.</p>
        <ul>
          <li><a href="/Git-Repository-Proj/labSem2/taxjsBinLab.txt" target="_blank">Tax calc </a></li>
          <a class="pdf" href="/Git-Repository-Proj/labSem2/JavaScriptRecapExercise.pdf" target="_blank"> Tax example.pdf</a>
          <li><a href="/Git-Repository-Proj/labSem2/javaScriptObjectsJsBinLab.txt" target="_blank">JS Objects </a></li>
          <a class="pdf" href="/Git-Repository-Proj/labSem2/JavaScriptObjectsExercises.pdf" target="_blank"> Tax example.pdf</a>
        </ul>
      </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <h4 class="title">AngularJS</h4>
      <div class="caption">
      <p>Click on the links below to run the labs in the broswer. Alternatively you can copy the code in each pdf, hightlighted in red, to codepen.io/pen. Be sure to copy all the HTML code from the <b>first lab</b> to the HTML window and the JS code in the JS window. Then just <b>edit the HTML within the body tags</b> and the JS code if needed to run each lab. the top line in JS is needed to state the angular module "myApp" which is referenced in the HTML body tag. Also the script tag on lab1 is needed for all labs to add the angularJS plugin.</p>
      	<ul>
          <li><a href="/Git-Repository-Proj/labSem2/LabsHTML/angularJSLab1.html">Expressions and Directives</a></li>
      		<a class="pdf" href="/Git-Repository-Proj/labSem2/AngularJSLab1ExpressDirect.pdf" target="_blank">Expressions and Directives PDF</a>
          <li><a href="/Git-Repository-Proj/labSem2/LabsHTML/angularJSLab2.html">Controllers and Filters</a></li>
      		<a class="pdf" href="/Git-Repository-Proj/labSem2/AngularJSLab2ControlFilters.pdf" target="_blank">Controllers and Filters PDF</a>
          <li><a href="/Git-Repository-Proj/labSem2/LabsHTML/angularJSLab3.html">Services</a></li>
          <a class="pdf" href="/Git-Repository-Proj/labSem2/AngularJSLab3Services.pdf" target="_blank">Services PDF</a>
      	</ul>
      </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <h4 class="title">Ionic apps edited for this broswer</h4>
      <div class="caption">
      	<ul>
      		<li><a href="/Git-Repository-Proj/labSem2/LabsHTML/ionicLab1.html">New Employee</a></li>
          <p>A simple app to store an object array of employees added via a form input and then displayed in a table.</p>
          <li><a href="/Git-Repository-Proj/labSem2/LabsHTML/ionicLab2.html">Connaught Population</a></li>
          <p>A table containing the population count for the different regions in Connaught. Each row has the option to add or subtract the count figure</p>
          <li><a href="/Git-Repository-Proj/labSem2/LabsHTML/ionicLab3.html">Display past Taoiseachs</a></li>
          <p>Here the data is collected externally using a http request to https://api.myjson.com/bins/49iru.</p>
      	</ul>
      </div>
    </div>
    </div>

</div>
</div>

<div id="labSem1Content"  class="container-fluid">
</div>


<?php
$page_title = 'Lab Excercises for Semester One';
include ('../includes/footer.html');
?>