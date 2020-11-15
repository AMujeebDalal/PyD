<?php
include"class.phpmailer.php";
include"class.smtp.php";
$error='';
if(isset($_POST['submit']))
{
	if(empty($_POST['email'])||empty($_POST['subject'])||empty($_POST['body']))
	{
		$error="You Cannot Leave The Above Fields Empty";
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
	$mail->Subject=$_POST["subject"];
	$mail->Body=$_POST["body"];
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
}
?>