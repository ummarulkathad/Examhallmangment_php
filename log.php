


<!DOCTYPE html>
<html lang="en">
<head>
  <title>EXAM HALL MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" type="text/css" href="log.css"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body  background="sdm.jpg">
<div class="container">
          <div class="card">
            <div class="inner-box" id="card">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"><font color='white'>EXAM HALL SEATING ARANGEMENT SYSTEM </font></a>
    </li>
	
    
  </ul>
</nav>


<!-- Grid system-->
<div class="container">

		<div class="row">
			<div class="col-sm-4">
			
			</div>
			
			<div class="col-sm-4">
			<br>
							<form role="form"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
								<div class="form-group">
								<label  for="User">User Type</label>
								<select class="form-control form-control-sm" name="D1" id="i1" required="">
								<option value="student">Student</option>
								<option value="staff">Staff</option>
								<option value="admin">Admin</option>
								</select>
								</div>
								
								
								<div class="form-group">
								<label  for="Username">Username</label>
								<input type="text" name="T1" autocomplete="off" id="i2" required="" class="form-control form-control-sm">
								</div>
								
								<div class="form-group">
								<label  for="pwd">password</label>
								<input type="password" name="T2" autocomplete="off" id="i3" required="" class="form-control form-control-sm">
								</div>
								
								
				 <button type="submit"  name="loginbutton" class="btn btn-success">Login</button>
                 </form>
			
			
			
			
			
			</div>
			
			<div class="col-sm-4">
			
			</div>
		</div>
</div>
</div>
</div>

		<?php
								if(isset($_POST['loginbutton'])) 
								{ 
							
							
									include 'dbconfig.php';
									$usertype=$_POST["D1"];
									$username=$_POST["T1"];
									$password=$_POST["T2"];
									if($usertype=="admin" && $username=="admin" && $password=="sdmp")
									{
										header('location:admin/exam.php');
									}
									if($usertype=="staff")
									{
											$flag=0;
											$q="select * from staff";
											$r=mysqli_query($con,$q);
											while($row=mysqli_fetch_array($r))
											{
												
												$sname=$row["sname"];
												$sid=$row["sid"];
												if(strcmp($username,$sname)==0 && strcmp($password,$sid)==0)
												{
													$flag=1;
												}
											}
											if($flag==1)
											{
												$_SESSION["logname"]=$username;
												header('location:staff/staffview.php');
											}
											else
											{
												echo "<p align='center'><font color='red'><b>Login Failed</b></font></p>";
											}
									}
									if($usertype=="student")
									{
											$flag=0;
											$q="select * from student";
											$r=mysqli_query($con,$q);
											while($row=mysqli_fetch_array($r))
											{
												
												$sname=$row["sname"];
												$sgn=$row["sgn"];
												if(strcmp($username,$sname)==0 && strcmp($password,$sgn)==0)
												{
													$flag=1;
												}
											}
											if($flag==1)
											{
												$_SESSION["logname"]=$username;
												header('location:student/student.php');
											}
											else
											{
												echo "<p align='center'><font color='red'><b>Login Failed</b></font></p>";
											}
									}
								
								}
								
		?>
		
		
</div>

</body>
</html>