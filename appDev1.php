<?php
$page_title = 'Cross Platform Mobile Application Development';
include ('includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Cross Platform Mobile Application Development</h1>
    <h2>Semester one</h2>
    <p>Below you will find a link to my Shopping Tracker and Recipes projects on GitHub as well as some exercises carried out in the labs during semester one of this module. Regards the projects on GitHub you will need to download the files and install ionic locally to run them in your browser. If you have an android phone you can download the APK file and install the application on your device. Alternatively if you have software like BlueStacks to run APKs on your pc you can install it there also.</p>
  </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-4">
    <div class="thumbnail">
      <a href="labSem1/CrossMobAppDevlabExSem1.php"><h4 class="title">Lab exercises</h4></a>
      <div class="caption">
      	<p>Just like the other module in Web Programming we had some lab exercises in <b><em>HTML, CSS, JavaScript & jQuery.</em></b> Most of the labs were in JavaScript. One website we used for some of the labs was <b>jsbin.com</b>. These labs have been added in txt format for you to copy and paste into the site to test and run for yourself. The JavaScript labs have the code highlighted in yellow in each pdf.</p>
      </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <a href="https://github.com/SuperTedCode/Shopping-Tracker"><h4 class="title">Shopping Tracker Assignment</h4></a>
      <div class="caption">
        <p><b>For this assignment the goal was to work in teams to develop an ionic app with the following functionalities;</b></p>
        <ul>
          <li>Each time a button is pressed the item’s price is added to the total.</li>
          <li>By swiping left on an item, two more buttons are displayed:</li>
            <ol>
              <li>One is a button that subtracts the item’s price from the total price – but only if the item is included in the total price.</li>
              <li>One button allows a new item price to be entered. The total must be updated to reflect the new item price if the item’s previous price has been included in the total.</li>
            </ol>
          <li>A second screen should show a picture of the item along with the quantity bought.</li>
        </ul>
      </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <a href="https://github.com/SuperTedCode/RecipesPhoneApp"><h4 class="title">Recipes Project</h4></a>
      <div class="caption">
      	<p><b>For this Project I had to design, develop and test an android mobile application using the Ionic framework and which included the following features;</b></p>
        <ul>
          <li>Tabs</li>
          <li>Side Menu</li>
          <li>It should take some user input and manipulate it in some way to produce useful output for the user</li>
          <li>Unlike the Shopping Tracker app, this app should store data so that when the user exits the app and restarts it previously entered data will be available to him or her</li>
          <li>The app should use two features provided by the mobile device (e.g. contact list, camera, GPS, etc)</li>
        </ul>
        <p style="color: red;"><b>Have a look at the User Manual document first when downloading the files from  GitHub</b></p>
      </div>
    </div>
    </div>
</div>
</div>

<?php
include ('includes/footer.html');
?>