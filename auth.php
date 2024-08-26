<?php
session_start();
include("db_connect.php");


if(isset($_SESSION['user'])){
$userid = $_SESSION['user']; 
$currentDate = date('Y-m-d H:i:s');

 
 $sql = "SELECT * FROM bank_users WHERE user_id='$userid'";
 $result=mysqli_query($cxn, $sql) or die("Couldnt Fetch Data");
 while($row = mysqli_fetch_assoc($result)){
	 extract($row);
 }	

 $sql_account = "SELECT * FROM user_account WHERE user_id='$userid' LIMIT 1";
 $result_account=mysqli_query($cxn, $sql_account) or die("Couldnt Fetch Data");
 while($row = mysqli_fetch_assoc($result_account)){
	 extract($row);
 }	
                    
/*
 
 $sql2 = "SELECT SUM(profits) AS total_profit FROM client_investment WHERE payer='$userid' AND expected_date > '$currentDate' AND completed='no'";
 $res=mysqli_query($cxn, $sql2) or die("Couldnt Fetch Data 3");
 $row2 = mysqli_fetch_assoc($res);
 $total_profit = $row2["total_profit"];
 
 */
 
}else{
	$_SESSION['error'] = "Kindly Login to continue";
	header("location:./index.php");
	exit(0);
} 
//function to determine if a user has been merged to PH



?>