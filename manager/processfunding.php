<?php
session_start();
include("functions/auth.php");
if(isset($_POST['fund'])){
    $amount = $_POST['amount'];
    $user = $_POST['username'];
    
    if($amount < 5000){
       $message .= 'The amount you entered is less than the minimum investment amount of N5,000!';
			                $_SESSION['error'] = $message;  
			                header("location:index.php");  
    }
    
    if(!is_numeric($amount)){
         $message .= 'The value you entered is not a number.Kindly enter a number!';
			                $_SESSION['error'] = $message;  
			                header("location:index.php");  
    }
$sql2 = "SELECT * FROM tbl_investments WHERE username='$user' AND confirmed='no' AND completed='no'";
$result2 = mysqli_query($cxn, $sql2);
   if (mysqli_num_rows($result2) > 0) {
                            $message .= 'You have a pending transaction and cannot make a deposit at this time!';
			                $_SESSION['error'] = $message;  
			                header("location:index.php");
	                        exit(0); 
    }
$sql2 = "SELECT * FROM tbl_investments WHERE username='$user' AND confirmed='yes' AND completed='no'";
$result2 = mysqli_query($cxn, $sql2);
   if (mysqli_num_rows($result2) > 0) {
                            $message .= 'You have a running transaction and cannot make an investment at this time!';
			                $_SESSION['error'] = $message;  
			                header("location:index.php");
	                        exit(0); 
    }
    
    
        $sql_ship = "INSERT INTO tbl_investments(username, amount_invested, confirmed, completed) VALUES('$user', '$amount','no', 'no')";
                        $result = mysqli_query($cxn,$sql_ship)
                       or die("$sql_ship" . mysqli_error($cxn)); 
                      $message .= 'Your investment request has been accepted. Kindly make payment into the account number provided for your account to be funded!';
			                $_SESSION['error'] = $message;  
			                header("location:index.php");
	                        exit(0); 
   
    
}
?>