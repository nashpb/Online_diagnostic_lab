<?php
error_reporting(0);
?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var url = window.location.pathname;
        var filename = url.substring(url.lastIndexOf('/') + 1);

        // Get all list items within the navigation
        var listItems = document.querySelectorAll('.nav li');

        // Loop through each list item and add the "active" class if the filename matches
        listItems.forEach(function (item) {
            var link = item.querySelector('a');
            var href = link.getAttribute('href');

            if (filename === href) {
                item.classList.add('active');
            }
        });
    });
</script>
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
                    <li><a rel="tooltip" data-placement="bottom" title="Home" id="home" href="index.php" class=""><i
                                class="fas fa-home fa-lg"></i>&nbsp;Home</a></li>
                    <li><a rel="tooltip" data-placement="bottom" title="Services" id="services" href="services.php"
                            class=""><i class="fas fa-list fa-lg"></i>&nbsp;Services</a></li>
                    <li><a rel="tooltip" data-placement="bottom" title="About Us" id="aboutus" href="about.php"
                            class=""><i class="fas fa-info-circle fa-lg"></i>&nbsp;About Us</a></li>
                    <li><a rel="tooltip" data-placement="bottom" title="Contact Us" id="contactus" href="contact_us.php"
                            class=""><i class="fas fa-phone-alt fa-lg"></i>&nbsp;Contact US</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>