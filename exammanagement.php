<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" >
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</head>
    <title>EXAM HALL SEATING ARRANGEMENT</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>ARRANGEMENT</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>ADMIN</a>
                <a href="staffmanagement.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2">
                        <div class="dropdown-menu"></i>Staff Management
                        
  <a class="dropdown-item" href="#">Regular link</a>
  <a class="dropdown-item active" href="#">Active link</a>
  <a class="dropdown-item" href="#">Another link</a>
</div></a>
            </div>
        </div>

<!-- Grid system-->
<div class="container">

			<div class="row">
			<div class="col-sm-4">
			<br>
		
					  <h4>Add Branch</h4>
					 <form role="form"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
										<div class="form-group">
										<label  for="bname">Branch Name</label>
										<input type="text" name="T1" autocomplete="off" id="i1" required="" class="form-control form-control-sm">
										</div>
										
										<div class="form-group">
										<label  for="bcode">Branch Code</label>
										<input type="text" name="T2" autocomplete="off" id="i2" required="" class="form-control form-control-sm">
										</div>
										
                                                                                <div class="form-group">
										<label  for="time">Timings</label>
										<input type="time" name="T3" autocomplete="off" id="i3" required="" class="form-control form-control-sm">
										</div>

                                                                                <div class="form-group">
										<label  for="date">Date</label>
										<input type="date" name="T4" autocomplete="off" id="i4" required="" class="form-control form-control-sm">
										</div>

										<button type="submit" name="submit" class="btn btn-success">Add</button>
					 </form>
			</div>
			<div class="col-sm-8">
							<div class="table-responsive">
							  <table class="table">
								<tr>
								<th>Sl NO</th>
								<th>Branch Code</th>
								<th>Branch Name</th>
                                                                <th>Timings</th>
								<th>Date</th>
								<th>Action</th>
								</tr>
							 
						<?php
						
							include 'dbconfig.php';
							$slno=0;
									$q="select * from branch";
									$r=mysqli_query($con,$q);
									while($row=mysqli_fetch_array($r))
									{
										
										$bnamefromdb=$row["bname"];
										$bcodefromdb=$row["bcode"];
                                                                                $timefromdb=$row["time"];
                                                                                $datefromdb=$row["date"];
										
									$slno++;
									echo "<tr>";
									echo "<td>".$slno."</td>";
									echo "<td>".$bcodefromdb."</td>";
									echo "<td>".$bnamefromdb."</td>";
                                                                        echo "<td>".$timefromdb."</td>";
									echo "<td>".$datefromdb."</td>";
									echo "<td><a href='deleteBranch.php?id=".$bcodefromdb."'><img src='deleteicon.png' height='30' width='20'></a></td>";
									echo "<tr>";	
										
										
									}
									
									
									
						
						?>
						 </table>
							</div>
			
			</div>
			</div>
			<?php
								if(isset($_POST['submit'])) 
									
								{ 
									include 'dbconfig.php';
									$bname=$_POST["T1"];
									$bcode=$_POST["T2"];
                                                                        $time=$_POST["T3"];
									$date=$_POST["T4"];
									
									$bname=strtoupper($bname);
									$bcode=strtoupper($bcode);
									$flag=0;
									
									$q="select * from branch";
									$r=mysqli_query($con,$q);
									while($row=mysqli_fetch_array($r))
									{
										$bnamefromdb=$row["bname"];
										$bcodefromdb=$row["bcode"];
                                                                                $timefromdb=$row["time"];
                                                                                $datefromdb=$row["date"];
										if($bname==$bnamefromdb && $bcode==$bcodefromdb && $time==$timefromdb &&  $date==$datefromdb)
										{
											$flag=1;
										}
										
									}
									if($flag==1)
									{
										echo "<div class='alert alert-danger'>
										<strong>Error!!</strong> Given Data Already Exist.
										</div>";
										
									}
									else
									{
										$q="insert into branch values('$bcode','$bname','$time','$date')";
										$r=mysqli_query($con,$q);
										if($r)
										{
											echo "<script> alert('Branch Details Sucessfully Added');
											window.location.href='addBranch.php';
											</script>";
											
										}
										else
										{
											echo "<div class='alert alert-danger'>
											<strong>Error!!</strong> Operation Failed
											</div>";
										}
									}
								}
			
			?>
</div>

</body>
</html>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>