<?php
require_once('header.php');
if ($_POST) {
	# code...
	$id=mysql_real_escape_string($_POST["id"]);
	$sta=mysql_real_escape_string($_POST["sta"]);
	$booked=mysql_real_escape_string($_POST["booked"]);

mysql_query("UPDATE ride set bookedby='$booked',status='booked' where id='$id'");
echo "<script type='text/javascript'>location.replace('booked.php')</script>";
}
?>