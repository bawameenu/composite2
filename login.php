<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
   
    <title>Login</title>
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
                        <h4>Login</h4>
                    </div>

                    <!-- Start of Login Form -->
                    <form action="#" method="POST">
                        <!-- Form Group -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="name" placeholder="Your Email">
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pwd" placeholder="Your Password">
                        </div>

                      
						

                        <!-- Form Group -->
                        <div class="form-group text-center">
                            <input type="submit" name="submit" class="btn btn-blue btn-effect" value="Login">
                            <a href="reg.php" class="btn btn-blue btn-effect">signup</a>
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
include 'connection.php';
if (isset($_POST['submit']))
	{

$title=$_POST['name'];
$tag=$_POST['pwd'];


$query = "select * from regis where email='$title' AND pwd='$tag'";

	$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
	
		if (mysqli_num_rows($run_query) == 1 ) 
		{
	echo "<script> alert('Successful Login');</script>";
$_SESSION['user']=$title; // Initializing Session

header("location: mainpage.php"); // Redirecting To Other Page
} 


else {
$error = "Username or Password is invalid";
//echo $error;
echo "<script> alert('Invalid Login');window.location.href='index.php';</script>";
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

