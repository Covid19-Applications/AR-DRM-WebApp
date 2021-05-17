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

if(isset($_POST['doctors_edit_btn']))
{
    $id = $_POST['doctors_edit_id'];
    
    $query = "SELECT * FROM doctors WHERE id='$id' ";
    
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="code.php" method="POST">
                
              <input type="hidden" name="doctors_edit_id" value="<?php echo $row['id'] ?>" >

           <div class="form-group">
                <label> Doctors Name </label>
                <input type="text" name="Doctorname" class="form-control" placeholder="Enter Doctorname" required=""  value="<?php echo $row['Doctorname'] ?>">
            </div>
            <div class="form-group">
                <label>Doctors Speciality</label>
                <input type="text" name="Speciality" class="form-control" placeholder="Enter Speciality" required=""  value="<?php echo $row['Speciality'] ?>">
            </div>
            <div class="form-group">
                <label>Timings</label>
                <input type="text" name="Timings" class="form-control" placeholder="Enter Timings" required="" value="<?php echo $row['Timings'] ?>">
            </div>
            <div class="form-group">
                <label>Address </label>
                <input type="text" name="Address" class="form-control" placeholder="Address" required="" value="<?php echo $row['Address'] ?>" >
            </div>
             <div class="form-group">
                <label> Contact No. </label>
                <input type="text" name="Phonenumber" class="form-control" placeholder="Enter Phonenumber" required="" value="<?php echo $row['Contact'] ?>">
            </div>

            <input type="hidden" name="state" value="arunachal pradesh">

              <a href="doctors.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="doctors_updatebtn" class="btn btn-primary"> Update </button>

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