<?php
session_start();
if(!isset($_SESSION["Name"]))
{
	echo "access denied!";
	//header("location:index.php");
	//exit;
}
?>

<html>
<head>
	<title>userpage</title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

	<div id="top">
		<h1 align="center" style="color:white">User Home </h1>
	</div>
	
	<div id="header">
		
	</div>
	
	<h2 align="center">Welcome <?php echo "<i>".$_SESSION["Name"]."</i>"?></h2>

	<div id="leftboxuser">	
		
		<br><div id="home"><p align="center" style="color:white"><b>Admin Home</b></p></div>
		
			<ul> 
				<li><a href="adminhome.php" style="color:white">Home</a></li><br>
				<li><a href="home.php" style="color:white">User Details</a></li><br>
				<li><a href="update.php" style="color:white">Change password</a></li><br>
				<li><a href="Logout.php"style="color:white">Logout</li></a>
			</ul>
	
	</div>
	
	<?php
		/*$_SESSION['Name']=$_POST["Name"];
		$_SESSION['Pwd'] =$_POST["Pwd"];
		if($_SESSION['Name'] && $_SESSION['Pwd'])
		{
				mysql_connect("localhost","root","");
				mysql_select_db("userdetail");
				$result = mysql_query("SELECT * FROM user WHERE Name='$Name' and Pwd='$Pwd'");
			while($row=mysql_fetch_assoc($result))
			{
				echo $row['Name']."   ".$row['Pwd'];
				echo "<br/>";
			}	
		}*/
		 //$Cust_id=$_SESSION['Cust_id'];
		/*$Name=$_SESSION["Name"];
		$Pwd=$_SESSION["Pwd"];
		include 'userlogin.php';
		$sql="SELECT * FROM user WHERE  Name='$Name' AND Pwd='$Pwd'";
		$row=mysql_query($sql) or die(mysql_error());
		$res=mysql_fetch_array($row);
		
		
		$Name=$res[1];
		$Email=$res[6];
		$Mobile=$res[2];
		$Branch=$res[3];
		$Nominee=$res[4];
		$Birthday=$res[5];
	
	
			<p>Name:<?php echo $_SESSION["Name"]?></p>
			
			<p>Email:<?php echo $_SESSION["Email"]?></p>
			
			<p>Birthday:<?php echo $_SESSION["Birthday"]?></p>
			
			<p>Branch:<?php echo $_SESSION["Branch"]?></p>
			
			<p>Nominee:<?php echo $_SESSION["Nominee"]?></p>
			
	*/?>
		<?php	
	/*	$Name=$_POST["Name"];
		$Pwd =$_POST["Pwd"];
		if($Name && $Pwd)
		{
				mysql_connect("localhost","root","");
				mysql_select_db("userdetail");
				$result = mysql_query("SELECT * FROM user WHERE Name='$Name' and Pwd='$Pwd'");
			while($row=mysql_fetch_assoc($result))
			{
				echo $row['Name']."   ".$row['Pwd'];
				echo "<br/>";
			}	
		}*/		
		?>
	
	
	<div id="footer1">
		<p align="center"><b> &copy Copyright 2015.All rights reserved</b></p>
	</div>
	
</body>
</html>
