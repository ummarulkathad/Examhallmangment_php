<?php

$scode=$_REQUEST["id"];
include 'dbconfig.php';
$q="delete from subject where scode='$scode'";
$r=mysqli_query($con,$q);
if($r)
{
	
	echo "<script> alert('Deleted Successfully');
	window.location.href='subject.php';
	</script>";
	
}
else
{
	echo "<script> alert(' Operation Failed');
	window.location.href='subject.php';
	</script>";	
		
}
?>