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

<style>

.Button {
    background:url(images/left.jpg) no-repeat;
    cursor:pointer;
	width: 50px;
    height: 50px;
    border: none;
	
    
}
.Button1 {
    background:url(images/right.jpg) no-repeat;
    cursor:pointer;
    width: 50px;
    height: 50px;
    border: none;
	
}
</style>
<script language='JavaScript'>
  
function move(tbFrom, tbTo) 
{
var arrFrom = new Array(); var arrTo = new Array(); 
var arrLU = new Array();
var i;
for (i = 0; i < tbTo.options.length; i++) 
{
arrLU[tbTo.options[i].text] = tbTo.options[i].value;
arrTo[i] = tbTo.options[i].text;
}
var fLength = 0;
var tLength = arrTo.length;
for(i = 0; i < tbFrom.options.length; i++) 
{
arrLU[tbFrom.options[i].text] = tbFrom.options[i].value;
if (tbFrom.options[i].selected && tbFrom.options[i].value != "") 
{
arrTo[tLength] = tbFrom.options[i].text;
tLength++;
}
else 
{
arrFrom[fLength] = tbFrom.options[i].text;
fLength++;
}
}

tbFrom.length = 0;
tbTo.length = 0;
var ii;

for(ii = 0; ii < arrFrom.length; ii++) 
{
var no = new Option();
no.value = arrLU[arrFrom[ii]];
no.text = arrFrom[ii];
tbFrom[ii] = no;
}

for(ii = 0; ii < arrTo.length; ii++) 
{
var no = new Option();
no.value = arrLU[arrTo[ii]];
no.text = arrTo[ii];
tbTo[ii] = no;
}
}

</script>
</head>
<body>
<form action="trash_insert.php" name="trust_request" method="post" onSubmit="return validate_form();" >
<table align="center" width="100%" border="0"> 
<tr>
<td style="padding-left:12px; font-size:20px"><b>Task Request</b></td>
<td colspan="2" align="right"></td>
</tr>
<tr>
  <td align="left" style="padding-left:12px"><select  size=10 multiple id="FromLB" name="FromLB" style="width:250px">
    <option>Aluminium</option> 
    <option>Batteries</option> 
	<option> Books</option> 
	<option> Bottles</option> 
	<option> Brass</option>
	 <option> Card Box</option> 
	 <option> Computers</option>
	<option> Copper</option> 
	<option> Iron</option>
	 <option> Magazines</option>
	<option> Milk Cover</option>
	<option> News Papers</option> 
	 <option> Others</option>
	<option> Plastic</option>
	<option> Steel</option> 
	<option> Tin</option> 
	<option> Water / Oil Cover</option> 
	 <option >White Papers</option>
  </select></td>
  <td align="center" width="50px">
    <input name="button" type="button" class="Button1" onClick="move(this.form.FromLB,this.form.ToLB)" value="" />
<br />
<br />
<br />
<input name="button2" type="button" class="Button" onClick="move(this.form.ToLB,this.form.FromLB)" value="" /></td> 
  <td align="center"><select multiple size="10" id="ToLB" name="ToLB"  style="width:250px"  class="bnotes" size="5" onchange='getvalue(this)' multiple="multiple"></select></td>
</tr>
</table>

<table>
<tr id="captchaimg">
<td>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small></td>
<td><input id="6_letters_code" name="6_letters_code" type="text"><br></td>
</tr><input id="hidItems" name="hidItems" type="hidden"><input id="trash" name="trash" type="hidden" value="Task">
<tr><td></td><td><input  name="submit" width="150px" type="submit" id="submit"   class="button_add" value="submit"/></td></tr>
</table>
</form>
<script language="JavaScript">
      function validate_form()
{

var Items="";
	var ToLB = document.getElementById('ToLB');

	for(var i = 0; i < ToLB.options.length; ++i)
		Items+=ToLB.options[i].value+",";
		
	document.getElementById('hidItems').value=""+Items;
	
	if(Items.length==0)
	{
		alert('Please select atleast an item' );
		document.getElementById('FromLB').focus();
		return false;
	}
	

var a=document.forms["trust_request"]["6_letters_code"].value;
  if (a==null || a=="")
  {
  alert("Please enter captcha code");
  return false;
  }
}

  </script>

							

</body>

<?php
include'include/design1.html';
?>