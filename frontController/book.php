<?php
require_once('header.php');
$user=$_SESSION['user'];
$id=$_REQUEST["id"];
$result=mysql_query("SELECT * FROM ride where id='$id'");
$row=mysql_fetch_assoc($result);
?>
<div class="container">
<form action="create2.php" method="post">
<h4>Book a Ride <input name="id" class="hidden" value="<?php echo $row["id"]?>"></input></h4>
<table class="table table-bordered">
<tr>
	<td>Origin</td>
	<td><input class="form-control" readonly="true" value="<?php echo $row["origin"]?>" type="text" name="ori"></input></td>
	<td>Destination</td>
	<td><input class="form-control" readonly="true" value="<?php echo $row["destination"]?>" name="dest" type="text"></input></td>
</tr>
<tr>
	<td>Posted By</td>
	<td><input class="form-control" readonly="true" value="<?php echo $row["postedby"]?>" name="posted" type="text"></input></td>
	<td>Capacity</td>
	<td><input class="form-control" readonly="true" value="<?php echo $row["capacity"]?>" name="cap" type="number"></input></td>
</tr>
<tr>
	
	<td>Status</td>
	<td><input class="form-control" value="booked" readonly="true" name="sta" type="text"></input></td>
	<td>Date</td>
	<td><input class="form-control" value="<?php echo $row["dateadded"]?>" readonly="true" name="datea" type="date"></input></td>
</tr>
<tr>
<td>Booked By</td>
<td><input class="form-control" value="<?php echo $user?>" readonly="true" name="booked" type="text"></input></td></td>
</tr>

</table>
	<button class="btn btn-success" type="submit">Submit</button>
</form>
</div>