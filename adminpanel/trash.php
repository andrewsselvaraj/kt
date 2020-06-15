<?php
include'include/design.html';
if (!isset($_SESSION['email']))
 {
 header('Location: index.html');
		}

?>
<h2>Trash List</h2> 
              
			        
                    
<?php


include 'include/connect.php';  
$sql = "SELECT * FROM registration r,trash t where r.name_id=t.name_id and t.trash_or_task='Trash'";
$result=mysql_query($sql);
?>
<table id="rounded-corner">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Date</th>
			<th scope="col" class="rounded">Reference_no</th>
			<th scope="col" class="rounded">Items</th>
			<th scope="col" class="rounded">Name</th>
            <th scope="col" class="rounded">Area</th>
            <th scope="col" class="rounded">Address</th>
			<th scope="col" class="rounded">Phone</th>
            <th scope="col" class="rounded">Email ID</th>
			<th scope="col" class="rounded">Status</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
	<tfoot>
    	<tr>
        	<td colspan="11" class="rounded-foot-left"></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
<?php
while($row=mysql_fetch_array($result))
{
$date = $row['date'];
$reference_number = $row['reference_number'];
$items = $row['items'];
$name = $row['name'];
$area = $row['area'];
$address = $row['address'];
$phone = $row['phone'];
$email_id = $row['email_id'];
$status = $row['status'];
echo" <tbody>
    	<tr>
        	<td><input type=checkbox name=/></td>
            <td>".$date."</td>
			<td>".$reference_number."</td>
			<td>".$items."</td>
			<td>".$name."</td>
            <td>".$area."</td>
            <td>".$address."</td>
            <td>".$phone."</td>
			<td>".$email_id."</td>
			<td>".$status."</td>
            <td><a href=#><img src=images/user_edit.png  title=edit border=0 /></a></td>
            <td><a href=# class=ask><img src=images/trash.png  title=delete border=0/></a></td>
        </tr>
    </tbody>";

}
?>
        
   </table>

	 <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>update</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete</strong><span class="bt_red_r"></span></a> 
     
     
        <div class="pagination">
        <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
        </div> 
     
<?php
include'include/design1.html';
?>


