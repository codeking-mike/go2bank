<?php
//include important bfiles
session_start();
include("functions/auth.php");
//include("../mailer/PHPMailerAutoload.php");


function clean($str){
	return strip_tags(trim($str));        
}
// check if the form was submitted
if(isset($_POST['create'])){
	
          
/* Process data when all fields are correct */

        $accname = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
		$phone = strip_tags($_POST['phone']);
		$username = strip_tags($_POST['username']);
		//use password encryption to encrypt the password
		$pass = strip_tags($_POST['password']);
        //$pass = password_hash($p, PASSWORD_DEFAULT);
        $admin = $_POST['admin'];
         $bankname = strip_tags($_POST['bank']);
		$accno = strip_tags($_POST['accno']);
		
        $dt = date('Y-m-d H:i:s');
        $status='yes';
		
            // check if a user with the email address exists       
            $prep_stmt = "SELECT userid FROM guaranty_db_user WHERE user_email = ? LIMIT 1";
            $stmt = $cxn->prepare($prep_stmt);
            if ($stmt) {
                 $stmt->bind_param('s', $email);
                $stmt->execute();
                $stmt->store_result();
		if ($stmt->num_rows == 1) {
		 // A user with this email address already exists
		$message .= 'A user with this email address already exists';
		$_SESSION['error'] = $message;
                        $stmt->close();
                	header("location:admin.php");
		exit(0);
		        
		}
            }

            // check existing username
	$prep_stmt = "SELECT userid FROM guaranty_db_user WHERE username = ? LIMIT 1";
	$stmt = $cxn->prepare($prep_stmt);
 
		if ($stmt) {
		$stmt->bind_param('s', $username);
		$stmt->execute();
		$stmt->store_result();
 
			if ($stmt->num_rows == 1) {
			// A user with this username already exists
			$message .= 'A user with this username already exists';
			$_SESSION['error'] = $message;
			$stmt->close();  
			header("location:admin.php");
			exit(0);
			
			}
		}
	
            
            // Insert the new user into the database
	      $sql_ship = "INSERT INTO guaranty_db_user(user_email, user_phone, username, user_password, bank, account_name, account_no, date_registered, block, admin)
										VALUES('$email', '$phone', '$username','$pass', '$bankname', '$accname', '$accno', '$dt', 'no', '$admin')";
               $result = mysqli_query($cxn,$sql_ship)
                       or die("$sql_ship" . mysqli_error($cxn));
              
	   if($result){
		   
	                  
		
 $message .= 'Your account creation was successful.';
			$_SESSION['error'] = $message;
		   header("Location:admin.php");
      
	
        
 } 
}
mysqli_close($cxn);
?>