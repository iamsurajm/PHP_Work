<?php

mysql_connect('localhost','root','');
mysql_select_db("integral");

$query="select *from register('name','email','password','mobile','gender')";








?>
<table align="center" border="1">
<tr>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Mobile</th>
<th>Gender</th>
</tr>
<?php
while($res = mysql_fetch_array($query,MYSQL_BOTH)){
	?>
	<tr>
	<td><?php echo $res ?></td>
	</tr>
<?php
}
?>
</table>