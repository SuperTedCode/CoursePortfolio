//add a load event listener to the body of nameList.html
var listPage = document.getElementById("namesListBody");
listPage.addEventListener('load',populate_page(),false);



//event listener to invoke this function:
function populate_page() {
	
	//Add code here to complete exercise to create the table and add it to div element on the page
	var nameDiv = document.getElementById("nameList");
	var newTable = "<table border='1px solid black' id='t1'><tr><td>First Name</td><td>Surname</td></tr>";
	
	for (i=0;i<localStorage.length;i++) {
		var y = localStorage.getItem("key"+i)
		if (y!=null){ //In case an item in storage is removed then the key will return null
		var yname = JSON.parse(y);
		var fname = yname.fName;
		var lname = yname.lName;
		console.log(fname+" "+lname);
		if (i==0) {
			var string = ("<tr><td id='key"+i+"'><b>"+fname+"</b></td><td><b>"+lname+"</b></td></tr>");
		}
		else {
			string = ("<tr><td id='key"+i+"'>"+fname+"</td><td>"+lname+"</td></tr>");
		}
		newTable += string;
		};
	}
	newTable += "</table";
	nameDiv.innerHTML = newTable;
	console.log("Here is the list of storage Items");
	for(var z in localStorage) {
		console.log(localStorage[z]);
	};
	console.log(localStorage.key(1));
	//var aKeyName = storage.key(key); 
	//when passed a number n, returns the name of the nth key in the storage. 
	//Will try and use the above as a way of populating page after deleting some
	//localStorage items and re-populating page


	//added the following to create a reference to js/clickEvent.js within <head> tag.
	var clickEventRef=document.createElement('script');
	clickEventRef.setAttribute("type","text/javascript");
	clickEventRef.setAttribute("src","/Git-Repository-Proj/WebDevAssessments/js/clickEvent.js");
	document.getElementsByTagName("head")[0].appendChild(clickEventRef);
};
