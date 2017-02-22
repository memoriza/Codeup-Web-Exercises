"use strict";
var leftdisplay = document.getElementById("leftoperand");
var middledisplay = document.getElementById("operator");
var rightdisplay = document.getElementById("rightoperand");
// var display = document.getElementsByClassName("display")[0];

var numbers = document.getElementsByClassName("number");

function displayNumber() {
	if (middledisplay == "") {
		leftdisplay.value += numbers.value;
	} else if {
		rightdisplay.value += numbers.value;
	}


}

for (var i = 0; i < numbers.length; i++) {
	numbers[i].addEventtListener("click", displayNumber);
}

document.getElementById

var plusbutton = document.getElementById("plus");
var minusbutton = document.getElementById("minus");
var dividebutton = document.getElementById("divide");
var timesbutton = document.getElementById("times");
var equalsbutton = document.getElementById("equals");
var clearbutton = document.getElementById("clear");

plusbutton.addEventListener("click", function () {
	middledisplay.value = "+";
	  

} ); 
minusbutton.addEventListener("click", function () {
	middledisplay.value = "-";
	 
} );
dividebutton.addEventListener("click", function () {
	middledisplay.value = "/";
	 
} );
timesbutton.addEventListener("click", function () {
	middledisplay.value = "*";
	
} );
equalsbutton.addEventListener("click", function () { 


	var result; 

	if (middledisplay.value == "+" ) {
		 var result = parseFloat(leftdisplay.value) + parseFloat(rightdisplay.value); 
	} else if (middledisplay.value == "-") {
		 var result = parseFloat(leftdisplay.value) - parseFloat(rightdisplay.value); 
	} else if (middledisplay.value == "*") {
		var result = parseFloat(leftdisplay.value) * parseFloat(rightdisplay.value);
	} else if (middledisplay.value == "/") {
		var result = parseFloat(leftdisplay.value) / parseFloat(rightdisplay.value);
	} 

	leftdisplay.value = result;
	middledisplay.value = "";
	rightdisplay.value = "";
	
	console.log(result);
} );



clearbutton.addEventListener("click", function()
{
	leftdisplay.value = "";
	middledisplay.value = "";
	rightdisplay.value = "";
} );