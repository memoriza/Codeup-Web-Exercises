"use strict";

var names = ["Josh","Pete","George","Stan"];
console.log(names[0]);
console.log(names[1]);
console.log(names[2]);
console.log(names[3]);

for (var i = 0; i < names.length; i++) {
	console.log("The name at index " + i + " is " + names[i]);

}

names.forEach(function (element,index,array) {
console.log("The name at index " + index + " is " + element);
});
