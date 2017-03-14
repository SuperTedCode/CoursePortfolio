var num = 2.9999;
try {
	document.writeln(num.toFixed(25));
}
catch(e){
	document.writeln(e);
}
finally {
	alert("The finally block has run here!");
}

//add a comment here giving details of the error this produces

//The number of digits to appear after the decimal point; 
//this may be a value between 0 and 20, inclusive,
//If this argument is omitted, it is treated as 0.
//In this example the value was 25 which is greater than 20

//add code to handle this error - see Javascript Exception Handling Lab for example on how to do this.