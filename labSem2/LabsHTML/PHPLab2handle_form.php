<?php
//page title for header file
$page_title = 'PHP Form Handler';
include('PHPLab2header.html');

	if(empty($_GET["name"]) || empty($_GET["comments"]) || empty($_GET["email"])) {
		echo "You need to populate Name, email and Comments <br><br>";
		echo '<button onclick="history.go(-1);">Back</button>';
	}

	else {
		echo "Thank you, <b>" . $_GET["name"] . "</b> for the following comments:<br><tt>" . $_GET["comments"] . "</tt><br><br>We will reply to you at <em>" . $_GET["email"] . "</em><br><br>";
		$interests_sel="";

		if(isset($_GET["interests"])) {
			foreach ($_GET["interests"] as $value) {
				$interests_sel .= $value . "<br>";
			}
			echo "Your interests are:<br>" . $interests_sel;
			echo '<br><button onclick="history.go(-1);">Back</button>';
		}
		else {
			echo "You have no interests";
			echo '<br><button onclick="history.go(-1);">Back</button>';
		}


	}

include('PHPLab2footer.html');
?> 

