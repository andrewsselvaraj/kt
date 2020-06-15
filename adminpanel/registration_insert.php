<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Powered by INDEZINER</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
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


<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header_login">
         <div class="login_form" >
         
         <h3>Admin Panel Login</h3>
		 <br />
		 <br />
         
         <form name="login_form" method="post" action="login_insert.php" onsubmit="return validateForm();" class="niceform">
         <a href="forgot_password.php" class="forgot_pass">Forgot password</a> 
		 
         <?php
include'include/connect.php';
$name = $_POST['name'];
$email_id = $_POST['email_id'];
$password = $_POST['password'];
$sql="INSERT INTO `admin` (`name`,`email_id`, `password`) VALUES ('$name','$email_id', '$password')";
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

         
                <fieldset>
				<table align="center"> 
<tr>
<td><label>E-Mail Id (User Name)</label></td>
<td  >
<input name="email_id" value="<?php echo"$email_id";?>"  style="width:210px" id="email_id" type="text" /></td>
</tr>
<tr>
<td><label>Password</label></td>
<td>
<input name="password" style="width:210px" value="<?php echo"$password";?>"  id="password" type="password" /></td>
</tr>
<tr >	

<td></td><td  style="padding-top:10px;" colspan="2" align="left">
<input name="submit" width="150px" type="submit" id="submit"  title="Add row" class="button_add" value="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" width="150px" type="reset" id="reset" title="Add row" class="button_add"  value="reset"/></td>

</tr>
</table>

                   
                    
                </fieldset>
                
         </form>
         </div>  
          
	</div>
    
    <div class="footer_login">
    
    	<div class="left_footer_login"></div>
    	<div class="right_footer_login"></div>
    
    </div>

</div>		
</body>
</html>