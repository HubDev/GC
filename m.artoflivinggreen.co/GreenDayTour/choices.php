<?php 

	session_start(); 

	if(isset($_SESSION['username'])) { 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <title>ArtOfLivingGreen-Making Green Choices Everyday</title>

    <!-- Bootstrap core CDN -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<!-- begin Hipmob script -->
		<script type="text/javascript">
		var _hmc = _hmc || [];
		_hmc.push(['app', '0280b71ef72b4483b4812257c72795d7']);
		_hmc.push(['title','How can we help?']);
		(function() {
		var hm = document.createElement('script'); hm.type = 'text/javascript';
		hm.async = true; hm.src = 'https://hipmob.s3.amazonaws.com/hipmobchat.min.js';
		var b = document.getElementsByTagName('script')[0]; b.parentNode.insertBefore(hm, b);
		})();
		</script>
		<!-- end Hipmob script -->
    <!-- Custom styles for this template -->
    <link href="../styles.css" rel="stylesheet">
    <link href="../offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style>
    	.overlay-button{
    		-webkit-transform: rotate(90deg);
			-moz-transform: rotate(90deg);
			-ms-transform: rotate(90deg);
			-o-transform: rotate(90deg);
			transform: rotate(90deg);
			right:-36px;
			top: 50px;
    	}
    </style>
	
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../"><img src="../images/alg-logo.png"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../"><b>What</b><br>Living Green</a></li>
            <li><a href="../"><b>Discover</b><br>Green Tours</a></li>
            <li class="active"><a href="../dashboard.php"><b>Start</b><br>Your Journey</a></li>
          </ul>
		   <ul class="nav navbar-nav navbar-right">
			  <li><a href="../logout.php"><b>Logout</b></a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
	  <div class="row">
		<div id="rootwizard">
			<div class="navbar-wizzard">
			  	
					<ul>
						<li class="leaf-wizzard" style="z-index:5"><a href="index.php" data-toggle="tab"><span class="glyphicon glyphicon-home"></span> </a></li>
						<li class="leaf-wizzard" style="z-index:4"><a href="places.php" data-toggle="tab">Places</a></li>
						<li class="leaf-wizzard" style="z-index:3"><a href="map.php" data-toggle="tab">Map</a></li>
						<li class="leaf-wizzard active" style="z-index:2"><a href="choices.php" data-toggle="tab">Choices</a></li>
					</ul>
			  
			</div>
			
			<div class="tab-content">
				<div class="tab-pane" id="tab1">
				 
				</div>
				<div class="tab-pane" id="tab2">
				 
				</div>
				<div class="tab-pane" id="tab3">
				
				</div>
				<div class="tab-pane" id="tab4">
				
				</div>
				<div class="tab-pane" id="tab5">
			
				</div>
				
				<ul class="pager wizard">
					<li class="previous first" style="display:none;"><a href="#">First</a></li>
					<li class="previous"><a href="#">Previous</a></li>
					<li class="reset_data text-center"><a href="" type="button" class="btn btn-primary">Reset</a></li>
					<li class="next last" style="display:none;"><a href="#">Last</a></li>
					<li class="next"><a href="#">Next</a></li>
				</ul>
			</div>	
		</div>
		
	  </div> 	<!-- row -->
      
      <div class="row row-offcanvas row-offcanvas-right">

  		<p class="visible-xs overlay-button-wrapper">
          <button type="button" id="save-choices" class="overlay-button" data-toggle="offcanvas">
          	Save & Share
          	<!-- <span class="glyphicon glyphicon-chevron-right"><span> -->
          </button>
		</p> 
      	<h1>Making Choices</h1>
      	<form class="map-info-labels" id="choices-wrapper"></form>

      	<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
		  <div class="toggler"></div>
		  <h2>My Choices</h2>
		  <div id="choices-selected"></div>
        </div><!--/span-->

      </div>

      <button id="save-choices" class="choices_save_btn">Save Changes</button>
      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
	<script src="../twitter-bootstrap-wizard-master/jquery.bootstrap.wizard.min.js"></script>
	<script>
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

		setTimeout(function(){
			$("#choices-wrapper .point-wrapper").each(function(i){
				if ($(this).find("input").is(":checked")){
					$(this).find("ul").slideDown();
				}
			});
		},2000);

		$(document).ready(function(){
			$('[data-toggle="offcanvas"]').click(function() {
				var buttonText=($('.row-offcanvas').hasClass('active')) ? 'Save & Share' : 'Make Choices';
				$(this).html(buttonText);
				updateSelectedChoices();
			    $('.row-offcanvas').toggleClass('active');
			});
		});

	</script>
	<script src="cf_choices.js"></script>
  </body>
</html>
<?php 
	}else{ 
	header("location: ../dashboard.php");
	} 
?>