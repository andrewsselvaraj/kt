<?php
include'include/design.html';
include 'include/connect.php';  
$email_id=$_POST['email_id'];
$sql = "SELECT * FROM registration WHERE email_id='$email_id'";
$result=mysql_query($sql);
if($row=mysql_fetch_array($result))
{
$email_id = $row['email_id'];
$password = $row['password'];
?>
<div class="row2">
<br />
<h2 class="subtitle">Forgot <span>Password</span></h2>
<br /><br /><br /><br />
<?php
$password="$password";
$mailid="ungalwaste.in";
$to = "$email_id";
$headers = "From:" . $mailid;
$message="Hi user your password is ".$password;
mail($to,$password,$headers,$message);
echo "<h2 align=center>Your password has been sent to your mail <br><font color=green>please see your mail and login,,,</font></h2>";

}


else
{?>
<div class="row2">
<br />
<h2 class="subtitle">Forgot <span>Password</span></h2>
<br /><br /><br /><br />
<?php
echo"<h2 align=center>Email ID you entered is not registered</h2>";
}
?>
</div>
<?php

mysql_close($con);
include'include/design1.html';
?>
