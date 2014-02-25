<?php
session_start();
if(isset($_SESSION['username'])){
	define('DRUPAL_ROOT', '/home/cg9961/public_html');
	include("/home/cg9961/public_html/includes/bootstrap.inc");
	drupal_bootstrap(DRUPAL_BOOTSTRAP_DATABASE);
	$uid=$_SESSION['uid'];
	$tour_id= explode("/",$_SERVER[REQUEST_URI]);
	$tour_id= $tour_id[1];
	$form_data=json_decode($_REQUEST['formdata']);
	$tour_items = array();
	$tour_items_desc = array();
	
	db_delete('alg_choices')
	->condition('user_id', $uid)
	->condition('tour_id', $tour_id)
	->execute();
	//db_query("DELETE FROM alg_choices c	WHERE c.user_id=:uid AND c.tour_id=:tourid", array(":uid" => $uid,":tourid" => $tour_id));
				
	foreach($form_data as $f){
		$opt = substr($f->name, 0, 9);
		if($opt == 'tour_item'){
			if($f->value == "checked"){
				$num = intval(substr($f->name,9,2));
				$selected_subs = "";
				$text = "";
				foreach($form_data as $s){
					$sub_it = substr($s->name, 0, 3);
					if($sub_it == "sub" && intval(substr($s->name,14,2)) == $num){
						if($s->value == "checked"){
							$selected_subs .= substr($s->name,3,1)."$";
						}
					}
					$sub_txt = substr($s->name,0,4);
					if($sub_txt == "text" && intval(substr($s->name,14,2)) == $num){
						$text = $s->value;	
					}
				}

				db_query("INSERT INTO alg_choices VALUES (NULL, '".$tour_id."', ".$uid.", ".$num.", '".$selected_subs."', '".$text."')");
				

			}
		}
	}

}

?>