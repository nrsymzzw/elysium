<?php
session_start();
$con = mysqli_connect('localhost', 'root' );
if($con){
	// echo "conenction successful";
}else{
	echo "no connection";
}
?>
<style>
th {
	align: center;
}
</style>

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

</head>
<?php
//Connection to database 
include 'dbconnect.php';
$search=$_REQUEST["membersearch"];


$query="Select * from member WHERE memberic LIKE '$search'";
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
?>
<body>
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

	<center>  
	

<h1>Search Result</h1><br>
<div class="studentForm">
<table border="0">
<col width="200">
<col width="200">
<?php
//data looping
while($row = mysqli_fetch_array($result)){ ?>
	<tr>
		<td><b>Name:</b></td>
		<td><?php echo $row['membername'];?></td>
	</tr>
	<tr>
		<td><b>IC Number:</b></td>
		<td><?php echo $row['memberic'];?></td>
	</tr>
	<tr>
		<td><b>Username:</b></td>
		<td><?php echo $row['memberid'];?></td>
	</tr>
	<tr>
		<td><b>Password:</b></td>
		<td><?php echo $row['password'];?></td>
	</tr>
	<tr>
		<td><b>Home Address:</b></td>
		<td><?php echo $row['memberaddress'];?></td>
	</tr>
	<tr>
		<td>Gender:</b></td>
		<td><?php echo $row['membergender'];?></td>
	</tr>
	<tr>
		<td><b>Email:</b></td>
		<td><?php echo $row['memberemail'];?></td>
	</tr>
	<tr>
		<td><b>Class:</b></td>
		<td><?php echo $row['memberform'];?></td>
	</tr>
	<tr>
		<td><b>Age:</b></td>
		<td><?php echo $row['memberage'];?></td>
	</tr>
	<tr>
		<td><b>Telephone:</b></td>
		<td><?php echo $row['memberphone'];?></td>
	</tr>
</table>
<div class="buttons">
	<a class="btn btn-default" href="updateform.php?memberid=<?php print ($row['memberid']);?>">Update</a>
	<a class="btn btn-default" href="deletecheck.php?memberid=<?php print ($row['memberid']);?>">Delete</a>
	<button class="btn btn-default" onclick="printReceipt()">Print</button>
</div>
	<?php  
     // looping close
     }
	?>

</div>
<br><br>

	
	<br><br><br><br><br><br>
	
	<footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <a href="#" class="badge-btn">Badge Button</a>
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
<script>
function printReceipt(){
	window.print();
}
</script>
</body>
</html>

<p>back to <a href="listmember.php">Menu</a></p>