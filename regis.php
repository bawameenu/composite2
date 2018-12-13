<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
   
    <title>Registration</title>
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

   
<?php include "master.php"; ?>



    <!-- ===== Start of Login - Register Section ===== -->
    <section class="ptb80" id="login">
        <div class="container">
            <div class="col-md-6 col-md-offset-3 col-xs-12">

                <!-- Start of Login Box -->
                <div class="login-box">

                    <div class="login-title">
                        <h4>Registration</h4>
                    </div>

                    <!-- Start of Login Form -->
                    <form action="#" method="POST">
                        <!-- Form Group -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                        </div>

                        
						
						<div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="Your First Name">
                        </div>

						
						
						<div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lname" placeholder="Your Last Name">
                        </div>

						
						<!-- Form Group -->
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pwd" placeholder="Your Password">
                        </div>

                        <div class="col-md-4">
						 <div class="form-group">
                            	 <label for="psw" style="height: 45px;"><b>Select Day</b></label>
   <select name="#" class="col-md-12 search-keywords" style="height: 40px;">
   
   <option value="#">Select Date </option>
   <option value="1">1 </option>
   <option value="1">2 </option>
   <option value="1">3 </option>
   <option value="1">4 </option>
   <option value="1">5 </option>
   <option value="1">6 </option>
   <option value="1">6 </option>
   <option value="1">7 </option>
   <option value="1">8 </option>
   <option value="1">9 </option>
   <option value="1">10 </option>
   
   
   </select>
   
                        </div></div>
						
						 <div class="col-md-4">
						  <div class="form-group">
                           <label for="psw" style="height: 45px;"><b>Select Month</b></label>
   <select name="#" class="col-md-12 search-keywords" style="height: 40px;">
   
   <option value="#">Select Month </option>
   <option value="1">Jan </option>
   <option value="1">Feb </option>
   <option value="1">March </option>
   <option value="1">April </option>
   <option value="1">June </option>
   <option value="1">July </option>
   <option value="1">August </option>
   <option value="1">Sepetember</option>
   <option value="1">November </option>
   <option value="1">December </option>
  
   
   
   </select>
                        </div></div>
						
						 <div class="col-md-4">
						  <div class="form-group">
                              <label for="psw" style="height: 45px;"><b>Select Year</b></label>
   <select name="#" class="col-md-12 search-keywords" style="height: 40px;">
   
   <option value="#">Select Year </option>
   <option value="1">1995 </option>
   <option value="1">1996 </option>
   <option value="1">1997 </option>
   <option value="1">1998 </option>
   <option value="1">1999 </option>
   <option value="1">2000 </option>
   <option value="1">2001 </option>
  
   
   
   </select>
   
                        </div></div>
						
						<br><br>

                        <!-- Form Group -->
                        <div class="form-group text-center">
                            <input type="submit" name="submit" class="btn btn-blue btn-effect" value="Register Now">
                          
                        </div>

                    </form>
                    <!-- End of Login Form -->
                </div>
                <!-- End of Login Box -->

            </div>
        </div>
    </section>
    <!-- ===== End of Login - Register Section ===== -->
    
    
    
 
 <?php
 include_once("Mail.php");
include 'connection.php';
if (isset($_POST['submit']))
	{

$title=$_POST['email'];
$tag=$_POST['fname'];
$discr=$_POST['lname'];
$url=$_POST['pwd'];
$msg="Thanks for Registration You Can  Login Now";

$query = "INSERT INTO regis (email,fname,lname,pwd) VALUES ('$title' , '$tag', '$discr' , '$url') ";
							$result = mysqli_query($conn , $query) or die(mysqli_error($conn));
							if (mysqli_affected_rows($conn) > 0) 
									{
											
	
										echo "<script> alert('Account Created Successfully. Now You can Login');
										window.location.href='login.php';</script>";
										
										SendMail($msg,"b",$title);
									}
									else {
										"<script> alert('Error while posting..try again');</script>";
									}
						}
?>

    
    
<?php include "footer.php"; ?>


    <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.ajaxchimp.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>

