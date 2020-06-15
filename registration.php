<?php
include'include/design.html';
if (isset($_SESSION['email_id']))
 {
       echo"<br><br><h2 align=center>You have already logged in...<br><br><b><i><strong><font color=green>So kindly logout to Resister</font></strong></span></i></b></h2>";
		}
else
{
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
</script>

</head>

<form name="Registration_form" method="post"action="registration_insert.php" onsubmit="return validateForm();">
<table align="center" width="100%"> 
<tr>
<h2 class="sidebar" align="center">Registration</h2>
</tr>
<BR>
<tr >
<td align="left">
Name</td>
<td align="left"  ><input name="name" maxlength="20" style="width:210px" id="name" type="text" /></td>
</tr>
<tr>
<td align="left">Area</td>
<td align="left" >
<select id="area" name="area" style="width:215px" > 
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
<input id="chkterms" name="chkterms" onclick="if(this.checked)  {document.getElementById('submit').disabled='';document.getElementById('submit').style.color='#000000'} else {document.getElementById('submit').disabled='disabled';document.getElementById('submit').style.color='GRAY'} " type="checkbox"><label style="cursor:pointer" for="chkterms">I have read and understood the <a href="terms.php">terms and conditions</a></label>
</td>
</tr>

<tr >
<td  style="padding-top:10px;" colspan="2" align="left">
<input name="submit" width="150px" type="submit" title="Add row" class="button_add" id="submit"  disabled="disabled"   value="submit"/>


</td>
</tr>
</table>

 </form>
 <?php
}
include'include/design1.html';
?>
