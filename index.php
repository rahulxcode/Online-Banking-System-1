<?php 
if(isset($_REQUEST["Name"])){
    include 'db.php';
    $Useremail=$_REQUEST['Email'];
    $Password=$_REQUEST['Pwd'];
  
    $sql="SELECT Email,Pwd FROM user WHERE Useremail='$Email' AND Password='$Pwd'";
    $result=mysql_query($sql) or die(mysql_error());
    $rws=  mysql_fetch_array($result);
    
    $Name=$rws[0];
    $Pwd=$rws[1];    
    
    if($Useremail==$Email && $Pwd==$Pwd){
        session_start();
        $_SESSION['customer_login']=1;
        $_SESSION['Cust_id']=$Email;
    header('location:customer_summary.php'); 
    }
   
else{
    header('location:index.php');  
}}
?>

<?php 
session_start();
        
if(isset($_SESSION['customer_login'])) 
    header('location:customer_summary.php');   
?>

