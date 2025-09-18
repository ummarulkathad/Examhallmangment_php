<?php

$bran=$_REQUEST["id"];
include 'dbconfig.php';
$q="delete from student where bran='$bran'";
$r=mysqli_query($con,$q);
if($r)
{
	
	echo "<script> alert('Deleted Successfully');
	window.location.href='student.php';
	</script>";
	
}
else
{
	echo "<script> alert(' Operation Failed');
	window.location.href='student.php';
	</script>";	
		
}
?>