<?php 

session_start();
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
																	
 
 
 <table border="1">
<tr>
<td>
<h2 align="left"><a href="mainpage.php">Home Page</a></h2></td>
<td><h2 align="left"><a href="room.php">Search Room</a></h2></td>
<td><h2 align="right"><a href="change.php?id=<?php echo $id; ?>">Change Password</a></h2></td>
<td><h2 align="right"><a href="booking.php">My Booking</a></h2></td>
<td><h2 align="right"><a href="logout.php">Logout (<?php echo $id; ?>)</a></h2></td>

</tr>
</table>
