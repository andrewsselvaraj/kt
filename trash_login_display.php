<?php
include'include/design.html';
include'include/connect.php';

$name_id=$_SESSION['name_id'];

$trash = $_GET['trash'];


$items = $_GET['items'];


$date=date("d-m-y");


$sql="INSERT INTO `trash` (`trash_or_task`,`items`, `status`, `date`,`name_id`) VALUES ('$trash', '$items', 'New', '$date','$name_id')";
$record=mysql_query($sql,$con);
				if(!$record)
				{
              die ('error:'.mysql_error());
				}
				else
				{
				echo"<h2 class=under>Your request has been accepted we will proceed soon...</h2><br><br><br><br><br>";
				include 'include/connect.php';  
$name_id=$_SESSION['name_id'];
$sql = "SELECT * FROM trash WHERE name_id='$name_id'";
$result=mysql_query($sql);
echo"<h2 align=center style=font-size:20px;font-weight:bold;>Status of <strong><font color=green>(".$_SESSION['name'].")</font></strong></h2>";
echo"<br><br><br><table  align=center   cellpadding=3 style=border:black 1px solid>";
echo"<thead><tr bgcolor=#A6A6D9><th>Date</th><th>Reference Number</th><th>Items</th><th>Trash or Task</th><th>Status</th></thead>";
while($row=mysql_fetch_array($result))
{
$date =$row["date"];			  
$reference_number=$row["reference_number"];
$items=$row["items"];	
$trash_or_task =$row["trash_or_task"];
$status=$row["status"];	



echo "<tbody><tr bgcolor=#E8E8E8><td>".$date."</td><td>".$reference_number."</td><td>".$items."</td><td>".$trash_or_task."</td><td>".$status."</td></tr></tbody>";
}

 echo "</table>";



				}
				mysql_close($con);
				
				
include'include/design1.html';
?>