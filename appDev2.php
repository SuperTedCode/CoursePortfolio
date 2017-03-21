<?php
$page_title = 'Integrated Mobile Application Development';
include ('includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Integrated Mobile Application Development</h1>
    <h2>Semister two</h2>
    <p>As with Semester one we created some projects and group assessments for this module using Ionic. This includes a NASA picture of the day android application and a To Do List application using myjson to store data on a thrid party resource. The lab excercises are done using "jsBin.com" for java script, "codepen.io/pen" for the angularJS excercises and finally ionic.</p>
  </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-4">
    <div class="thumbnail">
      <a href="labSem2/IntMobAppDevlabExSem2.php"><h4 class="title">Lab exercises</h4></a>
      <div class="caption">
      	<p>The labs included here cover Objects, Events, local & session storage, AJAX and PHP. The PHP labs will be accessing the database 'web_apps' which you should have created when following the read me installation guide before installing the website. If you have not created this database please do so now.</p>
      </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <h4 class="title">Assessments</h4>
      <div class="caption">
        <p>For a Group assigment we had to create a mobile application which displays data from the NASA Astronomy Picture of the Day archive which is made public via an open API request. The link will take you to Github where you can view the files or download them if you wish to install the application.</p>
        <ul>
          <li><a href="https://github.com/SuperTedCode/NASA---APOD">NASA - APOD</a></li><a class="pdf" href="/Git-Repository-Proj/AppDev2Assessments/NASA.pdf" target="_blank">Names Assessment pdf</a>
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