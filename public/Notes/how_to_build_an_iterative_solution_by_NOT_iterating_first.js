	"use strict";

	var books = [
		{
			"title": "Green Eggs and Ham",
			"author": {
				"firstName": "Theophrastus",
				"lastName": "Seuss"
			}
		},
		{	
			"title": "The Book",
			"author": {
				"firstName": "Alan",
				"lastName": "Watts"
			}
		},
		{
			"title": "Illuminatus! Trilogy",
			"author": {
				"firstName": "Bob",
				"lastName": "Wilson"
			}
		}
	];
		
	console.log(books);

	// problem needing an iterative solution?
	// start by not iterating a thing
	// start with literally one single element from that array
	// assign that first element to a single variable name.

	var book = books[0];

	books.forEach(function(book, index, array) {
		console.log("Title: " + book.title);
		console.log("Author: " + book.author.firstName + " " + book.author.lastName);
		console.log("----");
	});


	var cars = ["VW Bug", "Hoopty", "Jalopy", "Toyota MR2"];

	var car = cars[0];

	// write a function that goes through an array of cars to see if there's a recal notice
	// there are currently recalls on the "Jalopy"
	// if one of the cars is a Jalopy, provide the index of where it is and inform the user

	cars.forEach(function(car, i, array) {
		if(car == "Jalopy") {
			console.log("The " + car + " automobile has a recall notice. See your dealer immediately");
			console.log("This is the car at index " + i);
		} else {
			console.log(car + " does not have a recall. Happy driving!");
		}
	});


