<?php
include"class.phpmailer.php";
include"class.smtp.php";
$error='';
if(isset($_POST['submit']))
{
	if(empty($_POST['email']))
	{
		$error="Please Fill Out This Field";
	}
	else
	{	
	$mail=new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug=1;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='ssl';
	$mail->Host="smtp.gmail.com";
	$mail->Port= 465;
	$mail->IsHTML(true);
	$mail->Username="vipul011sharma@gmail.com";
	$mail->Password="9797684796";
	$mail->SetFrom("vipul011sharma@gmail.com");
	$mail->Subject="Password Reset";
	$mail->Body="Go to this link to Reset your Password:";
	$mail->AddAddress($_POST["email"]);
	if(!$mail->send())
	{
	$error=$mail->ErrorInfo;
	}
	else
	{
	$error="Email Successfully Sent";
	}
    }
    echo $error;
}
?>