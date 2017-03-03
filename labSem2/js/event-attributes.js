function checkUsername() {
	var username = document.getElementById("username").value;
	var x = username.length;
	if (x < 5) {
		document.getElementById("feedback").innerHTML = "Warning username is less then 5 char";
	}

};