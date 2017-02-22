"use strict";
		
		var display = document.getElementsByClassName("display")[0];

		var numbers = document.getElementsByClassName("number");

		function displayNumber() {
			// append the display's inner text with the innerText of the button clicked
			
			if (middleDisplay.value == "" && leftDisplay != "") {
				leftDisplay.value += this.innerText;
			} else {
				rightDisplay.value += this.innerText;
			}
		}

		for(var i = 0; i < numbers.length; i++) {
			numbers[i].addEventListener("click", displayNumber);

			console.log("added an event listener to the following element: ");
			console.log(numbers[i]);
		}

		document.getElementById("clear").addEventListener("click", function() {
			leftDisplay.innerText = "";
			operatorDisplay.innerText = "";
			rightDisplay.innerText = "";
		});

		document.getElementById("equals").addEventListener("click", function() {
			// check the operatorDisplay
			// if operatorDisplay is "+"
			// do math on leftDisplay + rightDisplay 
			// update left display with the result
			// clear out right display and operator display
		});