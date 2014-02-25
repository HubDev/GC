<?php 

	session_start();

	if(isset($_POST['username']) && isset($_POST['password'])){
	
	    define('DRUPAL_ROOT', '/home/cg9961/public_html');
		include("/home/cg9961/public_html/includes/bootstrap.inc");
		include("/home/cg9961/public_html/includes/password.inc");
		drupal_bootstrap(DRUPAL_BOOTSTRAP_DATABASE);
		$username = $_POST['username'];
		$email=mysql_escape_string($username);
		$result=db_query("SELECT u.uid, u.pass FROM {users} u WHERE u.name LIKE :email", array(":email" => db_like($email)))->fetchObject();
		$pass = $_POST['password'];
		$acc->pass = $result->pass; // needs to be password from database, don't forget to escape dollar signs
		$correct = user_check_password($pass, $acc);
		
		if($correct){
		    $user=explode( '@', $email );
			$_SESSION['username'] = $user[0];
			$_SESSION['uid'] = $result->uid;
		}else{
			$_SESSION['username'] = 'denied';
		}

	}else{
		unset($_SESSION['username']);
	}

	header("location: dashboard.php");
	

?>