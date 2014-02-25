<?php

	$places = array();

	$places[] = array(
		'image' => 'NotreDame.jpg',
		'title'	=> 'Notre Dame Cathedral'
	);

	$places[] = array(
		'image' => 'NaturalHistoryMus2.jpg',
		'title'	=> 'Museum of Natural History'
	);

	$places[] = array(
		'image' => 'rodin.museum.jpeg',
		'title'	=> 'Rodin Museum'
	);

	if(isset($_SESSION['username'])){
		echo json_encode($places);
	}

?>