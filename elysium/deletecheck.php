<?php
	include 'dbconnect.php';
	
	$memberid=$_GET['memberid'];
	$query ="DELETE FROM member WHERE memberid='$memberid'";
	$result = mysqli_query($link,$query)or die("Query failed");
	if($result)
		{   
		echo"<script>
	    alert('Delete Succesfully');
		location.href='listmember.php';
		</script>";
		
	}
	else
	{
		$info = mysqli_fetch_array($result); 	
		echo"<script>
	    alert('Problem Occured!');
		location.href='listmember.php';
		</script>";
	}
	mysqli_close($link);
?>