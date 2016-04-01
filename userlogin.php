<?php //include "db.php"?>
<?php 
session_start();

$_SESSION["Name"]=$_POST["Name"];
$_SESSION["Pwd"] =$_POST["Pwd"];
 
 if($_SESSION["Name"] && $_SESSION["Pwd"])
  {
	$dbconn=mysql_connect("localhost", "root", "") or die("problem with connection");
	mysql_select_db("userdetail");
	
	$query=mysql_query("SELECT * FROM user WHERE Name='".$_SESSION["Name"]."' and Pwd='".$_SESSION["Pwd"]."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		/*while($row1=mysql_fetch_assoc($query))
			{
				echo header("location:user.php")." "."<center>"." "."<h1>"." "."Welcome"." ".$row1['Name']."<br/>   ".$row1['Pwd']."<br/> ".$row1['Email']."</h1>";
				
				//echo "<br/>";
			}*/
			//header("location:user.php");
		while($row= mysql_fetch_array($query))
		  {
			$Name= $row["Name"];
			$Pwd = $row["Pwd"];
		  }
		  
		if($_SESSION["Name"]==$Name)
		{
			if($_SESSION["Pwd"]==$Pwd)
			{	
				
				header("location:user.php");
			
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
 }
 else
	{
		echo "<center>you have to enter Both <b>Name</b> and <b>Password</b>";
	}
	
?>
