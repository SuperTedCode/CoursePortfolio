$(function() {
	$isValid=false; //global variable for validator result

	//credit car validator
	$('#cc_number').validateCreditCard(function(result) {
		result.valid ? $isValid=true : $isValid=false;
	});

	//Confirm button
	$('.Confirm').on('click', function() {
		$isValid ? alert("Confirm! Credit card was validated!!") : alert("Not valid CC");
	});
});