<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>EXAM HALL SEATING ARANGEMENT SYSTEM </title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

  </head>
  <body>
  


<div class="wrapper">
     
	 
	 <!-------sidebar--design------------>
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
		   <h3><img src="images/sdmplogo.jpg" class="img-fluid"/><span>SDM POLYTECHNIC</span></h3>
		</div>
		<ul class="list-unstyled component m-0">
		  <li class="active">
		  <a href="#" class="dashboard"><i class="material-icons">dashboard</i>EXAM MANAGEMENT </a>
		  </li>
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">aspect_ratio</i>
		  EXAM MANAGEMENT
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu1">
		     <li><a href="exam.php">Edit</a></li>
			 <li><a href="examview.php">view</a></li>
		  </ul>
		  </li>
		  
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  STAFF MANAGEMENT
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu2">
		     <li><a href="staff.php">Edit</a></li>
			 <li><a href="staffview.php">view</a></li>
		  </ul>
		  </li>
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  STUDENT MANAGEMENT
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu3">
		     <li><a href="student.php">Edit</a></li>
			 <li><a href="studentview.php">view</a></li>
		  </ul>
		  </li>
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  SUBJECT MANAGEMENT
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu5">
		     <li><a href="subject.php">Edit</a></li>
			 <li><a href="subjectview.php">view</a></li>
		  </ul>
		  </li>
		  
		  
		  <li class="dropdown">
		  <a href="tt.html">
		  TIME TABLE FORMAT
		  </a>
		   
		  <li class="">
		  <a href="setting.php" class="">SETTINGS </a>
		  </li>
		  <li class="">
		  <a href="../main.php" class="">LOGOUT</a>
		  </li>
		
		</ul>
	 </div>
	 
   <!-------sidebar--design- close----------->
   
   
   
   
      <!-------page-content start----------->
   
      <div id="content">
	     
		  <!------top-navbar-start-----------> 
		     
		  <div class="top-navbar">
		     <div class="xd-topbar">
			     <div class="row">
				     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					    <div class="xp-menubar">
						    <span class="material-icons text-white">signal_cellular_alt</span>
						</div>
					 </div>
					 
					 
					 <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
					     <div class="xp-profilebar text-right">
						    <nav class="navbar p-0">
							   <ul class="nav navbar-nav flex-row ml-auto">
							     
								
							   
							   
							   </ul>
							</nav>
						 </div>
					 </div>
					 
				 </div>
				 
				 <div class="xp-breadcrumbbar text-center">
				    <h4 class="page-title">SDM POLYTECHNIC</h4>
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#">EXAM HALL SEATING ARRANGEMENT</a></li>

					</ol>
				 </div>
				 
				 
			 </div>
		  </div>
		  <!------top-navbar-end-----------> 
		  
		  
		   <!------main-content-start-----------> 
		     
		      <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					     
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">Manage Exam Details </h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addStudentModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add Details</span>
							   </a>
							  
							 </div>
					     </div>
					   </div>
					   
					   
						  
                          
							 
						  
						  
					      
					   
				   
					   </div>
					</div>
					
					
					
									   <!----add-modal start--------->
									   <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
		<div class="modal fade" tabindex="-1" id="addStudentModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 
				

<div class="form-group">
		    <label>Subject Code</label>
			<input type="text" name="T2" autocomplete="off" id="i2" class="form-control" required="">
		</div>
		
<div class="form-group">
		    <label>Room No</label>
			<input type="text" name="T3" autocomplete="off" id="i3" class="form-control" required="">
		</div>
		
		<div class="form-group">
		    <label>Register No</label>
			<input type="text" name="T4" autocomplete="off" id="i4" class="form-control" required="">
		</div>	
		

<div class="form-group">
		    <label>Date</label>
			<input type="date" name="T5" autocomplete="off" id="i5" class="form-control" required="">
		</div>
		
		<div class="form-group">
		    <label>Time</label>
			<input type="time" name="T6" autocomplete="off" id="i6" class="form-control" required="">
		</div>

		<div class="form-group">
		    <label>Subject</label>
			<select name="T1" required="" id="i1" class="form-control">
			<option value="">---Select---</option>
			<option value="NSM">NSM</option>
			<option value="ST">ST</option>
			</select>
			
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="submit" class="btn btn-success">Save</button>
      </div>
    </div></form>
  </div>
</div>

					   <!----add-modal end--------->


					   <table class="table table-striped table-hover table-responsive">
					      <thead>
						     <tr>
							 <th>Sl.No</th>
							 <th>Subject</th>
							 <th>Subject Code</th>
							 <th>Room No</th>
							 <th>Register No</th>
                             <th>Date</th>
                             <th>Time</th>
							 <th>Remove</th>
							 </tr>
						  </thead>
						  <tbody>
					   <?php
						
                        include 'dbconfig.php';
                        $slno=0;
                                $q="select * from exam";
                                $r=mysqli_query($con,$q);
                                while($row=mysqli_fetch_array($r))
                                {
                                    $subfromdb=$row["sub"];
									$scodefromdb=$row["scode"];
                                    $roomfromdb=$row["room"];
                                    $regfromdb=$row["reg"];
									$datefromdb=$row["date"];
                                    $timefromdb=$row["time"];
                                    
                                    
                                $slno++;
                                echo "<tr>";
								echo "<td>".$slno."</td>";
                                echo "<td>".$subfromdb."</td>";
								echo "<td>".$scodefromdb."</td>";
                                echo "<td>".$roomfromdb."</td>";
                                echo "<td>".$regfromdb."</td>";
                                echo "<td>".$datefromdb."</td>";
                                echo "<td>".$timefromdb."</td>";
                             
								echo  "<td><a href='deleteexam.php?id=".$roomfromdb."'><img src='images/deleteicon.png' height='30' width='20'></a></td>";
                                echo "</tr>";	
                                    
                                    
                                }
                           ?>
						</tbody>      			   
						</table>
					   
					   
		  
		 
		 
		 <!----footer-design------------->
		 
		 <footer class="footer">
		    <div class="container-fluid">
			   <div class="footer-in">
			      <p class="mb-0">SDM POLYTECHNIC</p>
			   </div>
			</div>
		 </footer>
		 
		 
		 
		 
	  </div>
   
</div>

<?php
								if(isset($_POST['submit'])) 
									
								{ 
									include 'dbconfig.php';
									$sub=$_POST["T1"];
									$scode=$_POST["T2"];
                                    $room=$_POST["T3"];
									$reg=$_POST["T4"];
									$date=$_POST["T5"];
									$time=$_POST["T6"];
									
									$sub=strtoupper($sub);
									$scode=strtoupper($scode);
									$room=strtoupper($room);
									$reg=strtoupper($reg);
									$date=($date);
									$time=($time);
									$flag=0;
									
									$q="select * from exam";
									$r=mysqli_query($con,$q);
									while($row=mysqli_fetch_array($r))
									{
										$subfromdb=$row["sub"];
										$scodefromdb=$row["scode"];
                                        $roomfromdb=$row["room"];
                                        $regfromdb=$row["reg"];
										$datefromdb=$row["date"];
                                        $timefromdb=$row["time"];
										if                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ($bname==$bnamefromdb && $bcode==$bcodefromdb && $time==$timefromdb &&  $date==$datefromdb)
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
										$q="insert into exam values('$sub','$scode','$room','$reg','$date','$time')";
										$r=mysqli_query($con,$q);
										if($r)
										{
											echo "<script> alert('Exam Details Sucessfully Added');
											window.location.href='exam.php';
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

<!-------complete html----------->





  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
								<script type="text/javascript">
									$(document).ready(function(){
										$(".xp-menubar").on('click',function(){
											$("#sidebar").toggleClass('active');
											$("#content").toggleClass('active');
										});
										
										$('.xp-menubar,.body-overlay').on('click',function(){
											$("#sidebar,.body-overlay").toggleClass('show-nav');
										});
										
									});
								</script>
  
  



  </body>
  
  </html>


