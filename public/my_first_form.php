<?php
 	var_dump($_GET);
 	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My First HTML Form</title>
		<style>
			div {
				margin-bottom:10px;
			}
			select {
				display:block;
			}
		</style>
	</head>
	<body>
		<form method="POST">
			<h2>Login Form</h2>
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Enter your username here." required>
			</p>
			<p>
				<label for"password">Password</label>
				<input id="password" name="password" type="password" placeholder="Enter your password here.">
			</p>
			<button type="submit">Login</button>
		</form>
		<form method="POST">
			<h2>Compose an Email</h2>
			<p>
				<label for="to">To</label>
				<input id="to" name="to" type="text">
			</p>
			<p>
				<label for="from">From</label>
				<input id="from" name="from" type="text">
			</p>
			<p>
				<label for="subject">Subject</label>
				<input id="subject" name="subject" type="text">
			</p>
			<p>
				<textarea id="body" name="body" rows="5" cols="40">Message</textarea>
			</p>
			<p>Would you like to save a copy to your sent folder?</p>
				<label><input type="checkbox" name="copy" value="yes" id="copy" checked>Yes</label>
			<p>
				<button type="submit">Send</button>
			</p>
		</form>
		<form method="POST">
		<h2>Multiple Choice Test</h2>
		<p>What is your favorite color?</p>
			<label>
				<input type="radio" name="color" value="blue">
				Blue
			</label>
			<label>
				<input type="radio" name="color" value="red">
				Red
			</label>
			<label>
				<input type="radio" name="color" value="green">
				Green
			</label>
		</form>
		<p>Favorite place?</p>
		<form method="POST">
			<label>
				<input type="radio" name="ok" value="okc">
				OKC
			</label>
			<label>
				<input type="radio" name="ok" value="oklahoma">
				Oklahoma
			</label>
			<label>
				<input type="radio" name="tx" value="sa">
				San Antonio
			</label>
			<label>
				<input type="radio" name="tx" value="texas">
				Texas
			</label>
		<p>Where have you travelled to?</p>
			<div>
				<label><input type="checkbox" id="travel1" name="travel[]" value="Africa">
					Africa
				</label>
				<label><input type="checkbox" id="travel2" name="travel[]" value="Europe">
					Europe
				</label>
				<label><input type="checkbox" id="travel3" name="travel[]" value="Asia">
					Asia
				</label>
			</div>
			<div>
				<label for="thunder">Will the Thunder when the Championship?</label>
				<select id="thunder" name="thunder">
					<option value="0">No</option>
					<option selected value="1">Yes</option>
				</select>
			</div>
			<label for="contenders">Who are the contenders this year?</label>
			<select id="contenders" name="contenders[]" multiple>
				<option>Thunder</option>
				<option>Spurs</option>
				<option>Golden State</option>
				<option>Cavs</option>
			</select>
			<button type="submit">Submit</button>

		<h2>Email Round 2</h2>
			<div>
				<label for="to">To</label>
				<input type="text" name="to" id="to">
			</div>
			<div>
				<label for="from">From</label>
				<input type="text" name="from" id="from">
			</div>
			<div>
			<textarea id="username" value="hi" name="username" placeholder="Message" cols="30" rows="6" autofocus required></textarea>
			</div>
			<div>
			<p>Would you like to save a copy to your sent folder?</p>
				<label><input type="checkbox" id="survey" value="yes">yes</label>
			</div>

			<div>
				<h2>Multiple Choice Test</h2>
				<p>What is your favorite city?</p>
					<label><input type="radio" name="q1" id="q1" value="Oklahoma">
						Oklahoma
					</label>
					<label><input type="radio" name="q1" id="q1" value="San Antonio">
						San Antonio
					</label>
			</div>
			<div>
				<p>Favorite Color?</p>
					<label for="tj"><input type="checkbox" name="tj[]" id="tj" value="blue">
						blue
					</label>
					<label for="teej"><input type="checkbox" name="tj[]" id="teej" value="green">
						green
					</label>
					<label for="teddy"><input type="checkbox" name="tj[]" id="teddy" value="red">
						red
					</label>
			</div>
			<button type="submit">Submit</button>
			<div>
				<label for="sport">Favorite Sport?</label>
				<select id"sport" name="sport[]" multiple>
					<option value="Soccer">Soccer</option>
					<option value="Tennis">Tennis</option>
					<option value="Basketball">Basketball</option>
					<option value="Football">Football</option>
				</select>
			</div>
		</form>
	</body>
</html>