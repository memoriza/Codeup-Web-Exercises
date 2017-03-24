<?php 

function pageController () {

	$favoriteThings = [];
	$favoriteThings['things'] = ["Drums", "Trees", "Sun", "Breath","Asia"];

	return $favoriteThings;	
	
}

extract(pageController());
?>

<!DOCTYPE html>
<html>
	<head>
		<title> My Favorite Things </title>
	</head>
	<body>
		<table border="1">
			<tr>
				<th>Favorite</th>
			</tr>
			
				<?php  foreach($things as $thing) : ?>
					<tr><td><?= $thing; ?></td></tr>
				<?php endforeach; ?>
		
		</table>
	</body>
</html>