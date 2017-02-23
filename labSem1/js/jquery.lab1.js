//function for Ex4***********************************
$(function() 
{
	$("#ex4").css("background-color","#CCFFFF");
	$("form[name=ex1] input").hide();

});




$(function()
	{
		$("input[value=male]").removeAttr("checked");
		$("input[value=female]").attr("checked", "checked");
	
	var div=$("<div></div>")
	var h1=$("<h1></h1>").text("JQuery Appended elements")
	div.append(h1);
	$("body").append(div);
	
	
	
	}
);
