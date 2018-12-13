<?php
session_start();
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

   
    <title> Book Room</title>
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






<?php 

//session_start();
$name=$_GET["name"];

	include 'connection.php';
											
										
											$query = "SELECT * FROM room where name='$name';" ;

																$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
																
																
																
																if (mysqli_num_rows($run_query) > 0 ) {
																while ($row = mysqli_fetch_array($run_query))
																	{
																	$name = $row['name'];
																	$city = $row['city'];
																	$images = $row['images'];
																		$disc = $row['disc'];
																		$price = $row['price'];
																	//echo "<h2>".$id."</h2>";
																	}
																	}
	?>
																	
 
 
<br>
<h2 align="center">Room Details  </h2>

<form action="#" method="POST" style="
    margin-bottom: 80px;
">

<p align="left">
<img align="left" src="<?php echo $images; ?>" height="430" width="500" style="padding:30px;">
<br>
<h6>Name:</h6> <?php echo $name; ?> <br><br>
<h6>City:</h6> <?php echo $city; ?>  <br><br>
<h6>Description: </h6> <?php echo $disc; ?> <br><br>
<h6>Price: </h6> $<?php echo $price; ?> <br>
</p>


<table style="
    margin-top: -36px;
">
<tr>

<td>
<h6 style="
    margin-top: -8px;
">Nights</h6>
<select name="nights">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
<td>

<td>
<h6 style="
    margin-top: -8px;
">Guest</h6>
<select name="guest">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</td>

<td>

Service Charges
<input type="text" name="service" value="10" >

</td>

<td>
Other Taxes
<input type="text" name="tax" value="13" >
</td>

<td>

<input type="submit" name="total" value="Total" >
</td>

</tr>

<br><br>


<br><br>



<tr>
<td>
<h6><br>Total: $
<?php

if (isset($_POST['total']))
{
$new1= $_POST['nights'];

$a=$new1 * $price; 
$b= round($a+($a*23/100));
echo $b;

$_SESSION["total"]=$b;
}
?>
</h6>
</td></tr>

</table>


<br><br>
<input type="submit" name="submit" value="Confirm Booking">
</form>


</h2>


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
																	}
																	}

 ?>
<?php

include 'connection.php';
if (isset($_POST['submit']))
	{
$name=$_GET["name"];
	
$to=$_SESSION["total"];

$nights=$_POST['nights'];

$guest=$_POST['guest'];

$service=$_POST['service'];
$tax=$_POST['tax'];

$user=$id;


$query = "INSERT INTO room_booking (user,name,total,night,guest,service,tax) VALUES ('$user' , '$name','$to', '$nights' , '$guest', '$service','$tax') ";

							$result = mysqli_query($conn , $query) or die(mysqli_error($conn));
							

$query1 = "update room SET status=1 where name='$name' ";

							$result = mysqli_query($conn , $query1) or die(mysqli_error($conn));
							
														
							
					
							
							if (mysqli_affected_rows($conn) > 0) 
									{
										echo "<script> alert('Room Booked Successfully.');
										window.location.href='mainpage.php';</script>";
									}
									else {
										"<script> alert('Error while posting..try again');</script>";
									}
						}
?>


	 <?php
	 
	 include "footer.php";
	 
	 ?>
 
</body>

</html>