<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Covid19 Centers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Covid19 Centers Name </label>
                <input type="text" class="form-control" placeholder="Enter Hospital Name" required=""  name="name">
            </div>
            <div class="form-group">
                <label>Covid19 Centers Address</label>
                <input type="text"  class="form-control" placeholder="Enter Address" required="" name="address" >
            </div>
             <div class="form-group">
                <label>Covid19 Centers  Contact No. </label>
                <input type="text" name="number" class="form-control" placeholder="Enter Phonenumber" >
            </div>
            <div class="form-group">
                <label>Directions </label>
                <input type="text" name="directions" class="form-control" placeholder="Enter Direction Link" >
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" class="form-control" placeholder="Enter Type" required="">
            </div>

            <input type="hidden" name="state" value="arunachal pradesh">
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="covidbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Covid19 Centers Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Covid19 Centers Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">
       <?php

        $query = "SELECT * FROM covid_centers  WHERE state = 'arunachal pradesh' ";
        $query_run = mysqli_query($connection, $query);
        
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr style="color: #000;">
           
            <th class="bg-info">Covid19 Centers Name</th>
            <th class="bg-warning">Covid19 Centers Address</th>
            <th class="bg-primary">Covid19 Centers Contact No.</th>
            <th class="bg-secondary">Covid19 Centers Directions</th>

            <th class="bg-info">Type</th>
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
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['address']; ?></td>
            <td><?php  echo $row['number']; ?></td>
            <td><?php  echo $row['link']; ?></td>
            <td><?php  echo $row['type']; ?></td>
           
            <td>
                <form action="covid_edit.php" method="post">
                    <input type="hidden" name="covid_edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="covid_edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                 <form action="code.php" method="post">
                  <input type="hidden" name="covid_delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="covid_delete_btn" class="btn btn-danger"> DELETE</button>
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