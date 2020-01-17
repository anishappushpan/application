
<html>
<?php
include("studentbase.php");
require_once "connection.php";

$result=mysqli_query($con,"SELECT * from add_student WHERE id='".$_SESSION["id"]."'");?>
<table border = '4'>
	<tr>
	<th>NAME</th>
	<th>DATE OF BIRTH</th>
	<th>EMAIL</th>
	<th>GENDER</th>
	<th>MOBILE</th>
	<th>QUALIFICATION</th>
	<th>BATCH</th>
	<th>USERNAME</th>
	<th>PASSWORD</th>
	</tr>
<?php while($row=mysqli_fetch_assoc($result))
{

	echo "<tr>";
		 echo  "<td>"."{$row['name']}"."</td>";
		 echo  "<td>"."{$row['dob']}"."</td>";
		 echo "<td>"."{$row['email']}"."</td>";
		 echo  "<td>"."{$row['gender']}"."</td>";
		 echo "<td>"."{$row['phoneno']}"."</td>";
		 echo "<td>"."{$row['qualification']}"."</td>";
		 echo "<td>"."{$row['batch']}"."</td>";
		 echo "<td>"."{$row['username']}"."</td>";
		 echo "<td>"."{$row['password']}"."</td>";
		 echo "</tr>";
}		
?>
</html>