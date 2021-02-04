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
	
	//Update data  
	
	   $query="Update member set membername='$membername',
	   memberic='$memberic',memberid='$memberid',password='$password',
	   memberaddress='$memberaddress',membercity='$membercity', 
	   memberpostcode='$memberpostcode',memberstate='$memberstate',membergender='$membergender',
	   memberemail='$memberemail',memberform='$memberform',memberage='$memberage',memberphone='$memberphone' where memberid='$memberid'" ;
	   $result = mysqli_query( $link,$query) or die("Query failed");
	  
        if ($result)
		{
		   echo"<script>
	    alert('Update Successfully!');
		location.href='listmember.php';
		</script>";
		}
		   else
		{ echo "Problem occured !"; }
        mysqli_close($link);