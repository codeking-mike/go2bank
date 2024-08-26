<?php
session_start();

include("../db_connect.php");
if(isset($_SESSION['admin'])){
$adminid = $_SESSION['admin'];
	
}else{
	$_SESSION['error'] = "Kindly Login to continue";
	header("location:../index.php");
	exit(0);
}


?>