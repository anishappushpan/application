<?php
require_once'connection.php';
	$name=$_POST['name'];
	$dob=$_POST['dob'];
    $email=$_POST['email'];
	$gender=$_POST['gender'];
    $phoneno=$_POST['phoneno'];
	$qualification=$_POST['qualification'];
	$batch=$_POST['batch'];
	$username=$_POST['username'];
    $password=$_POST['password'];
	
if(isset($_POST['submit']))
{
	
$sqr="INSERT INTO add_student(name,dob,email,gender,phoneno,qualification,batch,username,password) VALUES('".$name."','".$dob."','".$email."','".$gender."','".$phoneno."','".$qualification."','".$batch."','".$username."','".$password."')";
		if(!$result = $con->query($sqr))
		{

			die('there was an error running in the query ['.$con->error.']');		
		}
		else
		{

			echo "thank you";
				
		}
	mysqli_close($con);	
}
?>