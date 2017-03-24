<?php 


	$favoriteThings = ["Drums", "Trees", "Sun", "Breath","Asia"];


?>

<!DOCTYPE html>
<html>
	<head>
		<title> My Favorite Things </title>
		<link
	</head>
	<body>
		<table>
			<tr>
				<th>Favorite</th>
			</tr>
			<?php foreach($favoriteThings as $fThing) : ?>
				<tr class="rows">
					<td><?= $fThing; ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	</body>
</html>