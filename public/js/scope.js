"use strict";

console.log("Testing");

(function () { 

 

function sayHello(myNameIs) { 
	var myNameIs = "Joshua Williams";
	console.log("Hello from " + myNameIs);
}
sayHello();


function sayHello2() {
	var localName = "Bob"
	return "Hello from " + localName;
}

console.log(sayHello2());

var random = Math.floor((Math.random()*100)+1);

function isOdd(number) {
	
//ternary operator syntax goes (condition) ? then : else
var message = (number % 2 == 0) ? number  + " is even" : number + " is odd";
	console.log(message)
}

isOdd(random);

})();










