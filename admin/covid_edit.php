<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Covid Profile </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['covid_edit_btn']))
{
    $id = $_POST['covid_edit_id'];
    
    $query = "SELECT * FROM covid_centers WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="code.php" method="POST">
                
              <input type="hidden" name="covid_edit_id" value="<?php echo $row['id'] ?>" >

            <div class="form-group">
                <label> Covid19 Centers Name </label>
                <input type="text" class="form-control" placeholder="Enter Hospital Name"  value="<?php echo $row['name'] ?>" required=""  name="name">
            </div>
            <div class="form-group">
                <label>Covid19 Centers Address</label>
                <input type="text"  class="form-control" placeholder="Enter Address"  value="<?php echo $row['address'] ?>" required="" name="address" >
            </div>
             <div class="form-group">
                <label>Covid19 Centers  Contact No. </label>
                <input type="text" name="number" class="form-control" placeholder="Enter Phonenumber" value="<?php echo $row['number'] ?>" >
            </div>
            <div class="form-group">
                <label>Directions </label>
                <input type="text" name="directions" class="form-control" placeholder="Enter Direction Link"  value="<?php echo $row['link'] ?>" >
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" class="form-control" placeholder="Enter Type" required="" value="<?php echo $row['type'] ?>" >
            </div>

            <input type="hidden" name="state" value="arunachal pradesh">

              <a href="covid-centers.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="covid_updatebtn" class="btn btn-primary"> Update </button>

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