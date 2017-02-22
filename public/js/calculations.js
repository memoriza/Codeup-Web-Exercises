"use strict";


// display variables

var leftdisplay = document.getElementById("leftoperand");
var middledisplay = document.getElementById("operator");
var rightdisplay = document.getElementById("rightoperand");

leftdisplay.value = "";
middledisplay.value = "";
rightdisplay.value = "";


// numbers and fucntions

document.getElementById("zero").addEventListener("click", function() {
	 	if (middledisplay.value == "") {
			leftdisplay.value += 0;
		} else {
			rightdisplay.value += 0;
		}
});

document.getElementById("one").addEventListener("click", function () { 
	 	if (middledisplay.value == "") {
			leftdisplay.value += 1;
		} else {
			rightdisplay.value += 1;
		}
});

document.getElementById("two").addEventListener("click", function () {
		if (middledisplay.value == "") {
			leftdisplay.value += 2;
		} else {
			rightdisplay.value += 2;
		}
});
document.getElementById("three").addEventListener("click", function() {
	 	if (middledisplay.value == "") {
			leftdisplay.value += 3;
		} else {
			rightdisplay.value += 3;
		}
});
document.getElementById("four").addEventListener("click",  function() {
		if (middledisplay.value == "") {
			leftdisplay.value += 4;
		} else {
			rightdisplay.value += 4;
		}
});
document.getElementById("five").addEventListener("click", function() {
		if (middledisplay.value == "") {
			leftdisplay.value += 5;
		} else {
			rightdisplay.value += 5;
		}
});
document.getElementById("six").addEventListener("click", function() {
		if (middledisplay.value == "") {
			leftdisplay.value += 6;
		} else {
			rightdisplay.value += 6;
		}
});
document.getElementById("seven").addEventListener("click", function() {
		if (middledisplay.value == "") {
			leftdisplay.value += 7;
		} else {
			rightdisplay.value += 7;
		}
});
document.getElementById("eight").addEventListener("click", function() {
		if (middledisplay.value == "") {
			leftdisplay.value += 8;
		} else {
			rightdisplay.value += 8;
		}
});
document.getElementById("nine").addEventListener("click", function() {
		if (middledisplay.value == "") {
			leftdisplay.value += 9;
		} else {
			rightdisplay.value += 9;
		}
});

// operator variables 

var plusbutton = document.getElementById("plus");
var minusbutton = document.getElementById("minus");
var dividebutton = document.getElementById("divide");
var timesbutton = document.getElementById("times");
var equalsbutton = document.getElementById("equals");
var clearbutton = document.getElementById("clear");
var decimalbutton = document.getElementById("decimal");
var posnegbutton = document.getElementById("posneg");


// operator functions

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

var decimals = function () {
	if (middledisplay.value == "") {
		var display = leftdisplay;
	} else {
		var display = rightdisplay; 
	}
	console.log(typeof display.value);

	if (display.value.indexOf(".") > -1) { 
			display.value = display.value.split(".").join("");
	} 
			display.value += ".";
	}
	
decimalbutton.addEventListener("click", decimals);

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
	} else if (result == NaN || result == undefined) {
	leftdisplay.value = "";
	middledisplay.value = "";
	rightdisplay.value = "";
	}



	leftdisplay.value = result.toFixed(2);
	middledisplay.value = "";
	rightdisplay.value = "";
	
	console.log(result);
} );

clearbutton.addEventListener("click", function() {
	leftdisplay.value = "";
	middledisplay.value = "";
	rightdisplay.value = "";
} );

var posNegative =  function() {
    if (middledisplay.value == "") {
        leftdisplay.value = -leftdisplay.value;
    } else {
    	rightdisplay.value = -rightdisplay.value;
    }
};

posnegbutton.addEventListener("click", posNegative);











	






