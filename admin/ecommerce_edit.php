<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Ecommerce Profile </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['ecommerce_edit_btn']))
{
    $id = $_POST['ecommerce_edit_id'];
    
    $query = "SELECT * FROM ecommerce WHERE id='$id' ";
    
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="code.php" method="POST">
                
          <input type="hidden" name="ecommerce_edit_id" value="<?php echo $row['id'] ?>" >

            <div class="form-group">
                <label> Text Link</label>
                <input type="text" class="form-control" placeholder="Enter Text Link" required=""  name="text" value="<?php echo $row['text'] ?>">
            </div>
            <div class="form-group">
                <label> Image Link </label>
                <input type="text"  class="form-control" placeholder="Enter Image Link" required="" name="image"  value="<?php echo $row['image'] ?>">
            </div>
            <div class="form-group">
                <label> Type</label>
                <input type="text"  class="form-control" placeholder="Enter Image Type" required="" name="type"  value="<?php echo $row['type'] ?>">
            </div>

              <a href="ecommerce.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="ecommerce_updatebtn" class="btn btn-primary"> Update </button>

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