<?php
	$points[] = array(
		"name"				=>	"Notre Dame Cathedral",
		"no"				=>	"1",
		"noList"			=>	"A",
		"description"		=>	"This is a short description",
		"type"				=>	"main",
		"subchoices"		=>	array(
			array(
				"name"			=>	"Subchoice 1.1",
				"no"			=>	"1"
			),
			array(
				"name"			=>	"Subchoice 1.2",
				"no"			=>	"2"
			),
			array(
				"name"			=>	"Subchoice 1.3",
				"no"			=>	"3"
			),
			array(
				"name"			=>	"Subchoice 1.4",
				"no"			=>	"4"
			),
		),
	);

	$points[] = array(
		"name"				=>	"Notre Dame Gardens",
		"no"				=>	"2",
		"noList"			=>	"1",
		"description"		=>	"This is a short description",
		"type"				=>	"leaf",
		"subchoices"		=>	array(
			array(
				"name"			=>	"Subchoice 2.1",
				"no"			=>	"1"
			),
			array(
				"name"			=>	"Subchoice 2.2",
				"no"			=>	"2"
			),
			array(
				"name"			=>	"Subchoice 2.3",
				"no"			=>	"3"
			),
			array(
				"name"			=>	"Subchoice 2.4",
				"no"			=>	"4"
			),
		),
	);

	$points[] = array(
		"name"				=>	"Le Puits de Legumes",
		"no"				=>	"3",
		"noList"			=>	"2",
		"description"		=>	"This is a short description",
		"type"				=>	"leaf",
		"subchoices"		=>	array(
			array(
				"name"			=>	"Subchoice 3.1",
				"no"			=>	"1"
			),
			array(
				"name"			=>	"Subchoice 3.2",
				"no"			=>	"2"
			),
			array(
				"name"			=>	"Subchoice 3.3",
				"no"			=>	"3"
			),
			array(
				"name"			=>	"Subchoice 3.4",
				"no"			=>	"4"
			),
		),
	);

	$points[] = array(
		"name"				=>	"Le Grenier De Notre Dame",
		"no"				=>	"4",
		"noList"			=>	"3",
		"description"		=>	"This is a short description",
		"type"				=>	"leaf",
		"subchoices"		=>	array(
			array(
				"name"			=>	"Subchoice 4.1",
				"no"			=>	"1"
			),
			array(
				"name"			=>	"Subchoice 4.2",
				"no"			=>	"2"
			),
			array(
				"name"			=>	"Subchoice 4.3",
				"no"			=>	"3"
			),
			array(
				"name"			=>	"Subchoice 4.4",
				"no"			=>	"4"
			),
		),
	);

	$points[] = array(
		"name"				=>	"National Museum of Natural History",
		"no"				=>	"5",
		"noList"			=>	"B",
		"description"		=>	"This is a short description",
		"type"				=>	"main",
		"subchoices"		=>	array(
			array(
				"name"			=>	"Subchoice 5.1",
				"no"			=>	"1"
			),
			array(
				"name"			=>	"Subchoice 5.2",
				"no"			=>	"2"
			),
			array(
				"name"			=>	"Subchoice 5.3",
				"no"			=>	"3"
			),
			array(
				"name"			=>	"Subchoice 5.4",
				"no"			=>	"4"
			),
		),
	);

	$points[] = array(
		"name"				=>	"The Garden of Plants",
		"no"				=>	"6",
		"noList"			=>	"4",
		"description"		=>	"This is a short description",
		"type"				=>	"leaf",
		"subchoices"		=>	array(
			array(
				"name"			=>	"Subchoice 6.1",
				"no"			=>	"1"
			),
			array(
				"name"			=>	"Subchoice 6.2",
				"no"			=>	"2"
			),
			array(
				"name"			=>	"Subchoice 6.3",
				"no"			=>	"3"
			),
			array(
				"name"			=>	"Subchoice 6.4",
				"no"			=>	"4"
			),
		),
	);

	$points[] = array(
		"name"				=>	"Guen Mai Restaurant",
		"no"				=>	"7",
		"noList"			=>	"5",
		"description"		=>	"This is a short description",
		"type"				=>	"leaf",
		"subchoices"		=>	array(
			array(
				"name"			=>	"Subchoice 7.1",
				"no"			=>	"1"
			),
			array(
				"name"			=>	"Subchoice 7.2",
				"no"			=>	"2"
			),
			array(
				"name"			=>	"Subchoice 7.3",
				"no"			=>	"3"
			),
			array(
				"name"			=>	"Subchoice 7.4",
				"no"			=>	"4"
			),
		),
	);

	$points[] = array(
		"name"				=>	"Rodin Museum",
		"no"				=>	"8",
		"noList"			=>	"C",
		"description"		=>	"This is a short description",
		"type"				=>	"main",
		"subchoices"		=>	array(
			array(
				"name"			=>	"Subchoice 8.1",
				"no"			=>	"1"
			),
			array(
				"name"			=>	"Subchoice 8.2",
				"no"			=>	"2"
			),
			array(
				"name"			=>	"Subchoice 8.3",
				"no"			=>	"3"
			),
			array(
				"name"			=>	"Subchoice 8.4",
				"no"			=>	"4"
			),
		),
	);

$points[] = array(
		"name"				=>	"Eiffel Tower",
		"no"				=>	"9",
		"noList"			=>	"D",
		"description"		=>	"This is a short description",
		"type"				=>	"main",
		"subchoices"		=>	array(
			array(
				"name"			=>	"Subchoice 9.1",
				"no"			=>	"1"
			),
		),
	);


	session_start();
	if(isset($_SESSION['username'])){
		define('DRUPAL_ROOT', '/home/cg9961/public_html');
		include("/home/cg9961/public_html/includes/bootstrap.inc");
		drupal_bootstrap(DRUPAL_BOOTSTRAP_DATABASE);
		$uid=$_SESSION['uid'];
		$result = db_query("SELECT * FROM alg_choices c
		WHERE c.user_id=:uid AND c.tour_id='GreenDayTour'", array(":uid" => $uid))->fetchAll();
		
		foreach ($points as &$p){
			$p['memo'] = "";
			foreach ($result as $r){
				if(intval($r->tour_item)==intval($p['no'])) { 
					$p['checked']= 'checked';
					$arr = explode("$", $r->tour_subitems);
					unset($arr[sizeof($arr)-1]);
					foreach($p['subchoices'] as &$s){
						if(in_array($s['no'], $arr)){
							$s['checked']= 'checked';
						}
					}
					$p['memo'] = (strlen($r->tour_memo)>0) ? $r->tour_memo : "";
				}
			}
		}
	
		echo json_encode($points);
	}

?>