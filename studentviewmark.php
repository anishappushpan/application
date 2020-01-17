<html>

<?php
include("studentbase.php");
include("connection.php");
session_start();
$result=mysqli_query($con,"SELECT * from assessment WHERE id='".$_SESSION["id"]."'");
?>
<table border = '4'>
	<tr>
	<th>NAME</th>
	<th>BATCH</th>
	<th>ASSESSMENT NUMBER</th>
	<th>PYTHON</th>
	<th>C++</th>
	<th>C</th>
	<th>JAVA</th>
	<th>TOTAL MARK</th>
	</tr>
<?php while($row=mysqli_fetch_assoc($result))
{

	echo "<tr>";
		 echo  "<td>"."{$row['name']}"."</td>";
		 echo "<td>"."{$row['batch']}"."</td>";
		 echo "<td>"."{$row['ass_no']}"."</td>";
		 echo "<td>"."{$row['sub1']}"."</td>";
		 echo "<td>"."{$row['sub2']}"."</td>";
		 echo "<td>"."{$row['sub3']}"."</td>";
		 echo "<td>"."{$row['sub4']}"."</td>";
		 echo "<td>"."{$row['maxmark']}"."</td>";
		
		 echo "</tr>";
}		
?>
</html>