<?php

	drupal_add_library ( 'system' , 'ui.tabs' );

	global $user;

	$uid = $user->uid;

	$orders = commerce_order_load_multiple(array(), array('uid' => $uid));

	$products = array();

	foreach($orders as $o){

		if($o->status == 'completed'){

			$line_item = commerce_line_item_load($o->commerce_line_items['und'][0]['line_item_id']);
			$product = commerce_product_load($line_item->commerce_product['und'][0]['product_id']);
			array_push($products, $product);
		}
		
	}

	foreach($products as $p){

		$vars['products'][] = array(
			'product_title' => $p->title,
			'product_image' => image_style_url("user_tour_description",$p->field_tour_image['und'][0]['uri']),
			'product_desc' => $p->field_tour_short_description['und'][0]['value']
		);

	}

	/*echo "<pre>";

	print_r($vars['products']);

	echo "</pre>";*/

?>

<div id="dashboard">
	<div class="dashboard_header">
		<span class="label">User: </span><?php echo $user->name; ?>
	</div>

	<div class="dashboard_left">

		<div id="dashboard_left_tabs">

			<ul>
				<li><a href="#tab-guides">Guides</a></li>
				<li><a href="#tab-im">IM: Messages</a></li>
				<li><a href="#tab-comfort">New Comfort Zone</a></li>
			</ul>

			<div id="tab-guides">

				<?php
				if(isset($vars)){
					foreach($vars['products'] as $p){
				?>

				<div class="user_tour_description">
					<div class="tour_image"><img src="<?php echo $p['product_image'] ?>" /></div>
					<div class="tour_title"><?php echo $p['product_title']; ?></div>
					<div class="tour_description_body"><?php echo $p['product_desc']; ?></div>
					<div class="tour_icons"><img src="<?php echo drupal_get_path('theme', 'living_green_2').'/images/tour_desc_icons.png' ?>" /></div>
				</div>

				<?php 
					}
				}
				?>

			</div>

			<div id="tab-im">content 2</div>
			<div id="tab-comfort">content 3</div>

		</div>

	</div>

</div>

<script>
(function ($) {

	$(document).ready(function(){

		$("#dashboard_left_tabs").tabs();

	});

})(jQuery);
</script>