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
			<h1>PIZZA!!! ORDER!!!!</h1>
			<h3>Customer User Registration</h3>
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
						<label for="address">Street Address</label>
						<input type="text" id="address" name="address" placeholder="Street Address">
					</p>
					<p>
						<label for="address2">Street Address cont.</label>
						<input type="text" id="address2" name="address2" placeholder="City, State, and Zipcode">
					</p>
					<p>
						<label for="newsletter">Sign Me Up for Weekly Za Newsletter!</label>
						<input type="checkbox" id="newsletter" name="newsletter" value="yes" checked>
					</p>
				</form>
			
			<h3>Online Pizza Order</h3>
				<form>
					<p>
						<label for="PizzaType"><strong>Select your Pizza type<strong></label>
						<select id="PizzaType" name="PizzaType">
							<option value="CC">Classic Crust</option>
							<option value="SC">Stuffed Crust</option>
							<option value="TC">Thin Crust</option>
							<option value="DD">Deep Dish</option>
						</select>
					</p>
					<p>
						<label for="SauceType">Sauce Selection</label>
						<select id="SauceType" name="SauceType">
							<option value="Ma">Marinara</option>
							<option value="OO">Olive Oil</option>
							<option value="AS">Alfredo Sauce</option>
							<option value="NS">No Sauce</option>
						</select>
					</p>
					
					<p>Toppings</p>
					
						<label>
							<input type="checkbox" id="t1" name="t[]" value="pepporoni">
							Pepporoni
						</label>
						<label>
						<input type="checkbox" id="t2" name="t[]" value="Olives">
							Olives
						</label>
						<label>
						<input type="checkbox" id="t3" name="t[]" value="Cheese">
							Cheese
						</label>
						<label>
							<input type="checkbox" id="t4" name="t[]" value="Sausage">
							Sausage
						</label>
						<br>
						<label>
							<input type="checkbox" id="t5" name="t[]" value="Bacon">
							Bacon
						</label>
						<label>
							<input type="checkbox" id="t6" name="t[]" value="Anchovies">
							Anchovies
						</label>
						<label>
							<input type="checkbox" id="t7" name="t[]" value="Extra Cheese">
							Extra Cheese
						</label>
						<label>
							<input type="checkbox" id="t8" name="t[]" value="Parmesan">
							Parmesan
						</label>
					<br>
					<button type="submit">Submit Personal Information and Order</button>
				</form>
			<h1> Pizza Real Estate Search </h1>
				<form action="http://www.realtor.com/" method="GET">
					<p>
						<label for="search">ZIP CODE</label>
						<input type="text" name="search" id="zipcode" placeholder="ZIP code">
					</p>
				<button type="submit">Home Finder Search</button>

				</form>
				<form action="https://www.google.com/search" method="GET">
					<p>
						<label for="q">Search</label>
						<input type="text" name="q" id="q">
					</p>
					<button type="submit">Google Search</button>
				</form>
		<main>
	</body>
</html>

