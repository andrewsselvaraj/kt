<?php
include'include/design.html';
?><head>
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>	
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
  <script type="text/javascript">
function validateForm()
{
var a=document.forms["feedback"]["name"].value;
var b=document.forms["feedback"]["phone"].value;
var c=document.forms["feedback"]["mailid"].value;
var d=document.forms["feedback"]["message"].value;
var e=document.forms["feedback"]["6_letters_code"].value;
var atpos=c.indexOf("@");
var dotpos=c.lastIndexOf(".");

if (a==null || a=="")
  {
  alert("Please enter Your name");
  return false;
  }
else if (b==null || b=="")
 	 {
 		 alert("Phone number cannot be left blank");
 		 return false;
 	 }       

       	 if(isNaN(b)|| b.indexOf(" ")!=-1)
	{
               			alert("Please Enter only numeric value");
			return false;
                }
       			 if (b.length !=10)
			{
                			alert("Please enter 10 characters"); 
				return false;
          			 }
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=c.length)
  {
  alert("please enter a valid e-mail address");
  return false;
  }
else if(d==null || d=="")
  {
  alert("Please enter your Feedback");
  return false;
  }
  else if (e==null || e=="")
  {
  alert("Please enter the captcha code");
  return false;
  }


}

</script>
</head>

<h2 class="under" align=center>Feedback</h2>
				
						<form id="feedback" name=feedback action=mail.php method="post"onsubmit="return validateForm();">
						<table align="center" width="100%">
							<tr><td><span>Your Name:</span></td>
								<td><br><input type="text" name=name style="width:210px"></td>
							</tr>
							
						<tr><td>
								<span>Phone Number:</span></td><td><br><input name="phone"  maxlength=10 style="width:210px" id="phone" type="text" /></td></td>
							</tr>
							<tr><td><span>Your E-mail ID:</span></td>
								<td><br><input type="text" name=mailid style="width:210px" ></td>
							</tr>
							<tr><td><span>Your Feedback:</span></td><td>
								<br><textarea name=message  COLS=24 ROWS=5 style="width:210px"></textarea></td>
							</tr>
							<tr id="captchaimg">
<td>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small></td>
<td><input id="6_letters_code" name="6_letters_code" type="text"><br></td>
</tr>

							<tr><td><br></td><td><input type=submit value=send title="send" class="button_add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type=reset value=reset title="reset" class="button_add"></td>
							</tr>
							
</table>			</form>
<?php
include'include/design1.html';
?>
