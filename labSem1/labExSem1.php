<?php
$page_title = 'Lab Excercises for Semester One';
include ('../includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Lab excercises for semester one</h1>
    <p>Choose from the list below.</p>
  </div>
</div>

<div class="container-fluid">
<div class="row">
    
    <div class="col-sm-3">
    <div class="thumbnail">
      <h4>DOM</h4>
      <div class="caption">
      	<button onclick="funcDom1('dom1')">Lab1</button>
      	<button onclick="funcDom2">Lab2</button>
      	<button onclick="funcDom3">Lab3</button>
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