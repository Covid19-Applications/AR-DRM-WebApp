<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Hospitals Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Hospital's Name </label>
                <input type="text" class="form-control" placeholder="Enter Hospital Name" required=""  name="Hospitalname">
            </div>
            <div class="form-group">
                <label>Hospital's Address</label>
                <input type="text"  class="form-control" placeholder="Enter Address" required="" name="Address" >
            </div>
             <div class="form-group">
                <label>Hospital's  Contact No. </label>
                <input type="text" name="Phonenumber" class="form-control" placeholder="Enter Phonenumber" required="">
            </div>

            <input type="hidden" name="state" value="arunachal pradesh">
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="hospitalbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Hospital's Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Hospital Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">
       <?php

        $query = "SELECT * FROM hospitals  WHERE state = 'arunachal pradesh' ";
        $query_run = mysqli_query($connection, $query);
        
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr style="color: #000;">
           
            <th class="bg-secondary">Hospital Name</th>
            <th class="bg-warning">Hospital's Address</th>
            <th class="bg-primary">Hospital Contact No.</th>
            <th class="bg-success">EDIT </th>
            <th class="bg-danger" >DELETE </th>
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
            <td><?php  echo $row['Hospital']; ?></td>
            <td><?php  echo $row['Address']; ?></td>
            <td><?php  echo $row['Contact']; ?></td>
           
            <td>
                <form action="hospitals_edit.php" method="post">
                    <input type="hidden" name="hospitals_edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="hospitals_edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                 <form action="code.php" method="post">
                  <input type="hidden" name="hospitals_delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="hospitals_delete_btn" class="btn btn-danger"> DELETE</button>
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