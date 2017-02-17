(function(){
 "use strict";

    // TODO: Create person object
 var person = {};

person.firstName = "Joshua";
person.lastName = "Williams";

console.log("My first name is " + person.firstName + " and my last name is " + person.lastName + ".");
    // var person = todo;

    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties
person.sayHello = function (){
	alert("Hello my name is " + person.firstName + " " + person.lastName + "!");
};
    // Say hello from the person object.
    person.sayHello();
})();
