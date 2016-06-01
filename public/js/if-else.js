var grade1 = 70;
var grade2 = 80;
var grade3 = 95;

if (((grade1 + grade2 + grade3) / 3) > 80) {
	console.log("You are awesome.");
} else {
	console.log("You need to practice more");
}



var Ryan = 250;
var Cameron = 180;
var George = 320;

if (Ryan > 200) {
	console.log("Ryan is already receiving the discount.");
} else {
	console.log("Ryan needs to spend $" + (200 - Ryan) + " more before receiving the discount.");
}

if (Cameron > 200) {
	console.log("Cameron is already receiving the discount.");
} else {
	console.log("Cameron needs to spend $" + (200 - Cameron) + " more before receiving the discount.");
}

if (George > 200) {
	console.log("George is already receiving the discount.");
} else {
	console.log("George needs to spend $" + (200 - George) + " more before receiving the discount.");
}



var flipACoin = Math.floor(Math.random() * 2);
console.log(flipACoin);

if (flipACoin == 0) {
	console.log("Buy a car.");
} else {
	console.log("Buy a house.");
}

(flipACoin == 0) ? console.log("Buy a car.") : console.log("Buy a house.");