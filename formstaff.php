<html>
<head>
	
	<title>Webpage</title>
	<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
<h1 align="center" style="color:red">Register form</h1>
<hr></hr>

<h2 align="right"><tr>
		<td><a href="loginpage.php"><input type="Submit"  value="Sign In"/></a></td>
	</tr>
</h2>

<center>
<div id="form">	

	<div id="add">
		<h3><b>Add Staff</b></h3>
	</div>
<form method="post" action="insert.php">

<table align="center" cellpadding="5" cellspacing="17">
	
	
	
	<tr style="background-color:orange">
		<td><b>Staff Name</b></td> <td><input type="text" name="Name" placeholder="enter your name" maxlength="20"/></td>      
	</tr>
		
	
	
	<tr style="background-color:orange">
		<td><b>Email Id</td></b> <td><input type="text" name="Email" placeholder="enter your email id" maxlength="30"/></td>      
	</tr>

	<tr>
		<td><b>DOB</b></td>
		<td><input type="text" name="Birthday" placeholder="dd/mm/yyyy"></td>
	</tr>
	
	<tr style="background-color:orange">
		<td><b>Password</b></td> <td><input type="password" name="Pwd" placeholder="enter password" maxlength="15"/></td> 
	</tr>

	
	
	<tr style="background-color:orange">
		<td><b>Confirm Password</b></td> <td><input type="password" name="CPwd" placeholder="enter confirm password" maxlength="15"/></td> 
	</tr>
	
	<tr>
	
		<td><b>Gender</b></td>
		<td><input type="radio" name="Gender" value="m"/>M</td>
		<td><input type="radio" name="Gender" value="f"/>F</td>
	
	</tr>
	
	<tr>
		<td><b>Nominee</b></td> <td><input type="text" name="Nominee" placeholder="Enter Nominee name"></td>
	</tr>
	
	<tr>
		<td><b>Branch</b></td>
		<td>
			<select name="Branch">
				<option>Kolkata</option>
				<option>Mumbai</option>
				<option>Delhi</option>
				<option>Chennai</option>
				<option>Patna</option>
				<option>Bhagalpur</option>
				<option>Bangalore</option>
				<option>Hyderabad</option>
				<option>Goa</option>
				<option>Lucknow</option>
			</select>
		</td>
	</tr>
	
	<tr style="background-color:orange">
		<td><b>Mob No</b></td> <td><input type="text" name="Mobile" maxlength="10"/></td>
	</tr>
	
	
	<tr style="background-color:orange">
		<td>     </td>
		<td align="center"><input type="Submit"  value="Save & continue"/></td>
	</tr>
	
</table>

</form>
</div>

</center>	
</body>
</html>
