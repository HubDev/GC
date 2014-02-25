<style>
#div-two .slider{
	width:400px;
	margin:0 auto;
}

#div-two .top_info{
	border-bottom: 3px solid #dadada;
}

#div-two .body{
	border-top: 3px solid #dadada;
	padding-top:10px;
	margin-top:10px;
}

#gmap{
	width:792px;
	height:502px;
}

#gmap2{
	width:792px;
	height:250px;

}

.slider{
	position:relative;
}

#slide_prev{
	position:absolute;
	left:-56px;
	top:180px;
	font-size:3em;
	color:#fff;
	background:#272727;
	opacity:0.7;
}

#slide_next{
	position:absolute;
	right: -56px;
	top:180px;
	font-size:3em;
	background:#272727;
	opacity:0.7;
}

#slide_prev a, #slide_next a{
	color:#fff;
	text-decoration: none;
}

#slide_prev:hover, #slide_next:hover{
	opacity: 1;
}

.bx-caption{
	display:block;
	background: rgba(50,50,50,0.5);
	padding: 3px 10px;
	font-size: 0.8em;
	margin-top: -41px;
	position: absolute;
}

.bx-slider li .bx-caption:first-child{
	display:none !important;
}

.infowindow_title{
	color:#000 !important;
}

.map_options label{
	width:150px;
	display: inline-block;
}
</style>
<div class="guide_menu">
	<ul>
		<li style="z-index:5" class="active active2">
			<div>
				<a href="#div-one"><img src="/<?php echo drupal_get_path('theme', 'living_green_2').'/images/guide_icon_home.png' ?>" /></a>
			</div>
		</li><li style="z-index:4">
			<div>
				<a href="#div-two">Select Guided</a>
			</div>
		</li><li style="z-index:3">
			<div>
				<a href="#div-three">Review Map</a>
			</div>
		</li><li style="z-index:2">
			<div>
				<a href="#div-four">Making Choices</a>
			</div>
		</li><li style="z-index:1">
			<div>
				<a href="#div-five">Share</a>
			</div>
		</li>
	</ul>
</div>

<div class="container">
	<div id="div-one" class="main_cont active">
		<h1>Paris Green Tour</h1>
		<div class="top_info">
			The Paris Green Tour is a introductory tour of the popular sites but with a green theme. As you visit the popular tourist sites learn about green points of interest or view the location from a green perspective. Since all points in France begin at NotreDame Cathedtral, we will start our tour from this iconic location. In this tour the key point of interest will be the
			<ul>
		      	<li>Notre Dame Cathedral</li>
		      	<li>National Museum of Natural History</li>
		      	<li>Rodin Museum</li>
		      	<li>Hotel National of Invalides</li>
		      	<li>Eiffel Tower</li>
	      	</ul>
			Along your way we will point out Green Points of Interests and suggest Green Choices that you can consider. 
		</div>
		<div class="inline activity-effort">
			<div class="image">
				<img src="/<?php echo drupal_get_path('theme', 'living_green_2').'/images/guide_icon1.png' ?>" border="0" />
			</div>
			<div class="description">
				<div class="rating"><img src="/<?php echo drupal_get_path('theme', 'living_green_2').'/images/guide_01.gif' ?>" border="0" /></div>
				<div class="title">Activity Effort</div>
			</div>
			<div class="body">
				Depending of the choices you make, activities my require light to moderate physical effort and passive levels of participation.
				<ul>
					<li>Sighseeing</li>
					<li>Dining</li>
					<li>Bike riding</li>
					<li>Walking</li>
				</ul> 
			</div>
		</div>
		<div class="inline green-foot-print">
			<div class="image">
				<img src="/<?php echo drupal_get_path('theme', 'living_green_2').'/images/guide_icon3.png' ?>" border="0" />
			</div>
			<div class="description">
				<div class="rating"><img src="/<?php echo drupal_get_path('theme', 'living_green_2').'/images/guide_04.png' ?>" border="0" /></div>
				<div class="title">Green Foot Print</div>
			</div>
			<div class="body">
				Assuming you make the recommended Green Choices, you will postively give back to EARTH. Here is how:
				<ul>
					<li>Green awareness</li>
					<li>Human powered transportation</li>
					<li>Financial support of   ecology centric institutions </li>
					<li>Walking</li>
				</ul> 
			</div>
		</div>
		<div class="inline comfort-zones">
			<div class="image">
				<img src="/<?php echo drupal_get_path('theme', 'living_green_2').'/images/guide_icon2.png' ?>" border="0" />
			</div>
			<div class="description">
				<div class="rating"><img src="/<?php echo drupal_get_path('theme', 'living_green_2').'/images/guide_01.gif' ?>" border="0" /></div>
				<div class="title">Comfort Zones</div>
			</div>
			<div class="body">
				The opportunity to find new comfort zones are good and in the following areas:
				<ul>
					<li>Transportation</li>
					<li>Ecological education</li>
					<li>Financial support of ecology centric institutions</li>
					<li>Using your green urban space</li>
				</ul> 
			</div>
		</div>
		<div class="inline connections">
			<div class="image">
				<img src="/<?php echo drupal_get_path('theme', 'living_green_2').'/images/guide_icon4.png' ?>" border="0" />
			</div>
			<div class="description">
				<div class="rating"><img src="/<?php echo drupal_get_path('theme', 'living_green_2').'/images/guide_04.png' ?>" border="0" /></div>
				<div class="title">Connections</div>
			</div>
			<div class="body">
				The opportunity to make connect with locals or experience indigenus customs is lower than average.
			</div>
		</div>
	</div>
	<div id="div-two" class="main_cont">
		<h1>Paris Green Tour</h1>
		<div class="top_info">
			The Paris Green Tour is a introductory tour of the popular sites but with a green theme. As you visit the popular tourist sites learn about green points of interest or view the location from a green perspective. Since all points in France begin at NotreDame Cathedtral, we will start our tour from this iconic location. In this tour the key point of interest will be the
			<ul>
		      	<li>Notre Dame Cathedral</li>
		      	<li>National Museum of Natural History</li>
		      	<li>Rodin Museum</li>
		      	<li>Hotel National of Invalides</li>
		      	<li>Eiffel Tower</li>
	      	</ul>
		</div>
		<div class="slider">
			<ul class="bx-slider">
				<li><img src="/<?php echo drupal_get_path('module', 'codefactory'); ?>/images/image1.png" title="image1" /></li>
				<li><img src="/<?php echo drupal_get_path('module', 'codefactory'); ?>/images/image2.png" title="image2" /></li>
				<li><img src="/<?php echo drupal_get_path('module', 'codefactory'); ?>/images/image3.png" title="image3" /></li>
				<li><img src="/<?php echo drupal_get_path('module', 'codefactory'); ?>/images/image4.png" title="image4" /></li>
			</ul>
			<div id="slide_prev"></div>
			<div id="slide_next"></div>
		</div>
		<div class="body">
			<div class="more_info">
				Depending on the choices you make, activities may require light to moderate physical effort and passive levels of participation.
				<ul>
					<li>Sightseeing</li>
					<li>Diving</li>
					<li>Bike Riding</li>
					<li>Walking</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="div-three" class="main_cont">
      <h1>Paris Green Tour</h1>
      <div id="gmap"></div>
	</div>
	<div id="div-four" class="main_cont">
		<div id="gmap2"></div>
		<div class="map_options">
			<ul>
				<li><label for="option1">Bike To Museum</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="option1" /></li>
				<li><label for="option2">Organics Restaurant</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="option2" /></li>
				<li><label for="option3">Urban Bee Hive</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="option3" /></li>
				<li><label for="option4">Second-Hand shop</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="option4" /></li>
			</ul>
		</div>
	</div>
	<div id="div-five" class="main_cont">
five Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquam tortor felis, non mollis ligula molestie ac. Donec rutrum, libero in dignissim lobortis, magna metus hendrerit ipsum, non porttitor nisl nisi vel libero. 
	</div>
	<div class="navigator"><a href="#" class="prev-btn">Previous</a><a href="#" class="next-btn">Next</a></div>
</div>

<script>
(function ($) {

/**************************************************/

	var slideInit = 0;

	var map;

	var data = [
		['<h4 class="infowindow_title">Notre Dame Cathedral</h4>', 48.852899,2.349899],
		['<h4 class="infowindow_title">National Museum of Natural History</h4>', 48.843667,2.35625],
		['<h4 class="infowindow_title">Rodin Museum</h4>', 48.855101,2.315903],
		['<h4 class="infowindow_title">Eiffel Tower</h4>', 48.858405,2.29436]
	];

	var marker;
	var markers = new Array();
	var init = -1;
/**************************************************/

	var map2;

	var data2 = [
		['<h4 class="infowindow_title">Bike To Museum</h4>', 48.853576,2.349206, "option1"],
		['<h4 class="infowindow_title">Organics Restaurant</h4>', 48.849976,2.353517, "option2"],
		['<h4 class="infowindow_title">Urban Bee Hive</h4>', 48.850908,2.357444, "option3"],
		['<h4 class="infowindow_title">Second-Hand shop</h4>', 48.847222,2.351994, "option4"],
	];

	var path = [
		new google.maps.LatLng(48.853576,2.349206),
		new google.maps.LatLng(48.852694,2.352049),
		new google.maps.LatLng(48.852877,2.35325),
		new google.maps.LatLng(48.851578,2.35413),
		new google.maps.LatLng(48.851112,2.355836),
		new google.maps.LatLng(48.847533,2.352682),
		new google.maps.LatLng(48.847286,2.353283),
		new google.maps.LatLng(48.844822,2.35695),
		new google.maps.LatLng(48.843989,2.355899)
	];

	var bikePath = new google.maps.Polyline({
	    path: path,
	    geodesic: true,
	    strokeColor: '#FF0000',
	    strokeOpacity: 1.0,
	    strokeWeight: 2
	});

	var markers2 = new Array();
	var init2 = -1;

	var dep = ['<h4 class="infowindow_title">Notre Dame Cathedral</h4>', 48.852899,2.349899];
	var des = ['<h4 class="infowindow_title">National Museum of Natural History</h4>', 48.843667,2.35625];

/**************************************************/
	var infowindow = new google.maps.InfoWindow();

    function fitToBounds(map,markers){
    	var bounds = new google.maps.LatLngBounds();

	    for (var i=0; i<markers.length; i++) {
	        if(markers[i].getVisible())
	            bounds.extend( markers2[i].getPosition() );
	    }

	    map.fitBounds(bounds);
    }

    function initialize(lat,lon) {

    	if(init === 0){
			var mapOptions = {
				zoom: 12,
				center: new google.maps.LatLng(lat, lon)
			};
			map = new google.maps.Map(document.getElementById('gmap'),
			mapOptions);

			addData();
		}
	}

	function initialize2(lat,lon) {

    	if(init2 === 0){
			var mapOptions = {
				zoom: 12,
				center: new google.maps.LatLng(lat, lon)
			};
			map2 = new google.maps.Map(document.getElementById('gmap2'),
			mapOptions);

			marker = new google.maps.Marker({
				position: new google.maps.LatLng(dep[1],dep[2]),
				title: "Starting point - "+ dep[0],
				id: "departure",
				map: map2,
			});

			markers2.push(marker);

			marker = new google.maps.Marker({
				position: new google.maps.LatLng(des[1],des[2]),
				title: "Destination - "+ des[0],
				id: "destination",
				map: map2,
			});

			markers2.push(marker);

			fitToBounds(map2,markers2);

			for(var i=0;i<data2.length;i++){
				marker = new google.maps.Marker({
					position: new google.maps.LatLng(data2[i][1], data2[i][2]),
					title: data2[i][0],
					id: data2[i][3],
					map: map2,
					icon: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
				});

				markers2.push(marker);

				google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
						infowindow.setContent(data[i][0]);
						infowindow.open(map2, marker);
					}
				})(marker, i));
			}

			for(var i=2;i<markers2.length;i++){
				markers2[i].setVisible(false);
			}

			bikePath.setMap(map2);
			bikePath.setVisible(false);

		}
	}

	function addData(){

		for(var i=0;i<data.length;i++){
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(data[i][1], data[i][2]),
				title: data[i][0],
				map: map,
			});

			markers.push(marker);

			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infowindow.setContent(data[i][0]);
					infowindow.open(map, marker);
				}
			})(marker, i));
		}

	}

	$(document).ready(function(){

		var slider = $('ul.bx-slider').bxSlider({
			pager:false,
			nextText: ">",
			prevText: "<",
			prevSelector: "#slide_prev",
			nextSelector: "#slide_next",
			captions: true,
			onSlideAfter: function($slideElement, oldIndex, newIndex) {
				/*var cur_sku = $slideElement[0].attributes[0].value;
				$("#tours ul li[rel='"+cur_sku+"']").trigger("click");*/
			}
		});

		$(".map_options li input").change(function(){
			if($(this).is(":checked")){
				if($(this).attr("id") === 'option1'){
					bikePath.setVisible(true);
					console.log(bikePath);
				}else{
					for(var i = 0; i < markers2.length; i++){
						if(markers2[i].id === $(this).attr("id")){
							markers2[i].setVisible(true);
							return 0;
						}
					}

				}
			}else{
				if($(this).attr("id") === 'option1'){
					bikePath.setVisible(false);
				}else{
					for(var i = 0; i < markers2.length; i++){
						if(markers2[i].id === $(this).attr("id")){
							infowindow.close();
							markers2[i].setVisible(false);
							return 0;
						}
					}
				}
			}
		});


		$(".guide_menu ul li").click(function(){
		    var cont = $(this).find("a").attr("href");
			$(".container .main_cont").hide();
			$(cont).show();

			var cur_z = parseInt($(this).css("z-index"));
			$(".guide_menu ul li").removeClass("active active2");
			$(".guide_menu ul li").each(function(i){
				var l_z = parseInt($(this).css("z-index"));
				if(cur_z===l_z){
					return false;
				}
				$(this).addClass("active");
			});
			$(this).addClass("active active2");
			
			if(cont === '#div-two' && slideInit === 0){
				slider.reloadSlider();
				slideInit++;
			}

			if(cont === '#div-three'){
				init++;
				initialize(48.855101,2.315903);
			}

			if(cont === '#div-four'){
				init2++;
				initialize2(48.855101,2.315903);
			}
			
		});

		$(".page-guide .container .navigator .next-btn").click(function(){
			var index = 0;
			var len = $(".guide_menu ul li").length;
			$(".guide_menu ul li.active").each(function(i){
				index++;
			});
			$(".guide_menu ul li:eq("+index+")").trigger("click");

			if(cont === '#div-two' && slideInit === 0){
				slider.reloadSlider();
				slideInit++;
			}

			if(cont === '#div-three'){
				init++;
				initialize(48.855101,2.315903);
			}

			if(cont === '#div-four'){
				init2++;
				initialize2(48.855101,2.315903);
			}

			
		});

		$(".page-guide .container .navigator .prev-btn").click(function(){
			var index = 0;
			var len = $(".guide_menu ul li").length;
			$(".guide_menu ul li.active").each(function(i){
				index++;
			});
			$(".guide_menu ul li:eq("+(index-2)+")").trigger("click");

			if(cont === '#div-two' && slideInit === 0){
				slider.reloadSlider();
				slideInit++;
			}

			if(cont === '#div-three'){
				init++;
				initialize(48.855101,2.315903);
			}

			if(cont === '#div-four'){
				init2++;
				initialize2(48.855101,2.315903);
			}
			
		});

	});

})(jQuery);
</script>