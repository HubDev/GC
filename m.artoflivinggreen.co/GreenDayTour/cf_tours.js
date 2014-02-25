var map;
var data;

// Create marker info window.
infowindow = new google.maps.InfoWindow();

var marker;
var markers = new Array();
var init = 0;
var bounds = new google.maps.LatLngBounds();
var cur_position;

directionsDisplay = new google.maps.DirectionsRenderer({suppressMarkers: true});
var directionsService = new google.maps.DirectionsService();

function initialize(lat,lon) {
	if(init === 0){
		var mapOptions = {
			zoom: 12,
			center: new google.maps.LatLng(lat, lon),
			draggable: true,
			panControl: false,
			zoomControl: true,
			disableDefaultUI: true,
			minZoom: 14,
		    zoomControlOptions: {
		        position: google.maps.ControlPosition.BOTTOM_LEFT
		    }, 
		};
		map = new google.maps.Map(document.getElementById('gmap'),
		mapOptions);

		addData();
		
		map.fitBounds(bounds);
		/*var listenerFixZoom = google.maps.event.addListener(map, "idle", function() { 
		  if (map.getZoom() < 14) map.setZoom(14); 
		});*/
		if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(showPosition);
		}
		
	}
}

$("#find_me").click(function(){
	if(cur_position){
		map.setCenter(cur_position);
	}
});

function showPosition(position){
	cur_position = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

	marker = new google.maps.Marker({
		position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
		title: "You're here!",
		map: map,
		icon: "../images/home_icon.png",
		id: "home"
	});
}

function addData(){
	for(var i=0;i<data.length;i++){
	    cur_pos= new google.maps.LatLng(data[i].lat, data[i].lon);
		marker_color= (data[i].type === 'main') ? '428bca' : '00FF00';
		marker_size_multiplier= (data[i].type === 'main') ? 1.5 : 1;
		custom_icon='http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld='+ data[i].noList+'|'+ marker_color +'|000000';
		var pinIcon = new google.maps.MarkerImage(
			custom_icon,
			null, /* size is determined at runtime */
			null, /* origin is 0,0 */
			null, /* anchor is bottom center of the scaled image */
			new google.maps.Size(marker_size_multiplier*21, marker_size_multiplier*34)
		);
		marker = new google.maps.Marker({
			position: cur_pos,
			title: data[i].name,
			map: map,
			icon: pinIcon,
			
			id: data[i].no
		});

		markers.push(marker);
		bounds.extend(cur_pos);

		var infowindowContent = [
			'<div class="image_wrapper"><img src="map-images/' + data[i].infoImage + '" /></div>',
			'<div class="infowindow_content">',
			'<h3>' + data[i].infoTitle + '</h3>',
			'<p class="infowindow_text">' + data[i].infoDescription + '</p>',
			'<p class="infowindow_address"><span>Address: </span>' + data[i].infoAddress + '</p>',
			'<p class="infowindow_tel"><span>Tel: </span>' + data[i].infoTel + '</p>',
			'<div class="arrow"></div>',
			'</div>'
		].join("");

		var myOptions = {
			content: infowindowContent
			,disableAutoPan: false
			,maxWidth: "320px"
			,pixelOffset: new google.maps.Size(-140, -270)
			,zIndex: null
			,boxStyle: { 
				background: "#fff"
				,opacity: 1
				,width: "280px"
			}
			,closeBoxMargin: "125px 2px 2px 2px"
			,isHidden: false
			,pane: "floatPane"
			,enableEventPropagation: false
	    };

	    markers[i].infobox = new InfoBox(myOptions);

		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				$.each(markers, function(i,m){
					m.infobox.close();
				});
				markers[i].infobox.open(map, this);
				map.panTo(cur_pos);
			}
		})(marker, i));

		var num = (data[i].type === 'main') ? data[i].noList : '<span class="glyphicon glyphicon-play"></span> ' + data[i].noList;
		
		
		var pointListing = [
			'<div class="point-wrapper '+data[i].type +'-point">',
			'<div class="input-group">',
			'<span class="input-group-addon">'+ num +'</span>',
			'<span class="input-group-addon"><input type="checkbox"'+data[i].checked+'></span>',
			'<span class="input-group-addon"><span onclick="openInfowindow(this);" map-marker="'+ data[i].no +'" class="glyphicon glyphicon-info-sign"></span></span>',
			'<label type="text" class="form-control '+data[i].type +'-label">'+ data[i].name +'</label>',
			'</div>',
			'</div>'
		];
		var pointListingMarkup = pointListing.join("");
	
		$('body').append('<div id="sandbox" style="display:none"></div>');
		$('#sandbox').append(pointListingMarkup);

		$(".map-info-labels").append($('#sandbox .point-wrapper').clone());
		$( "#sandbox" ).remove();
	}	

	var arr = planRoutePath();
  	directionsDisplay.setMap(null);
	drawRoute(arr,'walk');

}

function drawRoute(arr,travel_mode){
	var start = new google.maps.LatLng(arr[0].lat, arr[0].lon);
	var end = new google.maps.LatLng(arr[arr.length-1].lat, arr[arr.length-1].lon);
	var waypts = [];
	for(var i=1;i<arr.length-1;i++){
		waypts.push({
          location:new google.maps.LatLng(arr[i].lat, arr[i].lon),
          stopover:false});
	}
	if(travel_mode === 'bicycle'){

		var request = {
	      origin: start,
	      destination: end,
	      waypoints: waypts,
	      optimizeWaypoints: true,
	      travelMode: google.maps.TravelMode.BICYCLING
		};

	}else{

		var request = {
	      origin: start,
	      destination: end,
	      waypoints: waypts,
	      optimizeWaypoints: true,
	      travelMode: google.maps.TravelMode.WALKING
		};

	}

	directionsService.route(request, function(response, status) {
		if (status == google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(response);
			directionsDisplay.setMap(map);
		}
	});
	
}

function openInfowindow(obj){
    $('.overlay-button').click();
	var $this = $(obj);
	var id = $this[0].attributes['map-marker'].value;
	var cur_id;

	for(var i=0;i<markers.length;i++){
		if( parseInt(id) === parseInt(markers[i].id) ){
			cur_id = i;
			break;
		}
	}
	
	google.maps.event.trigger(markers[cur_id], 'click');
}

function toogleChoices(el) {
    var buttonElement=jQuery(el).find(">:first-child");
	if (buttonElement.hasClass( "glyphicon-chevron-down" )){
		buttonElement.removeClass("glyphicon-chevron-down").addClass('glyphicon-chevron-up');
	} else {
		buttonElement.removeClass("glyphicon-chevron-up").addClass('glyphicon-chevron-down');
	}
	jQuery(el).next().toggle();
}

function planRoutePath(){
	var arr = [];
	var ret = [];

	jQuery(".map-info-labels .input-group").each(function(){ //TO_DO
		if( jQuery(this).find("input[type='checkbox']").is(":checked") ){
			var id = jQuery(this).find(".glyphicon-info-sign").attr("map-marker");
			arr.push(id);
		}
	});

	for(var i=0;i<data.length;i++){
		for(var p=0;p<arr.length;p++){
			if(arr[p] == data[i].no){
				ret.push(data[i]);
			}
		}
	}

	return ret;
}


function onOggFlowReady(){
	
    var customVariables = [
		{ name: 'algid', value: '5555' }
    ];
    OggFlowAPI.setCustomVariables(customVariables);

};


$(function() {
  // Setup drop down menu
  // Fix input element click problem
  $('.dropdown input, .dropdown label').click(function(e) {
	e.stopPropagation();
  });

  $.ajax({
  	url: "map_points.php",
    type: 'POST',
    dataType: 'json',
    success: function(ret){
    	data = ret;
        initialize(data[0].lat,data[0].lon);
    }
  });

  $(".map-info-labels").on("change",".input-group input[type='checkbox']",function(){
  	var arr = planRoutePath();
  	directionsDisplay.setMap(null);
	if(arr.length>1){
  		drawRoute(arr,'walk');
		setTimeout(function(){map.setCenter(new google.maps.LatLng(arr[0].lat, arr[0].lon))},500); //this one center to the first point of the route
		
  	} else {
		map.fitBounds(bounds);
	}
	
  }); 


});//on ready end