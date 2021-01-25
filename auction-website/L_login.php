<?php
session_start();

$con= mysqli_connect('localhost','root');
 mysqli_select_db($con,'signup');
 
 
 $password=$_POST['password'];
 
 $s= "select * from signup where password='$password'";
 $result= mysqli_query($con,$s);
 $num= mysqli_num_rows($result);
 if ($num==1)
 {
   echo"Login Successful";
  header('Refresh:2; url=http://localhost/auction-website/wtl.html');
 }
 else
 { echo"LOGIN FAILED!";
   header('Refresh:1; url=http://localhost/auction-website/signup.html');
    }
?>
