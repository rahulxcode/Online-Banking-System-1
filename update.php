<?php
	mysql_connect("localhost","root","");
	mysql_select_db("userdetail");
	$query=mysql_query("SELECT * from user");
	
	echo "<table align=center border=2>";
	echo "<tr align=center>
		  <center><td bgcolor=yellow width=20%><b>ID</b></td>
		  <td align=center bgcolor=yellow><b>NAME</b></td>
	      <td align=center bgcolor=yellow><b>PASSWORD</b></td>
		  <td align=center bgcolor=yellow><b>EMAIL</b></td></center>
		  </tr>";
	while($row=mysql_fetch_array($query))
	{
		$id=$row['id'];
		$Name=$row['Name'];
		$Pwd=$row['Pwd'];
		$Email=$row['Email'];
	   
	   echo "<tr>
	   <td><a href=edit.php ? id=$id&Name=$Name&Pwd=$Pwd&Email=$Email>$id</a></td><td>$Name</td>
	   <td>$Pwd</td><td>$Email</td></tr> ";
	}
	echo "</table>";
?>
