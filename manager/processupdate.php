<?php
include("auth.php");

if(isset($_POST['update'])){
	
	
    $fname = $_POST['fname'];
     $lname = $_POST['lname'];
      $code = $_POST['code'];
       $accno = $_POST['accno'];
        $pass = $_POST['password'];
	$email = $_POST['email'];
		$phone = $_POST['phone'];
	$address = $_POST['address'];
	$balance = $_POST['balance'];
	 $uid = $_POST['userid'];
	
	
    $result = mysqli_query($cxn, "UPDATE bank_users SET user_email='$email', phone_no='$phone', firstname='$fname', lastname='$lname',
    login_id='$code', user_password='$pass', home_address='$address' WHERE user_id='$uid'");
    
	$result = mysqli_query($cxn, "UPDATE user_account SET available_balance='$balance', account_number='$accno' WHERE user_id='$uid'");
    
    if($result){
        $_SESSION['error'] = "Profile Updated succesfully!"; 
							            header("location:editusers.php?ed=$uid");
                                        $stmt->close(); 
										exit(0);
    }
	
    


    
}
//CREATE ADMIN ACCOUNT

if(isset($_POST['create_admin'])){
	$fname = $_POST['fullname'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$dt = date("Y-m-d H:i:s");
	
	
	$query_string = "INSERT INTO argent_client_db(fullname, username, user_password, admin, date_joined, blocked)
	VALUES('$fname','$username', '$pass', 'yes', '$dt', 'no')";
	$result = mysqli_query($cxn, $query_string);
	 $message .= "Admin Created Successfully";
									$_SESSION['error']= $message;
								   header("location:createadmin.php");
								  exit(0);
	
	
	
	
}
//CREATE USER ACCOUNT

if(isset($_POST['create_user'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	 $code = $_POST['code'];
	  $accno = $_POST['accno'];
	   $pass = $_POST['password'];
       $email = $_POST['email'];
	   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $balance = $_POST['balance'];
	$dt = date("Y-m-d H:i:s");
	
	
	$query_string = "INSERT INTO bank_users(firstname, lastname, user_email, user_password, login_id, phone_no, home_address, is_admin, date_joined)
	VALUES('$fname','$lname','$email', '$pass', '$code', '$phone', '$address', 'no', '$dt')";
	$result = mysqli_query($cxn, $query_string);
	$uid = mysqli_insert_id($cxn);
	
	 mysqli_query($cxn, "INSERT INTO user_account(user_id, available_balance, account_number) VALUES('$uid', '$balance', '$accno')"); 
	 
	 $message .= "User Created Successfully";
									$_SESSION['error']= $message;
								   header("location:addusers.php");
								  exit(0);
	
	
	
	
}

if(isset($_POST['transaction'])){
	$user = $_POST['user'];
	$type = $_POST['type'];
	 $method = $_POST['method'];
	  $amount = $_POST['amount'];
	   $desc = $_POST['desc'];
       $dt = $_POST['date'];
	
	
	$query_string = "INSERT INTO transactions(user_id, transaction_type, transaction_type2, description, amount, transaction_date)
	VALUES('$user','$type','$method', '$desc', '$amount', '$dt')";
	$result = mysqli_query($cxn, $query_string);
      $message .= "Created Successfully";
									$_SESSION['error']= $message;
								   header("location:addtransaction.php");
								  exit(0);
	
	
	
	
}


//CREATE ACCOUNT
if(isset($_POST['btc_account'])){
	$btc = $_POST['btc_address'];
	$target = "../qrcode/";
$target = $target . basename( $_FILES['pop']['name']); 
$pic=($_FILES['pop']['name']);
	
	$query_string = "INSERT INTO central_account(wallet_address, qrcode, method)
	VALUES('$btc','$pic', 'btc')";
	$result = mysqli_query($cxn, $query_string);
   move_uploaded_file($_FILES['pop']['tmp_name'],$target);
 
    
                          $message .= "Account Added Successfully";
									$_SESSION['error']= $message;
								   header("location:createaccount.php");
								  exit(0);

	
	
	
	
	
}


if(isset($_POST['eth_account'])){
	$eth = $_POST['eth_address'];
	$target = "../qrcode/";
$target = $target . basename( $_FILES['pop']['name']); 
$pic=($_FILES['pop']['name']);
	
	$query_string = "INSERT INTO central_account(wallet_address, qrcode, method)
	VALUES('$eth','$pic', 'eth')";
	$result = mysqli_query($cxn, $query_string);
move_uploaded_file($_FILES['pop']['tmp_name'],$target);

    
                          $message .= "Account Added Successfully";
									$_SESSION['error']= $message;
								   header("location:createaccount.php");
								  exit(0);

	
	
	
	
	
}


if(isset($_POST['pfm_account'])){
	$pfm = $_POST['pfm_number'];
	$info = $_POST['others'];
	
	$query_string = "INSERT INTO central_account(wallet_address, info, method)
	VALUES('$pfm','$info', 'pfm')";
	$result = mysqli_query($cxn, $query_string);

    
                          $message .= "Account Added Successfully";
									$_SESSION['error']= $message;
								   header("location:createaccount.php");
								  exit(0);

	
	
	
	
	
}
//CREATE ACCOUNT
if(isset($_POST['create_account'])){
	$momoname = $_POST['momoname'];
	$momono = $_POST['momono'];
	$carrier = $_POST['carrier'];

	
	
	$query_string = "INSERT INTO central_account(cen_name, cen_number, cen_carrier, status)
	VALUES('$momoname','$momono', '$carrier', '1')";
	$result = mysqli_query($cxn, $query_string);
	 $message .= "Account Added Successfully";
									$_SESSION['error']= $message;
								   header("location:createaccount.php");
								  exit(0);
	
	
	
	
}


//SEND REPLY TO USER

if(isset($_POST['send_reply'])){
	$sender = "Admin";
	$receiver = $_POST['receiver'];
	$title = $_POST['title'];
	$msg = $_POST['reply'];
	$dt = date("Y-m-d H:i:s");

	$query = "INSERT INTO support(sender, receiver, title, message, status) VALUES('$sender', '$receiver','$title', '$msg', '0')";
	$result = mysqli_query($cxn, $query);
	if($result){
	 $message .= "Reply Sent Successfully";
									$_SESSION['error']= $message;
								   header("location:viewmessages.php");
								  exit(0); 
	}else{
	    echo "Error! Data failed to submit to database";
	}
	
	
	
	
}


//SEND MESSAGES TO ALL TO USERS

if(isset($_POST['sendtousers'])){
	
	$msg = $_POST['msg'];
	$dt = date("Y-m-d H:i:s");
	
	
	    
	  $query_string = "INSERT INTO notifications(receiver, sender, message, message_time, status)
	VALUES('all', 'Admin', '$msg', '$dt', '0')";
	$result = mysqli_query($cxn, $query_string);
	    
	
	

	 $message .= "Broadcast Message Sent Successfully";
									$_SESSION['error']= $message;
								   header("location:broadcast.php");
								  exit(0);
	
	
	
	
}

if(isset($_POST['confirmpayment'])){
	
	$trans = $_POST['trans'];
	$payer = $_POST['payer'];
	$amount = $_POST['amount'];
	$dt = date("Y-m-d");

		        
	
	
	 		 //check if user has PH before
		   
				  $sql_ship = "UPDATE client_investment SET fund_date='$dt', payment_confirmed='yes' WHERE fund_id='$trans'";
                           $result = mysqli_query($cxn,$sql_ship)
                                   or die("$sql_ship" . mysqli_error($cxn));
               
			//updat user wallet 
			 $sql_ship = "UPDATE user_wallet SET account_balance=account_balance + '$amount', total_deposit=total_deposit + '$amount',
			 last_deposit='$amount', last_deposit_date='$dt' WHERE username='$payer'";
                           $result = mysqli_query($cxn,$sql_ship)
                                   or die("$sql_ship" . mysqli_error($cxn));
	

	 $message .= "User payment has been confirmed";
									$_SESSION['error']= $message;
								   header("location:investment.php");
								   exit(0);
	
	
	
	
}

if(isset($_POST['confirmpayment2'])){
	
	$trans = $_POST['trans'];
	$payer = $_POST['payer'];
	$amount = $_POST['amount'];
	$dt = date("Y-m-d H:i:s");
	$exp_date = date('Y-m-d H:i:s', strtotime($dt . '+7 days'));
		        $expected_amount = ($amount * 0.5) + $amount;
		       
	
	 		
				  $sql_ship = "UPDATE client_investment2 SET fund_date='$dt', 
            		                            expected_returns='$expected_amount', expected_date='$exp_date', payment_confirmed='yes', completed='yes' WHERE transid='$trans'";
                           $result = mysqli_query($cxn,$sql_ship)
                                   or die("$sql_ship" . mysqli_error($cxn));
				 mysqli_query($cxn, "INSERT INTO client_investment(payer, fund_amount, fund_date, expected_returns, expected_date, payment_confirmed, completed) 
				 VALUES('$payer','$amount', '$dt', '$expected_amount', '$exp_date', 'yes', 'no')");
			

	 $message .= "User payment has been confirmed";
									$_SESSION['error']= $message;
								   header("location:investment2.php");
								  exit(0);
	
	
	
	
}





?>