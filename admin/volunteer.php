<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>



  <div class="card-body">



  <div class="table-responsive">
    <?php
        $query = "SELECT * FROM individual  WHERE state = 'arunachal pradesh'";
        $query_run = mysqli_query($connection, $query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Gender</th>
              <th>DOB</th>
              <th>Address</th>

              <th>State</th>
              <th>District</th>
              <th>City</th>

              <th>Pincode</th>

              <th>Availability</th>


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

          	<td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['email']; ?></td>

            <td><?php  echo $row['phone']; ?></td>
             <td><?php  echo $row['gender']; ?></td>
              <td><?php  echo $row['dob']; ?></td>
            <td><?php  echo $row['address']; ?></td>
            <td><?php  echo $row['state']; ?></td>


            <td><?php  echo $row['district']; ?></td>
            <td><?php  echo $row['city']; ?></td>
            <td><?php  echo $row['pincode']; ?></td>


            <td><?php  echo $row['avail']; ?></td>

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

