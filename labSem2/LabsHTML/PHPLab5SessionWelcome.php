<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
    <title>PHP lab5 Sessions</title>
    <!-- adding the header HTML to the webpage -->
    <p style="font-family:Georgia, serif; padding:1em; padding-left:55px; background-color: #a4c2f4; text-align: center; border: solid 2px; color: white;"><a href="/Git-Repository-Proj/labSem2/WebDevLabExSem2.php" style="color: white;">Back to Lab excercises</a></p>
    <!-- end of header HTML -->   
 </head>

 <?php
	session_start();
	if(isset($_SESSION["username"])) {
		echo 'Welcome '.$_SESSION["username"];
	}
	else{
		echo 'Not sure who you are ?';
	}

echo '<form action="PHPLab5SessionStorage.php" method="post">';
echo '<input type="submit" name="home" value="Home">';
echo '</form>';

?>