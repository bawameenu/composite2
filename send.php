<?php
 include_once("Mail.php");
if(isset($_POST['submit']))
{
	$msg=$_POST['email'];
	SendMail("a","b",$msg);
	
}


//mail('bhavikshah246@gmail.com','thank u',$msg);
?>