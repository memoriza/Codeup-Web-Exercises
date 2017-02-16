"use strict";

// TODO: Joshua Williams

console.log(hello);

var myNameIs = "Joshua Williams"; 
// TODO:			
function sayHello(myNameIs) { 
	console.log("Hello from " + myNameIs);
}
 sayHello(myNameIs);


// example of function VVVV

// function identify(input) {
// console.log(input);
// 			}


// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.

// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.

// Don't modify the following line
// It generates a random number between 1 and 100 and stores it in random
var random = Math.floor((Math.random()*100)+1);

function isOdd(number) {
	
	//ternary operator syntax goes (condition) ? then : else
	var message (number % 2 == 0) ? number " is even" : number " is odd";
	console.log(message)
}

isOdd(random);


// TODO:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.

// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.
