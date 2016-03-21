<?php
require_once('connect.php');
session_start();
if(isset($_SESSION['loggedIn']))
$loggedIn=$_SESSION['loggedIn'];

else
$loggedIn=null;
if($loggedIn!=True)
{
	echo <<<Home
<script type="text/javascript">
location.replace("signIn.php");
</script>
Home;
}
else
{
	$user=$_SESSION['user'];
    echo <<<Home
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Rideshare</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/base.css">
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
    hr{
        margin: 60px 0;
    }
</style>
</head>
<body>
<div class="bs-example">
    <ul class="nav nav-pills">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="rides.php">Available Rides</a></li>
       <li><a href="booked.php">Booked Rides</a></li>
        <li class="dropdown pull-right">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">$user <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="logOut.php">Log Out</a></li>
            </ul>
        </li>

    </ul>
    </div>
Home;
        }
        ?>               