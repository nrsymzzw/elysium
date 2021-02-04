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
<title> Hogwarts School of Witchcraft and Wizardry - Member</title>

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
				  <li><a href="contactus.php">Contact Us <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
				  <li><a href="clubinfo.php">Club Info <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                  <li><a href="listevent.php">List of Events <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
				  <li><a href="listmember.php">List of Members <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                  <li><a href="logout.php">Logout<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>

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
<form action="updatecheck.php" method="post" class="container" >

<?php 
 include 'dbconnect.php';
        
       $memberid=$_GET['memberid']; 
	   $query="SELECT * FROM  member WHERE memberid='$memberid'";
	   $result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
                 	
?>

<?php while ( $member = mysqli_fetch_array( $result ))
{
				$membername=$member['membername'];
				$memberic=$member['memberic'];
				$memberid=$member['memberid'];
				$password=$member['password'];
				$memberaddress= $member['memberaddress'];
				$membercity= $member['membercity']; 
				$memberpostcode=$member['memberpostcode']; 				
				$memberstate=$member['memberstate'];
				$membergender=$member['membergender'];
				$memberemail=$member['memberemail'];
				$memberform=$member['memberform'];
				$memberage=$member['memberage'];
				$memberphone=$member['memberphone'];
				
}
?>

<center><img src = "img/member.png " width="100"/></center>
<center><h1>Update Information</h1></center>

<center>
<b>Name</b><br>
<input type="text" placeholder="Name...." name="membername" value="<?php echo $membername ?>">
<br><br>

<b>IC Number</b><br>
<input type="text" placeholder="IC Number[Eg : 980318016552]" name="memberic" value="<?php echo $memberic ?>">
 
<br> <br>
 
<b>Member ID</b><br> 
<input type="text" placeholder="Member ID..." name="memberid" value="<?php echo $memberid ?>"> 
 
<br> <br>
 
<b>Password</b><br>
 <input type="text" placeholder="Password..." name="password" value="<?php echo $password ?>"> 
 
<br> <br>
 
<b>Home Address</b><br>
 <input type="text" placeholder="Home Address..." name="memberaddress" value="<?php echo $memberaddress ?>">
 
 <br> <br>
 
<b>City</b><br>
 <input type="text" placeholder="City..." name="membercity" value="<?php echo $membercity ?>">
 
<br> <br>
 
<b>Postcode</b><br>
 <input type="text" placeholder="Postcode" name="memberpostcode" value="<?php echo $memberpostcode ?>">
 
<br> <br>
 
<b>State</b><br>
 
	<select name="memberstate" value="<?php echo $memberstate ?>">
	  <option <?php if($memberstate=='Johor') echo 'selected'; ?> value="Johor">Johor</option>
		<option <?php if($memberstate=='Melaka') echo 'selected'; ?> value="Melaka">Melaka</option>
		<option <?php if($memberstate=='Negeri Sembilan') echo 'selected'; ?>value="Negeri Sembilan">Negeri Sembilan</option>
		<option <?php if($memberstate=='Pahang') echo 'selected'; ?> value="Pahang">Pahang</option>
		<option <?php if($memberstate=='Terengganu') echo 'selected'; ?> value="Terengganu">Terengganu</option>
		<option <?php if($memberstate=='Kelantan') echo 'selected'; ?> value="Kelantan">Kelantan</option>
		<option <?php if($memberstate=='Perak') echo 'selected'; ?> value="Perak">Perak</option>
		<option <?php if($memberstate=='Pulau Pinang') echo 'selected'; ?> value="Pulau Pinang">Pulau Pinang</option>
		<option <?php if($memberstate=='Kedah') echo 'selected'; ?> value="Kedah">Kedah</option>
		<option <?php if($memberstate=='Selangor') echo 'selected'; ?> value="Selangor">Selangor</option>
		<option <?php if($memberstate=='Perlis') echo 'selected'; ?> value="Perlis">Perlis</option>
		<option <?php if($memberstate=='Sarawak') echo 'selected'; ?> value="Sarawak">Sarawak</option>
		<option <?php if($memberstate=='Sabah') echo 'selected'; ?> value="Sabah">Sabah</option>
	</select>
 
 
<br> <br>
 
<b>Gender</b> &nbsp;&nbsp;&nbsp;
 <input <?php if (isset($membergender) && $membergender=="Male") echo "checked";?> type="radio" name="membergender" value="Male" checked> Male &nbsp;&nbsp;
	<input <?php if (isset($membergender) && $membergender=="Female") echo "checked";?> type="radio" name="membergender" value="Female"> Female<br> 
 
<br> <br>
 
<b>Email</b><br>
 <input type="email" placeholder="Email.. [Eg:nrl.mhd@gg.com]" name="memberemail" value="<?php echo $memberemail ?>">
 
<br><br>
 
<b>Class</b> <br>
	<select name="memberform" value="<?php echo $memberform ?>">
	  <option <?php if($memberform=='Saga') echo 'selected'; ?> value="Saga">Saga</option>
	  <option <?php if($memberform=='Iswara') echo 'selected'; ?> value="Iswara">Iswara</option>
	  <option <?php if($memberform=='Wira') echo 'selected'; ?> value="Wira">Wira</option>
	  <option <?php if($memberform=='Waja') echo 'selected'; ?> value="Waja">Waja</option>
	  <option <?php if($memberform=='Preve') echo 'selected'; ?> value="Preve">Preve</option>
	</select> 
<br><br>

<b>Age</b><br>
<input type="number" placeholder="Age" name="memberage" min="0" value="<?php echo $memberage ?>">
<br><br>
 
<b>Phone Number</b><br>
 <input type="text" placeholder="Phone Number [Eg:019999999]" name="memberphone" value="<?php echo $memberphone ?>">
 </center>
<br><br>
<center>
	<input type="submit" name="Submit" value="Update" class="btn btn-default">
</center> 

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
