<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successfully created";

$database="connection17";
$db_found=mysql_select_db($database);
if($db_found)
{
echo("<script>alert('Connected to $database')</script>");
}
else
{
echo("<script>alert('Unable to connect')</script>");
}
?>