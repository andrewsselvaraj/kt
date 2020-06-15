<?php
include'include/design.html';
if (isset($_SESSION['email_id'])) {
        header('Location: task_login.php');
		}
?><head>
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

<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>	
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<script language="javascript"> 
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
<script>
function radio()
{

if(document.getElementById('Yes').checked) 

{
   document.getElementById('tblMain').style.display = 'none'; 
   document.getElementById('tblLogin').style.display = ''; 
   document.getElementById('trTerms').style.display = 'none'; 
      document.getElementById('captchaimg').style.display = 'none'; 
	  
	  document.getElementById('submit').disabled='';
	  document.getElementById('submit').style.color='#FFFFFF'
   //document.getElementById('submit').value="Post this Sale";

    
}
else if(document.getElementById('No').checked) 
{
  
   document.getElementById('tblMain').style.display = ''; 
   document.getElementById('tblLogin').style.display = 'none'; 
   document.getElementById('trTerms').style.display = ''; 
         document.getElementById('captchaimg').style.display = ''; 
		 
		 if(document.getElementById('chkterms').checked==false)
		 {
			 document.getElementById('submit').disabled='disabled';
			 document.getElementById('submit').style.color='GRAY'
		 }
		 
		   // document.getElementById('submit').value="Register and Post this Sale";
			
}
}
</script>

<script language="JavaScript">
        function validateForm()
{

var Items="";
	var ToLB = document.getElementById('ToLB');

	for(var i = 0; i < ToLB.options.length; ++i)
		Items+=ToLB.options[i].value+",";
		
	document.getElementById('hidItems').value=""+Items;
	document.getElementById('tems').value=""+Items;
	
	
	if(Items.length==0)
	{
		alert('Please select atleast an item' );
		document.getElementById('FromLB').focus();
		return false;
	}
	

var a=document.forms["Registration_form"]["name"].value;
var b=document.forms["Registration_form"]["area"].value;
var c=document.forms["Registration_form"]["address"].value;
var d=document.forms["Registration_form"]["phone"].value;
var e=document.forms["Registration_form"]["email_id"].value;
var f=document.forms["Registration_form"]["password"].value;
var g=document.forms["Registration_form"]["ConfirmPassword"].value;
var h=document.forms["Registration_form"]["6_letters_code"].value;
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if (a==null || a=="")
  {
   alert("Please enter name");
  return false;
  }
else if (b==0 || b=="0")
  {
  alert("Please Select the Area");
  return false;
  }
else if (c==null || c=="")
  {
  alert("Please enter Address");
  return false;
  }
else if (d==null || d=="")
 	 {
 		 alert("Phone number cannot be left blank");
 		 return false;
 	 }       

       	 if(isNaN(d)|| d.indexOf(" ")!=-1)
	{
               			alert("Please Enter only numeric value");
			return false;
                }
       			 if (d.length !=10)
			{
                			alert("Please enter 10 characters"); 
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
else if (h==null || h=="")
  {
  alert("Please enter the captcha code");
  return false;
  }
  

}
function validate_form()
{

var Items="";
	var ToLB = document.getElementById('ToLB');

	for(var i = 0; i < ToLB.options.length; ++i)
		Items+=ToLB.options[i].value+",";
		
	document.getElementById('hidItems').value=""+Items;
	document.getElementById('items').value=""+Items;
	
	
	if(Items.length==0)
	{
		alert('Please select atleast an item' );
		document.getElementById('FromLB').focus();
		return false;
	}
	

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
<form action="" name="trust_request" id="trust_request" method="post" onSubmit="Validate();" >
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
  <td align="center"><select multiple size="10" id="ToLB" name="ToLB"  style="width:250px">
   
    
  </select></td>
</tr>
<input id="hidItems" name="hidItems" type="hidden">
<tr><td></td><td></td></tr>

</table>

</form> 
<table  width="100%" border="0" >
<tr>
<td align="left" width="30%" style="padding-left:5px">
<b>Already Registered ?</b></td>
<td align="left" width="45%">
<input type="radio" name="rdoAlreadyRegistered" onClick="radio();"  id="Yes" value="1" /><label style="cursor:pointer" for="Yes"><b>Yes</b></label>
<input type="radio" name="rdoAlreadyRegistered" onClick="radio();" checked="checked" id="No" value="0" /><label style="cursor:pointer" for="No"><b>No</b></label></td>
</tr>
</table>
 

<table align="center" width="100%" id="tblMain"> 
<form name="Registration_form" method="post" action="registration_insert.php" onSubmit="return validateForm();">
<tr>
<input id="tems" name="tems" type="hidden" /><input id="trash" name="trash" type="hidden"  value="Task"/>
</tr>
<BR>
<tr >
<td align="left">
Name</td>
<td align="left"  ><input name="name" maxlength="20" style="width:210px" id="name" type="text"  onload="trust_request.form.submit();" /></td>
</tr>
<tr>
<td align="left">Area</td>
<td align="left" >
<select id="area" name="area" style="width:215px"> 
  <option value="0" >Select</option>
  <option>Abiramapuram</option><option>Adambakkam</option><option>Adyar</option><option>Akkarai</option><option>Alandur</option><option>Alapakkam</option><option>Alwarpet</option><option>Alwarthirunagar</option><option>AmbatturHO</option><option>AmbatturIndustrialEstate</option><option>Aminjikarai</option><option>Anakaputhur</option><option>AnnaNagar</option><option>Arumbakkam</option><option>AshokNagar</option><option>Avadi</option><option>AvadiCampHO</option><option>AvadiIAF</option><option>Ayanavaram</option><option>Ayapakkam</option><option>BesantNagar</option><option>Broadway</option><option>CathedralRoad</option><option>ChamiersRoad</option><option>Chemmenchery</option><option>ChennaiHighCourt</option><option>Chetpet</option><option>ChinmayaNagar</option><option>Chinthadripet</option><option>Chitlapakkam</option><option>Choolai</option><option>Choolaimedu</option><option>Chromepet</option><option>EastCoastRoad</option><option>Egmore</option><option>Ekkaduthangal</option><option>Enjambakkam</option><option>FlowersRoad</option><option>Gerugambakkam</option><option>Gopalapuram</option><option>Gowrivakkam</option><option>GreamsRoad</option><option>Guduvanchery</option><option>Guindy</option><option>GuindyIndustrialEstate</option><option>ICFColony</option><option>Iyyappanthangal</option><option>Jafferkhanpet</option><option>JawaharNagar</option><option>Kaatupakkam</option><option>KamarajNagar</option><option>Kandanchavadi</option><option>Kattankulathur</option><option>Keelkattalai</option><option>Kelambakkam</option><option>Kellys</option><option>Kilpauk</option><option>KKNagar</option><option>Kodambakkam</option><option>Kodungaiyur</option><option>Kolapakkam</option><option>Kolathur</option><option>Korattur</option><option>Kosapettai</option><option>Kottivakkam</option><option>Kotturpuram</option><option>Kovilambakkam</option><option>Kovur</option><option>Koyambedu</option><option>Kundrathur</option><option>Madambakkam</option><option>Madhavaram</option><option>MadhavaramMilkColony</option><option>Madipakkam</option><option>Maduravoil</option><option>Mahalingapuram</option><option>Manali</option><option>ManaliNewTown</option><option>Manapakkam</option><option>Mandaveli</option><option>Mangadu</option><option>Mannivakkam</option><option>MaraimalaiNagar</option><option>Medavakkam</option><option>Meenambakkam</option><option>Meenjur</option><option>MethaNagar</option><option>Mogappair</option><option>Moolakadai</option><option>MountRoad</option><option>Mudichur</option><option>Mugalivakkam</option><option>Mylapore</option><option>Nandambakkam</option><option>Nandanam</option><option>Nanganallur</option><option>Nanmangalam</option><option>Navalur</option><option>Neelankarai</option><option>Nerkundram</option><option>Nesapakkam</option><option>Nolambur</option><option>Nungambakkam</option><option>OldMahabalipuramRoad</option><option>OldPallavaram</option><option>Otteri</option><option>Padi</option><option>Padur</option><option>Palavakkam</option><option>Pallavaram</option><option>Pallikkaranai</option><option>Pammal</option><option>ParkTown</option><option>Parrys</option><option>Pattabiram</option><option>Payanur</option><option>Pazhavanthangal</option><option>Perambur</option><option>PeramburBarracks</option><option>PeriyarNagar</option><option>Perumbakkam</option><option>Perungalathur</option><option>Perungudi</option><option>PoesGarden</option><option>Polichalur</option><option>Ponmar</option><option>Poonamallee</option><option>PoonamalleeHighroad</option><option>Porur</option><option>Purasawalkam</option><option>Puzhal</option><option>Puzhuthivakkam</option><option>RajaAnnamalaipuram</option><option>Rajakilpakkam</option><option>RajBhavan</option><option>Ramapuram</option><option>RedHills</option><option>Royapettah</option><option>Royapuram</option><option>Saidapet</option><option>Saligramam</option><option>Santhome</option><option>Selaiyur</option><option>Sembakkam</option><option>Sevvapet</option><option>Sholinganallur</option><option>Singaperumalkoil</option><option>Siruseri</option><option>Sithalapakkam</option><option>Sowcarpet</option><option>Sriperambathur</option><option>St.ThomasMount</option><option>SunnambuKolathur</option><option>T.Nagar</option><option>Tambaram</option><option>TambaramSanatorium</option><option>Taramani</option><option>Teynampet</option><option>Thirumangalam</option><option>Thirumullaivoyal</option><option>Thiruninravur</option><option>Thiruvanmiyur</option><option>ThiruvikaNagar</option><option>Thoraipakkam</option><option>ThousandLights</option><option>Tiruverkadu</option><option>Tiruvottiyur</option><option>Tondiarpet</option><option>Triplicane</option><option>Ullagaram</option><option>Urappakkam</option><option>Uthandi</option><option>Vadapalani</option><option>Valasarawakkam</option><option>Vanagaram</option><option>Vandalur</option><option>Velachery</option><option>Velappanchavadi</option><option>Vengaivasal</option><option>Vepery</option><option>Veppampatu</option><option>Villivakkam</option><option>Virugambakkam</option><option>Vyasarpadi</option><option>Washermanpet</option><option>WestMambalam</option></select></td>
 </tr>
<tr>
<td align="left">Address</td>
<td align="left" >
<TEXTAREA NAME="address" id="address" COLS=24 ROWS=3></TEXTAREA></td>
</tr>
<tr>
<td align="left" >Phone</td>
<td align="left" >
<input name="phone"  maxlength=10 style="width:210px" id="phone" type="text" /></td>
</tr>

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
<tr>
<td>Confirm Password</td>
<td align="left" style="color:#666666;font-style:italic;padding-left:4">
<input name="ConfirmPassword"  style="width:210px"  id="ConfirmPassword" type="password" /></td>
</tr>
							<tr id="captchaimg">
<td>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small></td>
<td><input id="6_letters_code" name="6_letters_code" type="text"><br></td>
</tr>

<tr id="trTerms">
<td colspan="2"  style="padding-top:10px;">
<input id="chkterms" name="chkterms" onClick="if(this.checked)  {document.getElementById('submit').disabled='';document.getElementById('submit').style.color='#000000'} else {document.getElementById('submit').disabled='disabled';document.getElementById('submit').style.color='GRAY'} " type="checkbox"><label style="cursor:pointer" for="chkterms">I have read and understood the <a href="terms.php">terms and conditions</a></label>
</td>
</tr>
<tr></tr>

<tr >
<td  style="padding-top:10px;" colspan="2" align="left">
<input name="submit" width="150px" type="submit" title="submit" class="button_add"  id="submit" disabled="disabled"     value="submit"/>


</td>
</tr>
</form>
</table>

 
 
<table align="center" width="100%" id="tblLogin"> 
<form name="login_form" method="post"action="login_insert.php" onSubmit="return validate_form();">
<tr><input id="items" name="items" type="hidden" /> <input id="trash" name="trash" type="hidden"  value="Task"/>
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
<tr>
<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forgot_password.php">Forgot Password</a></td>

</tr>

<td></td><td  style="padding-top:10px;" colspan="2" align="left">
<input name="submit" width="150px" type="submit" title="submit" class="button_add"  id="submit"   value="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" width="150px" type="reset" id="reset" title="reset" class="button_add"  value="reset"/></td>

</tr>

</form>
 </table>
 

 <script>
 radio();
 </script>

<?php
include'include/design1.html';
?>
