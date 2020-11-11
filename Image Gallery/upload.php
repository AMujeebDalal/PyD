<?php
include("db.php");
if(isset($_POST['submit']))
{
	$name=$_FILES['file']['name'];
	$tmp_name=$_FILES['file']['tmp_name'];
	$location='uploads/';
    $target='uploads/'.$name;
	if(move_uploaded_file($tmp_name,$location.$name))
	{
		$nam=$_POST['nam']; 
		$query=mysql_query("INSERT INTO image (p_img,p_title) VALUES ('$target','$nam')"); 
	}
	else
	{
		echo "file not uploaded";
	}
	 $result=mysql_query("SELECT * FROM image");
	 while($row=mysql_fetch_array($result))
	 {
		 echo"<img src=".$row['p_img']." &nbsp; class='im'>";
	 }
}
?> 