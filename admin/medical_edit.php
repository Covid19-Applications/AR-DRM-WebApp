<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Doctors Profile </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['medstore_edit_btn']))
{
    $id = $_POST['medstore_edit_id'];
    
    $query = "SELECT * FROM medstore WHERE id='$id' ";
    
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="code.php" method="POST">
                
              <input type="hidden" name="medstore_edit_id" value="<?php echo $row['id'] ?>" >

             <div class="form-group">
                <label> Pharmacy  Name </label>
                <input type="text" class="form-control" placeholder="Enter Pharmacy Name" required=""  name="Pharmacyname" value="<?php echo $row['name'] ?>">
            </div>
            <div class="form-group">
                <label>Pharmacy Address</label>
                <input type="text"  class="form-control" placeholder="Enter Address" required="" name="Address"  value="<?php echo $row['address'] ?>">
            </div>
             <div class="form-group">
                <label>Pharmacy  Contact No. </label>
                <input type="text" name="Phonenumber" class="form-control" placeholder="Enter Phonenumber" required="" value="<?php echo $row['phone'] ?>">
            </div>


            <input type="hidden" name="state" value="arunachal pradesh">

              <a href="covid-centers.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="medstore_updatebtn" class="btn btn-primary"> Update </button>

          </form>
    <?php
    }
}
?>
  </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->




<?php
include('includes/scripts.php');
include('includes/footer.php');
?>