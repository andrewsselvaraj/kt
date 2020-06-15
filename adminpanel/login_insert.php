
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
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
<body>
<div id="main_container">
<div class="page-out">
<div class="header-top">
<h1>Waste <span>Products</span></h1>
</div>
</div>

	<div class="header_login">
         <div class="login_form" >
         
         <h3>Admin Panel Login</h3>
         
         
         
                <fieldset>
				
<?php

include'include/connect.php';
$email_id = $_POST['email_id'];
$password = $_POST['password'];
$sql="select * from admin where email_id='$email_id' and password='$password'";

$result=mysql_query($sql,$con);

if($row=mysql_fetch_array($result))
{
$name=$row['name'];
$email=$row['email_id'];
if($email_id==$row['email_id'] && $password==$row['password'])
{
session_start();
$_SESSION['nam']=$name;
$_SESSION['email']=$email;
header( 'Location: login.php' ) ;

}

}
else
{
echo"<h2 align=center><font color=red>Username and password You have entered is not valid</font></h2>";
?>
<form name="login_form" method="post" action="login_insert.php" onsubmit="return validateForm();" class="niceform">
         <a href="forgot_password.php" class="forgot_pass">Forgot password</a> 
		 <a href="registration.php" class="forgot_pass">New user Registration</a>
         
         
         
                <fieldset>
				
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
         
<?php
}
?>
                   
                    
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