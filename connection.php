<?php
$servername="localhost";
$username="root";
$password="";
$dbname="academicsphp";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_errno())
{
 echo "failed:" .mysqli_connect_errno();
}
?>