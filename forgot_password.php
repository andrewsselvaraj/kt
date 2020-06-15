
 </div><?php
include'include/design.html';

?>

<head>
 <script type="text/javascript">
function validateForm()
{
var e=document.forms["forgot_password"]["email_id"].value;
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

	<br /><br /><br /><br /><br />
<div class="row2">
<br />
<h2 class="subtitle">Forgot <span>Password</span></h2>

</head>

<form name="forgot_password" method="post" action="forgot_password_show.php" onsubmit="return validateForm();">
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
<td></td><td><br />&nbsp;&nbsp;<input name="submit" width="150px" type="submit" id="submit"  title="send" class="button_add" value="Send"/>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input name="reset" width="150px" type="reset" id="reset" title="Add row" class="button_add"  value="reset"/></td>
</tr>
</table>

 </form>
 </div>
<?php
include'include/design1.html';
?>
