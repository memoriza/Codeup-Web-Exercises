<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Object vs. Arrays</h1>

	<h2>Arrays</h2>
	<ul>
		<li>Arrays are lists. The array has numeric indexes.</li>
		<li>We can .forEach() on an array</li>
		<li>we can shift, unshift, push, pop arrays</li>
		<li>we can sort, run .lenght to get the number of elements</li>
		<li>we can call ANY array method on an array.</li>
		<li>Any value can be stored as an element in an array.</li>
		<li>Arrays just store data</li>
	</ul>	

	<h2>Objects</h2>
	<ul>
		<li>Objects are composed of key => value pairs.</li>
		<li>the key is the index is the property's name</li>
		<li>Objects bundle together behavior (functions) and data (facts)</li>
	</ul>


<script>
	var chores = [];

	chores[0] = "Take out the paper";
	chores[1] = "Take out the trash";
	chores[2] = "Ask for your spending cash";
	chores[3] = "Wash the dog";
	chores[4] = chores[1];
	chores[5] = [
		"scrape the plate",
		"get soapy water and a good sponge",
		"wash the heck out of the dish"
	];
	chores[6] = 23;

console.log(chores[5][0]);


var repo = {
	id: 36764332,
	name: ".emacs.d",
	full_name: "ryanorsinger/.emacs.d",
	owner: [
		{
			"username": "Ryan Orsinger",
			"email": {
				"workEmail": "ryan@codeup.com",
				"personalEmail": "ryan.orsinger@gmail.com",
			}
		},
		{
			"username": "Josh Williams",
			"email": {
				"workEmail": "josh@codeup.com",
				"personalEmail": "josh@williamsco.com",
			}
		},
	],
	private: false,
	html_url: "https://github.com/ryanorsinger/.emacs.d",
	description: "My emacs config",
	fork: false,
};

var owners = repo.owner;

owners.forEach(function(owner, index) {
	console.log("Name: " + owner.username);
	console.log("email: " + owner.email.workEmail);
});


// Objects can have behavior (functions)
// Objects can have just data (state, simple variables, facts)
// the behavior on an object (its methods) operates on "this" object itself

// var honk = function() {
// 	alert("HONK HONK");
// }

var garbageTruck = {
	"vehicleType": "Garbage Truck",
	"numberOfWheels": 6,
	"horsePower": "Over 9000",
	"capacityInTons": 5,
	"gasTankPercentage": 50,
	"miles": 10000,
	"currentSpeed": 0,
	"honk": function() {
		alert("HONK HONK");
	},
	"accelerate": function() {
		// increase the speed of "this" object
		// increase the miles of "this" object
		this.currentSpeed += 10;
		this.miles += 1;
	},
	"stop": function() {
		// set current speed to 0 and honk.
		this.currentSpeed = 0;
		this.honk();
	}
};

console.log("My " + garbageTruck.vehicleType + " has " + garbageTruck.miles + " miles.");
console.log("My " + garbageTruck.vehicleType + " is traveling at " + garbageTruck.currentSpeed); 
garbageTruck.accelerate();
console.log("My " + garbageTruck.vehicleType + " has " + garbageTruck.miles + " miles.");
console.log("My " + garbageTruck.vehicleType + " is traveling at " + garbageTruck.currentSpeed);

garbageTruck.accelerate();
garbageTruck.accelerate();
console.log("My " + garbageTruck.vehicleType + " has " + garbageTruck.miles + " miles.");
console.log("My " + garbageTruck.vehicleType + " is traveling at " + garbageTruck.currentSpeed);

console.log("oh no, a cat walked into the street!");
garbageTruck.stop();

console.log("My " + garbageTruck.vehicleType + " has " + garbageTruck.miles + " miles.");
console.log("My " + garbageTruck.vehicleType + " is traveling at " + garbageTruck.currentSpeed);



</script>
</body>
</html>