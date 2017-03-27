<?php

$testArray = ["e","a","g","c","i","d","f","b","h"];

function sortIt($testArray) {

	$newArray = [];

	$alphabet = range("a","z");

	foreach($alphabet as $abc) {
		foreach($testArray as $letter) {
			array_push($newArray, $letter);
		}
	}
}

return $newArray;

print_r(sortIt($testArray));

print_r($output);

foreach