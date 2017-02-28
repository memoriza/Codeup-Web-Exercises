#AJAX Requests
##References
+ jQuery Ajax Docs - http://api.jquery.com/jQuery.ajax/#jQuery-ajax-settings
+ W3 Schools - https://www.w3schools.com/jquery/jquery_ref_ajax.asp
+ MDN - https://developer.mozilla.org/en-US/docs/AJAX
---
##Vocabulary
+ AJAX
  - Definition: a client-side script that communicates to and from a server/database without the need for a postback or a complete page refresh. The best definition I've read for Ajax is “the method of exchanging data with a server, and updating parts of a web page – without reloading the entire page.”
  - Easy explanation: http://it.toolbox.com/blogs/puramu/what-is-ajax-a-nontechnical-answer-13828
+ Asynchronous Callbacks
  - Definition: a callback is a piece of executable code that is passed as an argument to other code, which is expected to call back (execute) the argument at some convenient time. The invocation may be immediate as in a synchronous callback, or it might happen at a later time as in an asynchronous callback.
  - Easy explanation: https://medium.freecodecamp.com/javascript-callbacks-explained-using-minions-da272f4d9bcd#.whdn20bjo
+ RESTful API
  - Definition: REST stands for Representational State Transfer. (It is sometimes spelled "ReST".) It relies on a stateless, client-server, cacheable communications protocol -- and in virtually all cases, the HTTP protocol is used.REST is an architecture style for designing networked applications.
  - Easy explanation: http://www.looah.com/source/view/2284
---
##Notes
+ Making a request
```JavaScript
$.ajax("/some-url.json", "optional: settings object");
```
+ Types of Requests
  - GET (default)
  - POST
  - PUT
  - DELETE
+ Settings Objects
  - There are a lot of different options you can specify to bend `$.ajax()` to your need. Example:
```JavaScript
$.ajax("/some-url", { 
    type: "POST", 
    data: { 
        name: "John", 
        location: "Boston" 
    } 
});
```
+ Callbacks
  - `.done(callbackFunction(data, status){});`
    + fires when request comes back successfully
  - `.fail(callbackFunction(data, status){});`
    + fires when a request comes back with an error
  - `.always(callbackFunction(data, status){});`
    + fires no matter what
  - Example:
  ```JavaScript
  $.ajax("/some-url").done(function() {

      alert("Everything went great!");
  }).fail(function() {
      alert("There was an error!");
  }).always(function() {
      alert("And we're finished!");
  });
  ```