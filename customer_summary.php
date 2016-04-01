<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
                $cust_id=$_SESSION['cust_id'];
                include 'db.php';
                $sql="SELECT * FROM customer WHERE Email='$cust_id'";
                $result=  mysql_query($sql) or die(mysql_error());
                $rws=  mysql_fetch_array($result);
                
                
                $Name= $rws[1];
                $Email= $rws[0];
                $Branch=$rws[10];              
                $Gender=$rws[2];
                $Mobile=$rws[7];
                $Birthday=$rws[8];
                
                //$_SESSION['login_id']=$account_no;
                $_SESSION['Name']=$Name;
?>
