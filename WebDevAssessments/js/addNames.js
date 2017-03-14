//create functions for add(), clear_storage() and names object
//add function to use localStorage object.

function names (fName, lName) {
	this.fName = fName;
	this.lName = lName;
};


function add() {
	var key = "key"+localStorage.length;
	var x = new names(document.name_form.fname.value,document.name_form.lname.value);
	localStorage.setItem(key,JSON.stringify(x));
	 window.location.reload();
};

function clear_storage() {
	localStorage.clear();
};