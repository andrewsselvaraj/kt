<?php
include'include/admin_design.html';
?>
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

<table width="100%">
<h3>Admin Panel Login</h3>
         <form name="login_form" method="post" action="login_insert.php" onsubmit="return validateForm();" class="niceform">
         <a href="forgot_password.php" class="forgot_pass">Forgot password</a> 
		 <a href="registration.php" class="forgot_pass">New user Registration</a>
         
         
         
                <fieldset>
				<br /><br /><br />
				<table align="center"> 
<tr>
<td><label>E-Mail Id (User Name)</label></td>
<td  >
<input name="email_id" value="" style="width:210px" id="email_id" type="text" /></td>
</tr>
<tr>
<td><label>Password</label></td>
<td>
<input name="password" style="width:210px" id="password" type="password" /></td>
</tr>
<tr >	

<td></td><td  style="padding-top:10px;" colspan="2" align="left">
<input name="submit" width="150px" type="submit" id="submit"  title="Add row" class="button_add" value="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" width="150px" type="reset" id="reset" title="Add row" class="button_add"  value="reset"/></td>

</tr>
</table>

                   
                    
                </fieldset>
                
         </form>

</table>
<?php
include'include/admin_design1.html';
?>
