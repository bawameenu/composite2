
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

   
    <title> Look For Room</title>
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

 <style>
section#latest-news .blog-post .blog-post-thumbnail {
    height: 240px;
    width: 100%;
    position: relative;
    /* background: linear-gradient(to right,#ff5c01 -20%,#443088 120%); */
}
section#latest-news .blog-post .blog-post-thumbnail, section#latest-news2 .blog-post {
    background: -moz-linear-gradient(left,#ff5c01 -20%,#443088 120%);
    /* background: -webkit-linear-gradient(left,#ff5c01 -20%,#443088 120%); */
    overflow: hidden;
}
</style>
</head>

<body>

    <?php
	include "master.php";
	?>

	
	
    <!-- ===== Start of Blog Masonry Section ===== -->
    <section class="blog-masonry ptb80">
        <div class="container">
		   <h2 class="text-white" style="color:#000" align="center">Look For Room  </h2><br><br>
            <div class="row blog-grid">
                
					<?php

include 'connection.php';

	//$title=$_POST['city'];
	
//echo "<script> alert('Displaying Results');</script>";



		$cnt=0;
											$query = "SELECT * FROM room " ;

																$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
																if (mysqli_num_rows($run_query) > 0 ) {
																while ($row = mysqli_fetch_array($run_query))
																	{
																		 ++$cnt;
																	$city = $row['city'];
																	$name= $row['name'];
																	
																	$images = $row['images'];
																	$status = $row['status'];
																	
																
																	
																	
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
                            <a href="#" class="hover-link"><img src="<?php echo $images; ?>" alt=""></a>
                        </div>

                        <!-- Post Detail -->
                        <div class="blog-post-title pt30 pb10">
                            <h3><a href="#"><?php echo $name; ?></a></h3>
							  <h3><a href="#"><?php echo $city;  ?></a></h3>
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
			  }}}
			  ?>
            </div>
            <!-- End of Row -->
            
            <!-- Start of Show More Button -->
          
            
        </div>
    </section>
    <!-- ===== End of Blog Masonry Section ===== -->
    
    <!-- ===== Start of Get Started Section ===== -->

    <!-- ===== End of Get Started Section ===== -->
	
	
	
	 <?php
	 
	 include "footer.php";
	 
	 ?>
 
</body>

</html>
