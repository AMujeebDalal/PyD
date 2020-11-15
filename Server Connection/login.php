<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
<script language="JavaScript" type="text/javascript">
 function abc()
 {
	 if(document.getElementById('user').value.length<1)
 		{
 			alert("You cannot leave the username field empty");
 			return false;
 		}
		if(document.getElementById('pass').value.length<1)
 		{
 			alert("You cannot leave the password field empty");
 			return false;
 		}
 }
 </script>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="317" height="176" border="1" align="center">
    <tr>
      <td height="44" colspan="2"><h4><strong>Login Page</strong></h4></td>
    </tr>
    <tr>
      <td width="108">Username:</td>
      <td width="193"><label for="user"></label>
      &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user" id="user" /></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><label for="pass"></label>
      &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" id="pass" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn1" id="btn1" value="Click here to login" onclick="abc()"/>        
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="btn2" id="btn2" value="Reset" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysql_connect($servername, $username, $password);
mysql_select_db("connection17");
$a=$_POST['user'];
$b=$_POST['pass'];
$log=mysql_query("SELECT * FROM log WHERE username='$a' AND passowrd='$b'");
$rows=mysql_num_rows($log);
	if($rows==1)
	{
	header("location:home.php");
	}	
	else 
	{
	echo("<script>alert('Username & Password Incorrect')</script>");	
	}
mysql_close($conn);
?>
