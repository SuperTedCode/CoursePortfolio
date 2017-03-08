<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
    <title>PHP lab5 Sessions</title>
    <!-- adding the header HTML to the webpage -->
    <p style="font-family:Georgia, serif; padding:1em; padding-left:55px; background-color: #a4c2f4; text-align: center; border: solid 2px; color: white;"><a href="/Git-Repository-Proj/labSem2/WebDevLabExSem2.php" style="color: white;">Back to Lab excercises</a></p>
    <!-- end of header HTML -->   
 </head>
<body>

 <h1>PHP lab5 Sessions</h1>

	<?php
	
		/* Add username to a cookie. This code will be invoked when the "Add to cookie" button is clicked.
		   The cookie should be set to expire after 1 hour. 	
		   HINT: refer to slide 32 of PHP Lecture on moodle */
		if(isset($_POST["add"])) {
			if(isset($_POST['username'])) {
				session_start();
				$_SESSION["username"] = $_POST['username'];
			}
		}
		/* Add code which is invoked when the "Clear Cookie" button is clicked
		   The code should ensure the Cookie is destroyed 
		   HINT: refer to slide 32 of PHP Lecture on moodle */
		if(isset($_POST["clear"])) {
			session_start();
			$_SESSION = array();
			session_destroy();
		}
	?>
	
	<form action="PHPLab5SessionStorage.php" method="post">
		<input type="text" name="username">
		<input type="submit" name="add" value="Add to session">
		<input type="submit" name="clear" value="Clear session">
	</form>
	<br>
	<form action="PHPLab5SessionWelcome.php">
		<input type="submit" name="welcome" value="Go to welcome page">
	</form>
	
</body>
</html>
	
