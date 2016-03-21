<?php
require_once('header.php');
$user=$_SESSION['user'];
?>
<div class="container">
<form action="create.php" method="post">
<h4>Post a New ride offer</h4>
<table class="table table-bordered">
<tr>
	<td>Origin</td>
	<td><input class="form-control" required="true" type="text" name="ori"></input></td>
	<td>Destination</td>
	<td><input class="form-control" required="true" name="dest" type="text"></input></td>
</tr>
<tr>
	<td>Posted By</td>
	<td><input class="form-control" readonly="true" value="<?php echo $user?>" name="posted" type="text"></input></td>
	<td>Capacity</td>
	<td><input class="form-control" required="true" name="cap" type="number"></input></td>
</tr>
<tr>
	
	<td>Status</td>
	<td><input class="form-control" value="not booked" readonly="true" name="sta" type="text"></input></td>
	<td>Date</td>
	<td><input class="form-control" required="true" name="datea" type="date"></input></td>
</tr>

</table>
	<button class="btn btn-success" type="submit">Submit</button>
</form>
</div>