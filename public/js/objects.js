(function(){
    "use strict";

    // TODO: Create person object
    var person = {
    	First_Name: "TJ",
    	Last_Name: "Becker",
    	sayHello: function() {
    		alert("Hello from " + this.First_Name + " " + this.Last_Name)
    	}
    }



    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    
    person.sayHello();
})();
