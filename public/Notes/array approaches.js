var planetString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune|PlanetX"; 

	var planetArray = planetString.split("|");

	// create an unordered list with each planet having its own <li>

	var unorderedList = "<ul><li>";

	unorderedList += planetArray.join("</li><li>");

	unorderedList += "</li></ul>";