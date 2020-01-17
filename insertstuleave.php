<?php
require_once'connection.php';
	$name=$_POST['name'];
	$leaveid=$_POST['leaveid'];
    $reason=$_POST['reason'];
	$status=$_POST['status'];
   
	
	
if(isset($_POST['submit']))
{
	
$sqp="INSERT INTO stuleaveapp(name,leaveid,reason,status) VALUES('".$name."','".$leaveid."','".$reason."','".$status."')";
		if(!$result = $con->query($sqp))
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