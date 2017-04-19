<?php
$page_title = 'Web Application Development';
include ('includes/header.html');
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Database Technologies</h1>
    <h2>Semester two</h2>
    <p>For this module we focused on relational database systems. We also looked at real world business models and went through the steps of understanding how to convert one to a working virtual model by designing tables on a relational database and its attributes. We also went over Codd's rules and set about proving each rule on a RDB model by running different queries on the "xampp" MariaDB server.</p>
  </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-6">
    <div class="thumbnail">
      <h4 class="title">mySQL</h4>
      <div class="caption">
      	<p>To start we had to create a test database. Below you will find a link to the EMPDEPT.sql file which you will need to run to build the tables and data into your test database. Simply download the file and import it to your database via "phpMyAdmin" on xampp. The second link is for the SQL problem sheet containing the questions and answers on how to perform different mySQL queries against the same database.</p>
        <ul>
          <a href="/Git-Repository-Proj/labSem2/EMPDEPT.sql">EMPDEPT.sql file</a><br>
          <a class="pdf" target="_blank" href="/Git-Repository-Proj/labSem2/mySQLQ&A.pdf">SQL problem sheet</a>
        </ul>
      </div>
    </div>
    </div>

    <div class="col-sm-6">
    <div class="thumbnail">
      <h4 class="title">Car parts Database model</h4>
      <div class="caption">
        <p>For this project we had to design a relational database based on one of a given list of business models. I choose to design my RDB on the Car parts ordering model. Below is a report on the project which contains the SQL statements to create the tables and its attributes with primary and foreign keys. It also contains the data to populate the tables. Three customers have five orders. This data was populated manually into the table and tested by running several queries. Finally there are some queries which were run against the database to prove Codd's rules.</p>
        <ul>
          <a class="pdf" href="/Git-Repository-Proj/CarPartsDatabase/Project.pdf" target="_blank">Project pdf</a><br>
          <a class="pdf" href="/Git-Repository-Proj/CarPartsDatabase/Report.pdf" target="_blank">Car Parts report</a><br>
          <a class="pdf" href="/Git-Repository-Proj/CarPartsDatabase/CarPartsSchema.pdf" target="_blank">Database Schema</a>
        </ul>
      </div>
    </div>
    </div>

</div>
</div>

<?php
include ('includes/footer.html');
?>