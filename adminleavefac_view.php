<html>
<?php session_start();?>
<?php
include("base.php");
include("connection.php");
$result=mysqli_query($con,"SELECT * from facultyleave WHERE id='".$_SESSION["id"]."'");?>

<table border = '4'>
	<tr>
	<th>NAME</th>
	<th>LEAVE ID</th>
	<th>REASON</th>
	<th>STATUS</th>
	</tr>
<?php while($row=mysqli_fetch_assoc($result))
{

	echo "<tr>";
		 echo  "<td>"."{$row['name']}"."</td>";
		 echo "<td>"."{$row['leaveid']}"."</td>";
		 echo "<td>"."{$row['reason']}"."</td>";
		 echo "<td>"."{$row['status']}"."</td>";
		
		
		 echo "</tr>";
}		
?>
<br>
<br>
<form action="approving.php" method="post">
	<input type="text" placeholder="ID" name="id">
	<input type="submit" name="approve" value="approve">
</form>

</html>
