<?php
include('dbcon.php');
$get_id = $_GET['id'];


mysqli_query($con,"update schedule set status = 'Done' where id = '$get_id' ")or die(mysql_error());
header('location:schedule.php');
?>
