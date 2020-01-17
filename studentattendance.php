<?php include("facultybase.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form action="insertattendance.php" name="studentattendace" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='name' required="required" placeholder="Student_name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='batch' required="required" placeholder="Batch name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='hour1' required="required" placeholder="Hour1">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='hour2' required="required" placeholder="Hour2">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='hour3' required="required" placeholder="hour3">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='hour4' required="required" placeholder="hour4">
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
								
	<button type="button" class="btn btn-default loginbutton m-t-5">
	<span class="google-button__icon"></span>
						

</form>
</div>
</div>
</div>