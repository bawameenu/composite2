   <!-- =============== Start of Footer 1 =============== -->
    <footer class="footer1">

        <!-- ===== Start of Footer Information & Links Section ===== -->
        <div class="footer-info ptb80">
            <div class="container">

                <!-- 1st Footer Column -->
                <div class="col-md-3 col-sm-6 col-xs-6 footer-about">

                    <!-- Your Logo Here -->
                    <a href="index.html">
                        <img src="logo.png" alt="" style="
    height: 55px;
">
                    </a>

                                  </div>

                <!-- 2nd Footer Column -->
               
				
				<div class="col-md-3 col-sm-6 col-xs-6 footer-links">
                    <h3>Social links</h3>

                    <!-- Links -->
                    <ul class="nopadding">
					 <li><a href="https://www.facebook.com/pg/rehabjobs.in/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="blogs.php"><i class="fa fa-youtube"></i></a>
                       
                        <a href="about-us.php"><i class="fa fa-twitter"></i></a>
                        <a href="contact-1.php"><i class="fa fa-instagram"></i></a></li>
                       
                    </ul>
                </div>

               

                <!-- 4th Footer Column -->
               
        <!-- ===== End of Footer Information & Links Section ===== -->


     

    </footer>
    <!-- =============== End of Footer 1 =============== -->





    <!-- ===== Start of Back to Top Button ===== -->
    <a href="#" class="back-top"><i class="fa fa-chevron-up"></i></a>
    <!-- ===== End of Back to Top Button ===== -->





    <!-- ===== Start of Login Pop Up div ===== -->
    <div class="cd-user-modal">
        <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container">
            <!-- this is the container wrapper -->
           <br><h3 align="center"> Upload Resume </h3>
            <div id="cd-login">
                <!-- log in form -->
                <form class="cd-form" action="#" method="POST" enctype="multipart/form-data">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">Name</label>
                        <input class="full-width has-padding has-border" id="signin-email" name="name" placeholder="Full Name" required>
                    </p>
                   
				   
				    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signin-email" name="email" placeholder="E-mail" required>
                    </p>
					
					
					   <div class="upload-file-btn">
                                <span> Upload Resume</span>
                                <i class="fa fa-upload"></i><input type="file" name="userfile" id="fileToUpload"  class="" required>
                            </div>
                        </div>
						
                 
                    <p align="center" class="fieldset">
                        <input type="submit" name="insert" value="Submit" class="btn btn-blue btn-effect"><br>
                    </p>
					<br>
					<h4 align="center">Contact Us On: 9221533719 / 9004082347 </h4>
					<br><br>
                </form>
				
				
				
            </div>
            <!-- cd-login -->

			
			
			<?php
			
			
			include 'connection.php';
if (isset($_POST['insert']))
	{

$name=$_POST['name'];

$email=$_POST['email'];


	$uploaddir = 'admin/html/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}


							$query = "INSERT INTO resume (name,email,doc) VALUES ('$name' , '$email', '$uploadfile') ";
							$result = mysqli_query($conn , $query) or die(mysqli_error($conn));
							if (mysqli_affected_rows($conn) > 0) 
									{
										echo "<script> alert('Resume Submitted Successfully.');
										</script>";
									}
									else {
										echo "<script> alert('Error while posting..try again');</script>";
									}			
						
						
	}
	
			
			
		

			?>
			
			
            <div id="cd-signup">
                <!-- sign up form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="password" placeholder="Password">
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                    </p>
                    <p class="fieldset">
                        <button class="btn btn-blue btn-effect" type="submit" value="Create account">Create Account</button>
                    </p>
                </form>
            </div>
            <!-- cd-signup -->
        </div>
        <!-- cd-user-modal-container -->
    </div>
    <!-- cd-user-modal -->
    <!-- ===== End of Login Pop Up div ===== -->





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
