<?php

include("connection.php");
if(isset($_POST['appro']))
	{
		$id=$_POST['id'];
		$sq="UPDATE stuleaveapp SET status='Approved' where leaveid='".$id."'";
		if(mysqli_query($con,$sq))
			{

				require_once "adminleavestu_view.php";
			}
			
			
		
	}

?>	