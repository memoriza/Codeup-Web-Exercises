<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Form Practice</h1>

		<form action="form.php" method="POST">
		<h1>User Login</h1>
			<p>
				<label for="username">USERname</label>
				<input type="text" name="username" id="username" placeholder="username">
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" name="username" id="password" placeholder="password">
			</p>
			<input name="input" type="submit">

			<p>What operating systems have you used?</p>
				<label><input type="checkbox" id="os1" name="os[]" value="linux"> Linux</label>
				<label><input type="checkbox" id="os2" name="os[]" value="osx"> OS X</label>
				<label><input type="checkbox" id="os3" name="os[]" value="windows" checked> Windows</label>
		<hr>
		</form>
		
		<form action="form.php" method="POST">

			<h1>Compose Email</h1>
				<p>
					<label for="To">From</label>
					<input type="text" name="to" id="from" placeholder="from">
				</p>
				<p>
					<label for="From">To</label>
					<input type="text" name="To" id="To" placeholder="To">
				</p>
				<p>
					<label for="subject">Subject</label>
					<input type="text" name="subject" id="subject" placeholder="subject">
				</p>
				<p>
					<label for="email_body">Email Body</label>
					<textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Insert Comments">Comments Here</textarea>
				</p>
				<button type="submit">Submit</button>
		</form>
	</body>
</html>	