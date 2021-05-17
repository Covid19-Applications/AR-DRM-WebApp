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

if(isset($_POST['orphan_edit_btn']))
{
    $id = $_POST['orphan_edit_id'];
    
    $query = "SELECT * FROM orphanage WHERE id='$id' ";
    
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="code.php" method="POST">
                
              <input type="hidden" name="orphan_edit_id" value="<?php echo $row['id'] ?>" >

            <div class="form-group">
                <label> Orphanage Name </label>
                <input type="text" class="form-control" placeholder="Enter Orphanage Name" required=""  name="Orphanagename" value="<?php echo $row['name'] ?>">
            </div>
            <div class="form-group">
                <label> Orphanage Address</label>
                <input type="text"  class="form-control" placeholder="Enter Address" required="" name="Address"  value="<?php echo $row['address'] ?>">
            </div>

            <div class="form-group">
                <label>Website</label>
                <input type="text" class="form-control" placeholder="Enter Orphanage Website" required=""  name="Website" value="<?php echo $row['website'] ?>">
            </div>
            <div class="form-group">
                <label> Donation Link </label>
                <input type="text"  class="form-control" placeholder="Enter Donation Link" required="" name="DonationLink" value="<?php echo $row['link'] ?>" >
            </div>
             <div class="form-group">
                <label> Contact No. </label>
                <input type="text" name="Phonenumber" class="form-control" placeholder="Enter Phonenumber" required="" value="<?php echo $row['contact'] ?>">
            </div>
          
            <input type="hidden" name="state" value="arunachal pradesh">

              <a href="orphan.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="orphan_updatebtn" class="btn btn-primary"> Update </button>

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