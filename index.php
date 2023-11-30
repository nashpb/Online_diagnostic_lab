<?php
include('header.php');
include('navbar.php');
include('dbcon.php');
error_reporting(-1);
?>
<div class="container">
    <div class="margin-top">
        <div class="row">
            <div class="login_sign_up">
                <a rel="tooltip" data-placement="left" title="Click Here to Login" id="login" href="login.php"
                    class="btn btn-info btn-large"><i class="fas fa-sign-in-alt fa-lg"></i>&nbsp;Login</a>
                <p><a rel="tooltip" data-placement="bottom" title="Click Here to Sign UP" id="signup"
                        href="signup.php">Not a Member? Sign Up Now</a></p>
            </div>
            <div class="span12" style="margin-top: 20px;">
                <?php include('banner.php'); ?>
            </div>
            <div class="span12">
                <div class="caption_index">we provide the best quality service</div>
            </div>
            <div class="clearfix"></div>
            <div class="span12">
                <?php include('thumbnail.php'); ?>
            </div>
            <div class="span12">
                <?php include('content1.php'); ?>
            </div>
            <div class="span12">
                <?php include('content2.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>