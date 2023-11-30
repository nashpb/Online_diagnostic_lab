<div class="side_dental">
    <script language="javascript" type="text/javascript">
        /* Visit http://www.yaldex.com/ for full source code
         and get more free JavaScript, CSS and DHTML scripts! */
        //< !--Begin
        var timerID = null;
        var timerRunning = false;
        function stopclock() {
            if (timerRunning)
                clearTimeout(timerID);
            timerRunning = false;
        }
        function showtime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds()
            var timeValue = "" + ((hours > 12) ? hours - 12 : hours)
            if (timeValue == "0")
                timeValue = 12;
            timeValue += ((minutes < 10) ? ":0" : ":") + minutes
            timeValue += ((seconds < 10) ? ":0" : ":") + seconds
            timeValue += (hours >= 12) ? " P.M." : " A.M."
            document.clock.face.value = timeValue;
            timerID = setTimeout("showtime()", 1000);
            timerRunning = true;
        }
        function startclock() {
            stopclock();
            showtime();
        }
        window.onload = startclock;

        document.addEventListener("DOMContentLoaded", function() {
            var url = window.location.pathname;
            var filename = url.substring(url.lastIndexOf('/') + 1);

            // Get all list items within the navigation
            var listItems = document.querySelectorAll('.nav-tabs li');

            // Loop through each list item and add the "active" class if the filename matches
            listItems.forEach(function(item) {
                var link = item.querySelector('a');
                var href = link.getAttribute('href');

                if (filename === href) {
                    item.classList.add('active');
                }
            });
        });
        // End -->
    </script>
    <p>
    <form name="clock">
        Time is:&nbsp;<input type="submit" class="trans" name="face" value="">
    </form>
</p>

<div class="alert alert-info">
    <i class="icon-calendar icon-large"></i>
    <?php
    $Today = date('y:m:d');
    $new = date(' d/m/Y', strtotime($Today));
    echo $new;
    ?>
</div>

<div class="navbar">
    <div class="navbar-inner">
        <div class="pull-right">
        </div>
    </div>
</div>
<ul class="nav nav-tabs nav-stacked">
    <li><a href="dasboard.php"><i class="fa fa-home fa-lg"></i>&nbsp;Home</a></li>
    <!-- Adjusted FontAwesome class names -->
    <li><a href="sched_today.php"><i class="fa fa-file-alt fa-lg"></i>&nbsp;Schedule for Today </a></li>
    <li><a href="schedule.php"><i class="fa fa-list fa-lg"></i>&nbsp;Schedule</a></li>
    <li><a href="service.php"><i class="fa fa-medkit fa-lg"></i>&nbsp;Service</a></li>
    <li><a href="user.php"><i class="fa fa-user fa-lg"></i>&nbsp;User Accounts</a></li>
    <li><a href="members.php"><i class="fa fa-user fa-lg"></i>&nbsp;Members</a></li>
    <li><a href="note.php"><i class="fa fa-file fa-lg"></i>&nbsp;Note</a></li>
</ul>
</div>
