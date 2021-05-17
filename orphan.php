<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>


<style type="text/css">
    
table tbody tr td a{

    color: blue;

}
.bg-name {
         background-color: #DA2A47;
}
.bg-sno {
        background-color: #FFC7C9;
}

</style>

<br><br><br><br>

<div class="container-fluid gtco-banner-area">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <img class="card-img-top img-fluid" src="img/donate/donation.jpg" alt="">
            </div>

            <div class="col-md-6">
                <br><br><br><br>
                <h1> Orphanage Donation </h1>
                <h4>We make a living by what we get, we make life by what we give!</h4>
            </div>

        </div>
    </div>
</div>

<br><br>

    <div class="whole-wrap">
        <div class="container box_1170">

             <div class="col-lg-12">
                     <h2 class="title-1 m-b-25">Online Donations Lists</h2>
                           <div class="table-responsive table--no-card m-b-40">
<!-- 

                                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for District" title="Type in a name"> --> 

                                  <?php

                                        $query = "SELECT * FROM orphanage WHERE state='arunachal pradesh'";
                                        $query_run = mysqli_query($connection, $query);
                                        
                                    ?>

                                    <table class="table table-borderless table-striped table-earning">

                                    <br>

                                     <thead>
                                              <th  class="bg-name">Orphanage Name</th>

                                              <th class="bg-sno">Address</th>

                                              <th class="bg-name" >Website</th>
                                              <th  class="bg-sno">Donation Link</th>

                                              <th  class="bg-name">Contact No.</th>

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
                                                          <td><a href="<?php  echo $row['website']; ?>">Website</a></td>
                                                          <td><a href="<?php  echo $row['link']; ?>">Donate Now</a></td>
                                                          <td><?php  echo $row['contact']; ?></td>
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

                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile" style="float: right;">
              Add Orphanage Profile 
            </button>

        </div>
    </div>        
<br><br><br>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Orphanage Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Orphanage Name </label>
                <input type="text" class="form-control" placeholder="Enter Orphanage Name" required=""  name="Orphanagename">
            </div>
            <div class="form-group">
                <label> Orphanage Address</label>
                <input type="text"  class="form-control" placeholder="Enter Address" required="" name="Address" >
            </div>

            <div class="form-group">
                <label>Website</label>
                <input type="text" class="form-control" placeholder="Enter Orphanage Website" required=""  name="Website">
            </div>
            <div class="form-group">
                <label> Donation Link </label>
                <input type="text"  class="form-control" placeholder="Enter Donation Link" required="" name="DonationLink" >
            </div>
             <div class="form-group">
                <label> Contact No. </label>
                <input type="text" name="Phonenumber" class="form-control" placeholder="Enter Phonenumber" required="">
            </div>

                        <div class="form-group">
                <label>State</label>
                                   <select name="state" class="form-control" required="" >
                                     <option>Select State</option>  
              <option name="state" value="andhra pradesh "> Andhra Pradesh</option>
              <option name="state" value="arunachal pradesh " > Arunachal Pradesh </option>
              <option name="state" value="assam  " > Assam  </option>
              <option name="state" value="bihar " > Bihar </option>
              <option name="state" value="chhattisgarh " > Chhattisgarh </option>
              <option name="state" value="goa " > Goa </option>
              <option name="state" value="gujarat " > Gujarat </option>
              <option name="state" value="haryana " > Haryana </option>
              <option name="state" value="himachal pradesh " > Himachal Pradesh </option>
              <option name="state" value="jammu & kashmir " > Jammu & Kashmir </option>
              <option name="state" value="jharkhand" > Jharkhand</option>
              <option name="state" value="karnataka " > Karnataka </option>
              <option name="state" value="kerala " > Kerala </option>
              <option name="state" value="madhya pradesh " > Madhya Pradesh </option>
              <option name="state" value="maharashtra " > Maharashtra </option>
              <option name="state" value="manipur " > Manipur </option>
              <option name="state" value="meghalaya " > Meghalaya </option>
              <option name="state" value="mizoram " > Mizoram </option>
              <option name="state" value="nagaland " > Nagaland </option>
              <option name="state" value="orissa " > Orissa </option>
              <option name="state" value="punjab " > Punjab </option>
              <option name="state" value="rajasthan " > Rajasthan </option>
              <option name="state" value="sikkim " > Sikkim </option>
              <option name="state" value="tamil nadu " > Tamil Nadu </option>
              <option name="state" value="telangana " > Telangana </option>
              <option name="state" value="tripura " > Tripura </option>
              <option name="state" value="uttar pradesh " > Uttar Pradesh </option>
              <option name="state" value="uttarakhand " > Uttarakhand </option>
              <option name="state" value="west bengal " > West Bengal </option>
              <option name="state" value="andaman & nicobar islands " > Andaman & Nicobar Islands </option>
              <option name="state" value="dadra and nagar haveli" > Dadra and Nagar Haveli</option>
              <option name="state" value="daman and diu" > Daman and Diu</option>
              <option name="state" value="lakshadweep " > Lakshadweep </option>
              <option name="state" value="puducherry " > Puducherry </option>
              <option name="state" value="delhi  " > Delhi  </option>
              <option name="state" value="chandigarh " > Chandigarh  </option>

      </select>    
                            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="orphanageadmbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
           

<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>
