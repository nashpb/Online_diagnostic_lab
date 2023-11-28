<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('dbcon.php'); 

?>
<div class="container">
	<div class="margin-top">
		<div class="row">
			<div class="span12">
				<img src="img/dr.jpg">


				<hr>
			</div>
			


			<?php
			if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data

    $email = $_GET['email']; // Set email variable
    $hash = $_GET['hash']; // Set hash variable
echo "<script>window.alert('$email')</script>";
    $search = mysqli_query($con,"SELECT email, hash, active FROM members WHERE email='$email' AND hash='$hash' AND active='0'") or die(mysql_error()); 
    $match  = mysqli_num_rows($search);

    if($match > 0){

        // We have a match, activate the account
    	mysqli_query($con,"UPDATE members SET active='1' WHERE email='$email' AND hash='$hash' AND active='0'") or die(mysql_error());
    	    	echo '<div class="span12">
    	<div class="alert alert-success">Account activated.You are being redirected</div>					
    	</div>
    	</div>


    	</div>
    	</div>
    	</div>';
?>
<script>setTimeout(function(){window.location.href='login.php'},3000);</script>
<?php
    }else{
    
        // No match -> invalid url or account has already been activated.
    	//header('index.php');
    	echo '<div class="span12">
    	<div class="alert alert-danger">Invalid URL or account has already been activated.You are being redirected</div>					
    	</div>
    	</div>
    	</div>
    	</div>
    	</div>';
    	//header( "refresh:5;url=index.php" );
    	?>
<script>setTimeout(function(){window.location.href='index.php'},3000);</script>
<?php
    }

}else{
    // Invalid approach
	
	echo '<div class="span12">
	<div class="alert alert-danger">Invalid approach.You are being redirected</div>					
	</div> </div>


	</div>
	</div>
	</div>';
	//header('Refresh: 5;url=index.php');
	   	?>
<script>setTimeout(function(){window.location.href='index.php'},3000);</script>
<?php
}
?>
<?php  include('footer.php');   ?>