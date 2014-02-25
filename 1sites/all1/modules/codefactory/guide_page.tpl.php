<div class="guide_menu">
	<ul>
		<li style="z-index:5">
			<div>
				<a href="#"><img src="<?php echo drupal_get_path('theme', 'living_green_2').'/images/guide_icon_home.png' ?>" /></a>
			</div>
		</li><li style="z-index:4">
			<div>
				<a href="#">Select Guided</a>
			</div>
		</li><li style="z-index:3">
			<div>
				<a href="#">Review Map</a>
			</div>
		</li><li style="z-index:2">
			<div>
				<a href="#">Making Choices</a>
			</div>
		</li><li style="z-index:1">
			<div>
				<a href="#">Share</a>
			</div>
		</li>
	</ul>
</div>

<script>
(function ($) {

	$(document).ready(function(){

		$(".guide_menu ul li").click(function(){
			$(".guide_menu ul li").removeClass("active");
			$(this).addClass("active");
		});

	});

})(jQuery);
</script>