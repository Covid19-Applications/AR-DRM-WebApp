<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



<div class="modal fade" id="addecomprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Ecommerce Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Text Link</label>
                <input type="text" class="form-control" placeholder="Enter Text Link" required=""  name="text">
            </div>
            <div class="form-group">
                <label> Image Link </label>
                <input type="text"  class="form-control" placeholder="Enter Image Link" required="" name="image" >
            </div>
            <div class="form-group">
                <label> Type</label>
                <input type="text"  class="form-control" placeholder="Enter Image Type" required="" name="type" >
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="ecombtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ecommerce Products
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addecomprofile">
              Add Ecommerce Products
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">
       <?php

        $query = "SELECT * FROM ecommerce  ";
        $query_run = mysqli_query($connection, $query);
        
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr style="color: #000;">
           
            <th class="bg-secondary">Text Link</th>
            <th class="bg-warning">Image Link</th>
            <th class="bg-primary">Type</th>            
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
            <td><?php  echo $row['text']; ?></td>
            <td><?php  echo $row['image']; ?></td>
            <td><?php  echo $row['type']; ?></td>            
           
            <td>
                <form action="ecommerce_edit.php" method="post">
                    <input type="hidden" name="ecommerce_edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="ecommerce_edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                 <form action="code.php" method="post">
                  <input type="hidden" name="ecommerce_delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="ecommerce_delete_btn" class="btn btn-danger"> DELETE</button>
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