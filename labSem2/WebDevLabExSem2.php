<?php
$page_title = 'Lab Excercises for Semester two';
include ('../includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <a href="/Git-Repository-Proj/webDev2.php"><h2>Web Application Development</h2></a>
    <h3>Lab exercises for semester two:</h3>
  </div>
</div>

<div class="container-fluid">
<div class="row">
    
    <div class="col-sm-3">
    <div class="thumbnail">
      <h4 class="title">Objects and Events</h4>
      <div class="caption">
        <ul>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/object-literal.html">Object-Literal</a></li>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/object-constructor.html">Object-Constructor</a></li><a class="pdf" href="/Git-Repository-Proj/labSem2/JavaScriptObjectsExercise1.pdf" target="_blank">Objects.pdf</a>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/multiple-objects.html">Mul Obj's</a></li><a class="pdf" href="/Git-Repository-Proj/labSem2/JavaScriptObjectsExercise2.pdf" target="_blank">Mul Obj's.pdf</a>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/event-attributes.html">Events-Attributes</a></li>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/event-handler.html">Events-Handler</a></li>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/event-listener.html">Events-Listener</a></li><a class="pdf" href="/Git-Repository-Proj/labSem2/JavaScriptEventsLab1.pdf" target="_blank">Events.pdf</a>
          
        </ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4 class="title">Local/Session Storage</h4>
      <div class="caption">
      	<ul>
      		<li onclick="funcDom('local&Session-storage')">Local and Session storage lab</li><a class="pdf" href="/Git-Repository-Proj/labSem2/JavaScriptWebStorageExercise.pdf" target="_blank">Storage lab pdf</a><p><em>In chrome developer tools (ctrl+shift+j) you can view the local and session storage under the application tab.</em></p>
      	</ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4 class="title">AJAX</h4>
      <div class="caption">
      	<ul>
      		<li><a href="/Git-Repository-Proj/labSem2/labsHTML/Ajax.html">Ajax webpage</a></li><a class="pdf" href="/Git-Repository-Proj/labSem2/FirstAJAXLab.pdf" target="_blank"> HTML.pdf</a><br><a class="pdf" href="/Git-Repository-Proj/labSem2/FirstJSONPLab.pdf" target="_blank">JSONP.pdf</a><p>The webpage above includes the three labs where the data source for each is in HTML, JSON & XML. Another lab uses JSONP (as in "JSON with Padding"), a method commonly used to bypass the cross-domain policies in web browsers. The last lab is XML repeated again using jQuery.  Please view the js code in <em>"C:\xampp\htdocs\Git-Repository-Proj\labSem2\js\Ajax.js"</em></p>

      	</ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4 class="title">JQuery</h4>
      <div class="caption">
      	<ul>
      		<li><a href="/Git-Repository-Proj/labSem2/labsHTML/jQueryLab1.html">Lab1 (fade-in/remove) </a></li><a class="pdf" href="/Git-Repository-Proj/labSem2/First_jQuery_Lab.pdf" target="_blank"> Lab1.pdf</a>
      		<li><a href="/Git-Repository-Proj/labSem2/labsHTML/jQueryLab2.html">Lab2 (looping) </a></li><a class="pdf" href="/Git-Repository-Proj/labSem2/Second_jQuery_Lab.pdf" target="_blank"> Lab2.pdf</a>
      		<li><a href="/Git-Repository-Proj/labSem2/labsHTML/jQueryLab3validateCreditCard.html">Lab3 (Credit Card) </a></li><a class="pdf" href="/Git-Repository-Proj/labSem2/Third_jQuery_Lab.pdf" target="_blank"> Lab3.pdf</a>
      	</ul>
      </div>
    </div>
    </div>

</div>

<div class="row">
    
    <div class="col-sm-3">
    <div class="thumbnail">
      <h4 class="title">PHP with mySQL Part1</h4>
      <div class="caption">
        <ul>
          <li onclick="funcPHP('phpLab1')">PHP lab1</li>
          <a class="pdf" href="/Git-Repository-Proj/labSem2/First_PHP_Lab.pdf" target="_blank">PHP Lab1 pdf</a>
          <li onclick="funcDom('phpLab2')">PHP Lab 2 Ex2</li><a class="pdf" href="/Git-Repository-Proj/labSem2/Second_PHP_Lab.pdf" target="_blank">PHP lab2 pdf</a>
          <p>Here are some PHP examples to show how it is used i.e. comments, variables, functions and some SQL.</p>
          <p style="color: red"><em>Note MySQL needs to be running for these labs along with the 'web_apps' database created as outlined in the PHP Lab1 PDF.</em></p>
          
        </ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4 class="title">PHP with mySQL Part2</h4>
      <div class="caption">
        <ul>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/phpLab3register.php">PHP Lab 3</a></li>
          <a class="pdf" href="/Git-Repository-Proj/labSem2/Third_PHP_Lab.pdf" target="_blank">PHP Lab3 pdf</a>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/phpLab4login.php">PHP Lab 4</a></li>
          <a class="pdf" href="/Git-Repository-Proj/labSem2/Fourth_PHP_Lab.pdf" target="_blank">PHP lab4 pdf</a>
          <p>Here are some PHP examples to write entries to the 'web_apps' database using some embedded SQL and then showing how these entries can be tested for login.</p>          
        </ul>
      </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="thumbnail">
      <h4 class="title">Sessions and Cookies with PHP</h4>
      <div class="caption">
        <ul>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/PHPLab5storage.php">PHP Lab 5 Cookies</a></li>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/PHPLab5SessionStorage.php">PHP Lab 5 Sessions</a></li>
          <a class="pdf" href="/Git-Repository-Proj/labSem2/Fifth_PHP_Lab.pdf" target="_blank">PHP lab5 pdf</a>
          <p>Here are some PHP examples to show how Sessions and cookies can be used. <em>Cookies can be checked the same way in chrome dev tools ("ctr+shift+j"), under the application tab</em></p>          
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