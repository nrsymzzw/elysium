<?php
include 'dbconnect.php';
	$membername=$_POST['membername'];
	$memberic=$_POST['memberic'];
	$memberid=$_POST['memberid'];
	$password=$_POST['password'];
	$memberaddress=$_POST['memberaddress'];
	$membercity=$_POST['membercity'];
	$memberpostcode=$_POST['memberpostcode'];
	$memberstate=$_POST['memberstate'];
	$membergender=$_POST['membergender'];
	$memberemail=$_POST['memberemail'];
	$memberform=$_POST['memberform'];
	$memberage=$_POST['memberage'];
	$memberphone=$_POST['memberphone'];
	
	$query="insert into member(membername, memberic, memberid, password, memberaddress, membercity, memberpostcode, memberstate, membergender, memberemail, memberform, memberage, memberphone)values('$membername','$memberic','$memberid','$password','$memberaddress','$membercity','$memberpostcode','$memberstate','$membergender','$memberemail','$memberform', '$memberage', '$memberphone')";
	$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
	if($result)
	{   
		echo"<script>
	    alert('Create account succesfully!');
		location.href='login.php';
		</script>";
		
	}
	else
	{
		echo"<script>
	    alert('Problem Occured');
		location.href='registerform.php';
		</script>";
	}
		
mysqli_close($link);
?>