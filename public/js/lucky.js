"use strict"

var luckyNumber;
var i = 1;
var zero = 0,
	 one = 0,
	 two = 0,
	 three = 0,
	 four = 0,
	 five = 0;

while (i < 100) {
	i++;
	luckyNumber = Math.floor(Math.random()* 6);
	switch(luckyNumber) {

		case 0:
		zero++;
		break;

		case 1:
		one++;
		break;

		case 2:
		two++;
		break;

		case 3:
		three++;
		break;

		case 4:
		four++;
		break;

		case 5:
		five++;
		break;

	}

}

	console.log("Zero appeared " + zero + " times.");
	console.log("One appeared " + one + " times.");
	console.log("Two appeared " + two + " times.");
	console.log("Three appeared " + three + " times.");
	console.log("Four appeared " + four + " times.");
	console.log("Five appeared " + five + " times.");
	
	


