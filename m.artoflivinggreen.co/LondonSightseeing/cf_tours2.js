$(document).ready(function() {
  $('[data-toggle="offcanvas"]').click(function() {
	var buttonText=($('.row-offcanvas').hasClass('active')) ? 'Tour Places <span class="glyphicon glyphicon-chevron-right"><span>' : '<span class="glyphicon glyphicon-chevron-left"><span> Map';
	$(this).html(buttonText);
    $('.row-offcanvas').toggleClass('active');
	
  });
  
  var init = 0;
  $('#rootwizard').bootstrapWizard({
			onTabShow: function(tab, navigation, index) {
				var $total = navigation.find('li').length;
				var $current = index+1;
				var $percent = ($current/$total) * 100;
				if(init === 0){
					init++;
				}else{
					var loc = tab[0].childNodes[0].href;
					window.location.assign(loc);
					return false;
				}
			}
  });
});