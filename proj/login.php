<?php
include('db.php');  
if(isset($_POST['login']))  
{  
    $user_name=$_POST['username'];  
    $user_pass=$_POST['password'];  
  
    $check_user="select * from users WHERE username='$user_name'AND password='$user_pass'";  
  
    $run=mysqli_query($conn,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('profile.php','_self')</script>";  
  
        $_SESSION['username']=$user_name;
  
    }  
    else  
    {  
      echo "<script>alert('Usename or password is incorrect!')</script>";  
    }  
}  
?>