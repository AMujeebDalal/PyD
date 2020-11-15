<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<link href="css/menu.css" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SignUp</title>
</head>

<body>
<div id="Holder">
<div id="Header"> </div>
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
  <h1>User Registration Form!!</h1>
</div>
<div id="ContentLeft">
  <h2>Fill in the form to register</h2>
</div>
<div id="ContentRight">
  <form id="form1" name="form1" method="post" action="Registration.php">
    <table width="304" border="0" align="center">
      <tr>
        <td><table width="200" border="0">
          <tr>
            <td><h6>
              <label for="Fname"></label>First Name
              </h6>
              <p>
                             <input type="text" name="Fname" id="Fname" class="StyleTextField"/>
              </p></td>
            <td><h6>
              <label for="LName"></label>
              Last Name</h6>
              <p>
                <input name="Lname" type="text" class="StyleTextField" id="Lname" />
              </p></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><h6>
          <label for="Email"></label>
          Email</h6>
          <p>
            <input type="text" name="email" id="Email" class="StyleTextField"/>
          </p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><h6>
          <label for="UserName"></label>
          UserName</h6>
          <p>
            <input type="text" name="username" id="UserName" class="StyleTextField"/>
          </p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><table width="458" border="0">
          <tr>
            <td width="144"><h6>
              <label for="Password"></label>
              Password</h6>
              <p>
                <input type="password" name="pass1" id="Password" class="StyleTextField"/>
              </p></td>
            <td width="304"><h6>
              <label for="Passwordconfrm"></label>
              Confirm Password</h6>
              <p>
                <input type="password" name="pass2" id="Password" class="StyleTextField"/>
              </p></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><input type="submit" name="Register" id="Register" value="Register" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
  </form>
</div>
</div>
<div id="Footer">CSE 09/13<br>Abdul Mujeeb Dalal<br>T/IC: Vipul Kumar Sharma</div>
</div>
</body>
</html>