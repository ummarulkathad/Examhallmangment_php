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
		  <a href="#" class="dashboard"><i class="material-icons">dashboard</i>STUDENT MANAGEMENT</a>
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
		  <a href="">
		  TIME TABLE FORMAT
		  </a>
		   
		  <li class="">
		  <a href="setting.php" class="">SETTINGS </a>
		  </li>
		  <li class="">
		  <a href="log.php" class="">LOGOUT</a>
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
							    <h2 class="ml-lg-2">Manage  Student</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addStudentModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add Student</span>
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
        <h5 class="modal-title">Add Students</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
		    <label>Student Name</label>
			<input type="text" name="T11" autocomplete="off" id="i11" class="form-control" required>
		</div>
		
		<div class="form-group">
		    <label>Student Reg_No</label>
			<input type="text" name="T22" autocomplete="off" id="i22" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Branch</label>
			<select name="T33" required="" id="i33" class="form-control">
			<option value="">---Select---</option>
			<option value="CS">CS</option>
			<option value="EC">EC</option>
			<option value="ME">ME</option>
			<option value="CE">CE</option>
			</select>
			
		</div>
		<div class="form-group">
		    <label>Semester</label>
			<input type="text" name="T44" autocomplete="off" id="i44" class="form-control" required>
		</div>

		<div class="form-group">
		    <label>Batch</label>
			<select name="T55" required="" id="i55" class="form-control">
			<option value="">---Select---</option>
			<option value="2020-21">2020-21</option>
			<option value="2021-22">2021-22</option>
			
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
							 <th>Student Name</th>
							 <th>Student Reg_No</th>
							 <th>Branch</th>
							 <th>Semester</th>
                             <th>Batch</th>
							 <th>Action</th>
							 </tr>
						  </thead>
						  <tbody>
					   <?php
						
                        include 'dbconfig.php';
                        $slno=0;
                                $q="select * from student";
                                $r=mysqli_query($con,$q);
                                while($row=mysqli_fetch_array($r))
                                {
                                    $snamefromdb=$row["sname"];
                                    $sgnfromdb=$row["sgn"];
                                    $branfromdb=$row["bran"];
                                    $semfromdb=$row["sem"];
                                    $batchfromdb=$row["batch"];
                                    
                                    
                                $slno++;
                                echo "<tr>";
								echo "<td>".$slno."</td>";
                                echo "<td>".$snamefromdb."</td>";
								echo "<td>".$sgnfromdb."</td>";
                                echo "<td>".$branfromdb."</td>";
                                echo "<td>".$semfromdb."</td>";
                                echo "<td>".$batchfromdb."</td>";
								echo  "<td><a href='deleteStudent.php?id=".$branfromdb."'><img src='images/deleteicon.png' height='30' width='20'></a></td>";
                                echo "</tr>";	
                                    
                                    
                                }
                           ?>
						</tbody>      			   
						</table>
					   
					   
				   <!-------edit-modal start--------->
		<div class="modal fade" tabindex="-1" id="editStudentModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
		    <label>Student Name</label>
			<input type="text" name="T11" autocomplete="off" id="i11" class="form-control" required>
		</div>
		
		<div class="form-group">
		    <label>Student Reg_No</label>
			<input type="text" name="T22" autocomplete="off" id="i22" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Branch</label>			
			<input type="text" name="T33" autocomplete="off" id="i33" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Semester</label>
			<input type="text" name="T44" autocomplete="off" id="i44" class="form-control" required>
		</div>

		<div class="form-group">
		    <label>Batch</label>
			<input type="date" name="T55" autocomplete="off" id="i55" class="form-control" required>
		</div>
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="submit" class="btn btn-success">Save</button>
      </div>
    </div>
							</form>
  </div>
</div>

					   <!----edit-modal end--------->	   
					   
					   
					 <!----delete-modal start--------->
		<div class="modal fade" tabindex="-1" id="deleteStudentModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Students</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Records</p>
		<p class="text-warning"><small>this action Cannot be Undone,</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		<a href="#">
        <button type="button" class="btn btn-success">Delete</button></a>
      </div>
    </div>
  </div>
</div>

				 
			     </div>
			  </div>
		  
		    <!------main-content-end-----------> 
		  
		 
		 
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
									$sname=$_POST["T11"];
									$sgn=$_POST["T22"];
                                    $bran=$_POST["T33"];
									$sem=$_POST["T44"];
									$batch=$_POST["T55"];
									
									
									$sname=strtoupper($sname);
									$sgn=strtoupper($sgn);
									$bran=strtoupper($bran);
									$sem=strtoupper($sem);
									$batch=($batch);
									
									$flag=0;
									
									$q="select * from student";
									$r=mysqli_query($con,$q);
									while($row=mysqli_fetch_array($r))
									{
                                        $snamefromdb=$row["sname"];
                                        $sgnfromdb=$row["sgn"];
                                        $branfromdb=$row["bran"];
                                        $semfromdb=$row["sem"];
                                        $batchfromdb=$row["batch"];
										
										
									}
									if($flag==1)
									{
										echo "<div class='alert alert-danger'>
										<strong>Error!!</strong> Given Data Already Exist.
										</div>";
										
									}
									else
									{
										$q="insert into student values('$sname','$sgn','$bran','$sem','$batch')";
										$r=mysqli_query($con,$q);
										if($r)
										{
											echo "<script> alert('Exam Details Sucessfully Added');
											window.location.href='student.php';
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


