<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>




<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">

  <div class="card-body">

    <div class="table-responsive">
       <?php

        $query = "SELECT * FROM hospitals_adm  WHERE state = 'arunachal pradesh'";
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