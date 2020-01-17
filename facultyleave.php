<?php include("facultybase.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form action="insertleavefac.php" name="facultyleave" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='name' required="required" placeholder="Faculty_name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='leaveid' required="required" placeholder="Leave id">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='reason' required="required" placeholder="Reason">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='status' readonly value="pending" required="required" placeholder="Status">
	
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
								
	<button type="button" class="btn btn-default loginbutton m-t-5">
	<span class="google-button__icon"></span>
						

</form>
</div>
</div>
</div>