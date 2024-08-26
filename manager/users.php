<?php
 include("functions/auth.php");
 
 
if(isset($_GET['del'])){
    
    $del = $_GET['del'];
    mysqli_query($cxn, "DELETE FROM lms_users_db WHERE id = '$del'");
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin :: Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
<?php
    function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<style>
  .modal-body table{
      position:relative;
      width:100%;
      padding:2px;
  }
  .modal-body tr{
      width:100%;
      border:1px solid #888;
  }
  .modal-body tr{
      padding:2px;
      border-left:1px solid #888;
  }
</style>

 

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<?php
		include("head.php");
		
		?>

        <?php
					if(isset($_SESSION['error'])){
						$msg=$_SESSION['error'];
						phpAlert($msg);
						unset($_SESSION['error']);
					}
					
				?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                   
                    
                    
                    
            </div>
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">NOT SUBSCRIBED  USERS</h4>
                                <p class="category">This set of users have not made payment</p>
                            </div>
                            <div class="content table-responsive table-full-width" style="overflow-x:scroll !important;overflow-y:scroll !important;height:500px;">
                                <table class="table table-striped" style="overflow-x:scroll !important;overflow-y:scroll !important">
                                    <thead>
                                    
                                    	<th>Userame</th>
                                    	<th>Activate</th>
                                    	<th>Delete</th>
                                    	
                                    </thead>
                                    <tbody>
                                        <?php
                                             $sql = "SELECT * FROM lms_users_db WHERE admin='no' AND subscribed='no'";
                                             $result = mysqli_query($cxn,$sql);
                                             while($row = mysqli_fetch_assoc($result)){
                                                 extract($row);
                                             
                     
                                         ?>
                                        <tr>
                                        	
                                        	<td><?php echo $first_name ?>  <?php echo $last_name ?></td>
                                        	<td>
											<a href="activateusers.php?id=<?php echo $id ?>" style='text-decoration:none;color:white;background:#00cccc;padding:5px'>ACTIVATE</a></td>
											<td><a href="users.php?del=<?php echo $id ?>" style='text-decoration:none;color:white;background:#990000;padding:5px'>DELETE</a></td>
									
									    	
                                        	
                                        </tr>
                                        <?php
                                             }
                                             mysqli_close($cxn);
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
           
        </div>

 
        <footer class="footer">
            <div class="container-fluid">
                
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, Automechit</a>
                </div>
            </div>
        </footer>

    </div>
</div>
<!-- view payment details of user-->
<?php
 if(isset($_GET['ed'])){
	                   				   
?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background:#f90;padding:10px">
          <h5 class="modal-title" style="color:#fff">VIEW POP & ACTIVATE USER</h5>
        </div>
                                                <div class="modal-body" >
                                                  <form  method="post" action="activateusers.php">
												   <?php
												    $ed = $_GET['ed'];
													 $qry2 = "SELECT * FROM guaranty_db_user WHERE userid='$ed'";
													 $fm = mysqli_query($cxn, $qry2);
													 while($rw = mysqli_fetch_assoc($fm)){
														 extract($rw);
													 } 
													 ?>
												   <label>Username:</label>
												   <input type="text" value="<?php echo $username ?>" name="username" /><br />
												   <input type="hidden" value="<?php echo $userid ?>" name="userid" /><br />
												   <label>POP:</label><br />
												   <img src="../user/act_pop/<?php echo $pop ?>" width="200" height="250" /><br />
												   <hr />
												   
												   <input type="submit" name="activate" value="ACTIVATE USER" style="padding: 15px 20px;background:#f90;color:#fff" />
												  </form>
                                                </div>
                                                <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background:#097;color:#fff;padding:10px">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <?php
 }

 ?>
  


<!-- End view payment details -->
<!-- view payment details of user-->
<?php
 if(isset($_GET['rcv'])){
	                   				   
?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background:#f90;padding:10px">
          <h5 class="modal-title" style="color:#fff">ADD RECEIVER</h5>
        </div>
                                                <div class="modal-body">
                                                  <form  method="post" action="addreceiver.php">
												   
												   <label>Username:</label>
												   <input type="text" name="username" /><br />
												   
												   
												   <label>Amount:</label>
												   <input type="text" name="amount"  /><br />
												   <hr />
												   <input type="submit" name="update" value="ADD RECEIVER" style="padding: 15px 20px;background:#f90;color:#fff" />
												  </form>
                                                </div>
                                                <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background:#097;color:#fff;padding:10px">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <?php
 }
 ?>
  


<!-- End view payment details -->
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	
	<script>
$(document).ready(function(){
        $("#myModal").modal({backdrop: false});
});
</script>
	
</html>
