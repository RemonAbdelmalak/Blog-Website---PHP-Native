<?php

 $nm =  $_GET['id'];

require_once("db.php");
mysqli_query($con,"delete from `loginsystem`.`categories` where `id`='$nm'");

header("location:categoriesadmin.php");
?>
