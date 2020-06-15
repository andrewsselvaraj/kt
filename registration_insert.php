<?php
include'include/design.html';
?><head>
  <script type="text/javascript">
function validateForm()
{
var e=document.forms["login_form"]["email_id"].value;
var f=document.forms["login_form"]["password"].value;
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
  {
  alert("please enter a valid e-mail address");
  return false;
  }
  else if (f==null || f=="")
  {
  alert("Please enter password");
  return false;
  }
   if (f.length <6)
			{
                			alert("minimum password length is 6 characters"); 
				return false;
          		}

}
</script>

</head>
<?php
include'include/connect.php';
if(isset($_POST['tems']))
 {
 include'include/connect.php';
 $items = $_POST['tems'];
$trash = $_POST['trash'];
$name = $_POST['name'];
$area = $_POST['area'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email_id = $_POST['email_id'];
$password = $_POST['password'];
$sql="INSERT INTO `registration` (`name`, `area`, `address`, `phone`, `email_id`, `password`) VALUES ('$name', '$area', '$address', '$phone', '$email_id', '$password')";
$record=mysql_query($sql,$con);
				if(!$record)
				{
              die ('error:'.mysql_error());
				}
				else
				{
				echo"<h2 class=under> Registration successful</h2>";
include 'include/connect.php';  
$sql="select * from registration where email_id='$email_id' and password='$password'";

$result=mysql_query($sql,$con);

if($row=mysql_fetch_array($result))
{
$name=$row['name'];
$name_id=$row['name_id'];
$email==$row['email_id'];
$_SESSION['name']=$name;
$_SESSION['name_id']=$name_id;
$_SESSION['email_id']=$email;
echo"<h2>Logged in successfully</h2>";
header( "Location: trash_login_display.php?items=$items&trash=$trash" ) ;

}

}


mysql_close($con);
				
}
else
{
$name = $_POST['name'];
$area = $_POST['area'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email_id = $_POST['email_id'];
$password = $_POST['password'];
$sql="INSERT INTO `registration` (`name`, `area`, `address`, `phone`, `email_id`, `password`) VALUES ('$name', '$area', '$address', '$phone', '$email_id', '$password')";
$record=mysql_query($sql,$con);
				if(!$record)
				{
              die ('error:'.mysql_error());
				}
				else
				{
				echo"<h2 class=under> Registration successful</h2>";
				}
				mysql_close($con);
				
			
?>

<form name="login_form" method="post"action="login_insert.php" onsubmit="return validateForm();">
<table align="center" width="100%"> 

<tr>
<br><br><br><br><br>
<BR>
<tr>
<h4 class="sidebar">login</h4>
<td align="left">E-Mail Id (User Name)</td>
<td align="left" >
<input name="email_id"  style="width:210px" id="email_id" type="text"  value="<?php echo"$email_id";?>" /></td>
</tr>

<tr>
<td align="left">Password</td>
<td align="left" >
<input name="password" style="width:210px" id="password" type="password" value="<?php echo"$password";?>"/></td>
</tr>

<tr >	

<td></td><td  style="padding-top:10px;" colspan="2" align="left">
<input name="submit" width="150px" type="submit" id="submit"  title="Add row" class="button_add" value="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" width="150px" type="reset" id="reset"  title="Add row" class="button_add" value="reset"/></td>

</tr>


</table>

 </form>

<?php
}
include'include/design1.html';
?>
