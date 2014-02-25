<?php
	$points[] = array(
		"name"				=>	"Notre Dame Cathedral",
		"no"				=>	"1",
		"noList"			=>	"A",
		"description"		=>	"This is a short description",
		"type"				=>	"main",
		"subchoices"		=>	array(
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
		),
	);

	$points[] = array(
		"name"				=>	"Notre Dame Gardens",
		"no"				=>	"2",
		"noList"			=>	"1",
		"description"		=>	"This is a short description",
		"type"				=>	"leaf",
		"subchoices"		=>	array(
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
		),
	);

	$points[] = array(
		"name"				=>	"Le Puits de Legumes",
		"no"				=>	"3",
		"noList"			=>	"2",
		"description"		=>	"This is a short description",
		"type"				=>	"leaf",
		"subchoices"		=>	array(
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
		),
	);

	$points[] = array(
		"name"				=>	"Le Grenier De Notre Dame",
		"no"				=>	"4",
		"noList"			=>	"3",
		"description"		=>	"This is a short description",
		"type"				=>	"leaf",
		"subchoices"		=>	array(
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
		),
	);

	$points[] = array(
		"name"				=>	"National Museum of Natural History",
		"no"				=>	"5",
		"noList"			=>	"B",
		"description"		=>	"This is a short description",
		"type"				=>	"main",
		"subchoices"		=>	array(
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
		),
	);

	$points[] = array(
		"name"				=>	"The Garden of Plants",
		"no"				=>	"6",
		"noList"			=>	"4",
		"description"		=>	"This is a short description",
		"type"				=>	"leaf",
		"subchoices"		=>	array(
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
		),
	);

	$points[] = array(
		"name"				=>	"Guen Mai Restaurant",
		"no"				=>	"7",
		"noList"			=>	"5",
		"description"		=>	"This is a short description",
		"type"				=>	"leaf",
		"subchoices"		=>	array(
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
		),
	);

	$points[] = array(
		"name"				=>	"Rodin Museum",
		"no"				=>	"8",
		"noList"			=>	"C",
		"description"		=>	"This is a short description",
		"type"				=>	"main",
		"subchoices"		=>	array(
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
			"Notre Dame Cathedral",
		),
	);

	session_start();
	if(isset($_SESSION['username'])){
		echo json_encode($points);
	}

?>