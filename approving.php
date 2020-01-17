<?php

include("connection.php");
if(isset($_POST['approve']))
{

	$id=$_POST['id'];
	$sql="UPDATE facultyleave SET status='Approved' where leaveid='".$id."'";
	if(mysqli_query($con,$sql))
	{

			require_once "adminleavefac_view.php";
	}
	
}
?>