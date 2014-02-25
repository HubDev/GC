<?php

	$points = array();

	$points[] = array(
		"name"				=>	"Notre Dame Cathedral",
		"lat"				=>	"48.852899",
		"lon"				=>	"2.349899",
		"no"				=>	"1",
		"noList"			=>	"A",
		"type"				=>	"main",
		"checked"			=>	"checked",
		"infoTitle"			=>	"Notre Dame",
		"infoImage"			=>	"notre-dame.jpg",
		"infoDescription"	=>	"Macrobiotic place, with vegetarian on the fish on the menu Also Organic",
		"infoAddress"		=>	"Backyard Street 21, Paris",
		"infoTel"			=>	"01 432 5095"
	);

	$points[] = array(
		"name"				=>	"Notre Dame Gardens",
		"lat"				=>	"48.85265",
		"lon"				=>	"2.35050",
		"no"				=>	"2",
		"noList"			=>	"1",
		"type"				=>	"leaf",
		"checked"			=>	"",
		"infoTitle"			=>	"Notre Dame1",
		"infoImage"			=>	"notre-dame.jpg",
		"infoDescription"	=>	"Macrobiotic place, with vegetarian on the fish on the menu Also Organic",
		"infoAddress"		=>	"Backyard Street 21, Paris",
		"infoTel"			=>	"01 432 5095"
	);

	$points[] = array(
		"name"				=>	"Le Puits de Legumes",
		"lat"				=>	"48.85007",
		"lon"				=>	"2.35439",
		"no"				=>	"3",
		"noList"			=>	"2",
		"type"				=>	"leaf",
		"checked"			=>	"",
		"infoTitle"			=>	"Notre Dame2",
		"infoImage"			=>	"notre-dame.jpg",
		"infoDescription"	=>	"Macrobiotic place, with vegetarian on the fish on the menu Also Organic",
		"infoAddress"		=>	"Backyard Street 21, Paris",
		"infoTel"			=>	"01 432 5095"
	);

	$points[] = array(
		"name"				=>	"Le Grenier De Notre Dame",
		"lat"				=>	"48.85195",
		"lon"				=>	"2.34850",
		"no"				=>	"4",
		"noList"			=>	"3",
		"type"				=>	"leaf",
		"checked"			=>	"",
		"infoTitle"			=>	"Notre Dame3",
		"infoImage"			=>	"notre-dame.jpg",
		"infoDescription"	=>	"Macrobiotic place, with vegetarian on the fish on the menu Also Organic",
		"infoAddress"		=>	"Backyard Street 21, Paris",
		"infoTel"			=>	"01 432 5095"
	);

	$points[] = array(
		"name"				=>	"National Museum of Natural History",
		"lat"				=>	"48.843667",
		"lon"				=>	"2.35125",
		"no"				=>	"5",
		"noList"			=>	"B",
		"type"				=>	"main",
		"checked"			=>	"checked",
		"infoTitle"			=>	"Notre Dame4",
		"infoImage"			=>	"notre-dame.jpg",
		"infoDescription"	=>	"Macrobiotic place, with vegetarian on the fish on the menu Also Organic",
		"infoAddress"		=>	"Backyard Street 21, Paris",
		"infoTel"			=>	"01 432 5095"
	);

	$points[] = array(
		"name"				=>	"The Garden of Plants",
		"lat"				=>	"48.84392",
		"lon"				=>	"2.35664",
		"no"				=>	"6",
		"noList"			=>	"4",
		"type"				=>	"leaf",
		"checked"			=>	"",
		"infoTitle"			=>	"Notre Dame5",
		"infoImage"			=>	"notre-dame.jpg",
		"infoDescription"	=>	"Macrobiotic place, with vegetarian on the fish on the menu Also Organic",
		"infoAddress"		=>	"Backyard Street 21, Paris",
		"infoTel"			=>	"01 432 5095"
	);

	$points[] = array(
		"name"				=>	"Guen Mai Restaurant",
		"lat"				=>	"48.85405",
		"lon"				=>	"2.33595",
		"no"				=>	"7",
		"noList"			=>	"5",
		"type"				=>	"leaf",
		"checked"			=>	"",
		"infoTitle"			=>	"Notre Dame6",
		"infoImage"			=>	"notre-dame.jpg",
		"infoDescription"	=>	"Macrobiotic place, with vegetarian on the fish on the menu Also Organic",
		"infoAddress"		=>	"Backyard Street 21, Paris",
		"infoTel"			=>	"01 432 5095"
	);

	$points[] = array(
		"name"				=>	"Rodin Museum",
		"lat"				=>	"48.85513",
		"lon"				=>	"2.31582",
		"no"				=>	"8",
		"noList"			=>	"C",
		"type"				=>	"main",
		"checked"			=>	"",
		"infoTitle"			=>	"Notre Dame7",
		"infoImage"			=>	"notre-dame.jpg",
		"infoDescription"	=>	"Macrobiotic place, with vegetarian on the fish on the menu Also Organic",
		"infoAddress"		=>	"Backyard Street 21, Paris",
		"infoTel"			=>	"01 432 5095"
	);

	session_start();

	if(isset($_SESSION['username'])){
		echo json_encode($points);
	}


?>