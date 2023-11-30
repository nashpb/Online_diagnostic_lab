<?php include('dbcon.php'); ?>

<div class="alert alert-info">Please Enter The Details Below</div>
<div class="lgoin_terry">
	<form method="post" class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputPassword">Username</label>
			<div class="controls">
				<input type="text" name="username" placeholder="Username" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
				<input type="password" name="password" placeholder="Password" required>
			</div>
		</div>
		<div class="control-group">

			<div class="controls">
				<div class="please">Please fill in the fields</div>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button name="submit1" type="submit" class="btn btn-info"><i
						class="fas fa-sign-in-alt fa-lg"></i>&nbsp;Login</button>
			</div>
		</div>

		<?php
		if (isset($_POST['submit1'])) {

			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = "SELECT * FROM members WHERE username='$username' AND password='$password'";
			$result = mysqli_query($con, $query) or die(mysql_error());
			$num_row = mysqli_num_rows($result);
			$row = mysqli_fetch_array($result, MYSQLI_BOTH);
			if ($num_row > 0) {
				$_SESSION['id'] = $row['member_id']; ?>
				<script>
					window.location = "dasboard.php";
				</script>
			<?php } else { ?>
				<div class="alert alert-danger"><strong>Login Error!</strong>&nbsp;Please check your Username and Password or
					Verify email</div>
			<?php
			}
		}
		?>
	</form>
</div>