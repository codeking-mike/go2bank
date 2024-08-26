<?php
 include("functions/auth.php");
 if(isset($_GET['del'])){
    
    $del = $_GET['del'];
    mysqli_query($cxn, "DELETE FROM central_account WHERE id = '$del'");
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
                    <div class="card">
                            <div class="header">
                                <h4 class="title">Add Account</h4>
								<p>Add payment accounts to receive payment from USERS</p>
                                
                            </div>
                            <div class="content">
                                <form action="processupdate.php" method="post"  enctype="multipart/form-data">
								<h3>Bitcoin Wallet Address</h3>
								<div class="row">
								
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label>Wallet Address</label>
												
                                                <input type="text" name="btc_address" class="form-control border-input" placeholder=""  >
												
										
												
												
                                            </div>
                                        </div> 
										 <div class="col-md-12">
												<div class="form-group">
											  <label>Upload QR code</label>
											  <input type="file" name="pop" class="file-upload-default">
                      
										</div>
										 </div>
                   
								     </div>
									 <div class="text-center">
                                        <button type="submit" name="btc_account" class="btn btn-info btn-fill btn-wd" style="background:#000">CREATE ACCOUNT</button>
                                    </div>
                                    <div class="clearfix"></div>
								</form>
								<hr >
								 <form action="processupdate.php" method="post"  enctype="multipart/form-data">
								<h3>Ethereum Address</h3>
								<div class="row">
								
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label>Wallet Address</label>
												
                                                <input type="text" name="eth_address" class="form-control border-input" placeholder=""  >
												
										
												
												
                                            </div>
                                        </div> 
										 <div class="col-md-12">
												<div class="form-group">
											  <label>Upload QR code</label>
											  <input type="file" name="pop" class="file-upload-default">
                      
										</div>
										 </div>
                   
								     </div>
									 <div class="text-center">
                                        <button type="submit" name="eth_account" class="btn btn-info btn-fill btn-wd" style="background:#000">CREATE ACCOUNT</button>
                                    </div>
                                    <div class="clearfix"></div>
								</form>
								<hr >
								 <form action="processupdate.php" method="post"  enctype="multipart/form-data">
								<h3>Perfect Money</h3>
								<div class="row">
								
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label>Account Number</label>
												
                                                <input type="text" name="pfm_number" class="form-control border-input" placeholder=""  >
												
										
												
												
                                            </div>
                                        </div> 
										 <div class="col-md-12">
												<div class="form-group">
											  <label>Other Details</label>
											  <input type="text" name="others" class="form-control border-input" >
                      
										</div>
										 </div>
                   
								     </div>
									 <div class="text-center">
                                        <button type="submit" name="pfm_account" class="btn btn-info btn-fill btn-wd" style="background:#000">CREATE ACCOUNT</button>
                                    </div>
                                    <div class="clearfix"></div>
								</form>
								 
                            </div>
                        </div>
                   


                </div>
				 <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Account</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width" style="overflow-x:scroll !important;overflow-y:scroll !important;height:500px;">
                                <table class="table table-striped" style="overflow-x:scroll !important;overflow-y:scroll !important">
                                    <thead>
                                        <th>SN</th>
                                    	<th>Account Name</th>
                                    	
                                    	<th>Action</th>
                                    	
                                    </thead>
                                    <tbody>
                                        <?php
                                             $sql = "SELECT * FROM central_account";
                                             $result = mysqli_query($cxn,$sql);
											 $n = 1;
                                             while($row = mysqli_fetch_assoc($result)){
                                                 extract($row);
                                             
                     
                                         ?>
                                        <tr>
                                        	<td><?php echo $n ?></td>
                                        	<td><?php echo $wallet_address ?></td>
                                        	
                                        	<td><a href="editaccount.php?ed=<?php echo $id ?>" style='text-decoration:none;color:white;background:#cccc00;padding:5px'>EDIT</a>
											<a href="createaccount.php?del=<?php echo $id ?>" style='text-decoration:none;color:white;background:#990000;padding:5px'>DELETE</a>
									
									
                                        	
                                        	
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
                    &copy; <script>document.write(new Date().getFullYear())</script> Rubicon Currency</a>
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
