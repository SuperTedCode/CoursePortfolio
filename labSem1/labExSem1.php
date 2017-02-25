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
      <h4 class="title">DOM</h4>
      <div class="caption">
        <ul>
          <li onclick="funcDom('dom1')">Lab1</li><a class="pdf" href="/Git-Repository-Proj/labSem1/First_DOM_Lab.pdf" target="_blank"> Lab1.pdf</a>
          <li onclick="funcDom('dom2_1')">Lab2.1</li><a class="pdf" href="/Git-Repository-Proj/labSem1/Second_DOM_Lab.pdf" target="_blank"> Lab2.pdf</a>
          <li onclick="funcDom('dom2_2')">Lab2.2</li>
          <li onclick="funcDom('dom2_3')">Lab2.3</li>
        </ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4 class="title">JavaScript</h4>
      <div class="caption">
      	<ul>
      		<li><a href="/Git-Repository-Proj/labSem1/labsHTML/JSLab1.html">Lab1</a></li><a class="pdf" href="/Git-Repository-Proj/labSem1/First_Javascript_Lab.pdf" target="_blank"> Lab1.pdf</a>
      		<li onclick="funcDom('JSLab2')">Lab2 (forms)</li><a class="pdf" href="/Git-Repository-Proj/labSem1/Second_Javascript_Lab.pdf" target="_blank"> Lab2.pdf</a>
      		<li onclick="funcDom('JSLab3')">Lab3 (calc)</li><a class="pdf" href="/Git-Repository-Proj/labSem1/Third_Javascript_Lab.pdf" target="_blank"> Lab3.pdf</a>
          <li onclick="funcDom('JSLab4')">Lab4 (Guess Num Game)</li><a class="pdf" href="/Git-Repository-Proj/labSem1/Forth_Javascript_Lab.pdf" target="_blank"> Lab4.pdf</a>
      	</ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4 class="title">jQuery</h4>
      <div class="caption">
      	<ul>
      		<li><a href="/Git-Repository-Proj/labSem1/labsHTML/JQLab1to3.html">Lab1 & 2</a></li><a class="pdf" href="/Git-Repository-Proj/labSem1/First_jQuery_Lab.pdf" target="_blank"> Lab1.pdf</a><a class="pdf" href="/Git-Repository-Proj/labSem1/Second_jQuery_Lab.pdf" target="_blank"> Lab2.pdf</a>
      	</ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4 class="title">Bootstrap</h4>
      <div class="caption">
      	<ul>
      		<li><a href="/Git-Repository-Proj/labSem1/labsHTML/BootLab1.html">Lab1 (Layouts) </a></li><a class="pdf" href="/Git-Repository-Proj/labSem1/First_Bootstrap_Lab.pdf" target="_blank"> Lab1.pdf</a>
      		<li><a href="/Git-Repository-Proj/labSem1/labsHTML/BootLab2.html">Lab2 (Buttons/panels/tables..etc) </a></li><a class="pdf" href="/Git-Repository-Proj/labSem1/Second_Bootstrap_Lab.pdf" target="_blank"> Lab2.pdf</a>
      		<li><a href="/Git-Repository-Proj/labSem1/labsHTML/BootLab3.html">Lab3 </a></li><a class="pdf" href="/Git-Repository-Proj/labSem1/Third_Bootstrap_Lab.pdf" target="_blank"> Lab3.pdf</a>
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