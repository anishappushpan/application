<?php
require_once'connection.php';
	$name=$_POST['name'];
	$batch=$_POST['batch'];
    $ass_no=$_POST['ass_no'];
	$sub1=$_POST['sub1'];
    $sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$maxmark=$_POST['maxmark'];
	
	
if(isset($_POST['submit']))
{
	
$sqp="INSERT INTO assessment(name,batch,ass_no,sub1,sub2,sub3,sub4,maxmark) VALUES('".$name."','".$batch."','".$ass_no."','".$sub1."','".$sub2."','".$sub3."','".$sub4."','".$maxmark."')";
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