
<?php
include'include/design.html';
include'include/connect.php';
$name = $_POST['name'];
$area = $_POST['area'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$name_id=$_SESSION['name_id'];

$sql="UPDATE registration SET name='$name',area='$area',address='$address',phone='$phone'  WHERE name_id='$name_id'";
$record=mysql_query($sql,$con);
if(!$record)
{
die ('error:'.mysql_error());
}
else
{

mysql_close($con);
include 'include/connect.php';  
$sql="select * from registration where name_id='$name_id'";
$result=mysql_query($sql,$con);
if($row=mysql_fetch_array($result))
{
$name=$row['name'];
$name_id=$row['name_id'];
$_SESSION['name']=$name;
$_SESSION['name_id']=$name_id;
echo"<h2 class=under>Updated sucessfully</h2>";

}

}
mysql_close($con);
include'include/design1.html';

?>
