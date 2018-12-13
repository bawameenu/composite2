<?php
session_start();
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

   
    <title> Search Room</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700,800|Varela+Round" rel="stylesheet">

    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body>

    
	
<body>




<?php 

$id=$_SESSION["user"];

	include 'connection.php';
											
										
											$query = "SELECT * FROM regis where email='$id';" ;

																$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
																
																
																
																if (mysqli_num_rows($run_query) > 0 ) {
																while ($row = mysqli_fetch_array($run_query))
																	{
																	$id = $row['fname'];
																	//echo $id;
																	$_SESSION["name"]=$id;
																	
																	}
																	}
	?>
																	

<!-- ===== Start of Header Navigation ===== -->
    <header class="header1">
        <nav class="navbar navbar-default navbar-static-top fluid_header centered">
            <div class="container">

                <!-- Logo -->
                <div class="col-md-2 col-sm-6 col-xs-8 nopadding">
                    <a class="navbar-brand nomargin" href="index.php"><img src="logo.png" alt="logo" style="
    height: 69px;
"></a>
                    <!-- INSERT YOUR LOGO HERE -->
                </div>

                <!-- ======== Start of Main Menu ======== -->
                <div class="col-md-10 col-sm-6 col-xs-4 nopadding">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Start of Main Nav -->
                    <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="main-nav">
                        <ul class="nav navbar-nav pull-right">

                            <!-- Mobile Menu Title -->
                            <li class="mobile-title">
                                <h4>main menu</h4></li>

                            <!-- Simple Menu Item -->
                            <li class="dropdown simple-menu active">
                                <a href="mainpage.php">Home</a>
                               
                            </li>
							
				


							  <li class="dropdown simple-menu">
                                <a href="room.php">Search Room</a>
                               
                            </li>
							  <li class="dropdown simple-menu">
                                <a href="change.php?id=<?php echo $id; ?>">Change Password</a>
                               
                            </li>
							
								 <li class="dropdown simple-menu">
                                <a href="booking.php">My Booking</a>
                               
                            </li>
							
							
							  <li class="dropdown simple-menu">
                                <a href="logout.php">Logout </a>
                               
                            </li>
							
							 <li class="dropdown simple-menu">
                                <a href="#">Welcome User (<?php echo $id; ?>)</a>
                               
                            </li>
							
							

							
                        
                          

                        </ul>
                    </div>
                    <!-- End of Main Nav -->
                </div>
                <!-- ======== End of Main Menu ======== -->

            </div>
        </nav>
    </header>
    <!-- ===== End of Header Navigation ===== -->









    <!-- ===== Start of Main Search Section ===== -->
    <section class="main3 ptb120 overlay-gradient">

        <!-- Start of Wrapper -->
        <div class="container wrapper">


            <div class="col-md-6 col-xs-12 mb60 text-center">
                <div class="section-title">
                    <h2 class="text-white">Redisson Hotels</h2>
                </div>

            
            </div>


            <div class="col-md-4 col-md-offset-2 col-xs-12">
                <!-- Start of Form -->
                <form class="job-search-form row" action="#" method="POST">

                    <!-- Start of Form Title -->
                    <div class="col-md-12 form-title">
                        <h4>Search Room</h4>
                    </div>

					
						 <div class="col-md-12 search-keywords" style="height: 45px;">
                  	 <label for="psw" style="height: 45px;"><b>Select City</b></label>
   <select name="city" class="col-md-12 search-keywords" style="height: 40px;">
   <option value="Montreal">Montreal </option>
   <option value="Toronto">Toronto </option>
   </select>
   
					
					</div>
					
                  
				  
				
					 <div class="col-md-6 search-keywords" style="height: 45px;">
                  	 <label for="psw" style="height: 45px;"><b>Adults</b></label>
   <select name="" class="col-md-12 search-keywords" style="height: 40px;">
   <option value="0">Adults </option>   
   <option value="1">1 </option>
   <option value="2">2 </option>
   </select>
   
					
					</div>
					
						 <div class="col-md-6 search-keywords" style="height: 45px;">
                  	 <label for="psw" style="height: 45px;"><b>Children</b></label>
   <select name="" class="col-md-12 search-keywords" style="height: 40px;">
   <option value="0">Childern </option>
   <option value="1">0 </option>
   <option value="2">1 </option>
   </select>
   
					
					</div>
					
                  	
				

                   
                    <!-- Start of submit input -->
                    <div class="col-md-12 search-submit mt15 mb30">
                      <input type="submit" name="name1" class="btn btn-info" value="Submit">
                    </div>

                </form>
                <!-- End of Form -->
            </div>

        </div>
        <!-- End of Wrapper -->

    </section>
    <!-- ===== End of Main Search Section ===== -->

	
	





  

    <!-- ===== Start of Blog Masonry Section ===== -->
    <section class="blog-masonry ptb80">
        <div class="container">
		   <h2 class="text-white" style="color:#000" align="center">Search Result </h2><br><br>
            <div class="row blog-grid">
                
					<?php

include 'connection.php';
if (isset($_POST['name1']))
	{
	
	$title=$_POST['city'];
	
//echo "<script> alert('Displaying Results');</script>";



		$cnt=0;
											$query = "SELECT * FROM room where city='$title'" ;

																$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
																if (mysqli_num_rows($run_query) > 0 ) {
																while ($row = mysqli_fetch_array($run_query))
																	{
																		 ++$cnt;
																	$city = $row['city'];
																	$name= $row['name'];
																	
																	$images = $row['images'];
																	$status= $row['status'];
																
																	
																	
																	?>
																	
								<?php
								$lent=mysqli_num_rows($run_query);
									for($i=0; $i<1; $i++)
										{
										?>									
										
                <!-- Start of Blog Post 1 with Image Thumbnail -->
                <div class="element col-md-3 col-xs-12">
                    <article class="blog-single shadow-hover pb30">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail normal-post">
                            <a href="detail.php?name=<?php echo $name; ?>" class="hover-link"><img src="<?php echo $images; ?>" alt=""></a>
                        </div>

                        <!-- Post Detail -->
                        <div class="blog-post-title pt30 pb10">
                            <h3><a href="detail.php?name=<?php echo $name; ?>"><?php echo $name; ?></a></h3>
							  <h3><a href="detail.php?name=<?php echo $name; ?>"><?php echo $city;  ?></a></h3>
						
						<h3><a href="#">
							   
							   <?php 
							   
							   if($status==0) 
								echo "<p style='color:green'>*Available</p>";
								else
								echo "<p style='color:red'>Unavailable</p>";
							   ?>
							   
							   </a></h3>
                          
                        </div>
                      
                    </article>
                </div>
                <!-- End of Blog Post 1 -->

              <?php
			  }}}}
			  ?>
            </div>
            <!-- End of Row -->
            
            <!-- Start of Show More Button -->
          
            
        </div>
    </section>
	
	
	
	 <?php
	 
	 include "footer.php";
	 
	 ?>
 
</body>

</html>