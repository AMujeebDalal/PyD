
<?php  
  
include("db.php");
if(isset($_POST['Register']))  
{  
    $fname=$_POST['Fname'];
    $lname=$_POST['Lname']; 
    $user_name=$_POST['username'];
    $user_pass=$_POST['pass1'];
    $user_pass2=$_POST['pass2'];  
    $user_email=$_POST['email'];
    if($fname=='')
     {    
        echo"<script>alert('Please enter the first name')</script>";  
exit();
    }  
  
    if($user_name=='')  
    {    
        echo"<script>alert('Please enter the username')</script>";  
exit();
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
      if($user_pass2=='')  
    {  
        echo"<script>alert('Please confirm your password')</script>";  
exit();  
    }
    if($user_pass!=$user_pass2) 
    {
        echo"<script>alert('Passwords don't match)</script>";
    }
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  

    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($conn,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is alreadys exists in our database, Please try another one!')</script>";  
exit();  
    }  
    $insert_user="insert into users (name,username,password,email) VALUE ('$fname','$user_name','$user_pass','$user_email')";  
    if(mysqli_query($conn,$insert_user))  
    {  
        echo"<script>window.open('profile.php','_self')</script>";  
    }  
  
  
  
}  
  
?>  