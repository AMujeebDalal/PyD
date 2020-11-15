<?php
session_start();
{
$error='';
if(isset($_POST['submit']))
{
	if(empty($_POST['user'])||empty($_POST['pass']))
	{
		$error="You Cannot Leave The Above Fields Empty";
	}
	else
	{
		$user=$_POST['user'];
		$pass=$_POST['pass'];
	$conn=mysql_connect("localhost","root","");
	$db=mysql_select_db("connection17");
	$query=mysql_query("SELECT * FROM log WHERE username='$user' AND passowrd='$pass'");
	$rows=mysql_num_rows($query);
	if($rows==1)
	{
		header("Location:home.php");
	}
	else
	{
		$error="Username & Password is Invalid";
	}
	mysql_close($conn);
	}
}
}
?>