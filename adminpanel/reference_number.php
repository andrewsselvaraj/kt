<?php
$q=$_GET["q"];
include'include/connect.php';
$sql = "SELECT * FROM registration r,trash t where r.name_id=t.name_id and t.reference_number='".$q."'";

$result = mysql_query($sql);
?>

<?php
while($row = mysql_fetch_array($result))
  {
  ?>
      
     <h2 align="center"><font size="+3">Customer Details</font></h2>
    
         <div class="form">
         <form class="niceform">
		 <fieldset>
         <table align="center">
		 <tr>
		 <td><br /><label><font size="+1">Name:</font></label></td><td><h3><?php echo"".$row['name'].""?></h3></td>
		 </tr>
		 <tr>
		 <td><br /><label><font size="+1">Date:</font></label></td><td><h3><?php echo"".$row['date'].""?></h3></td>
		 </tr>
		 <tr>
		 <td><br /><label><font size="+1">Reference Number:</font></label></td><td><h3><?php echo"".$row['reference_number'].""?></h3></td>
		 </tr>
		 <tr>
		 <td><br /><label><font size="+1">Trash Or Task:</font></label></td><td><h3><?php echo"".$row['trash_or_task'].""?></h3></td>
		 </tr>
		 <tr>
		 <td><br /><label><font size="+1">Items:</font></label></td><td><h3><?php echo"".$row['items'].""?></h3></td>
		 </tr>
		 <tr>
		 <td><br /><label><font size="+1">Status:</font></label></td><td><h3><?php echo"".$row['status'].""?></h3></td>
		 </tr>
		 <tr>
		 <td><br /><label><font size="+1">Area:</font></label></td><td><h3><?php echo"".$row['area'].""?></h3></td>
		 </tr>
		 <tr>
		 <td><label><font size="+1">Address:</font></label></td><td><h3><?php echo"".$row['address'].""?></h3></td>
		 </tr>
		 <tr>
		 <td><label><font size="+1">Phone:</font></label></td><td><h3><?php echo"".$row['phone'].""?></h3></td>
		 </tr>
		 <tr>
		 <td><label><font size="+1">Email Id:</font></label></td><td><h3><?php echo"".$row['email_id'].""?></h3></td>
		 </tr>
		 </table>
                </fieldset>
                
         </form>
         </div>  
  <?php
  }

mysql_close($con);
?>