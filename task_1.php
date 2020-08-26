<?php

if (isset($_POST['send'])) {

	$FullName = "Full Name: ".$_POST['fullName']."
	";
	$Email = "Email Address: ".$_POST['email']."
	";
	$Gender = "Gender: ".$_POST['gender']."
	";
	$Track= "Prefered Track: ".$_POST['tracks']."
	";
	$Comment = "Comment: ".$_POST['comment']."
	";


	$file = fopen($_POST['fullName'], "a");
	//$file = fopen("data.txt", "a");

	fwrite($file, $FullName);
	fwrite($file, $Email);
	fwrite($file, $Gender);
	fwrite($file, $Track);
	fwrite($file, $FullName);
	fwrite($file, $Comment);

	fclose($file);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta  name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User's form</title>
</head>
<body>
<center>
	<h1>Users Contact Form</h1>
	<p>
		Kindly fill every fields!!!
	</p>
	<form method="POST">
	<p>
		<label for="fullName">Full Name</label> <br />
		<input type="text" name="fullName" placeholder="Enter your full name." />
	</p>
	
	<p>
		<label for="email">Email</label> <br />
		<input type="email" name="email" placeholder="Enter a valid email" />
	</p>

	<p>
		<label for="gender">Gender</label> <br />
			<input type="radio" name="gender" />Female
				<input type="radio" name="gender" />Male
					<input type="radio" name="genter" />Other
	</p>
	
	<p>
		<label for="tracks">Prefered Track</label><br/>
		<select name="tracks">
			<option>Select Prefered Track</option>
				<option>FRONT END DEVELOPMENT</option>
				<option>BACK END DEVELOPMENT</option>
				<option>MOBILE DEVELOPMENT</option>
		</select>
	</p>

	<p>
		<label for="comment">Your Comment</label><br/>
		<textarea name="comment" cols="20" rows="5" placeholder="Write comment"></textarea>
	</p>

	<p>
		<input type="checkbox" name="T&C" required/> Agree to our Terms and Conditions!
	</p>

	<button type="submit" name="send">Submit Request</button>
</form>
<p>
	<footer>&copy; Qozeem Odeniran's Task-1. 2020</footer>
</p>
</center>
</body>
</html>