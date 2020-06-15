<?php
include'include/design.html';
$name=$_POST['name'];
$phone=$_POST['phone'];
$mailid=$_POST['mailid'];
$message=$_POST['message'];
$to = "gowtham1906@yahoo.in";
$headers = "From:" . $mailid;
mail($to,$phone,$message,$headers,$name);
echo "<h2>Mail Sent.</h2>";
include'include/design1.html';
?>
