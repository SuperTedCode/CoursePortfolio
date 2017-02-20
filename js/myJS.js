//Function for DOM Lab 1
function f1()
			{
				var x = document.getElementById("main");
				var y = document.getElementsByTagName("P");
				var z = document.getElementsByClassName("ex");
				document.getElementById("demo").innerHTML ='TEST: '
				+ x.innerHTML
				+ ' '
				+ y[0].innerHTML
				+ ' '
				+ y[1].innerHTML
				+ ' '
				+ y[2].innerHTML
				+ ' '
				+ z[0].innerHTML;
			};

 function funcDom1(file) {
 	var xhr = new XMLHttpRequest();
	xhr.open('GET','labsHTML/'+file+'.html',true);
	xhr.send(null);
	console.log("funcDom1");

	xhr.onload = function() {
		var el = document.getElementById("labSem1Content");
		console.log(xhr.responseText);
		el.innerHTML = xhr.responseText;
	}

 };



