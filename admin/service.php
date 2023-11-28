<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('session.php'); ?>
<div class="container">

  <div class="row">	
    <div class="span3">
      <?php include('sidebar.php'); ?>
    </div>
    <div class="span9">
      <img src="../img/dr.jpg" class="img-rounded">
      <?php include('navbar_dasboard.php') ?>
      <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="icon-user icon-large"></i>&nbsp;Service Table</strong>
      </div>
      <a href="#add_service" role="button" class="btn btn-info" data-toggle="modal"><i class="icon-plus icon-large"></i>&nbsp;Add Service</a>
      <?php include('add_service.php'); ?>
      <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">

        <thead>
          <tr>
            <th>ID</th>
            <th>Service Offer</th>
            <th>Price</th>                                 
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $user_query = mysqli_query($con,"select * from service")or die(mysql_error());
          while ($row = mysqli_fetch_array($user_query)) {
            $id = $row['service_id'];
            ?>
            <tr class="del<?php echo $id ?>">
              <td><?php echo $row['service_id']; ?></td>
              <td><?php echo $row['service_offer']; ?></td> 
              <td><?php echo $row['price']; ?></td> 
              <td width="100">
                <!-- <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i></a> -->
                <a href="#delete<?php echo $id ?>" data-toggle="modal" rel="tooltip"  title="Delete" id="<?php echo $id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                <?php include('delete_service.php'); ?>

                <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                <?php include('edit_service.php'); ?>
              </td>
              <?php include('toolttip_edit_delete.php'); ?>
            </tr>
            <?php } ?>

          </tbody>
        </table>


      </div>
    </div>
    <?php include('footer.php') ?>