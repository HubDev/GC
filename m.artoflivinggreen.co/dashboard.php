<?php 

	session_start(); 

	if(!isset($_SESSION['username']) || $_SESSION['username'] == 'denied') { 
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
     <!-- BEGIN Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <!-- END Bootstrap core CSS -->
    <!-- BEGIN Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <!-- END Custom styles for this template -->
<!-- test -->
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container col-md-12">
	  <?php if($_SESSION['username'] == 'denied') echo 'Access Denied - Wrong username or password'; ?>
	  <div id="logo" class="col-md-12">
	  	<img src="images/alg-logo.png" border="0"/>
	  </div>
      <form class="form-signin" role="form" method="post" action="validate.php">
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="email" required autofocus>
        </div>
        <div class="form-group">
        	<input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-actions">
        	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </div>
      </form>

    </div> <!-- /container -->
</body>
</html>

<?php 
	}else{ 
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
	<!-- Custom styles for this template -->
	<link href="styles-home.css" rel="stylesheet">	

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
            <li><a href="./"><b>What</b><br>Living Green</a></li>
            <li><a href="./"><b>Discover</b><br>Green Tours</a></li>
            <li class="active"><a href="#"><b>Start</b><br>Your Journey</a></li>
          </ul>
		   <ul class="nav navbar-nav navbar-right">
			  <li><a href="logout.php"><b>Logout</b></a></li>
          </ul>
		 
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container col-md-12">

	    <div class="row">
			<div class="jumbotron">
				<h2>Making Green Choices while Exploring the World</h2>
				<p>Hi <?php echo $_SESSION['username']; ?>,in this page you can see the Tours that you have purchased. Select any of your tours to start the Tour Guide</p>
			</div>
	    </div>

	    <div id="green_tours" class="row">
	    	<h2>Purchased Tours</h2>
	    	<?php 
		    	include_once("data.php"); 

		    	foreach($data as $d){
		    ?>

		    <div class="col-6 col-sm-6 col-lg-6">
		    	<h3><?php echo $d['title']; ?></h3>
		    	<p><?php echo $d['text']; ?></p>
          <div class="tour-image-container">
		    	 <img class="tour-image" src="<?php echo $d['image']; ?>" />
		    	 <a class="btn btn-default" href="/<?php echo $d['id']; ?>" role="button">Start Tour</a>
          </div>
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


<?php 
	} 
?>