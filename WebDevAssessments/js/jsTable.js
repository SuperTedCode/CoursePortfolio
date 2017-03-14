var xhr = new XMLHttpRequest();
xhr.open('GET','data/league_table.json',true);
xhr.send(null);

xhr.onload = function() {
	if(xhr.status === 200) {
	var	tableObj = JSON.parse(xhr.responseText);
	var content = "";
	content += "<table cellspacing='0'>";
	content += "<thead><tr><th>Pos</th><th>Team</th>";
	content += "<th>P</th><th>Pts</th><th>F</th><th>A</th><th>GD</th>";
	content += "<th>W</th><th>D</th><th>L</th></tr></thead><tbody>"; //builds the headers and start body
		
	for(var i=0;i<tableObj.standing.length;i++) {
		
		if(i%2) {
			content += "<tr class='even'>"; 
		}

		else { content+="<tr>"; }
		


		content += "<td>"+tableObj.standing[i].Pos+"</td>"; //tr starts at each loop
		content += "<td>"+tableObj.standing[i].Team+"</td>";
		content += "<td>"+tableObj.standing[i].P+"</td>";
		content += "<td>"+tableObj.standing[i].Pts+"</td>";
		content += "<td>"+tableObj.standing[i].F+"</td>";
		content += "<td>"+tableObj.standing[i].A+"</td>";
		content += "<td>"+tableObj.standing[i].GD+"</td>";
		content += "<td>"+tableObj.standing[i].W+"</td>";
		content += "<td>"+tableObj.standing[i].D+"</td>";
		content += "<td>"+tableObj.standing[i].L+"</td></tr>"; //close the tr
	}
	//close the table body&table tags when looped through all the objects
	content += "</tbody></table>";

	//update page with new content
	document.getElementById("content").innerHTML = content;
}
};