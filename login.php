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
	<br /><br /><br /><br /><br />
<div class="row2">
<br />
<h2 class="subtitle">login <span>User</span></h2>

</head>

<form name="login_form" method="post"action="login_insert.php" onsubmit="return validateForm();">
<table align="center" width="100%"> 
<tr>
<br />
</tr>
<BR>
<tr>
<td align="left">E-Mail Id (User Name)</td>
<td align="left" >
<input name="email_id" value="" style="width:210px" id="email_id" type="text" /></td>
</tr>
<tr>
<td align="left">Password</td>
<td align="left" >
<input name="password" style="width:210px" id="password" type="password" /></td>
</tr>

<tr >	

<td></td><td  style="padding-top:10px;" colspan="2" align="left">
<input name="submit" width="150px" type="submit" id="submit"  title="Add row" class="button_add" value="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" width="150px" type="reset" id="reset" title="Add row" class="button_add"  value="reset"/></td>
</tr>
<tr>
<td></td><td><br><br><<a href="registration.php">New user Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forgot_password.php">Forgot Password</a></td>
</table>

 </form>
 </div>
<?php
include'include/design1.html';
?>
