<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form Homework</title>
	</head>

	<body>
		<main>
			<h2>Pizza Registration and Online Order Form</h2>
				<form action="formhomework.php" method="POST">
					<p>
						<label for="firstname">First Name</label>
						<input type="text" id="firstname" name="firstname" placeholder="Enter your First Name">
						<label for="lastname">Last Name</label>
						<input type="text" id="lastname" name="lastname" placeholder="Enter your Last Name">	
					</p>
					<p>
						<label for="username">User Name</label>
						<input type="text" id="username" name="username" placeholder="Create your User Name">
					<p>
						<label for="password">Password</label>
						<input type="password" id="password" name="password" placeholder="Create your Password">
					</p>
					<p>
						<label for="password2">Re-Enter Password</label>
						<input type="password" id="password2" name="password2" placeholder="Re-Enter your Password">
					</p>
					<p>
						<label for="newsletter">Sign Me Up for Weekly Newsletter!</label>
						<input type="checkbox" id="newsletter" name="newsletter" value="yes" checked>
					</p>
					<button type="submit"> Submit Information</button>


				</form>
		<main>
	</body>
</html>

