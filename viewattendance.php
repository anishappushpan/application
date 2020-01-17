<html>
<?php
include("studentbase.php");
include("connection.php");
session_start();
$result=mysqli_query($con,"SELECT * from attendance WHERE id='".$_SESSION["id"]."'");?>
<table border = '4'>
	<tr>
	<th>NAME</th>
	<th>BATCH</th>
	<th>FIRST PERIODE</th>
	<th>THIRD PERIODE</th>
	<th>SECOND PERIODE</th>
	<th>FOURTH PERIODE</th>
	</tr>
<?php while($row=mysqli_fetch_assoc($result))
{

	echo "<tr>";
		 echo  "<td>"."{$row['name']}"."</td>";
		 echo "<td>"."{$row['batch']}"."</td>";
		 echo "<td>"."{$row['hour1']}"."</td>";
		 echo "<td>"."{$row['hour2']}"."</td>";
		 echo "<td>"."{$row['hour3']}"."</td>";
		 echo "<td>"."{$row['hour4']}"."</td>";
		
		 echo "</tr>";
}		
?>
</html>