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
        <ul>
          <li onclick="funcDom('dom1')">Lab1 <a href="/Git-Repository-Proj/labSem1/First_DOM_Lab.pdf" target="_blank"> Lab1.pdf</a></li>
          <li onclick="funcDom('dom2_1')">Lab2.1 <a href="/Git-Repository-Proj/labSem1/Second_DOM_Lab.pdf" target="_blank"> Lab2.pdf</a></li>
          <li onclick="funcDom('dom2_2')">Lab2.2 </li>
          <li onclick="funcDom('dom2_3')">Lab2.3 </li>
        </ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4>JavaScript</h4>
      <div class="caption">
      	<ul>
      		<li><a href="/Git-Repository-Proj/labSem1/labsHTML/JSLab1.html"> Lab1</a> <a href="/Git-Repository-Proj/labSem1/First_Javascript_Lab.pdf" target="_blank"> Lab1.pdf</a></li>
      		<li onclick="funcDom('JSLab2')">Lab2 (forms) <a href="/Git-Repository-Proj/labSem1/Second_Javascript_Lab.pdf" target="_blank"> Lab2.pdf</a></li>
      		<li onclick="funcDom('JSLab3')">Lab3 (calc) <a href="/Git-Repository-Proj/labSem1/Third_Javascript_Lab.pdf" target="_blank"> Lab3.pdf</a></li>
          <li onclick="funcDom('JSLab4')">Lab4 (Guess Num Game) <a href="/Git-Repository-Proj/labSem1/Forth_Javascript_Lab.pdf" target="_blank"> Lab4.pdf</a></li>
      	</ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4>jQuery</h4>
      <div class="caption">
      	<ul>
      		<li><a href="/Git-Repository-Proj/labSem1/labsHTML/JQLab1.html"> Lab1</a> <a href="/Git-Repository-Proj/labSem1/First_jQuery_Lab.pdf" target="_blank"> Lab1.pdf</a></li>
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