<?php

	$places = array();

	$places[] = array(
		'image' => "image1.jpg",
		'title'	=> "Notre Dame"
	);

	$places[] = array(
		'image' => "image2.jpg",
		'title'	=> "National Museum"
	);

	$places[] = array(
		'image' => "image3.jpg",
		'title'	=> "Rodin Museum"
	);


	if(isset($_SESSION['username'])){
		echo json_encode($places);
	}

?>