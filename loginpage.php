<html>
<head>
	<title>Webpage</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="box">
	<h1 align="center">Online banking system</h1>
</div>


<div id="login1">
	<p align="center"><b> Admin</b> </p>
		<center>
			<form method="post" action="login.php">
			  <h2><table border="0" width="40%">
	
	
				<tr>
					<td width="10%">Name:</td><td><input type="text" name="Name" placeholder="enter your name"/></td>
				</tr>	
	
	
				<tr>
					<td width="10%">Password:</td><td><input type="password" name="Pwd" placeholder="enter password"/></td>
				</tr>
	

	
				<tr>
					<td></td>
					<td><input type="submit" value="Login" ></td>
				</tr>
	
	             </table>
		
			</form>		
		</center>
</div>



<div id="login">
	<p align="center"><b>User </b></p>
		<center>
			<form method="post" action="userlogin.php">
				<h2><table border="0" width="40%">
	
	
				<tr>
					<td width="10%">Name</td><td><input type="text" name="Name" placeholder="enter your name"/></td>
				</tr>	
	
	
				<tr>
					<td width="10%">Password</td><td><input type="password" name="Pwd" placeholder="enter password"/></td>
				</tr>
	
				</table>
	
				<tr>
					<td><a href="user.php"><input type="submit" value="login" /></a></td>
				</tr>
	
			  </h2>

			</form>

			<h3 align="center"><a href="form.php"><input type="submit" value="Register"/></a></h3>	

</div>




</body>
</html>
