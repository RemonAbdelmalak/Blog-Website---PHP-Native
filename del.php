<?php

 $nm =  $_GET['a'];

require_once("db.php");
mysqli_query($con,"delete from `loginsystem`.`users` where `username`='$nm'");

header("location:dashboard.php");
?>
