<?php
$page_title = 'Integrated Mobile Application Development';
include ('includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Integrated Mobile Application Development</h1>
    <h2>Semester two</h2>
    <p>As with Semester one we created some projects and group assessments for this module using Ionic. This includes a NASA picture of the day android application and a Online reminder application using Myjson to store data on a third party resource. The lab exercises are done using "jsBin.com" for java script, "codepen.io/pen" for the angularJS exercises and finally ionic.</p>
  </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-4">
    <div class="thumbnail">
      <a href="labSem2/IntMobAppDevlabExSem2.php"><h4 class="title">Lab exercises</h4></a>
      <div class="caption">
      	<p>The following labs cover JavaScript, AngularJS and some ionic applications. The Ionic labs have been edited to run on the browser here so you do not have to install Ionic.</p>
      </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <h4 class="title">Assessments</h4>
      <div class="caption">
        <p>For a Group assignment we had to create a mobile application which displays data from the NASA Astronomy Picture of the Day archive which is made public via an open API request. The link will take you to Github where you can view the files or download them if you wish to install the application.</p>
        <ul>
          <li><a href="https://github.com/SuperTedCode/NASA---APOD">NASA - APOD</a></li><a class="pdf" href="/Git-Repository-Proj/AppDev2Assessments/NASA.pdf" target="_blank">Names Assessment pdf</a>
        </ul>
      </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <a href="https://github.com/SuperTedCode/SingleOnlineReminder"><h4 class="title">Single Online Reminder</h4></a>
      <div class="caption">
      	<p><b><a class="pdf" href="/Git-Repository-Proj/OnlineReminder/ReminderProjectApp.pdf" target="_blank">Project pdf</a></b><br>
        The link above will take you to my GitHub account where the project is available to download. You can look over the files in the JS folder to see how the application works. You can use the APK file to run the application on a compatible phone or an Android emulator like BlueStacks. This application was developed using Ionic for Android@5.1.1</p>
      </div>
    </div>
    </div>
</div>
</div>

<?php
include ('includes/footer.html');
?>