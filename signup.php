<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('navbar.php'); ?>
<div class="container">
    <div class="margin-top">
        <div class="row">
            <div class="span12">
                <img src="img/dr.jpg">

                <div class="login_sign_up">
                    <a rel="tooltip" data-placement="left" title="Click Here to Login" id="login" href="login.php"
                        class="btn btn-info btn-large"><i class="fas fa-sign-in-alt fa-lg"></i>&nbsp;Login</a>
                </div>
                <hr>
            </div>
            <div class="span12">


                <div class="signup_container">
                    <?php include('signup_form.php'); ?>
                </div>

            </div>


        </div>
    </div>
</div>
<?php include('footer.php') ?>