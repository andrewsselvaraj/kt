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
var a=document.forms["Registration_form"]["name"].value;
var e=document.forms["Registration_form"]["email_id"].value;
var f=document.forms["Registration_form"]["password"].value;
var g=document.forms["Registration_form"]["ConfirmPassword"].value;
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if (a==null || a=="")
  {
   alert("Please enter name");
  return false;
  }
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
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
else if (g==null || g=="")
  {
  alert("Please Enter confirm password");
  return false;
  }
  else if (f!=g)
  {
  alert("Confirm password is not matched with the password");
  return false;
  }

}
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

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
         
         <h3>New User Registration</h3>
         <form name="Registration_form" method="post"action="registration_insert.php" onsubmit="return validateForm();" class="niceform">
         
         
                <fieldset>
			
				<table align="center"> 
<tr>
<td><label>Name</label></td>
<td>
<input name="name" style="width:210px" id="name" type="text" /></td>
</tr>
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
<tr>
<td><label>Confirm Password</label></td>
<td>
<input name="ConfirmPassword" style="width:210px" id="ConfirmPassword" type="password" /></td>
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