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
		<h1><a href="https://www.youtube.com/results?search_query=java+script+the+good+parts">YouTube Results for "JavaScript THe Good Parts</a></h1>

		<!-- form's action is where the request goes -->
		<form action="my_first_form.php" method="POST">
			<p>
				<label for="username">Username</label>
				<input type="text" id="username" name"username">
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" id="password" name="password">
			</p>
			<button type="submit">Search now!</button>
		</form>

		<h1>Google Search</h1>

		<form action="https://www.google.com/search" method="GET">
			<p>
				<label for="q">Search</label>
				<input type="text" name="q" id="q">
			</p>
			<button type="submit">Google Search</button>

		</form>
		
	</body>

</html>
