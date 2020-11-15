<?php
include("sendmail.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<link href="css/menu.css" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forgot Password</title>
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
  <h1>Page Heading</h1>
</div>
<div id="ContentLeft">
  <h2>Password Reset Help</h2>
  <h6>Enter your email</h6><br>
  <form id="form2" name="form2" method="post" action="">
    <table width="304" border="0" align="center">
      <tr>
        <td><table width="200" border="0">
          <tr>
            <td><h6>
              <label for="mail"></label>Email
              </h6>
              <p>
                  			<input type="text" name="email" id="email" required="required" class="StyleTextField"/><br><br>
                             
  	<input type="submit" name="submit" id="submit" value="submit">
  </form>
</div>
<div id="ContentRight"></div>
</div>
<div id="Footer">CSE 09/13<br>Abdul Mujeeb Dalal<br>T/IC: Vipul Kumar Sharma</div>
</div>
</body>
</html>