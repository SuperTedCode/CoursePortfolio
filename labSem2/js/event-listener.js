function checkUsername() {
	var username = document.getElementById("username").value;
	var x = username.length;
	if (x < 5) {
		document.getElementById("feedback").innerHTML = "Warning username is less then 5 char";
	}

};

var el = document.getElementById("username");
el.addEventListener('blur', checkUsername, false);