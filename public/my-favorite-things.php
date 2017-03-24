<?php 

	$favoriteThings = ["Drums", "Trees", "Sun", "Breath","Asia"];

?>

<!DOCTYPE html>
<html>
	<head>
		<title> My Favorite Things </title>
	</head>
	<body>
		<table>
			<tr>
				<th>Favorite</th>
			</tr>
			<?php foreach($favoriteThings as $fThing) { ?>
				<tr class="rows">
					<td><?php echo $fThing; ?></td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>