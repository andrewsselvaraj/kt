<?php
include'include/design.html';
if (!isset($_SESSION['email']))
 {
 header('Location: index.html');
		}

?>

<head>
<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","customer_info.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>

<form>
<h1>Please Select the Customer Name</h1>
<select name=users onChange=showUser(this.value)>
<option value=0>Select a person:</option>
<?php


include 'include/connect.php';  
$sql = "SELECT * FROM registration";
$result=mysql_query($sql);

while($row=mysql_fetch_array($result))
{
$name = $row['name'];
echo"<option>".$name."</option>";

}
?>
</select>
</form>
<br />
<div id=txtHint><b><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></b></div>
</body>
 
<?php
include'include/design1.html';
?>

