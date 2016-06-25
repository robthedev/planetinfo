<?php

	//Data from client
	$name = $_POST['planet_name'];

	//Result array
	$resultarr = array();

	//Data array
	$planet_info = array (
		array('name' => 'Mercury', 'order_no' => '1', 'days_in_year' => '87'),
		array('name' => 'Venus', 'order_no' => '2', 'days_in_year' => '224'),
		array('name' => 'Earth', 'order_no' => '3', 'days_in_year' => '365'),
		array('name' => 'Mars', 'order_no' => '4', 'days_in_year' => '686'),
		array('name' => 'Jupiter', 'order_no' => '5', 'days_in_year' => '4332'),
		array('name' => 'Saturn', 'order_no' => '6', 'days_in_year' => '10755'),
		array('name' => 'Uranus', 'order_no' => '7', 'days_in_year' => '30687'),
		array('name' => 'Neptune', 'order_no' => '8', 'days_in_year' => '60190')

		);

	for ($count = 0; $count < count($planet_info); $count++) {
		if (stripos($planet_info[$count]['name'], $name) !== false) {
			array_push($resultarr, $planet_info[$count]);
		}
	}

	//Return to client JSON
	echo json_encode($resultarr);

?>