<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('navbar_dasboard.php'); ?>
<div class="container">
    <div class="margin-top">
        <div class="row">

            <div class="span3">
                <ul class="nav nav-tabs nav-stacked">
                    <li class="active">
                        <a href="#"><i class="icon-pencil icon-large"></i>&nbsp;Create Account</a>
                    </li>

                </ul>
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
                <p>Number 1 - 9:30 - 10:00</p>
                <p>Number 2 - 10:00 - 10:30</p>
                <p>Number 3 - 10:30 - 11:00</p>
                <p>Number 4 - 11:30 - 12:00</p>
                <p>Number 5 - 12:30 - 1:00</p>

                <p>Number 6 - 3:00 - 3:30</p>
                <p>Number 7 - 3:30 - 4:00</p>
                <p>Number 8 - 4:30 - 5:00</p>



                <div class="alert alert-info">Office Hours</div>
                <p>Monday - Firday (9:30 am to 1:00 pm)</p>
                <p>Monday - Friday (3:00 pm to 5:00 pm)</p>
                <p>Room 312</p>
                <p>Saturday(half day)</p>
                <p>(9:30 pm to 1:00 pm)</p>
                <p>123, Random Street,
                    XYZ Layout,
                    Bangalore - 5600XX,
                    Karnataka, India.
                </p>




                <div class="alert alert-info">Testimonial</div>
                <div class="testimonial_div">
                    <p>
                        I was delighted with the treatment. Despite me being a somewhat difficult patient Dr Matsatsi
                        Maoti was really gentle, patient and understanding.
                        The treatment was explained precisely to me and the price was quoted right at the beginning
                        which is exactly what the price was at the end.
                        The transformation to my life in general has been amazing.
                        I am extremely happy with the quality of the treatment.
                    </p>
                </div>
            </div>
            <div class="span6">
                <img src="img/dr.jpg">
                <br>
                <br>

                <div class="alert alert-info">Select Date of Appointment and Service Offer</div>

                <!-- reservation -->
                <?php
                if (isset($_POST['yes'])) {
                    $session_id = $_POST['session_id'];
                    $date1 = $_POST['date1'];
                    $service1 = $_POST['service1'];
                    $equal = $_POST['equal'];


                    $price = mysqli_query($con, "select price from service where service_id='$service1'")->fetch_object()->price;
                    echo $session_id, $date1, $service1, $equal, $price;
                    mysqli_query($con, "INSERT INTO `schedule` (`member_id`, `date`, `service_id`, `number`, `status`, `price`) VALUES ('$session_id','$date1','$service1','$equal','Pending','$price')");

                    // mysqli_query($con,"insert into schedule (member_id,date,service_id,number,status) values('$session_id','$date1','$service1','$equal','Pending')");
                    ?>

                    <!--    /*mysqli_query($con,"insert into schedule (member_id,date,service_id,status,price) values('$session_id','$date1','$service1','Pending','$price'");*/ 
                    ?> -->
                    <div class="yes">
                        <h3>Your appointment has been set on
                            <?php echo $date1; ?>. THANK YOU
                        </h3>
                    </div>
                <?php } else { ?>
                    <script>
                        alert('error');
                    </script>
                <?php } ?>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" name="back" class="btn btn-success"
                            onclick="location.href = 'dasboard.php';">&nbsp;Go Back</button>
                    </div>
                </div>
                <br>
                <br>

                <!-- end reservation -->`
                <tr>
                    <th>Service Offer</th>
                    <th>Price</th>

                </tr>
                </thead>
                <tbody>

                    <?php
                    $user_query = mysqli_query($con, "select * from service") or die(mysql_error());
                    while ($row = mysqli_fetch_array($user_query)) {
                        $id = $row['service_id'];
                        ?>
                        <tr class="del<?php echo $id ?>">
                            <td>
                                <?php echo $row['service_offer']; ?>
                            </td>
                            <td>
                                <?php echo $row['price']; ?>
                            </td>
                        <?php } ?>

                </tbody>
                </table>
                <div class="alert alert-info">Dr Matsatsi Maoti</div>
                <img class="img img-polaroid" src="images/c.jpg">
            </div>

        </div>
    </div>
</div>
<?php include('footer.php') ?>