<?php

session_start();

include("db_connect.php");

if(isset($_POST['login'])){
            $email = stripcslashes(strip_tags($_POST['email']));
	        $pass = stripcslashes(strip_tags($_POST['password']));
            $sidi = session_id();
            
            $prep_stmt = "SELECT user_id, user_password, is_admin, login_id FROM bank_users WHERE user_email = ? LIMIT 1";
            $stmt = $cxn->prepare($prep_stmt);
            if ($stmt) {
                 $stmt->bind_param('s', $email);
                 $stmt->execute();
                 $stmt->store_result();
 
                    if ($stmt->num_rows == 1) {
                    // A user with this details exists
                        $stmt ->bind_result($id, $password, $admin, $logincode);
                        $stmt->fetch();
                        //if password is correct

                        echo $password; echo $logincode;
                    

                    if($pass == $password){
									 
									
                        if($admin=='yes'){

                          $_SESSION['admin'] = $id;
                          header("location:./manager/");
                          $stmt->close();   

                        }else{

                              $_SESSION['user'] = $id;
                              $_SESSION['code'] = $logincode;
                              header("location:verify.php");
                              $stmt->close();   
                          
                        } 

					}else{
										     $message .= 'Incorrect Password. Enter your correct password';
                                        $_SESSION['error2'] = $message;                 
                                        header("location:index.php");
						}  
              }else{
                                   $message .= 'This user doesnt exist! Please make sure to enter your correct email and password';
                                    $_SESSION['error'] = $message;                 
                                    header("location:index.php");
                                    $stmt->close();
                                    exit(0);
                    }
          }  
}

if(isset($_POST['reset'])){
     
     $email = stripcslashes(strip_tags($_POST['email'])); 
     $sess = session_id();
     
     $prep_stmt = "SELECT user_id  FROM argent_client_db WHERE user_email = ? LIMIT 1";
            $stmt = $cxn->prepare($prep_stmt);
            if ($stmt) {
                 $stmt->bind_param('s', $email);
                 $stmt->execute();
                 $stmt->store_result();
 
                    if ($stmt->num_rows == 1) {
                        $stmt ->bind_result($id);
                        $stmt->fetch();
                      //send password reset link  
                      
                    $sql_ship = "INSERT INTO password_reset(pemail, psession) VALUES('$email','$sess')";
                    $result = mysqli_query($cxn,$sql_ship)
                       or die("$sql_ship" . mysqli_error($cxn));

                        // Subject of the email
                        $subject = "Password Reset";
                        
                        // Message body
                        $message = "Hello,\r\n\r\nYou requested a password reset, if this was you kindly click on the following link to reset your password:\r\n\r\n";
                        $message .= "<a href='https://www.dynamicassets.site/account/reset.php?id=$id&sess=$sess'>Reset Password</a>";
                        
                        // Additional headers
                        $headers = "From: noreply@dynamicassets.site\r\n";
                        $headers .= "Content-type: text/html\r\n"; // Set the content type to HTML
                        
                        // Check if the mail is sent successfully
                        mail($email, $subject, $message, $headers);
                        $msg .= 'A password reset link has been sent to your email. Kindly check your INBOX or SPAM folder';
                                    $_SESSION['error'] = $msg;                 
                                    header("location:forgot.php");
                                    $stmt->close();
                                    exit(0);   
                        
                    }else{
                        
                         $message .= 'Email not found! Kindly check and try again';
                                    $_SESSION['error'] = $message;                 
                                    header("location:forgot.php");
                                    
                                    exit(0);   
                        
                    }
                    
            }
     
     
    
}

if(isset($_POST['verify'])){
     
     $d1 = $_POST['digit1']; 
     $d2 = $_POST['digit2']; 
     $d3 = $_POST['digit3']; 
     $d4 = $_POST['digit4']; 
     $d5 = $_POST['digit5']; 
     $d6 = $_POST['digit6']; 
     $code = $_POST['code']; 
     $user = $_POST['user'];

     $usercode = $d1. $d2. $d3. $d4. $d5. $d6;

     if($code == $usercode){
          $_SESSION['user'] = $user;
          header('location:dashboard.php');
     }else{

          
          $_SESSION['error'] = "Incorrect verification code. Kindly check the code and try again!";
          header('location:verify.php'); 
     }                             
    
}


    
mysqli_close($cxn);        
        
       

?>