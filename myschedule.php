<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('navbar_dasboard.php'); ?>
<div class="container">
    <div class="margin-top">
        <div class="row">

            <div class="span3">
                <p><strong>Today is:</strong></p>
                <div class="alert alert-success">
                    <i class="icon-calendar icon-large"></i>
                    <?php
                    $Today = date('d:m:y');
                    $new = date('l, F d, Y', strtotime($Today));
                    echo $new;
                    ?>
                </div>		
                <div class="alert alert-info">Time Guide for Each Number</div>
                <p>Number 1  - 9:30 - 10:00</p>
                <p>Number 2  - 10:00 - 10:30</p>
                <p>Number 3  - 10:30 - 11:00</p>
                <p>Number 4  - 11:30 - 12:00</p>
                <p>Number 5  - 12:30 - 1:00</p>

                <p>Number 6  - 3:00 - 3:30</p>
                <p>Number 7  - 3:30 - 4:00</p>
                <p>Number 8  - 4:30 - 5:00</p>


                <div class="alert alert-info">Office Hours</div>
                <p>Monday - Friday (9:00 to 18:00 )</p>
                <p>Saturday(half day)</p>
                <p>349 Kopanong Section</p>
                <p>Thembisa</p>




                <div class="alert alert-info">Testimonial</div>
                <div class="testimonial_div">
                    <p>
                        I was delighted with the treatment. Despite me being a somewhat difficult patient Dr Matsatsi Maoti was really gentle, patient and understanding.
                        The treatment was explained precisely to me and the price was quoted right at the beginning which is exactly what the price was at the end.
                        The transformation to my life in general has been amazing. 
                        I am extremely happy with the quality of the treatment.
                    </p>
                </div>		
            </div>
            <div class="span6">
                <img src="img/dr.jpg">
                <br>
                <br>

                <div class="alert alert-info">My Schedule</div>

                <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">

                    <thead>
                        <tr>
                            <th>My Number</th>
                            <th>Date</th>                                 
                            <th>Service</th>                                 
                            <th>Price</th>                                 

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $i=1;
                        $user_query = mysqli_query($con,"select * from schedule where member_id = '$session_id' ")or die(mysql_error());
                        while ($row = mysqli_fetch_array($user_query)) {
                            $id = $row['id'];
                            $member_id = $row['member_id'];
                            $service_id = $row['service_id'];
                            /* member query  */
                            $member_query = mysqli_query($con,"select * from members where member_id = ' $member_id'")or die(mysql_error());
                            $member_row = mysqli_fetch_array($member_query);
                            /* service query  */
                            $service_query = mysqli_query($con,"select * from service where service_id = '$service_id' ")or die(mysql_error());
                            $service_row = mysqli_fetch_array($service_query);
                            ?>

                            <tr class="del<?php echo $id ?>">
                                <td width="100"><?php echo $i; ?></td>
                                <td><?php echo $row['date']; ?></td> 
                                <td><?php echo $service_row['service_offer']; ?></td> 
                                <td><?php echo $row['price']; ?></td> 


                            </tr>
                            <?php 
                            $i++;} ?>

                        </tbody>
                    </table>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="back" class="btn btn-success" onclick="location.href = 'dasboard.php';"><i class="icon-pencil"></i>&nbsp;Go Back</button>
                        </div>
                    </div>




                </div>
                <div class="span3">
                    <img src="img/32x32/facebook.png">
                    <img src="img/32x32/twitter.png">
                    <img src="img/32x32/rss.png">
                    <div class="alert alert-info">List of Services</div>
                    <table class="table  table-bordered">

                        <thead>
                            <tr>
                                <th>Service Offer</th>
                                <th>Price</th>                                 

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $user_query = mysqli_query($con,"select * from service")or die(mysql_error());
                            while ($row = mysqli_fetch_array($user_query)) {
                                $id = $row['service_id'];
                                ?>
                                <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['service_offer']; ?></td> 
                                    <td><?php echo $row['price']; ?></td>                         
                                    <?php } ?>

                                </tbody>
                            </table>
                            <div class="alert alert-info">Dr Matsatsi Maoti</div>	
                            <img  class="img img-polaroid" src="images/c.jpg">
                        </div>

                    </div>
                </div>
            </div>
            <?php include('footer.php') ?>