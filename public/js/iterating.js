 "use strict";

(function() {
   

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
    var names = ["TJ", "Ryan", "Jared", "Dustin"];
    console.log(names.length);
    for (var i = 0; i < names.length; i++) {
    	console.log(names[i]);
    }

    names.forEach (function(element) {
    	console.log(element);
    })
    // TODO: Create a log statement that will log the number of elements in the names array.

    // TODO: Create log statements that will print each of the names array elements individually.
})();

