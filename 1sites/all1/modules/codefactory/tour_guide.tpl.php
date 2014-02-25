<div id="tour_guide_container">

	<div class="tour_start"><img src="<?php echo drupal_get_path('theme', 'living_green_2').'/images/start_img.png' ?>" border="0" /></div>

	<div id="location_switcher">
		<div class="location-header"></div>
		<div class="location-content">
			<div class="menu_1_content_top"></div>
			<ul>
				<?php	
				 foreach ($variables['slides'] as $slide){
					echo '<li><img rel="'.$slide['nid'].'" src="'.$slide['slide_img_src'].'" alt="'.$slide['slide_img_alt'].'" title="'.$slide['slide_img_title'].'" /><p>'.$slide['slide_title'].'</p></li>';
				 }
				?>
			</ul>
			<div class="menu_1_content_bottom"></div>
		</div>
	</div>

	<div id="tours">
		<div class="tours-header"></div>
		<div class="tours-content">
			<div class="tours-results-header"></div>
			<ul>
			</ul>
			<div class="tours-results-footer"></div>
			<img class="tours_3_number" src="<?php echo drupal_get_path('theme', 'living_green_2').'/images/menu_3_number.png' ?>" />
		</div>
	</div>

	<div id="tour_description">

		<div class="tours-description-header"></div>

		<div class="tours-description-content">

			<div class="desc_sidebar">
				<div class="tour_image"></div>
				<div class="tour_title"></div>
				<div class="tour_description_body"></div>
				<div class="tour_icons"><img src="<?php echo drupal_get_path('theme', 'living_green_2').'/images/tour_desc_icons.png' ?>" /></div>
				
			</div>
			
			<div class="desc_content">
			
				<div class="desc_content_top">
					<div class="duration">
						<div class="duration-title">Duration</div>
						<div class="duration-content">
							<div class="days"><span></span></div>
							<div class="hours"><span></span></div>
							<div class="minutes"><span></span></div>
						</div>
					</div>
					<div class="activities">
						<div class="activities-title">Activities</div>
						<ul></ul>
					</div>
					<div class="green_foot_print">
						<div class="green_foot_print-title">Green Foot Print</div>
						<ul></ul>
					</div>
				</div>

				<div class="desc_content_mid">
					<div class="tour_options"><ul></ul></div>
					<div class="tour_options_desc"></div>
				</div>

				<div class="desc_content_footer">
					<div class="subscription">
						<select name="subscription">
							<option value="1">1 year license</option>
						</select>
					</div>
					<div class="tour_buy">
						<p>Price: $<span></span></p>
						<button class="tour-buy-button">BUY</button>
					</div>
				</div>

			</div>

		</div>

		<div class="tours-description-footer"></div>
	</div>

</div>

<script>
(function ($) {
var slides = <?php echo json_encode($variables['slides']); ?>;
var glob_price = 0;
$(function() {	  
    //console.log(Drupal);
	/*var tourSlider = $('#tours ul').bxSlider({
		pager:false,
		onSlideAfter: function($slideElement, oldIndex, newIndex) {
			var cur_sku = $slideElement[0].attributes[0].value;
			$("#tours ul li[rel='"+cur_sku+"']").trigger("click");
		}
	});
    
	slider = $('.bxslider').bxSlider({
	  controls: true,
	  pager:false,
	  captions: true
	});*/

	$("#tour_description, #tours").hide();
	
	$("#location_switcher li").click(function(){
		$("#location_switcher li").removeClass("active");
		$(this).addClass("active");
		var loc_nid = $(this).find("img").attr("rel");
		$(".tour_start").slideUp();

		$.ajax({
			url: '/getTours',
			data: {
				nid : loc_nid
			},
			type: 'POST',
			dataType: 'json',
			success: function(data){
				$("#tour_description .tour_image").html("");
				$("#tour_description").hide("");
				$("#tours").slideDown();
				var con ="";
				for(var i=0;i<data.tours.length;i++){
					if (i==0) {
						con += "<li class='active' rel='" + data.tours[i].tour_sku + "'>" + data.tours[i].tour_title + "</li>";
					} else {
						con += "<li rel='" + data.tours[i].tour_sku + "'>" + data.tours[i].tour_title + "</li>";
					}
				}
				$("#tours ul").html("").append(con);
				setMenu_2_Image();
				//tourSlider.reloadSlider();
				$("#tours ul li:nth-child(1)").trigger("click");
			}
		});
	});

	$("#tours ul").on("click","li",function(){
		$("#tours ul li").removeClass("active");
		$(this).addClass("active");
		
		var tour_sku = $(this).attr("rel");

		$.ajax({
			url: '/getTourDetails',
			data: {
				sku : tour_sku
			},
			type: 'POST',
			dataType: 'json',
			success: function(data){
				//console.log(data);
				$("#tour_description").show("");
				$("#tour_description .tour_image").html("").append("<img src='"+data.product[0].product_image+"' />");
				$("#tour_description .tour_description_body").html(data.product[0].product_description);
				if(data.product[0].days){
					$("#tour_description .days span").html(data.product[0].days+" Days");
				} else { $("#tour_description .days span").html(""); }
				if(data.product[0].hours){
					$("#tour_description .hours span").html(data.product[0].hours+" Hours");
				} else { $("#tour_description .hours span").html(""); }
				if(data.product[0].minutes){
					$("#tour_description .minutes span").html(data.product[0].minutes+" Minutes");
				} else { $("#tour_description .minutes span").html(""); }
				$("#tour_description .tour_title").html(data.product[0].product_title);

				var activities = "";
				if(data.product[0].activities){
					for(var i=0;i<data.product[0].activities.length;i++){
						activities += "<li>" + data.product[0].activities[i].value + "</li>";
					}
					$("#tour_description .activities ul").html("").append(activities);
				}

				var green_foot_print = "";
				if(data.product[0].green_foot_print){
					for(var i=0;i<data.product[0].green_foot_print.length;i++){
						green_foot_print += "<li>" + data.product[0].green_foot_print[i].name + "</li>";
					}
					$("#tour_description .green_foot_print ul").html("").append(green_foot_print);
				}

				$(".desc_content_mid .tour_options").html("<div><input type='checkbox' checked='checked' /><span class='title'>"+data.product[0].product_title+"</span><span class='price'>$"+parseFloat(data.product[0].product_price.amount)/100+"</span></div>");
				$(".desc_content_mid .tour_options_desc").html("Vivamus tincidunt imperdiet nulla sed porta. Aliquam eu arcu sit amet eros vulputate tempus. Nam eget felis quis enim egestas bibendum.");
				$(".desc_content_footer .tour_buy span").html(parseFloat(data.product[0].product_price.amount)/100);
				glob_price = parseFloat(data.product[0].product_price.amount)/100;
				
				$(".tour-buy-button").click(function() {
					window.location.replace("/cf-add-product/"+data.product[0].product_sku+"/1");
					//alert(data.product[0].product_sku);
				});
			}
		});
	});

	$(".subscription select").change(function(){

		var num = parseInt($(this).val());
		$(".tour_buy span").html(num*glob_price);

	});

	function setMenu_2_Image(){
		var height = $("#tours .tours-content").height();
		var img_height = $("#tours .tours_3_number").height();
		var avg_height = height/2 - img_height/2 -10;
		$(".tours_3_number").css("top",avg_height + "px");
	}

	
	/*$('#slider-next-button').click(function(){
		slider.goToNextSlide();
	})
	$('#slider-prev-button').click(function(){
		slider.goToPrevSlide();
	})*/
	
	
});

})(jQuery);
</script>