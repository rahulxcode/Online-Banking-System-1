<?php
session_start();
session_destroy();

echo "Please Wait...!!!";
header("Refresh:3;url=loginpage.php");
?>
