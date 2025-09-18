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
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

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
		  <a href="#" class="dashboard"><i class="material-icons">dashboard</i>Main page</a>
		  </li>
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">aspect_ratio</i>EXAM MANAGEMENT
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu1">
		     <li><a href="examedit.php">Edit</a></li>
			 <li><a href="#">view</a></li>
		  </ul>
		  </li>
		  
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  STAFF MANAGEMENT
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu2">
		     <li><a href="#">Edit</a></li>
			 <li><a href="#">view</a></li>
		  </ul>
		  </li>
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  STUDENT MANAGEMENT
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu3">
		     <li><a href="#">Edit</a></li>
			 <li><a href="#">view</a></li>
		  </ul>
		  </li>
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  SUBJECT MANAGEMENT
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu5">
		     <li><a href="#">Edit</a></li>
			 <li><a href="#">view</a></li>
		  </ul>
		  </li>
		  
		  
		  <li class="dropdown">
		  <a href="">
		  TIME TABLE FORMAT
		  </a>
		   
		  <li class="">
		  <a href="#" class="">SETTINGS </a>
		  </li>
		  <li class="">
		  <a href="#" class="">LOGOUT</a>
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
							    <h2 class="ml-lg-2">Manage  Students</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addStudentModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add New Students</span>
							   </a>
							   <a href="#deleteStudentModal" class="btn btn-danger" data-toggle="modal">
							   <i class="material-icons">&#xE15C;</i>
							   <span>Delete</span>
							   </a>
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover table-responsive">
					      <thead>
						     <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="selectAll">
							 <label for="selectAll"></label></th>
							 <th>Name</th>
							 <th>Branch</th>
							 <th>Register Number</th>
							 <th>Actions</th>
							 </tr>
						  </thead>
						  
						  <tbody>
						      <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox1" name="option[]" value="1">
							 <label for="checkbox1"></label></th>
							 <th>A</th>
							 <th>CSE</th>
							 <th>1</th>
							 <th>
							    <a href="#editStudentModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteStudentModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
							 
							  <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox2" name="option[]" value="1">
							 <label for="checkbox2"></label></th>
							 <th>B</th>
							 <th>CSE</th>
							 <th>2</th>
							 <th>
							    <a href="#editStudentModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteStudentModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
							 
							 <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox3" name="option[]" value="1">
							 <label for="checkbox3"></label></th>
							 <th>C</th>
							 <th>CSE</th>
							 <th>3</th>
							 <th>
							    <a href="#edit" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteStudentModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
							  <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox4" name="option[]" value="1">
							 <label for="checkbox4"></label></th>
							 <th>D</th>
							 <th>CSE</th>
							 <th>4</th>
							 <th>
							    <a href="#editStudentModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteStudentModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
							  <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox5" name="option[]" value="1">
							 <label for="checkbox5"></label></th>
							 <th>E</th>
							 <th>CSE</th>
							 <th>5</th>
							 <th>
							    <a href="#editStudentModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteStudentModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
						  </tbody>
						  
					      
					   </table>
					   
					   <div class="clearfix">
					     <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
					     <ul class="pagination">
						    <li class="page-item disabled"><a href="#">Previous</a></li>
							<li class="page-item "><a href="#"class="page-link">1</a></li>
							<li class="page-item "><a href="#"class="page-link">2</a></li>
							<li class="page-item active"><a href="#"class="page-link">3</a></li>
							<li class="page-item "><a href="#"class="page-link">4</a></li>
							<li class="page-item "><a href="#"class="page-link">5</a></li>
							<li class="page-item "><a href="#" class="page-link">Next</a></li>
						 </ul>
					   </div>
					   
					   
					   
					   
	
					   
					   
					   
					   
					   </div>
					</div>
					
					
									   <!----add-modal start--------->
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
		    <label>Name</label>
			<input type="text" class="form-control" required>
		</div>
		
		<div class="form-group">
		    <label>Branch</label>
			<textarea class="form-control" required></textarea>
		</div>
		<div class="form-group">
		    <label>Register Number</label>
			<input type="text" class="form-control" required>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Add</button>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->
					   
					   
					   
					   
					   
				   <!----edit-modal start--------->
		<div class="modal fade" tabindex="-1" id="editStudentModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Students</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label>Subject</label>
			<input type="text" name="T1" autocomplete="off" id="i1" class="form-control" required>
		</div>
		
		<div class="form-group">
		    <label>Subject Code</label>
			<input type="text" name="T2" autocomplete="off" id="i2" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Branch</label>
			<input type="text" name="T3" autocomplete="off" id="i3" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Class Room</label>
			<input type="text" name="T4" autocomplete="off" id="i4" class="form-control" required>
		</div>

		<div class="form-group">
		    <label>Date</label>
			<input type="date" name="T5" autocomplete="off" id="i5" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Time</label>
			<input type="time" name="T6" autocomplete="off" id="i6" class="form-control" required>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
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
        <button type="button" class="btn btn-success">Delete</button>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->   
					   
					
					
				 
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
									$sub=$_POST["T1"];
									$scode=$_POST["T2"];
                                    $branch=$_POST["T3"];
									$class=$_POST["T4"];
									$date=$_POST["T5"];
									$time=$_POST["T6"];
									
									$sub=strtoupper($sub);
									$scode=strtoupper($scode);
									$branch=strtoupper($branch);
									$class=strtoupper($class);
									$date=($date);
									$time=($time);
									$flag=0;
									
									$q="select * from exam";
									$r=mysqli_query($con,$q);
									while($row=mysqli_fetch_array($r))
									{
										$subfromdb=$row["sub"];
										$scodefromdb=$row["scode"];
                                        $branchfromdb=$row["branch"];
                                        $classfromdb=$row["class"];
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
										$q="insert into exam values('$sub','$scode','$branch','$class','$date','$time')";
										$r=mysqli_query($con,$q);
										if($r)
										{
											echo "<script> alert('Exam Details Sucessfully Added');
											window.location.href='examview.php';
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


