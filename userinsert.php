<?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Birthday=$_POST['Birthday'];
$Pwd=$_POST['Pwd'];
$CPwd=$_POST['CPwd'];
$Gender=$_POST['Gender'];
$Nominee=$_POST['Nominee'];
$Branch=$_POST['Branch'];
$Mobile=$_POST['Mobile'];
if($Name && $Email && $Birthday && $Pwd && $CPwd && $Gender && $Nominee && $Branch && $Mobile)
{
   
 if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $Email))
 {
   
   if(strlen($Pwd)>7)
   {
   
       if($Pwd==$CPwd)
		{
			mysql_connect("localhost", "root", "") or die("we couldn't connect");
			mysql_select_db("userdetail");
	
			$username=mysql_query("SELECT Name FROM user WHERE Name='$Name'");
			$count=mysql_num_rows($username);
			
			$checknum=mysql_query("SELECT Mobile FROM user WHERE Mobile='$Mobile'");
			$numsecurity=mysql_num_rows($checknum);
			
			$checkemail=mysql_query("SELECT Email FROM user WHERE Email='$Email'");
			$emailsecurity=mysql_num_rows($checkemail);
			
			if($count!=0)
			{
				die("<b><center><h1>Error...</b>Name already exits!! Try another name</h1>");
			}
			
			if($emailsecurity!=0)
			{
				die("<b><center>Email already exits!! Enter new email id</b>");
			}
			
			if($numsecurity!=0)
			{
				die("<b><center><h2>Mobile number already registered!!please enter new number</b></h2>");
			}
	
			//$Pwdmd5=md5($Pwd);
			mysql_query("INSERT INTO user(Name,Email,Birthday,Pwd,CPwd,Gender,Nominee,Branch,Mobile) VALUES('$Name','$Email','$Birthday','$Pwd','$CPwd','$Gender','$Nominee','$Branch','$Mobile')");
	
			echo "<b><h3><center> Succcessfully registered!!</h3></b>";
			//header("location:user.php");
			//header("location:fetching.php");
		}
		else
		{
			echo "<b><center><h4>Password & Confirm Password</b> did not match...<h4>";
		}
	
	}
	else
	{
		echo "<center><h5><b>Password </b>is too short!! It must lies between 8 and 15 character</h5>";
	}
 }
  else
       {
		echo "<b><center>Please Enter valid Email !!!</b>";
	   }
	
	
}
else
{
	echo "<b><h6><center>All fields are mandatory...</h6></b>";
}	
?>
