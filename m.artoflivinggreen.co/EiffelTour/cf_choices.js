function initialize(data){

	for(var i=0;i<data.length;i++){
		var pointListing = [
			'<div class="point-wrapper '+data[i].type +'-point">',
			'<div class="input-group">',
			'<span class="input-group-addon">'+ data[i].no +'</span>',
			'<span class="input-group-addon"><input type="checkbox"'+data[i].checked+'></span>',
			'<label type="text" class="form-control '+data[i].type +'-label">'+ data[i].name +'</label>',
			'</div>',
			"<ul>"
		];

		for(var p=0;p<data[i].subchoices.length;p++){
			pointListing.push("<li class='form-control'><input type='checkbox' /><label>" + data[i].subchoices[p] + "</label></li>");
		}
		pointListing.push('<li><textarea class="form-control" placeholder="Write your notes here"></textarea></li>');

		pointListing.push("</ul></div>");
		var pointListingMarkup = pointListing.join("");

		$(".map-info-labels").append(pointListingMarkup);
	}

}

$(function() {

	$.ajax({
		url: "choices-data.php",
		type: 'POST',
		dataType: 'json',
		success: function(ret){
			initialize(ret);
		}
	});

	$(".map-info-labels").on("change",".input-group input[type='checkbox']",function(){
		
		if( $(this).is(":checked") ){
			$(this).parent().parent().parent().find("ul").slideDown();
		}else{
			$(this).parent().parent().parent().find("ul").slideUp();
		}
	});


});