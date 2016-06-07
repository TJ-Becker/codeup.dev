(function(){
    "use strict";

    // TODO: Convert planetsString to an array, save it to planetsArray.

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray = planetsString.split('|');


    console.log(planetsArray);

    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?

    var planetsBreak = planetsArray.join('<br>');
    console.log(planetsBreak);

    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.

    var planetsList = planetsArray.join('</li><li>');
    planetsList = "<ul><li>" + planetsList + "</li></ul>";
    
    console.log(planetsList);

})();
