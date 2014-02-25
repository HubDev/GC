function initialize(data){

	for(var i=0;i<data.length;i++){
		var no = (data[i].no < 10) ? "0"+data[i].no : data[i].no;
		var pointListing = [
			'<div class="point-wrapper '+data[i].type +'-point">',
			'<div class="input-group">',
			'<span class="input-group-addon">'+ data[i].no +'</span>',
			'<span class="input-group-addon"><input name="tour_item'+ no +'" type="checkbox"'+data[i].checked+' value="checked" ></span>',
			'<label type="text" class="form-control '+data[i].type +'-label">'+ data[i].name +'</label>',
			'</div>',
			"<ul>"
		];

		for(var p=0;p<data[i].subchoices.length;p++){
			pointListing.push("<li class='form-control'><input type='checkbox' name='sub"+(p+1)+"_tour-item"+no+"' "+data[i].subchoices[p].checked+" value='checked' /><label>" + data[i].subchoices[p].name + "</label></li>");
		}
		var memo = data[i].memo || '';
		pointListing.push('<li><textarea name="text_tour-item'+ no +'" class="form-control" placeholder="Write your notes here">'+data[i].memo+'</textarea></li>');

		pointListing.push("</ul></div>");
		var pointListingMarkup = pointListing.join("");

		$("#choices-wrapper").append(pointListingMarkup);
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
	
	$("#save-choices").click(function(){
		var frm = $("#choices-wrapper");
		var myjson = {}; 
		$.each($("#choices-wrapper input"), function() { myjson[this.name] = this.value; });
		$.each($("#choices-wrapper textarea"), function() { myjson[this.name] = this.value; });
		var formdata = JSON.stringify(frm.serializeArray());
		$.ajax({
			url: "save-data.php",
			type: 'POST',
			data: {formdata:formdata},
			success: function(ret){
				console.log('sucess');
			}
		});
	
	});

	$("#choices-wrapper").on("change",".input-group input[type='checkbox']",function(){
		
		if( $(this).is(":checked") ){
			$(this).parent().parent().parent().find("ul").slideDown();
		}else{
			$(this).parent().parent().parent().find("ul").slideUp();
		}
	});


});

function updateSelectedChoices(){
	var cont = "";
	$("#choices-wrapper .point-wrapper").each(function(i){
		$this = $(this);
		if ($this.find("input").is(":checked")){
			cont += "<div>";
			cont += "<h3>"+$this.find(".form-control").html()+"</h3>";
			cont += "<ul>";
			$this.find(".form-control").each(function(){
				if( $(this).find("input").is(":checked") ){
					cont += "<li>"+$(this).find("label").html()+"</li>";
				}
			});
			cont += "</ul>";
			cont += "<p class='text-primary'>"+$this.find("textarea").val()+"</p>";
			cont += "</div><hr>";
		}
	});
	$("#choices-selected").html("").html(cont);
}