<?php
$page_title = 'Lab Excercises for Semester two';
include ('../includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <h2>Web Application Development</h2>
    <h3>Lab excercises for semester two:</h3>
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
      <h4 class="title">Jquery</h4>
      <div class="caption">
      	<ul>
      		<li><a href="/Git-Repository-Proj/labSem2/labsHTML/jQueryLab1.html">Lab1 (fadein/remove) </a></li><a class="pdf" href="/Git-Repository-Proj/labSem2/First_jQuery_Lab.pdf" target="_blank"> Lab1.pdf</a>
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
      <h4 class="title">PHP with mySQL</h4>
      <div class="caption">
        <ul>
          <li onclick="funcPHP('phpLab1')">PHP lab1</li>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/object-constructor.html">Object-Constructor</a></li><a class="pdf" href="/Git-Repository-Proj/labSem2/JavaScriptObjectsExercise1.pdf" target="_blank">Objects.pdf</a>
          <li><a href="/Git-Repository-Proj/labSem2/labsHTML/multiple-objects.html">Mul Obj's</a></li><a class="pdf" href="/Git-Repository-Proj/labSem2/JavaScriptObjectsExercise2.pdf" target="_blank">Mul Obj's.pdf</a>
          <p>Here are some PHP examples to show how it is used i.e. comments, variables, functions, arithmetic operations, Sessions, cookies and some SQL.</p>
          <p style="color: red"><em>Note MySQL needs to be running for these labs along with the 'web_apps' Database created as outlined in the PDF.</em></p>
          
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