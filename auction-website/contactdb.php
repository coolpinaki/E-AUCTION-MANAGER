<?php
 $dbhost = "localhost";  
 $dbuser = "root";
 $dbpass = "";
 $db = "contact_us";
 $conn = new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
 echo "Your concern is successfully submitted!";
 $name=$_GET['name'];
 $email=$_GET['email'];
 $mobile=$_GET['mobile'];
 $item=$_GET['item'];
 $message=$_GET['message'];
 $res = mysqli_query($conn,"insert into contact
  values('$name','$email','$mobile','$item','$message')");
   $conn -> close();
?>