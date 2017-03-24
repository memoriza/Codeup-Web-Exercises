<?php 


function generateAdj () {

	$adjectives = ["Abandoned", "Pretty", "Dusty", "Fuzzy", "Acrobatic", "Embellished", "Enchanting", "Energetic", "Jubilant", "Volumnious"];
	$adjRandom = mt_rand(0,count($adjectives) - 1);

	foreach ($adjectives as $adj) {

		return $adjectives[$adjRandom];
	}
}

function generateNoun () {

	$nouns = ["Cat", "Bat", "JoeB", "George", "Alien", "Nuggets", "Josh", "Scooter", "Trees", "Fox", "Asia"];
	$nounRandom = mt_rand(0,count($nouns) - 1);

	foreach ($nouns as $noun) {

		return $nouns[$nounRandom];
	}

}

?>

<!DOCTYPE html>

<html>

	<body>

		<?= "<h1>" . "Randomly Generated New Name: " . generateAdj() . " " . generateNoun() . "</h1>"; ?>

		<h1>test</h1>

	</body>

</html>