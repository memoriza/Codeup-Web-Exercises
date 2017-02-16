"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

// TODO: Show an alert message that welcomes the user based on their input.

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

var user;
do{
	var user = prompt("Hello what is your Name?");
	}
while (user === "" || user === null || user === !isNaN);

if (user) {
	alert("Welcome " + user + "!");
}
var pizza = prompt("Do you like pizza? yes/no");

if (pizza == "yes") {
	alert( pizza + " I love pizza too!");
} else if (pizza == "no") {
	alert(pizza + " Pizza is lame!!!");
}
// function that call itself (recursion)
function getName() {
	var name = prompt("Please input your nick name");

	if (name == "") {
		return getName();
	} else {
		return name;
	}
}


