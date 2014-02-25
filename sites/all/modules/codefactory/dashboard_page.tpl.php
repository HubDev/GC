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
			'product_desc' => $p->field_tour_short_description['und'][0]['value'],
			'product_sku' => $p->sku
		);

	}

?>

<div id="dashboard">
	<div class="dashboard_header">
		<span class="label">User: </span><?php echo $user->name; ?>
	</div>

	<div class="dashboard_left">

		<div id="dashboard_left_tabs">

			<ul>
				<li><a href="#tab-guides">Guides</a></li>
				<li><a href="#tab-im">IM Messages</a></li>
				<li><a href="#tab-comfort">Comfort Zone</a></li>
				<li><a href="#tab-user">Settings</a></li>
			</ul>

			<div id="tab-guides">

				<?php
				if(isset($vars)){
					foreach($vars['products'] as $p){
				?>

				
					<div class="tour_image"><img src="<?php echo $p['product_image'] ?>" /></div>
					<div class="tour_title" style="font-size:11px"><?php echo $p['product_title']; ?></div>
					<div class="tour_description_body"><p style="width:100%;font-size:10px">See your guide at <a style="display:block;font-size:10px" href="http://m.artoflivinggreen.co/">http://m.artoflivinggreen.co/</a></p></div>
					
				

				<?php 
					}
				}else{
					echo "<h2>You haven't purchased any products yet!</h2>";
				}
				?>

			</div>

			<div id="tab-im">content 2</div>
			<div id="tab-comfort">content 3</div>
			<div id="tab-user">
				<h3>Change your Password</h3>
				<form method="post" id="user-settings">
					<div class="form-item">
						<label for="password">New Password</label>
						<input type="password" name="password" />
					</div>
					<div class="form-item">
						<label for="retype_password">Confirm Password</label>
						<input type="password" name="retype_password" />
					</div>
					<div class="form-msg"></div>
					<div class="form-submit form-item">
						<input type="submit" value="Change Password" />
					</div>
				</form>
				<h3>My Orders</h3>
				<?php print views_embed_view('commerce_user_orders','default', $uid); ?>
				<div>You can see your purchased guides at <a href="http://m.artoflivinggreen.co/">http://m.artoflivinggreen.co/</a></div>
			</div>

		</div>

	</div>

</div>

<script>
(function ($) {

	$(document).ready(function(){

		setTimeout(function() {
			if (location.hash) {
				window.scrollTo(0, 0);
			}
		}, 1);

		$("#dashboard_left_tabs").tabs();

		$("#user-settings input[name='password'], #user-settings input[name='retype_password']").keyup(function(){
			var p1 = $("#user-settings input[name='password']").val();
			var p2 = $("#user-settings input[name='retype_password']").val();
			if(p1 != p2){
				$(".form-msg").html("Passwords don't match!");
			}else{
				$(".form-msg").html("Ok!");
			}
		});

		$("#user-settings").submit(function(e){

			var p1 = $("#user-settings input[name='password']").val();
			var p2 = $("#user-settings input[name='retype_password']").val();
			if(p1 != p2 || (p1.length<4 && p2.length<4)){
				$(".form-msg").html("Passwords don't match!");
			}else{
				$(".form-msg").html("Ok!");

				$.ajax({
					url: '/userSettings',
					data: {
						password: p1
					},
					type: 'POST',
					dataType: 'json',
					success: function(data){
						$(".form-msg").html(data);
					}
				});
			}

			return false;
		});

	});

})(jQuery);
</script>