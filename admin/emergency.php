<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Police Service Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Name Of The Police Station</label>
                <input type="text" name="pname" class="form-control" >
            </div>

             <div class="form-group">
                <label> Contact Number</label>
                <input type="text" name="pcontactnumber" class="form-control" >
            </div>

            <input type="hidden" name="state" value="arunachal pradesh">  
           

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="polbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="modal fade" id="gasprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Ambulance Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Name Of The Ambulance Service</label>
                <input type="text" name="aname" class="form-control" >
            </div>

             <div class="form-group">
                <label> Contact Number</label>
                <input type="text" name="acontactnumber" class="form-control" >
            </div>  


            <input type="hidden" name="state" value="arunachal pradesh">
           

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="ambbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="modal fade" id="fireprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Fire Station Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Name Of The Fire Station</label>
                <input type="text" name="fname" class="form-control" >
            </div>

             <div class="form-group">
                <label> Contact Number</label>
                <input type="text" name="fcontactnumber" class="form-control" >
            </div>  


            <input type="hidden" name="state" value="arunachal pradesh">
           

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="firebtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add Police Service Profile 
</button>




<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gasprofile">
       Add Ambulance Profile 
</button>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fireprofile">
       Add Fire Station Profile 
</button>

  <div class="card-body">

<?php
if(isset($_SESSION['success']) && $_SESSION['success'] !='')
{

  # code...
  echo '<h2 class="bg-primary text-white">  '.$_SESSION['success'].' </h2>';
  unset( $_SESSION['success']);

}
if(isset($_SESSION['status']) && $_SESSION['status'] != '')
{

  # code...
  echo '<h2 class="bg-danger">  '.$_SESSION['status'].' </h2>';
  unset( $_SESSION['status']);

}

?>

  <div class="table-responsive">
    <?php
        $query = "SELECT * FROM police_emergency  WHERE state = 'arunachal pradesh' ";
        $query_run = mysqli_query($connection, $query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
           <tr>

              <th>S.No</th>
              <th>Name Of The Police Station</th>
              <th>Contact Number</th>
              <th>Edit</th>
              <th>Delete</th>

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

          	<td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['police_stn_name']; ?></td>
            <td><?php  echo $row['police_no']; ?></td>
            <td>
                

            <form action="emergency_edit.php" method="post">
                    <input type="hidden" name="emergency_edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="emergency_edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="emergency_delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="emergency_delete_btn" class="btn btn-danger"> DELETE</button>
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
    
   <div class="table-responsive">
    <?php
        $query = "SELECT * FROM ambulance_emergency  WHERE state = 'arunachal pradesh' ";
        $query_run = mysqli_query($connection, $query);
    ?>
<!-- /.container-fluid -->



      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
           <tr>

              <th>S.No</th>
              <th>Name Of The Ambulance </th>
              <th>Contact Number</th>
              <th>Edit</th>
              <th>Delete</th>

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

          	<td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['ambulance_name']; ?></td>
            <td><?php  echo $row['ambulance_no']; ?></td>
            <td>
                

            <form action="emergency_edit.php" method="post">
                    <input type="hidden" name="ambulance_emergency_edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="ambulance_emergency_edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="ambulance_emergency_delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="ambulance_emergency_delete_btn" class="btn btn-danger"> DELETE</button>
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


 <div class="table-responsive">
    <?php
        $query = "SELECT * FROM fire_emergency  WHERE state = 'arunachal pradesh' ";
        $query_run = mysqli_query($connection, $query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
           <tr>

              <th>S.No</th>
              <th>Name Of The Fire Station</th>
              <th>Contact Number</th>
              <th>Edit</th>
              <th>Delete</th>

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

          	<td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['fire_service_name']; ?></td>
            <td><?php  echo $row['fire_no']; ?></td>
            <td>
                

            <form action="emergency_edit.php" method="post">
                    <input type="hidden" name="fire_emergency_edit_id" value="<?php echo $row['id']; ?>">


                    <button  type="submit" name="fire_emergency_edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="fire_emergency_delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="fire_emergency_delete_btn" class="btn btn-danger"> DELETE</button>
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

