<?php
include("connection.php");
include("base.php");
  
		$sq="select * from add_faculty" ;
		$rslt=mysqli_query($con,$sq);
	?>
	<table border = '4'>
	<tr>
	<th>NAME</th>
	<th>EMAIL</th>
	<th>MOBILE</th>
	<th>QUALIFICATION</th>
	<th>BATCH IN CHARGE</th>
	<th>USERNAME</th>
	<th>PASSWORD</th>
	</tr>
	<?php
		while($row = mysqli_fetch_array($rslt))
		{
			echo "<tr>";
		 echo  "<td>"."{$row['name']}"."</td>";
		 echo "<td>"."{$row['email']}"."</td>";
		 echo "<td>"."{$row['phoneno']}"."</td>";
		 echo "<td>"."{$row['qualification']}"."</td>";
		 echo "<td>"."{$row['batch']}"."</td>";
		 echo "<td>"."{$row['username']}"."</td>";
		 echo "<td>"."{$row['password']}"."</td>";
		 echo "</tr>";
		}
	
	
	echo "</table>";
	mysqli_close($con);

		
?>
