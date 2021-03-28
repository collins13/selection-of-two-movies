<?php

function selection_of_two_movies($movieDuration, $lengthofFlight)
{
	// Find sum of whole array
	$sum = 0;
	for ($i = 0; $i < $lengthofFlight; $i++)
		$sum += $movieDuration[$i];

	// If sum of array is not even than we
	// can not divide it into two part
	if ($sum % 2 != 0)
		return false;

	$sum = $sum / 2;

	// For each element $movieDuration[i], see if there is
	// another element with value sum - $movieDuration[i]
	$s = array();
	for ($i = 0; $i < $lengthofFlight; $i++)
	{
		$val = $sum - $movieDuration[$i];

		// If element exist than return the pair
		if (array_search($val, $s))
		{
			echo "Pair elements are " . $movieDuration[$i] .
				" and " . $val . "\n";
									
			return true;
		}

		array_push($s, $movieDuration[$i]);
	}

	return false;
}


?>
