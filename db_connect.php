<?php
    $host = "localhost";
     $user1="bankuser";
     $pass1="@Creative123";
     $dbname = "bank_db";
      $cxn = mysqli_connect($host,$user1,$pass1,$dbname)
                   or die ("couldnt connect to server");
?>