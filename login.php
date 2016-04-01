<?php
$Name=$_POST["Name"];
$Pwd =$_POST["Pwd"];
if($Name && $Pwd)
{
	mysql_connect("localhost", "root", "") or die("problem with connection");
	mysql_select_db("student");
	
	$query=mysql_query("SELECT * FROM stu WHERE Name='$Name' and Pwd='$Pwd'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		  {
			$Name= $row["$Name"];
			$Pwd = $row["$Pwd"];
		   }
		if($Name==$Name)
		{
			if($Pwd==$Pwd)
			{
				header("location:adminhome.php");
				
			}
			else
			{
				header("location:error.php");
				
			}
		}
		else
		{
			header("location:error.php");
			
		}
	  	
	}
	else
	{
		header("location:error.php");
	}
}else
{
	echo "<center>you have to enter Both <b>Name</b> and <b>Password</b>";
}
	/*else
	{
		header("location:error.php");
	}*/
	
	/*if($_GET["txt_name"]=="admin" && $_GET["txt_pwd"]=="admin")
	{
	}
	else
	{	
	}*/
	//$q="insert into stu values('$n','$p')";
	//mysql_query($q);
	//echo "done...";

?>
