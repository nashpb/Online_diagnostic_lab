<?php
include('dbcon.php');
$id = $_GET['id'];
echo " <script>window.alert( <?php echo $get_id; ?>)</script> ";
mysqli_query($con,"delete from service where service_id='$id'");
header('location:service.php');
?>
