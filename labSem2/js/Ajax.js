//*********************************************** HTML **********************
var xhr1 = new XMLHttpRequest();
xhr1.open('GET','data/data.html',true);
xhr1.send(null);

xhr1.onload = function() {
	var el = document.getElementById("contentHTML");
	el.innerHTML = xhr1.responseText;
};

//*********************************************** JSON **********************
var xhr2 = new XMLHttpRequest();
xhr2.open('GET','data/data.json',true);
xhr2.send(null);

xhr2.onload = function() {
	if(xhr2.status === 200) {
		responseObject = JSON.parse(xhr2.responseText);
	
	var content = "";
	for(var i=0;i<responseObject.events.length;i++) {
		content += "<div class='event'>";
		content += "<img src='"+responseObject.events[i].map+"'";
		content += "alt ='"+responseObject.events[i].location+"'/>";
		content += "<p><b>"+responseObject.events[i].location+"</b><br>";
		content += responseObject.events[i].date+"</p>";
		content += "</div>";
	}

	//update page with new content
	document.getElementById("contentJSON").innerHTML = content;
}
};

//*********************************************** XML **********************
var xhr3 = new XMLHttpRequest();
xhr3.open('GET','data/data.xml',true);
xhr3.send(null);

xhr3.onload = function() {
	if(xhr3.status === 200) {
		var response = xhr3.responseXML;
		var events = response.getElementsByTagName('event') //find <event> elements
	
	var di1 = 'map';
	var di2 = 'location';
	var di3 = 'date';
	//build string with content
	var content = "";
	for(var i=0;i<events.length;i++) {
		content += "<div class='event'>";
		content += "<img src='"+events[i].getElementsByTagName(di1)[0].firstChild.nodeValue+"'";
		content += "alt ='"+events[i].getElementsByTagName(di2)[0].firstChild.nodeValue+"'/>";
		content += "<p><b>"+events[i].getElementsByTagName(di2)[0].firstChild.nodeValue+"</b><br>";
		content += events[i].getElementsByTagName(di3)[0].firstChild.nodeValue+"</p>";
		content += "</div>";
	}

	//update page with new content
	document.getElementById("contentXML").innerHTML = content;
}
};



//*********************************************** XML-jQuery **********************


$(document).ready(function() {
	var $newContent="";
	$.ajax({
		type: "GET",
		url: "data/data.xml",
		dataType: "xml",
		success: function(xml) {
			$(xml).find('event').each(function() {
				$newContent += '<div class="event">';
				$newContent += '<img src="' + $(this).find('map').text()+'"';
				$newContent += 'alt="' + $(this).find('location').text() + '" />';
				$newContent += '<p><b>' + $(this).find('location').text() + '</b><br>';
				$newContent += $(this).find('date').text() + '</p>';
				$newContent += '</div>';
			})
			$('#contentXMLjQuery').html($newContent);

		},
		error: function() {
			alert("The XML file could not be accessed.");
		}
	});
	
});

//******************************************* JSONP ********************************8
function showEvents(data) {	//callback when JSON Loads
	var newContent = "";	//variable to hold HTML

	//build up HTML tags structure to hold the JSON data
	for (var i =0; i < data.events.length;i++) { //loop through Object
		newContent += "<div class='event'>";
		newContent += "<img src='/Git-Repository-Proj/labSem2/"+data.events[i].map+"'";
		newContent += "alt='"+data.events[i].location+"'/>";
		newContent += "<p><b>"+data.events[i].location+"</b><br>";
		newContent += data.events[i].date + "</p></div>";
	}
	//update content to page
	document.getElementById("contentJSONP").innerHTML = newContent;
};