<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Police Emergency Profile </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['emergency_edit_btn']))
{
    $id = $_POST['emergency_edit_id'];
    
    $query = "SELECT * FROM police_emergency WHERE id='$id' ";
    
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="code.php" method="POST">
                
          <input type="hidden" name="emergency_edit_id" value="<?php echo $row['id'] ?>" >

          <div class="form-group">
                <label>Name Of The Police Station</label>
                <input type="text" name="pname" class="form-control"  value="<?php echo $row['police_stn_name'] ?>" >
            </div>

             <div class="form-group">
                <label> Contact Number</label>
                <input type="text" name="pcontactnumber" class="form-control" value="<?php echo $row['police_no'] ?>" >
            </div>

            <input type="hidden" name="state" value="arunachal pradesh">

              <a href="emergency.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="emergency_updatebtn" class="btn btn-primary"> Update </button>

          </form>
    <?php
    }
}
?>
  </div>
  </div>
</div>
<!-- /.container-fluid -->

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Fire Emergency Profile </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['fire_emergency_edit_btn']))
{
    $id = $_POST['fire_emergency_edit_id'];
    
    $query = "SELECT * FROM fire_emergency WHERE id='$id' ";
    
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="code.php" method="POST">
                
          <input type="hidden" name="fire_emergency_edit_id" value="<?php echo $row['id'] ?>" >

          <div class="form-group">
                <label>Name Of The Fire Station</label>
                <input type="text" name="fname" class="form-control"  value="<?php echo $row['fire_service_name'] ?>">
            </div>

             <div class="form-group">
                <label> Contact Number</label>
                <input type="text" name="fcontactnumber" class="form-control" value="<?php echo $row['fire_no'] ?>" >
            </div>  

            <input type="hidden" name="state" value="arunachal pradesh">

              <a href="emergency.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="fire_emergency_updatebtn" class="btn btn-primary"> Update </button>

          </form>
    <?php
    }
}
?>
  </div>
  </div>
</div>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Ambulance Emergency Profile </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['ambulance_emergency_edit_btn']))
{
    $id = $_POST['ambulance_emergency_edit_id'];
    
    $query = "SELECT * FROM ambulance_emergency WHERE id='$id' ";
    
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="code.php" method="POST">
                
          <input type="hidden" name="ambulance_emergency_edit_id" value="<?php echo $row['id'] ?>" >

            <div class="form-group">
                <label>Name Of The Ambulance Service</label>
                <input type="text" name="aname" class="form-control" value="<?php echo $row['ambulance_name'] ?>">
            </div>

             <div class="form-group">
                <label> Contact Number</label>
                <input type="text" name="acontactnumber" class="form-control" value="<?php echo $row['ambulance_no'] ?>">
            </div>   

            <input type="hidden" name="state" value="arunachal pradesh">

              <a href="emergency.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="ambulance_emergency_updatebtn" class="btn btn-primary"> Update </button>

          </form>
    <?php
    }
}
?>
  </div>
  </div>
</div>





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>