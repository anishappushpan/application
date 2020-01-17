<?php
require_once'connection.php';
	$name=$_POST['name'];
	$batch=$_POST['batch'];
    $hour1=$_POST['hour2'];
	$hour2=$_POST['hour2'];
    $hour3=$_POST['hour3'];
	$hour4=$_POST['hour4'];
	
	
if(isset($_POST['submit']))
{
	
$sqp="INSERT INTO attendance(name,batch,hour1,hour2,hour3,hour4) VALUES('".$name."','".$batch."','".$hour1."','".$hour2."','".$hour3."','".$hour4."')";
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