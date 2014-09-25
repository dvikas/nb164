<?php
	require_once('includes/db.php');
	require_once('includes/functions.php');

	if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
#		header('location:index.php');
#		exit;
	}
/*
 * `email`='$email' AND `password`='$password'
 *  EMAIL : "gaurav@zend.com"   Pass : "pass@123"
 * 
 * FINAL QUERY
 * `email`='gaurav@zend.com' AND `password`='pass@123' 
 * 
 * INJECTED QUERY
 *  EMAIL : "gaurav@zend.com' OR 1='1"   Pass : "pass@123"
 * `email`='gaurav@zend.com' OR 1='1' AND `password`='pass@123'
 * 
 * */	

if(!empty($_POST))
{
		
	if(isset($_POST['email']) && !empty($_POST['email']) 
	&& isset($_POST['password']) && !empty($_POST['password'])
	) {
		
		$_POST = array_map('trim',$_POST);
		$_POST = array_map('mysql_real_escape_string',$_POST);
		
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		
		$loginQuery = "SELECT * FROM users WHERE `email`='$email' 
		AND `password`='$password' AND `status`='1'";
pq($loginQuery);
		$loginResult = mysql_query($loginQuery) or die(mysql_error());
		if(mysql_num_rows($loginResult) == 1){
#Login Success
if(isset($_POST['remember'])){
	$time = time()+ (30); 
	setcookie('email',$email,$time);
	setcookie('password',$_POST['password'],$time);
}	else {
	$time = time()- 1; 
	setcookie('email',$email,$time);
	setcookie('password',$_POST['password'],$time);
}	
			$user = mysql_fetch_assoc($loginResult);
pr1($user);			
			$_SESSION['id'] = $user['id'];
			$_SESSION['uname'] = $user['uname'];
			$_SESSION['email'] = $user['email'];
#header('location:index.php');	
#exit;		
			//echo '<hr>';
			//echo session_id();
			//echo '<hr>';
			
		} else {
			echo "<h4>LOgin Fail</h4>";			
		}
		
	} else {
		echo "<h4>Username / Password Required</h4>";
	}
		pr($_POST);

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin </title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        
        
        
        <input name="email" type="text" class="form-control" placeholder="Email address"  autocomplete="off" autofocus value="<?=@$_COOKIE['email']?>">
        
        
        <input name="password" type="password" class="form-control" placeholder="Password"  value="<?=@$_COOKIE['password']?>"> 
        
        
        
        <label class="checkbox">
          <input type="checkbox" checked name="remember"> Stay Signed in
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
