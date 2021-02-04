<?php

include 'dbconnect.php';				
session_start();

$memberid = $_REQUEST['mid']; 					// assign textbox to variable
$password = $_REQUEST['pwd'];

$query = "SELECT * FROM member where memberid='$memberid' AND password='$password'"; 
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
	if(mysqli_num_rows($result) == 0)   			// check either result found or not
	{
		echo"<script>
	    alert('Invalid Login/Password');
		location.href='login.php';
		</script>";			// redirect to another page (data not found!)
	}
	else
	{
		$info = mysqli_fetch_array($result); 	// returns a row from a recordset
		echo"<script>
	    alert('Login Successfully');
		location.href='listevent.php';
		</script>";
	}
mysqli_close($link);
?>