"use strict"

var studentsAverageGrades = ((70 + 80 + 95)/3);

if (studentsAverageGrades >= 80) {  
	console.log("You're Awesome");

} else {
	console.log("You need to practice more.");
}

var spentCameron = 180;
var spentRyan = 250;
var spentGeorge = 320;

console.log("Regular Price for George " + spentGeorge);
if (spentGeorge >= 200) {
	console.log("Discounted Price for George " + (spentGeorge - .35 * spentGeorge));
} else { 
console.log("Regular Price for George " + spentGeorge);

}
console.log("Regular Price for Ryan " + spentRyan);
if (spentRyan >= 200) {
	console.log("Discounted Price for Ryan " + (spentRyan - .35 * spentRyan));
} else { 
console.log("Regular Price for Ryan " + spentRyan);

}

console.log("Regular Price for Cameron " + spentCameron);
if (spentCameron >= 200) {
	console.log("Discounted Price for Cameron " + (spentCameron - .35 * spentCameron));
} else { 
console.log("Regular Price for Cameron " + spentCameron);

}

var isaacDecision = Math.floor(Math.random()* 2)

if (isaacDecision == 0) {
	console.log("Buy a car Isaac!");
} else if (isaacDecision == 1) {
	console.log("Buy a house Isaac");
}

