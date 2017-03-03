<?php
$page_title = 'Web Application Development';
include ('includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Web Application Development</h1>
    <h2>Semister two</h2>
    <p>I have included some labs, Assessments and the final project for this module. Again the project is accsssed through Github.</p>
  </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-4">
    <div class="thumbnail">
      <a href="labSem2/WebDevLabExSem2.php"><h4 class="title">Lab exercises</h4></a>
      <div class="caption">
      	<p>The labs included here cover Objects, Events, local & session storage, AJAX and PHP. The PHP labs will be accessing the database 'web_apps' which you should have created when following the read me installation guide before installing the website. If you have not created this database please do so now.</p>
      </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <h4 class="title">Assessments</h4>
      <div class="caption">
        <p>There are two links included below. For the first Assessment we had to create a webpage to store 'names objects' into local storage. Another page was to then list the names from storage in a table. Also when a row in the table is clicked, that row is to be removed from both the table and locat storage.<br>
        The second was on AJAX,jQuery and JSONP. Note these are linked to the local host with a working webserver. <b>The links below will not work unless you have apache up and running in XAMP.</p>
        <ul>
          <li></li>
        </ul>
      </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <a href="https://github.com/SuperTedCode/FineFoodsAtHome"><h4 class="title">Fine Foods At Home Website</h4></a>
      <div class="caption">
      	<p><b><a class="pdf" href="/Git-Repository-Proj/labSem2/WebpplicationDevelopmentProject.pdf" target="_blank">Website Project 2016 pdf</a></b><br>
        The link above will take you to my GitHub account where the project is available to download. Please follow the installation giude carefully.<br>
        <em>This website was tested on Chrome. Also as external style sheets are in use, connection to the internet is needed when testing the site.<em></p>
      </div>
    </div>
    </div>
</div>
</div>

<?php
include ('includes/footer.html');
?>