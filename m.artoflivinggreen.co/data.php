<?php
    session_start();
	include_once("tours-data.php");

	define('DRUPAL_ROOT', '/home/cg9961/public_html');
	include("/home/cg9961/public_html/includes/bootstrap.inc");
	drupal_bootstrap(DRUPAL_BOOTSTRAP_DATABASE);

	$uid=$_SESSION['uid'];
	$result = db_query("SELECT li.line_item_label AS tour_id FROM commerce_order o
	JOIN commerce_line_item li ON o.order_id=li.order_id
	WHERE o.uid=:uid AND o.status='completed'", array(":uid" => $uid))->fetchAll();

	$data = array();

	foreach($content as $c){

		foreach($result as $r){

			if($r->tour_id == $c['id']){
				$data[] = array(
					'id' => $c['id'],
					'title' => $c['title'],
					'text' => $c['text'],
					'image' => $c['image']
				);
				break;
			}

		}

	}

?>