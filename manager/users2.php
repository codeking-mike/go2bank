<?php
 include("auth.php");
 
 
if(isset($_GET['del'])){
    
    $del = $_GET['del'];
    mysqli_query($cxn, "DELETE FROM bank_users WHERE user_id = '$del'");
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
  #myInput {
  background-image: url('seachicon2.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}
#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
</style>
<script type="text/javascript">
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
 

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
                   
                   <a href="users2.php"> 
                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="background:#333 !important">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center" style="color:#f98604 !important">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers" style="color:#f9e845 !important">
                                            <p>ALL USERS</p>
                                            <?php
                                             
                                             $sql = "SELECT * FROM bank_users WHERE is_admin='no'";
                                             $result = mysqli_query($cxn, $sql);
                                             if(mysqli_num_rows($result) > 0){
                                                 $num = mysqli_num_rows($result);
                                                 echo $num;
                                                 
                                             }else{
                                                 echo '0';
                                             }
                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="footer">
                                    <hr />
                                    <div class="stats" style="color:#f98604 !important">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </a>
                   
            </div>
            <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="background:#101 !important">
                            <div class="header">
                                <h4 class="title">ALL USERS</h4>
                                <p class="category"></p>
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Users by name.." style='color:#000'>
                            </div>
                            <div class="content table-responsive table-full-width" style="overflow-x:scroll !important;overflow-y:scroll !important;height:500px;">
                                <table id="myTable" class="table table-striped" style="overflow-x:scroll !important;overflow-y:scroll !important">
                                    <tr>
                                        <th>Full Name</th>
                                    
                                    	<th>Password</th>
                    
                                    	<th>Action</th>
                                    	
                                    </tr>
                                    <tbody>
                                        <?php
                                             $sql = "SELECT * FROM bank_users WHERE is_admin='no'";
                                             $result = mysqli_query($cxn,$sql);
											 
                                             while($row = mysqli_fetch_assoc($result)){
                                                 extract($row);
                                             
                     
                                         ?>
                                        <tr>
                                        	<td><?php echo $firstname. ' '. $lastname ?></td>
                                            <td><?php echo $user_password ?></td>
                                        	
                                        	<td><a href="editusers.php?ed=<?php echo $user_id ?>" style='text-decoration:none;color:white;background:#0000cc;padding:5px'>EDIT DETAILS</a>
											
											<a href="users2.php?del=<?php echo $user_id ?>" style='text-decoration:none;color:white;background:#990000;padding:5px'>DELETE USER</a>
											
									 

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
                    &copy; <script>document.write(new Date().getFullYear())</script> Rubicon Currency</a>
                </div>
            </div>
        </footer>

    </div>
</div>
<!-- view payment details of user-->


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
