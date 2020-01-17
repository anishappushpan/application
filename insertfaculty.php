<?php
require_once'connection.php';
	$name=$_POST['name'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
	$qualification=$_POST['qualification'];
	$batch=$_POST['batch'];
	$username=$_POST['username'];
    $password=$_POST['password'];
	
if(isset($_POST['submit']))
{
	
$sq="INSERT INTO add_faculty(name,email,phoneno,qualification,batch,username,password) VALUES('".$name."','".$email."','".$phoneno."','".$qualification."','".$batch."','".$username."','".$password."')";
		if(!$result = $con->query($sq))
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