"use strict"

console.log("Testing");

var myNameIs = "Joshua Williams"; 

function sayHello(myNameIs) { 
	console.log("Hello from " + myNameIs);
}
sayHello(myNameIs);

var myName = "Ryan";

function sayHello2() {
	var localName = "Bob"
	return localName;
}

myName = sayHello2()
console.log(myName);










