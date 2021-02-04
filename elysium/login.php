<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	// echo "conenction successful";
}else{
	echo "no connection";
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Hogwarts School of Witchcraft and Wizardry - Member</title>
	
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link href="css/styles.css?v=1.6" rel="stylesheet">
    <link href="css/queries.css?v=1.6" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
	
<style>
input[type=text]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid black;
}

input[type=password]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid black;
}
</style>
</head>
<body>

	<section class="navigation">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
              <nav class="pull">
                <ul class="top-nav">
                  <li><a href="signupmemberform.php">Sign Up <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
				  <li><a href="loginmember.php">Login <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="hero" id="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-right">
              <a href="#"><i class="fa fa-navicon fa-2x nav_slide_button"></i></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <h1 class="animated bounceInDown">Elysium Computer Club</h1>
              <p class="animated fadeInUpDelay">Empowering the Internet Generation </p>
            </div>
          </div>
          
         
        </div>
      </section>

<br><br><br><br>
<center>
	<img src = "img/member.png " width="100"/>
	<form name="formmember" method="post" action="logincheck.php" class="container">
		<center><h1>LOGIN</h1></center><br>

					Member ID <br>
					<input name="mid" type="text"> <br>

					Password <br>
					<input name="pwd" type="password" > <br><br><br>


	  <input type="submit" name="Submit" value="Login" class="btn btn-default">
	  <input type="reset" name="reset" value="Reset" class="btn btn-default">
	 
  <h5> Account doesn't exist ? <a href="registerform.php">Create an account</a>.</h5>
 
</form>
</center>

<br><br><br>

	<footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <a href="index.html" class="badge-btn">Badge Button</a>
			  
              <p class="footer-credit">Copyright &copy; by Elysium Computer Club</p>
            </div>
          </div>
        </div>
      </footer>
	  
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="js/jquery.fancybox.pack.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/scripts.js?v=1.7"></script>
      <script src="js/jquery.flexslider.js"></script>
      <script src="js/jquery.smooth-scroll.js"></script>
      <script src="js/modernizr.js"></script>
      <script src="js/waypoints.min.js"></script>

</body>
</html>