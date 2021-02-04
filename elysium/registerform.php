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
<meta name="viewport" content="width=device-width, initial-scale=1">
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
input[type=text], select{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid black;
}

input[type=email] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid black;
}

input[type=number] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid black;
}
</style>
</head>

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

<br><br><br>
<form action="registercheck.php" method="post" class="container" >

<center><img src = "img/member.png " width="100"/></center>
<center><h1>Sign Up</h1></center>

<center>
<b>Name</b><br>
<input type="text" placeholder="Name" name="membername" required>
<br><br>

<b>IC Number</b><br>
<input type="text" placeholder="IC Number (e.g. 980318016552)" name="memberic" required>
<br><br>
 
<b>Username</b><br> 
<input type="text" placeholder="Username" name="memberid" required> 
 
<br> <br>
 
<b>Password</b><br>
<input type="text" placeholder="Password" name="password" required> 
<br><br>
 
<b>Home Address</b><br>
<input type="text" placeholder="Home Address" name="memberaddress" required>
<br><br>
 
<b>City</b><br>
<input type="text" placeholder="City" name="membercity" required>
<br><br>
 
<b>Postcode</b><br>
<input type="text" placeholder="Postcode" name="memberpostcode" required>
<br><br>
 
<b>State</b><br>
	<select name="memberstate">
	  <option value="Perlis">Perlis</option>
	  <option value="Kedah">Kedah</option>
	  <option value="Pulau Pinang">Pulau Pinang</option>
	  <option value="Perak">Perak</option>
	  <option value="Selangor">Selangor</option>
	  <option value="Johor">Johor</option>
	  <option value="Negeri Sembilan">Negeri Sembilan</option>
	  <option value="Melaka">Melaka</option>
	  <option value="Pahang">Pahang</option>
	  <option value="Terengganu">Terengganu</option>
	  <option value="Kelantan">Kelantan</option>
	  <option value="Sabah">Sabah</option>
	  <option value="Sarawak">Sarawak</option>
	</select>
<br><br>
 
<b>Gender</b> &nbsp;&nbsp;&nbsp;
<input type="radio" name="membergender" value="Male" checked>Male &nbsp;&nbsp;
<input type="radio" name="membergender" value="Female">Female<br>
<br><br>
 
<b>Email</b><br>
<input type="email" placeholder="Email (e.g. nrl.mhd@gg.com)" name="memberemail" required>
 
<br><br>
 
<b>Class</b> <br>
	<select name="memberform">
	  <option value="Saga">Saga</option>
	  <option value="Iswara">Iswara</option>
	  <option value="Wira">Wira</option>
	  <option value="Waja">Waja</option>
	  <option value="Preve">Preve</option>
	</select> 
<br><br>

<b>Age</b><br>
<input type="number" placeholder="Age" name="memberage" min="0" required>
<br><br>
 
<b>Phone Number</b><br>
<input type="text" placeholder="Phone Number (e.g. 019999999)" name="memberphone" required>
</center>
<br><br>
<center>
	<input type="submit" name="Submit" value="Register" class="btn btn-default">
	<input type="reset" name="Reset" value="Reset" class="btn btn-default"> 
	 <a href="login.php" class="btn btn-default">Cancel</a>
</center> 
<br>
    <center><h5>Account already exist? <a href="loginmember.php">Login</a></h5></center>
<br><br><br>
</form>

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
