<?php
include('dbcon.php');

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$middlename = $_POST['middlename'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact_no = $_POST['contact_no'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($cpassword != $password) {
		$a = "Password do not Match";
	} else {
		$a = "";
	}
	$query = mysqli_query($con, "SELECT * FROM members where username='$username'");

	/*echo "<script>window.alert($username)</script>";*/
	if (mysqli_num_rows($query) != 0) {
		$b = "Username exists";
	} else {
		$b = "";
	}

}
?>
<form method="post">
	<div class="span5">
		<div class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Name</label>
				<div class="controls">
					<input type="text" name="firstname" value="<?php if (isset($_POST['submit'])) {
						echo $firstname;
					} ?>" placeholder="Firtname" required>
					<input type="text" name="lastname" value="<?php if (isset($_POST['submit'])) {
						echo $lastname;
					} ?>" placeholder="Lastname" required>
					<input type="text" name="middlename" value="<?php if (isset($_POST['submit'])) {
						echo $middlename;
					} ?>" placeholder="Middlename" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputPassword">Gender</label>
				<div class="controls">
					<select name="gender" required>
						<option>
							<?php if (isset($_POST['submit'])) {
								echo $gender;
							} ?>
						</option>
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Age</label>
				<div class="controls">
					<input name="age" class="span1" type="number" value="<?php if (isset($_POST['submit'])) {
						echo $age;
					} ?>" placeholder="Age" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputPassword">Username</label>
				<div class="controls">
					<input type="text" name="username" value="<?php if (isset($_POST['submit'])) {
						echo $username;
					} ?>" placeholder="Username" required>
					<?php if (isset($_POST['submit'])) { ?> <span class="label label-important">
							<?php echo $b; ?>
						</span>
					<?php } ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
					<input type="password" name="password" value="<?php if (isset($_POST['submit'])) {
						echo $password;
					} ?>" placeholder="Password" required>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button name="submit" type="submit" class="btn btn-info"><i
							class="fas fa-sign-in-alt fa-lg"></i>&nbsp;Sign Up</button>
				</div>
			</div>
		</div>
	</div>


	<div class="span6">


		<div class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="inputPassword">Address</label>
				<div class="controls">
					<input type="text" name="address" value="<?php if (isset($_POST['submit'])) {
						echo $address;
					} ?>" placeholder="Address" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Contact No (10 Digits)</label>
				<div class="controls">
					<input type="text" pattern='^\+?\d{10}' name="contact_no" value="<?php if (isset($_POST['submit'])) {
						echo $contact_no;
					} ?>" placeholder="Contact No" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputPassword">Email Address</label>
				<div class="controls">
					<input name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="text" value="<?php if (isset($_POST['submit'])) {
						echo $email;
					} ?>" placeholder="Email Address" required>
				</div>
			</div>




			<div class="control-group">
				<label class="control-label" for="inputPassword">Confirm Password</label>
				<div class="controls">
					<input type="password" name="cpassword" value="<?php if (isset($_POST['submit'])) {
						echo $cpassword;
					} ?>" placeholder="Confirm Password" required>
					<?php if (isset($_POST['submit'])) { ?> <span class="label label-important">
							<?php echo $a; ?>
						</span>
					<?php } ?>
				</div>
			</div>
			<?php

			if (isset($_POST['submit'])) {
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$middlename = $_POST['middlename'];
				$age = $_POST['age'];
				$gender = $_POST['gender'];
				$address = $_POST['address'];
				$email = $_POST['email'];
				$contact_no = $_POST['contact_no'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				$hash = md5(rand(0, 1000));
				/*if( $password != $cpassword)
									 {
										 ?>
										 <span class="label label-important">Password Do not match</span>
										 <?php
									 }else */

				if ($password == $cpassword) { ?>
					<?php
					$result = mysqli_query($con, "INSERT INTO `members` (`firstname`, `lastname`, `middlename`, `address`, `email`, `contact_no`, `age`, `gender`, `username`, `password`) VALUES ('$firstname', '$lastname', '$middlename', '$address', '$email', '$contact_no', '$age', '$gender', '$username', '$password') ");
					echo "<script>window.location.href='success.php'</script>";
					// window.location='success.php';
					?>

					<?php
				} else {
					echo mysql_error($con);
				}
			}

			?>



		</div>
	</div>

</form>