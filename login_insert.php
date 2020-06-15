<?php

include'include/design.html';

if (isset($_POST['items']))
 {
 include'include/connect.php';
 $items = $_POST['items'];
$trash = $_POST['trash'];


$email_id = $_POST['email_id'];
$password = $_POST['password'];
$sql="select * from registration where email_id='$email_id' and password='$password'";

$result=mysql_query($sql,$con);

if($row=mysql_fetch_array($result))
{
$name=$row['name'];
$name_id=$row['name_id'];
if($email_id==$row['email_id'] && $password==$row['password'])
{
$email=$row['email_id'];
$_SESSION['name']=$name;
$_SESSION['name_id']=$name_id;
$_SESSION['email_id']=$email;
header( "Location: trash_login_display.php?items=$items&trash=$trash" ) ;

}

}
else
{
echo"<h2>Username and Password you entered is not registered</h2>";
}

mysql_close($con);
}
        
else
{
include'include/connect.php';
$email_id = $_POST['email_id'];
$password = $_POST['password'];
$sql="select * from registration where email_id='$email_id' and password='$password'";

$result=mysql_query($sql,$con);

if($row=mysql_fetch_array($result))
{
$name=$row['name'];
$name_id=$row['name_id'];
$email=$row['email_id'];
if($email_id==$row['email_id'] && $password==$row['password'])
{

$_SESSION['name']=$name;
$_SESSION['name_id']=$name_id;
$_SESSION['email_id']=$email;
echo"<h2>Logged in successfully</h2>";
header( 'Location: login_display.php' ) ;

}

}
else
{
echo"<h2>Username and Password you entered is not registered</h2>";
}

mysql_close($con);
}
include'include/design1.html';
?>
