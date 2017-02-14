"use strict"

var luckyNumber = Math.floor(Math.random()* 6);
var receipt = 60;

switch (luckyNumber) {

	case 0: 
	console.log("Final Price with nothing off sucker. $" + receipt);
	break;

	case 1:
	console.log("Final Price with 10% off! $" + (receipt - (.1 * receipt)));
	break;

	case 2: 
	console.log("Final Price with 25% off! $" + ((receipt - (.25 * receipt))));
	break;

	case 3: 
	console.log("Final Price with 35% off! $" + ((receipt - (.35 * receipt))));
	break;

	case 4: 
	console.log("Final Price with 50% off! $" + ((receipt - (.50 * receipt))));
	break;

	case 5: 
	console.log("Free ! $" + ((receipt - (1.0 * receipt))));
	break;
}

var monthsInYear = Math.floor(Math.random()* 13);

	switch (monthsInYear) {

		case 1:
		console.log("January");

		break;

		case 2:
		console.log("February");
		break;

		case 3:
		console.log("March");
		break;

		case 4:
		console.log("April");
		break;

		case 5:
		console.log("May");

		break;

		case 6:
		console.log("June");
		break;

		case 7:
		console.log("July");
		break;

		case 8:
		console.log("August");
		break;

		case 9:
		console.log("September");
		break;

		case 10:
		console.log("October");
		break;

		case 11:
		console.log("November");
		break;

		case 12:
		console.log("December");	
		break;

		default:
		console.log("number is 0 or 13 so no month to show :)");

	}



	
