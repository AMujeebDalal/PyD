<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<script type="text/javascript">
function abc()
{
    document.getElementById("mybutton").onclick = function(){location.href = "login1.php";};
}
</script>
<style>
.login
{
	width:500px;
	height:300px;
	margin: 50px auto;
	font-family: cambria,"Hoefler Text","Liberation serif",Times,"Times New Roman",serif;
	color:#006;
	border-radius:10px;
	border: 2px solid #000;
	margin-top:70px;
	padding:10px 40px 25px;
}
input[type=button]
{
	width:100%;
	background-color:#009;
	color:#fff;
	border:2px solid #06F;
	padding:10px;
	font-size:20px;
	cursor:pointer;
	border-radius:5px;
	margin-bottom:15px;
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">Welcome To My World</h1>
<hr/>
<br/>
<br/>
<input type="button" name="mybutton" id="mybutton" value="Click Here to Log Out" onclick="abc();"/>
</div>
</body>
</html>