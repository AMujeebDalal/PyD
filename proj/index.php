<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<link href="css/menu.css" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account Login</title>
</head>
<body>
<div id="Holder">
<div id="Header"></div>
<div id="NavBar">
<nav>
<ul>
<li><a href="index.php">Login</a></li>
<li><a href="Register.php">Register</a></li>
<li><a href="ForgotPassword.php">Forgot Password</a></li>
</ul>
</nav>
</div>
<div id="Content">
<div id="PageHeading">
  <h1>Login to your account</h1>
</div>
<div id="ContentLeft">
<?php
session_start();
?>
  	<form id="form2" name="form2" method="post" action="login.php">
    <table width="304" border="0" align="center">
      <tr>
        <td><table width="200" border="0">
          <tr>
            <td><h6>
              <label for="Fname"></label>Username
              </h6>
              <p>
                  			<input type="text" name="username" id="uname" required="required" class="StyleTextField"/><br>
                              <h6>Password
              </h6>
              <p>
                             <input type="Password" name="password" id="pname" required="required" class="StyleTextField"/><br><br>
  	<input type="submit" name="login" id="login" value="login">
  </form>
</div>
<div id="ContentRight"></div>
</div>
<div id="Footer">CSE 09/13<br>Abdul Mujeeb Dalal<br>T/IC: Vipul Kumar Sharma</div>
</div>
</body>
</html>