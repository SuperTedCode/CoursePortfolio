<?php
$page_title = 'Web Application Development';
include ('includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Web Application Development</h1>
    <h2>Semister two</h2>
    <p>????????</p>
  </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-4">
    <div class="thumbnail">
      <a href="labSem1/labExSem1.php"><h4 class="title">Lab exercises</h4></a>
      <div class="caption">
      	<p>Before we started working on assigments and projects we had some lab excercises to first introduce the class to web programming. This included labs in <b><em>HTML, CSS, DOM, JavaScript, jQuery and Bootstrap.</em></b> Some of these labs I have included here. Each lab has a pdf outlining the excercise. Feel free to view each file in a source code editor like "Notepap++" to view the code created to complete each lab.</p>
      </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <a href="shop/shop_intro.html"><h4 class="title">Sports shop website</h4></a>
      <div class="caption">
        <p><b>For this assigment the goal was to create a website that had the following;</b></p>
        <ul>
          <li>Serveral pages that can be easily accessed through a navigation bar on the left.</li>
          <li>Contain a table, unordered list and a orderd list.</li>
          <li>Some styles to animate the table when hovering the mouse over it and various other styles for the links and imagine.</li>
          <li>Finally a structured theme throughout the webpages having a header, navbar, content and footer sections.</li>
        </ul>
      </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <a href="recipeWebsite/index.html"><h4 class="title">Fine foods recipe website</h4></a>
      <div class="caption">
      	<p><b><a class="pdf" href="recipeWebsite/RecipeProject.pdf" target="_blank">Website Assignment April 2016 pdf</a></b><br>
        <b><a class="pdf" href="recipeWebsite/WebsiteAssignmentApril2016.pdf" target="_blank">Website report pdf</a></b><br>
        I have created a recipes website with five internal pages. The user can view three recipes from each page Lunch, Dinner and Dessert. Also included are some relitive external links to Bord Bia and The food Safty Athority Ireland in the nav bar. At the bottom of the home page is a table of short video links on top tips for cooking. The shopping list page contains a user input option to add food items to a list. Any item once added can then be removed if needed. No localstorage was required for the project so the list and cart count will not be saved if the user changes page or hits refresh. As the home page is long I have included a nav content table to jump to three sections on the page. The recipes section on the home page contains links in the three images to the three difdferent pages.<br>
        <em>This website was tested on Chrome. Also as external style sheets are in use, connection to the internet is needed when tested the site.<em></p>
      </div>
    </div>
    </div>
</div>
</div>

<?php
include ('includes/footer.html');
?>