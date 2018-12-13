
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

   
    <title> Home Page</title>
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
    /* height: 240px; */
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

					 <div class="col-md-12 search-keywords">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">Name</label>
                        <input class="full-width has-padding has-border" id="signin-email" name="name" placeholder="Full Name" >
                    </p>
					
					</div>
					
						 <div class="col-md-12 search-keywords">
                  	 <label for="psw"><b>Select City</b></label>
   <select name="city">
   <option value="dubai">Dubai </option>
   <option value="hongkong">Hongkong </option>
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
											$query = "SELECT * FROM room where city='$title' AND status=0" ;

																$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
																if (mysqli_num_rows($run_query) > 0 ) {
																while ($row = mysqli_fetch_array($run_query))
																	{
																		 ++$cnt;
																	$city = $row['city'];
																	$name= $row['name'];
																	
																	$images = $row['images'];
																	
																
																	
																	
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
                            <h3><a href="blog-post.html"><?php echo $name; ?></a></h3>
							  <h3><a href="blog-post.html"><?php echo $city;  ?></a></h3>
                          
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
    <!-- ===== End of Blog Masonry Section ===== -->
    
    <!-- ===== Start of Get Started Section ===== -->

    <!-- ===== End of Get Started Section ===== -->



    <!-- ===== Start of Latest News Section ===== -->
    <section class="ptb80" id="latest-news">
        <div class="container">

            <!-- Section Title -->
            <div class="section-title">
                <h2>Our Services</h2>
            </div>

        
            <!-- Start of Blog Post -->
            <div class="col-md-4 col-xs-12">
                <div class="blog-post">
                    <!-- Blog Post Image -->
                    <div class="blog-post-thumbnail">
                        <a href="blog-post.html" class="hover-link">
                            <img src="11.jpg" alt="">
                        </a>
                    </div>

                    <!-- Blog Post Info -->
                    <div class="post-info">
                        <a href="blog-post.html">24/7 Customer Support</a>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t ext ever since the 1500s....</p>

                    </div>

                    <!-- Read More Button -->
                    <a href="#" class="btn btn-blue btn-small btn-effect">read more</a>

                </div>
            </div>
            <!-- End of Blog Post -->

            <!-- Start of Blog Post -->
            <div class="col-md-4 col-xs-12">
                <div class="blog-post">
                    <!-- Blog Post Image -->
                    <div class="blog-post-thumbnail">
                        <a href="#" class="hover-link">
                            <img src="12.jpg" alt="">
                        </a>
                    </div>

                    <!-- Blog Post Info -->
                    <div class="post-info">
                        <a href="blog-post.html">Global Hospitality Standard</a>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t ext ever since the 1500s....</p>

                    </div>

                    <!-- Read More Button -->
                    <a href="#" class="btn btn-blue btn-small btn-effect">read more</a>

                </div>
            </div>
            <!-- End of Blog Post -->

			
			    <!-- Start of Blog Post -->
            <div class="col-md-4 col-xs-12">
                <div class="blog-post">
                    <!-- Blog Post Image -->
                    <div class="blog-post-thumbnail">
                        <a href="#" class="hover-link">
                            <img src="13.jpg" alt="">
                        </a>
                    </div>

                    <!-- Blog Post Info -->
                    <div class="post-info">
                        <a href="blog-post.html">5 Star Hotel</a>

                        

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t ext ever since the 1500s....</p>

                    </div>

                    <!-- Read More Button -->
                    <a href="#" class="btn btn-blue btn-small btn-effect">read more</a>

                </div>
            </div>
            <!-- End of Blog Post -->

			
			

        </div>
    </section>
    <!-- ===== End of Latest News Section ===== -->







	 <?php
	 
	 include "footer.php";
	 
	 ?>
 
</body>

</html>