<?php include('header.php');
include('navbar.php');
?>
<!-- -->

<!-- -->
<?php include('dbcon.php'); ?>
<div class="container">
    <div class="margin-top">
        <div class="login_sign_up">
            <a rel="tooltip" data-placement="left" title="Click Here to Login" id="login" href="login.php"
                class="btn btn-info btn-large"><i class="fas fa-sign-in-alt fa-lg"></i>&nbsp;Login</a>
            <p><a rel="tooltip" data-placement="bottom" title="Click Here to Sign UP" id="signup" href="signup.php">Not
                    a Member? Sign Up Now</a></p>
        </div>
        <div class="row">
            <div class="span12">
                <!--- login -->
                <?php include('contactus_content.php'); ?>
                <!-- end login -->
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>