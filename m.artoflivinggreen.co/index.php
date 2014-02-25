<?php 
	session_start(); 
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
	<link href="styles-home.css" rel="stylesheet">	

	<!-- Just for debugging purposes. Don't actually copy this line! -->
	<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

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
          <a class="navbar-brand" href="./"><img src="images/alg-logo.png"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
		    <li><a href="https://www.artoflivinggreen.co?force-web"><b>Back To</b><br>Desktop</a></li>
            <li class="active"><a href="#"><b>What is</b><br>Living Green</a></li>
            <li><a href="#"><b>Discover</b><br>Green Tours</a></li>
            <li><a href="dashboard.php"><b>Start</b><br>Your Journey</a></li>
          </ul>
		  <?php  
			if(isset($_SESSION['username'])) { 
			?>
		   <ul class="nav navbar-nav navbar-right">
			  <li><a href="logout.php"><b>Logout</b></a></li>
          </ul>
		   <?php 
				} 
		   ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container col-md-12">

	    <div class="row">
			<div class="jumbotron">
				<h2>Making Green Choices while Exploring the World</h2>
				<p>Subscribers click <a href="dashboard.php">Start Your Journey</a> and chat to our GreenConcierge to plan your trip.</p>
			</div>
	    </div>

	    <div id="green_tours" class="row">
	    	<?php 
		    	include_once("tours-data.php");
		    	foreach($content as $d){
		    ?>

		    <div class="col-6 col-sm-6 col-lg-3">
		    	<h2><?php echo $d['title']; ?></h2>
		    	<p><?php echo $d['text']; ?></p>
		    	<img class="tour-image" src="<?php echo $d['image']; ?>" />
		    </div>

		    <?php		
		    	}
	    	?>
	    </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

</body>