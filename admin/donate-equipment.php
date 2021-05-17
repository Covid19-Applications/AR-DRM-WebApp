<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>



  <div class="card-body">



  <div class="table-responsive">
    <?php
        $query = "SELECT * FROM donate_equipment  WHERE state = 'arunachal pradesh' ";
        $query_run = mysqli_query($connection, $query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Org Name</th>
              <th>Org Type</th>
              <th>Phone Number</th>
              <th>Email</th>

              <th>Address</th>

              <th>Pincode</th>
              <th>Quantity</th>
              <th>EquipmentType</th>

              <th>Shiptype</th>

              <th>District</th>
              <th>Delivery Time</th>


              <th>Message</th>


              <th>EDIT</th>
              <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>  

          	<td><?php  echo $row['orgname']; ?></td>
            <td><?php  echo $row['orgtype']; ?></td>
            <td><?php  echo $row['email']; ?></td>

            <td><?php  echo $row['phone']; ?></td>
            <td><?php  echo $row['address']; ?></td>
            <td><?php  echo $row['pincode']; ?></td>


            <td><?php  echo $row['quantity']; ?></td>
            <td><?php  echo $row['EquipmentType']; ?></td>
            <td><?php  echo $row['shiptype']; ?></td>


            <td><?php  echo $row['district']; ?></td>
            <td><?php  echo $row['deltime']; ?></td>
            <td><?php  echo $row['msg']; ?></td>

            <td>
                <form action="#" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">


                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="#" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
      </table>
    </div>
    
  </div>
</div>

</div>
<!-- /.container-fluid -->













<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

