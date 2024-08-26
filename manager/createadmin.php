<?php
 include("functions/auth.php");
 if(isset($_GET['del'])){
    
    $del = $_GET['del'];
    mysqli_query($cxn, "DELETE FROM argent_client_db WHERE user_id = '$del'");
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
                    <div class="card" style="background:#333 !important">
                            <div class="header">
                                <h4 class="title" style="color:#fff !important">Create Admin</h4>
                                
                            </div>
                            <div class="content">
                                <form method="post" action="processupdate.php">
								<div class="row">
								
										<div class="col-md-5">
                                            <div class="form-group">
                                                <label>Full Name</label>
												
                                                <input type="text" name="fullname" class="form-control border-input" placeholder=""  >
												
										
												
												
                                            </div>
                                        </div> 
								</div>
								
								<div class="row">
								
										<div class="col-md-5">
                                            <div class="form-group">
                                                <label>Username</label>
												
                                                <input type="text" name="username" class="form-control border-input" placeholder=""  >
												
										
												
												
                                            </div>
                                        </div> 
								</div>
								<div class="row">
								
										<div class="col-md-5">
                                            <div class="form-group">
                                                <label>Password</label>
												
                                                <input type="password" name="pass" class="form-control border-input" placeholder=""  >
												
										
												
												
                                            </div>
                                        </div> 
								</div>
								
								
							
								
                            
							 
                            								
                                    
                                    <div class="text-center">
                                        <button type="submit" name="create_admin" class="btn btn-info btn-fill btn-wd" style="background:#000">CREATE ADMIN</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    <div class="col-lg-8 col-md-7">
                       
                    </div>


                </div>
				 <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" style="color:#fff !important">All Admin</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width" style="overflow-x:scroll !important;overflow-y:scroll !important;height:500px;">
                                <table class="table table-striped" style="overflow-x:scroll !important;overflow-y:scroll !important">
                                    <thead>
                                        <th>SN</th>
                                    	<th>Userame</th>
                                    	
                                    	<th>Action</th>
                                    	
                                    </thead>
                                    <tbody>
                                        <?php
                                             $sql = "SELECT * FROM argent_client_db WHERE admin='yes'";
                                             $result = mysqli_query($cxn,$sql);
											 $n = 1;
                                             while($row = mysqli_fetch_assoc($result)){
                                                 extract($row);
                                             
                     
                                         ?>
                                        <tr>
                                        	<td><?php echo $n ?></td>
                                        	<td><?php echo $username ?></td>
                                        	
                                        	<td><a href="editadmin.php?ed=<?php echo $user_id ?>" style='text-decoration:none;color:white;background:#cccc00;padding:5px'>EDIT</a>
											<a href="createadmin.php?del=<?php echo $user_id ?>" style='text-decoration:none;color:white;background:#990000;padding:5px'>DELETE</a>
									
									
                                        	
                                        	
                                        </tr>
                                        <?php
										$n++;
                                             }
                                             mysqli_close($cxn);
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
           
        </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Ameritrade.biz</a>
                </div>
            </div>
        </footer>

    </div>
</div>


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

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
<?php
mysqli_close($cxn);

?>
