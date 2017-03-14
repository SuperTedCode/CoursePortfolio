$(function() {
	var $content="";
	$content += "<table cellspacing='0'>";
	$content += "<thead><tr><th>Pos</th><th>Team</th>";
	$content += "<th>P</th><th>Pts</th><th>F</th><th>A</th><th>GD</th>";
	$content += "<th>W</th><th>D</th><th>L</th></tr></thead><tbody>"; //builds the headers and start body

	$.getJSON("data/league_table.json", function(tableObj) {
  
			$.each(tableObj.standing, function($each) {
				if($each%2) {
					$content += "<tr class='even'>";
				}
				else { $content+="<tr>"; }
		
			$content += "<td>"+tableObj.standing[$each].Pos+"</td>"; //tr starts at each loop
			$content += "<td>"+tableObj.standing[$each].Team+"</td>";
			$content += "<td>"+tableObj.standing[$each].P+"</td>";
			$content += "<td>"+tableObj.standing[$each].Pts+"</td>";
			$content += "<td>"+tableObj.standing[$each].F+"</td>";
			$content += "<td>"+tableObj.standing[$each].A+"</td>";
			$content += "<td>"+tableObj.standing[$each].GD+"</td>";
			$content += "<td>"+tableObj.standing[$each].W+"</td>";
			$content += "<td>"+tableObj.standing[$each].D+"</td>";
			$content += "<td>"+tableObj.standing[$each].L+"</td></tr>"; //close the tr
			});
		//close the table body&table tags when looped through all the objects
		$content += "</tbody></table>";
		$("#content").html($content);
		})
	});