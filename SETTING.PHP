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
		  <a href="#" class="dashboard"><i class="material-icons">dashboard</i>SETTINGS</a>
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