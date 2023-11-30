<?php
include('dbcon.php');
$id=$_POST['id'];
mysqli_query($con,"delete from members where member_id='$id'") or die(mysql_error());
mysqli_query($con,"delete from schedule where member_id='$id'") or die(mysql_error());
?>
