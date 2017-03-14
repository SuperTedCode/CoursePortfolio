$(function(){
	var $newContent="";
	$newContent += '<div><h2>Seasons</h2><ul>';//start the Div - Ul tags
	
$.ajax({
	url:"https://rawgit.com/obrienke1/web_application_development/master/jsonp.js",
	jsonp: "callback",
	dataType:"jsonp",
	jsonpCallback: "showSeasons",
	success: function showSeasons(array) {
			
		$.each( array.seasons, function($i) {	
			
			  $newContent += '<li><a href="#">' + array.seasons[$i].season + '</a></li>';
			});
		$newContent+= "</ul></div>";
		$("#content").html($newContent);
		},
		error: function() {
			alert("The URL could not be accessed.");
		} 
});
});