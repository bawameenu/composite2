<?php
//Common Mailing Function 
//You must include this page in php page like include_once("Mail.php");
// And whenever you want just call the SendMail function with Subject, Body and To parameter

include "PHPMailer_5.2.4/class.phpmailer.php"; 
function SendMail($Subject,$Body,$To)
{
	$FromUserName="rajputsagar9096@gmail.com";
	$FromPassword="Shrinivas";
	$SetFrom="hr.rbtechservices@gmail.com";
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->Username = $FromUserName;
	$mail->Password = $FromPassword;
	$mail->SetFrom($SetFrom);
	$mail->Subject = $Subject;
	//$mail->Body = $Body;
	$mail->AddEmbeddedImage('temp.jpg', 'logoimg', 'temp.jpg');
	$mail->Body = "<h1>Thanks For Registration With Us..</h1>
			<p>You Can Login Now.. </p>";
	//$mail->Body="This is text only alternative body.";
 	$mail->IsHTML(true);
	$mail->AddAddress($To);
	if(!$mail->Send())
	{
		return $mail->ErrorInfo;
	}
	else
	{
		return true;
	}
}
//SendMail("a","b","bhavikshah246@gmail.com")
?>