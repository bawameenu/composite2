<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>


<h2 align="center">Hotel Booking System 



</h2>



<table align="right" border="0">
<tr>


<td>
<h2 align="left"><a href="regis.php">Registration</a></h2></td>
<td><h2 align="right"><a href="login.php">Login</a></h2></td>

</tr>
</table>
<br><br>

<h2>Search For Room </h2>

<form action="#" method="POST">
  <div class="imgcontainer">
    
  </div>

  <div class="container">
  
	
    <label for="psw"><b>Select City</b></label>
   <select name="city">
   <option value="dubai">Dubai </option>
   <option value="hongkong">Hongkong </option>
   </select>
        
    <input type="submit" name="submit" value="Search Room">
   
  </div>

 
  
 </form>
 

 <h2>Search Result</h2>
<table border="1">
 <tr>


 
 <?php

include 'connection.php';
if (isset($_POST['submit']))
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
																	
																


									echo "
                                       
                                           
                                            <td><img src='$images' height='250' width='250'><br><b>$name</b><br>  $city</td>";
                                          
											
                                           
											
											}
											}
											}
											?>
											</tr>
											</table>
						

</body>





</body>
</html>
