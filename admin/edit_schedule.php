<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-body">
        <div class="alert alert-info"><strong>Edit Service</strong></div>
        <form class="form-horizontal" method="post">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Service Offer</label>
                <div class="controls">
                    <input type="hidden" id="inputEmail" name="id" value="<?php echo $row['id']; ?>" required/>
                   <select name="service" required>
                                    <option></option>
                                    <?php $query1=mysqli_query($con,"select * from service")or die(mysql_error());
                                    while($row1=mysqli_fetch_array($query1)){
                                        ?>

                                        <option value="<?php echo $row1['service_id']; ?>"<?php if($row1['service_offer']==$service_row['service_offer']) echo 'selected="selected"'; ?>><?php echo $row1['service_offer'] ?></option>
                                        <?php } ?>
                                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Price</label>
                <div class="controls">
                      <input type="text" name="price" id="inputPassword" value="<?php echo $row['price']; ?>" required/>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button name="edit" type="submit" class="btn btn-success"><i class="fas fa-save fa-lg"></i>&nbsp;Update</button>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
    </div>
</div>

<?php
if (isset($_POST['edit'])) {
    var_dump($service, $user_id, $price);
    $user_id = $_POST['id'];
    $service = $_POST['service'];
    $price = $_POST['price'];

    mysqli_query($con,"update schedule set service_id='$service', price='$price' where id='$user_id'");
    ?>
    <script>
        var loc='<?php echo $loc; ?>';
        if(loc==1)
        {
     window.location = "schedule.php";
    }
    else if(loc==0)
    {
    window.location="sched_today.php" 
    } 
 </script>
    <?php
}
?>
