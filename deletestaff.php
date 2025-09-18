<?php

$sname=$_REQUEST["id"];
include 'dbconfig.php';
$q="delete from staff where sname='$sname'";
$r=mysqli_query($con,$q);
if($r)
{
	
	echo "<script> alert('Deleted Successfully');
	window.location.href='staff.php';
	</script>";
	
}
else
{
	echo "<script> alert(' Operation Failed');
	window.location.href='staff.php';
	</script>";	
		
}
?>