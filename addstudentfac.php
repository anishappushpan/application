<?php include("facultybase.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form action="insertstudent.php" name="login" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='name' required="required" placeholder="Student_name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='dob' required="required" placeholder="Date of Birth">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='email' required="required" placeholder="E-mail">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='gender' required="required" placeholder="Gender">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='phoneno' required="required" placeholder="mobile number">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='qualification' required="required" placeholder="qualification">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='batch' required="required" placeholder="batch">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='username' required="required" placeholder="username">	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='password' required="required" placeholder="password">	
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
								
	<button type="button" class="btn btn-default loginbutton m-t-5">
	<span class="google-button__icon"></span>
						

</form>
</div>
</div>
</div>