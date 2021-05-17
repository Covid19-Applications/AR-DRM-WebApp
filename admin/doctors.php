 <?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Doctors Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Doctors Name </label>
                <input type="text" name="Doctorname" class="form-control" placeholder="Enter Doctorname" required="" >
            </div>
            <div class="form-group">
                <label>Doctors Speciality</label>
                <input type="text" name="Speciality" class="form-control" placeholder="Enter Speciality" required="" >
            </div>
            <div class="form-group">
                <label>Timings</label>
                <input type="text" name="Timings" class="form-control" placeholder="Enter Timings" required="">
            </div>
            <div class="form-group">
                <label>Address </label>
                <input type="text" name="Address" class="form-control" placeholder="Address" required="" >
            </div>
             <div class="form-group">
                <label> Contact No. </label>
                <input type="text" name="Phonenumber" class="form-control" placeholder="Enter Phonenumber" required="">
            </div>

            <input type="hidden" name="state" value="arunachal pradesh">
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="doctorbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Doctor's Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Doctors Profile 
            </button>
    </h6>
  </div>

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
  echo '<h2 style="background-color: lightblue;">  '.$_SESSION['status'].' </h2>';
  unset( $_SESSION['status']);

}

?>
    <div class="table-responsive" >
       <?php

        $query = "SELECT * FROM doctors  WHERE state = 'arunachal pradesh' ";
        $query_run = mysqli_query($connection, $query);
        
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr style="color: #000;">
           
            <th class="bg-secondary">Doctor Name</th>
            <th class="bg-info">Doctor's Speciality</th>
            <th class="bg-danger">Timings</th>
            <th class="bg-warning">Doctor's Address</th>
            <th class="bg-primary">Doctor Contact No.</th>
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
            <td><?php  echo $row['Doctorname']; ?></td>
            <td><?php  echo $row['Speciality']; ?></td>
            <td><?php  echo $row['Timings']; ?></td>
            <td><?php  echo $row['Address']; ?></td>
            <td><?php  echo $row['Contact']; ?></td>
           
            <td>
                <form action="doctors_edit.php" method="post">
                    <input type="hidden" name="doctors_edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="doctors_edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                 <form action="code.php" method="post">
                  <input type="hidden" name="doctors_delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="doctors_delete_btn" class="btn btn-danger"> DELETE</button>
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