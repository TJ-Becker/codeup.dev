var luckyNumber = Math.floor(Math.random()* 6);
var receipt = 60;
var discount1 = .90
var discount2 = .75
var discount3 = .60
var discount4 = .50
var discount5 = 0


console.log ("Your total before your roll: $" + receipt)
console.log("Your lucky number: " + luckyNumber);


switch (luckyNumber) {
	case 0:
		console.log("No discount.  Total: $" + (receipt));
		break;

	case 1:
		console.log("You get a discount!  Total: $" + (receipt * discount1));
		break;

	case 2:
		console.log("You get a discount!  Total: $" + (receipt * discount2));
		break;

	case 3:
		console.log("You get a discount!  Total: $" + (receipt * discount3));
		break;

	case 4:
		console.log("You get a discount!  Total: $" + (receipt * discount4));
		break;

	case 5:
		console.log("You get a discount!  Total: $" + (receipt * discount5));
		break;
}

// // Suppose you have been assigned a task and you need to convert a number 
// to the name of a month. 1 should be shown as January, 2 as February and so on. 
// Using a switch statement write the JS codethat shows the names of the months 
// in the console.

var monthsRandom = Math.floor(Math.random()* 12) + 1;
console.log("Month: " + monthsRandom)

switch (monthsRandom) {
	case 1: 
		console.log("January")
		break;
	case 2: 
		console.log("February")
		break;
	case 3: 
		console.log("March")
		break;
	case 4: 
		console.log("April")
		break;
	case 5: 
		console.log("May")
		break;
	case 6: 
		console.log("June")
		break;
	case 7: 
		console.log("July")
		break;
	case 8: 
		console.log("August")
		break;
	case 9: 
		console.log("September")
		break;
	case 10: 
		console.log("October")
		break;
	case 11: 
		console.log("November")
		break;
	case 12: 
		console.log("December")
		break;
}