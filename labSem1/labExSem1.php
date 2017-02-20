<?php
$page_title = 'Lab Excercises for Semester One';
include ('../includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Lab excercises for semester one</h1>
    <h4>Choose from the list below.</h4>
  </div>
</div>

<div class="container-fluid">
<div class="row">
    
    <div class="col-sm-3">
    <div class="thumbnail">
      <h4>DOM</h4>
      <div class="caption">
      	<button onclick="funcDom('dom1')">Lab1</button><a href="/Git-Repository-Proj/labSem1/First_DOM_Lab.pdf"> Lab1.pdf</a><br><br>
      	<button onclick="funcDom('dom2_1')">Lab2.1</button><a href="/Git-Repository-Proj/labSem1/Second_DOM_Lab.pdf"> Lab2.pdf</a><br><br>
      	<button onclick="funcDom('dom2_2')">Lab2.2</button><br><br>
      	<button onclick="funcDom('dom2_3')">Lab2.3</button>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4>JavaScript</h4>
      <div class="caption">
      	<ul>
      		<li>Lab1</li>
      		<li>lab2</li>
      		<li>lab3</li>
      	</ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4>jQuery</h4>
      <div class="caption">
      	<ul>
      		<li>Lab1</li>
      		<li>lab2</li>
      		<li>lab3</li>
      	</ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4>Bootstrap</h4>
      <div class="caption">
      	<ul>
      		<li>Lab1</li>
      		<li>lab2</li>
      		<li>lab3</li>
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