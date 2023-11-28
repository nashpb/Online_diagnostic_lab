<?php
include('dbcon.php');
$id=$_POST['id'];
mysqli_query($con,"delete from users where user_id='$id'") or die(mysql_error());
?>
