<?php

 $nm =  $_GET['id'];

require_once("db.php");
mysqli_query($con,"delete from `loginsystem`.`users` where `id`='$nm'");

header("location:dashboardadmin.php");
?>
