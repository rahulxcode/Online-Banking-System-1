<?php
mysql_connect("localhost","root","");
mysql_select_db("userdetail");

$result = mysql_query("SELECT * FROM user ");

while($row=mysql_fetch_assoc($result))
{
	//header("location:user.php");
	echo $row['Name']." ".$row['Pwd'];
	echo "<br/>";
}
?>
