<?php
require_once('connect.php');
session_start();
if(isset($_POST['submit']))
{

 
$email=sanitizeString($_POST['userName']);
$pass=md5(sanitizeString($_REQUEST['passcode']));
$query="select username from user where email='".$email."' and password='".$pass."'";
$result=queryMysql($query);
$query2="select accountType AS typer from user where email='$email'";
$result1=mysql_query($query2);

$num = mysql_num_rows($result);
if (mysql_num_rows($result)!=0)
{


for ($j = 0 ; $j < $num ; ++$j)
 {
    $row = mysql_fetch_row($result);
    $user=$row[0];
 }
//saveUser($usersName);
 //session_start();
 $_SESSION['user'] = $user;
 $_SESSION['loggedIn']='TRUE';

 
     
echo <<<Home
<script type="text/javascript">
location.replace("index.php");
</script>
Home;


}
else
{
	echo "No such user was found";
	$_SESSION['loggedIn']=FALSE;
/*	echo <<<Home
<script type="text/javascript">
location.replace("signIn.php");

</script>
Home;
*/}



}
else
{
	
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="sign.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>

</head>
<body>
<!--	<form action='signIn.php' method='post'>
		<div id="error"></div>
		<input type="email" name="userName" id="email"  placeholder="enter your email address" required='true'/>                   
               
        <input type="password" name="passcode"  placeholder="Password" required='true'/>
        
                    
        <button type="submit" name='submit' onClick="return checkEmail()">Sign me in</button> 
    
-->

        <div class="wrapper">
        <form class="form-signin" action='signIn.php' method='post' > 
            
         <h2 class="form-signin-heading">Please login</h2>
         <label>Email Address</label>
        
        <input type="email" name="userName" id="email"  placeholder="enter your email address" class="form-control" required="" autofocus="" />
         <label>Password</label>
      <input type="password" name="passcode"  placeholder="Password" class="form-control" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button name='submit' class="btn btn-lg btn-primary btn-block" type="submit">Login</button>  
      <br/>
      <p> <a href="signUp.html">Sign up to use ShareRide inc</a></p> 
    </form>
  </div>
       
<?php 
}
?>
</body>
</html>
