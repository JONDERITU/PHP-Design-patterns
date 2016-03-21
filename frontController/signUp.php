<?php
require_once('header.php');
if( $_POST ){
  $fullname = $_POST['name'];
  $username=$_POST['userid'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  
            $fullname = mysql_real_escape_string($fullname);
            $username = mysql_real_escape_string($username);
            $password = md5(mysql_real_escape_string($password));
            $email=mysql_real_escape_string($email);
           
  $query ="INSERT INTO user (fullname,userName,email,password)VALUES('$fullname','$username','$email','$password');";

 
        mysql_query($query);

  echo "<h2>Congratulations new user created </h2>";

  echo "<script>location.replace('signIn.php')</script>";
  

}
   ?>
