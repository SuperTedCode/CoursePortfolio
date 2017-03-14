//add an click event listener to the table of nameList.html
var table = document.getElementById("t1");
table.addEventListener('click', removeItem, false);
//event listener to invoke this function:
function removeItem(){
	// Add code here to remove rows clicked on.
	if(event.target.nodeName == 'B'){
		var dEl = event.target.parentNode;//td node
		var rEl = dEl.parentNode;//tr node
		var tEl = rEl.parentNode;//table node
		tEl.removeChild(rEl);
		console.log(rEl.firstChild);
		console.log(rEl.firstChild.getAttribute("id"));
		//Remove in storage by key value obtained in id attribute in FIRST!! td of row
		localStorage.removeItem(rEl.firstChild.getAttribute("id"));
	} else {
	var rEl = event.target.parentNode;
	var tEl = rEl.parentNode;
	tEl.removeChild(rEl);
	localStorage.removeItem(rEl.firstChild.getAttribute("id"));
	//don't forget to stop propagation
	event.preventDefault();
	//rememeber event object
	}
};