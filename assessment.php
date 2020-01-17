<?php include("facultybase.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form action="insertasses.php" name="assessment" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='name' required="required" placeholder="Student_name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='batch' required="required" placeholder="Batch name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='ass_no' required="required" placeholder="Assessment number">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='sub1' required="required" placeholder="Subject 1">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='sub2' required="required" placeholder="Subject 2">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='sub3' required="required" placeholder="Subject 3">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='sub4' required="required" placeholder="Subject 4">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='maxmark' required="required" placeholder="Maximum Mark">
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
								
	<button type="button" class="btn btn-default loginbutton m-t-5">
	<span class="google-button__icon"></span>
						

</form>
</div>
</div>
</div>