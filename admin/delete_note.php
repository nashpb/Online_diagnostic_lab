<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysqli_query($con,"delete from note where note_id = '$get_id' ")or die(mysql_error());
header('location:note.php');
?>
