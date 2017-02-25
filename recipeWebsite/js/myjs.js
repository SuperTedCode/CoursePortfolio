// JavaScript Document
var count=0
var cart=0

var addItem = function() {
	var text=$("#fooditem").val();
	var newitem=("<div id=\""+count+"\"><li>"+text+"<button id=\""+count+"\" type=\"button\" onclick=\"del(this)\" class=\"btn btn-sm btn-danger\">Remove</button></li><br></div>")
	$("#list").append(newitem);
	count++
	cart++	
	$("h3[id='cart']").html(cart);
}

var del = function(element) {
	var x= $(element).attr("id");
	$("div[id='"+x+"']").remove();
	cart--
	$("h3[id='cart']").html(cart);
};