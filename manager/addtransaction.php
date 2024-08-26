<?php
 include("auth.php");
 if(isset($_GET['del'])){
    
    $del = $_GET['del'];
    mysqli_query($cxn, "DELETE FROM transactions WHERE tid = '$del'");
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
                    <div class="card" style="background:#101 !important">
                            <div class="header">
                                <h4 class="title" style="color:#fff !important">Add Transaction</h4>
                                
                            </div>
                            <div class="content">
                                <form method="post" action="processupdate.php">
                                <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Select User</label>
                                                <select name="user" class="form-control form-select border-input">
                                        <?php
                                                $sql = "SELECT * FROM bank_users WHERE is_admin='no'";
                                             $result = mysqli_query($cxn,$sql);
											 
                                             while($row = mysqli_fetch_assoc($result)){
                                                 extract($row);
                                        ?>
                                                    <option value="<?php echo $user_id ?>"><?php echo $firstname. ' '. $lastname ?></option>
                                        <?php } ?>	   
                                                </select>
											
                                            </div>
                                        </div>
                                    </div>
								  <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Transaction Type</label>
                                                <select name="type" class="form-control form-select border-input">
                                                    <option>Debit</option>
                                                    <option>Deposit</option>
                                                </select>
												
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Method</label>
                                                <select name="method" class="form-control form-select border-input">
                                                    <option>purchase</option>
                                                    <option>payment</option>
                                                </select>
												
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="text" name="amount" class="form-control border-input" placeholder="e.g 500" >
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
										<div class="col-md-5">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="desc" class="form-control border-input" placeholder="Description of transaction" >
									
                                            </div>
                                        </div>
									</div>
                                    <div class="row">
										<div class="col-md-5">
                                            <div class="form-group">
                                                <label>Transaction Date</label>
                                                <input type="date" name="date" class="form-control border-input" placeholder="Date of transaction" >
									
                                            </div>
                                        </div>
									</div>
                                    
									
									

								
                    				
                                    
                                    <div class="text-center">
                                        <button type="submit" name="transaction" class="btn btn-info btn-fill btn-wd" style="background:#000">CREATE TRANSACTION</button>
                                    </div>
                                    <div class="clearfix"></div>
                                
                                </form>
                            </div>
                        </div>
                    <div class="col-lg-8 col-md-7">
                       
                    </div>


                </div>
				
            </div>
        </div>

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
