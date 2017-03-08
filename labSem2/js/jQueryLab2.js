/* old code 

var liEl = document.getElementsByClassName("hot");
for (var i = 0; i < liEl.length; i++){
	liEl[i].classList.add("favorite");
	if(liEl[i].firstChild.nodeName.toLowerCase() == "em"){
		liEl[i].firstChild.classList.add("seasonal");
	}
}

*/

$('.hot').addClass("favorite");

$('em').addClass("seasonal");


//EX 3

$(document).ready(function() {

	$('#page').append("<p>P tag entered </p>");
});

