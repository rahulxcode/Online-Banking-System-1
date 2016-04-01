<html>
<head>
	<title>edituser</title>
</head>
<body>

<h1 align="center">Edit user:<?php echo $_REQUEST["Name"];?></h1>

<form method="post" action="change.php">
<table border="1" align="center">

<tr><td>Name:</td><td><input type="text" name="newname" value="<?php echo $_REQUEST['Names'];?>"></td></tr>
<tr><td>Pwd:</td><td><input type="submit" name="newpassword" value="<?php echo $_REQUEST['Pwds'];?>"></td></tr>
<tr><td>Email:</td><td><input type="text" name="newemail" value="<?php echo $_REQUEST['Emails'];?>"></td></tr>

<input type="submit" value="Save & Update"/>
<input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>">


</form>
</body>
</html>
