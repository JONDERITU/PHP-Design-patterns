<?php
require_once('header.php');
if ($_POST) {
	# code...
	$ori=mysql_real_escape_string($_POST["ori"]);
	$dest=mysql_real_escape_string($_POST["dest"]);
	$cap=mysql_real_escape_string($_POST["cap"]);
	$posted=mysql_real_escape_string($_POST["posted"]);
	$sta=mysql_real_escape_string($_POST["sta"]);
	$datea=mysql_real_escape_string($_POST["datea"]);

mysql_query("INSERT INTO ride(origin,destination,capacity,postedby,status,dateadded)VALUES('$ori','$dest','$cap','$posted','$sta','$datea')");
echo "<script type='text/javascript'>location.replace('rides.php')</script>";
}
?>