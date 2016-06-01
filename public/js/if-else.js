var grade1 = 70;
var grade2 = 80;
var grade3 = 95;

if (((grade1 + grade2 + grade3) / 3) > 80) {
	console.log("You are awesome.");
} else {
	console.log("You need to practice more");
}



var ryan = 250;
var cameron = 180;
var george = 320;
var discount = .25;
var ryanDiscount = (ryan - 200) * discount;
var cameronDiscount = (cameron - 200) * discount;
var georgeDiscount = (george - 200) * discount;
var discountThreshold = 200;

console.log("Ryan");

if (ryan > discountThreshold) {
	console.log("Amount before discount: " + ryan);
	console.log ("Actual spend with discount: " + (ryan - ryanDiscount));
	console.log("Amount saved: $" + ((ryan - discountThreshold) * discount));
} else {
	console.log("Amount spent: $" + ryan);
	console.log("Ryan needs to spend $" + (discountThreshold - ryan) + " more before receiving the discount.");
}

console.log("Cameron");
if (cameron > discountThreshold) {
	console.log("Amount before discount: " + cameron);
	console.log ("Actual spend with discount: " + (cameron - cameronDiscount));
	console.log("Amount saved: $" + ((cameron - discountThreshold) * discount));
} else {
	console.log("Amount spent: $" + cameron);
	console.log("Cameron needs to spend $" + (discountThreshold - cameron) + " more before receiving the discount.");
}

console.log("George");
if (george > discountThreshold) {
	console.log("Amount before discount: " + george);
	console.log ("Actual spend with discount: " + (george - georgeDiscount));
	console.log("Amount saved: $" + ((george - discountThreshold) * discount));
} else {
	console.log("Amount spent: $" + george);
	console.log("George needs to spend $" + (discountThreshold - george) + " more before receiving the discount.");
}



var flipACoin = Math.floor(Math.random() * 2);
console.log(flipACoin);

if (flipACoin == 0) {
	console.log("Buy a car.");
} else {
	console.log("Buy a house.");
}

(flipACoin == 0) ? console.log("Buy a car.") : console.log("Buy a house.");