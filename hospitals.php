<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<style type="text/css">
    /* line 10, C:/Users/SPN Graphics/Desktop/CL September/210 Medical/HTML/scss/_bradcam.scss */
.bradcam_area {
  padding: 170px;
  background-size: cover;
  background-position: center center;
  padding: 148px 0px;
  background-repeat: no-repeat;
}

@media (max-width: 767px) {
  /* line 10, C:/Users/SPN Graphics/Desktop/CL September/210 Medical/HTML/scss/_bradcam.scss */
  .bradcam_area {
    padding: 120px 0;
  }
}

/* line 20, C:/Users/SPN Graphics/Desktop/CL September/210 Medical/HTML/scss/_bradcam.scss */
.bradcam_area h3 {
  font-size: 50px;
  color: #000;
  font-weight: 600;
  margin-bottom: 0;
  text-transform: capitalize;
}

@media (max-width: 767px) {
  /* line 20, C:/Users/SPN Graphics/Desktop/CL September/210 Medical/HTML/scss/_bradcam.scss */
  .bradcam_area h3 {
    font-size: 30px;
  }
}

/* line 30, C:/Users/SPN Graphics/Desktop/CL September/210 Medical/HTML/scss/_bradcam.scss */
.bradcam_area p {
  font-size: 18px;
  color: #fff;
  font-weight: 400;
  text-transform: capitalize;
}

/* line 35, C:/Users/SPN Graphics/Desktop/CL September/210 Medical/HTML/scss/_bradcam.scss */
.bradcam_area p a {
  color: #fff;
}

/* line 37, C:/Users/SPN Graphics/Desktop/CL September/210 Medical/HTML/scss/_bradcam.scss */
.bradcam_area p a:hover {
  color: #fff;
}

.bg-name{
  background-color: #FFC7C9;
}
.bg-address{
  background-color: #DA2A47;
}
.bg-contact{
  background-color: #FFC7C9;
}

</style>


    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg_1 " style="background-image: url(img/hospitals/bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3 style="text-decoration: underline;">Hospitals</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container box_1170">
			<p class="sample-text" style="text-align: center;">
                <br><br>
                The healthcare sector of Apna Arunachal with the metro cities around the countries as it has adopted advanced, improvised and upgraded practices. Advanced medical procedures include using novel methodologies to treat and control disorders in lesser amount of time. Improvisation in machines and surgical tools has increased efficiency in the quality and generation of results. Upgraded systems are helpful in easy understanding of medical reports and terms for both patients as well as doctors.
			</p>
		</div>
	</section>
	<!-- End Sample Area -->


	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">

			
			<div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Hospitals In Arunachal Pradesh</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <?php
                                                  $query = "SELECT * FROM hospitals WHERE state = 'arunachal pradesh' ";
                                                  $query_run = mysqli_query($connection, $query);
                                              ?>
                                    <table class="table table-borderless table-striped table-earning"  id="state-wise">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-name">Hospital Name</th>
                                                        <th class="bg-address">Hospital Address</th>
                                                        <th class="bg-contact">Hospital Contact No.</th>
                                                    </tr>
                                                </thead>
                                                <tbody >

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
                                                      

                                                           </tr>

                                                      <?php
                                                        } 
                                                    }
                                                    ?>
                                                    
                                            

                                                </tbody>
                                          
                                    </table>
                                </div>
                            </div>
          <div class="card-header py-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile" style="float: right;">
                Add Hospital Profile 
            </button>
          </div>

		</div>

	</div>
	<!-- End Align Area -->

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Hospitals Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Hospital's Name </label>
                <input type="text" class="form-control" placeholder="Enter Hospital Name" required=""  name="Hospitalname">
            </div>
            <div class="form-group">
                <label>Hospital's Address</label>
                <input type="text"  class="form-control" placeholder="Enter Address" required="" name="Address" >
            </div>
             <div class="form-group">
                <label>Hospital's  Contact No. </label>
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
            <button type="submit" name="hospitaladmbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

 


<br><br><br>

<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>