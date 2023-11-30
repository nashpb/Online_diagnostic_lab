<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "database");

                    // Check connection
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $query = mysqli_query($con, "select * from members where member_id='$session_id'");
                    $row = mysqli_fetch_array($query, MYSQLI_BOTH);
                    ?>
                    <li><a href="dasboard.php" class=""><i class="fas fa-home fa-lg"></i></a></li>
                    <li class="active"><a href="dasboard.php" class="">Welcome:&nbsp;
                            <i class="fas fa-user fa-lg"></i>&nbsp;
                            <?php echo $row['firstname'] . " " . $row['lastname']; ?>
                        </a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fas fa-cog fa-lg"></i>&nbsp;Account
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="edit_info.php"><i class="icon-pencil icon-large"></i>&nbsp;Edit Info</a></li>
                            <li><a href="myschedule.php"><i class="fa fa-file fa-lg"></i>&nbsp;My Schedule</a>
                            </li>
                            <li><a href="logout.php"><i class="fas fa-sign-out-alt fa-lg"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>


            </div>
        </div>
    </div>
</div>