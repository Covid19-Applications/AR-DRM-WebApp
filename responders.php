<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<style type="text/css">
    /* line 10, C:/Users/SPN Graphics/Desktop/CL September/210 Medical/HTML/scss/_bradcam.scss */
.button{
  background: #E7717D;
    color: #fff;
    border-radius: 50px;
    margin: 0 15px;
    padding: 10px 30px; 
}

.bg-name{
  background-color: #FFC7C9;
}
.bg-number{
  background-color: #DA2A47;
}
</style>
    <!-- bradcam_area_start  -->
    
    <div class="bradcam_area breadcam_bg ">
        <div class="container">
          <br><br><br><br>
            <div class="row">
                <div class="col-lg-4">
                    <div class="bradcam_text">
                      <br><br>
                        <h1 style="text-decoration: underline;">First Responders</h1>
                            <a href="#res"><button class="button">Know More</button></a>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bradcam_text">
                      <br><br>
                        <img src="img/responders/bg.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container box_1170">
			<h3 class="sample-text" style="text-align: center;">
                <br><br>
                Plan, Prepare, and Respond
			</h3>
		</div>
	</section>
	<!-- End Sample Area -->



    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="jumbotron">
                <div class="card col-md-12">
                    
                    <div class="card-header">
                        Guidelines
                     </div>   
                     <div class="card-body">

                        This guidance applies to all first responders, including law enforcement, fire services, emergency medical services, and emergency management officials, who anticipate close contact with persons with confirmed or possible COVID-19 in the course of their work.
                      </div>  
                </div>

                <br><br>
                <div class="card col-md-12">
                    
                    <div class="card-header">
                        Summary of Key Changes for the EMS Guidance:
                     </div>   
                     <div class="card-body">

                        <strong>Updated PPE recommendations for the care of patients with known or suspected COVID-19:</strong>

                        <ul>
                            <li>Facemasks are an acceptable alternative until the supply chain is restored. Respirators should be prioritized for procedures that are likely to generate respiratory aerosols, which would pose the highest exposure risk to HCP.
                            Eye protection, gown, and gloves continue to be recommended.</li><br>

                             <li> If there are shortages of gowns, they should be prioritized for aerosol-generating procedures, care activities where splashes and sprays are anticipated, and high-contact patient care activities that provide opportunities for transfer of pathogens to the hands and clothing of HCP.</li><br>

                              <li> When the supply chain is restored, fit-tested EMS clinicians should return to use of respirators for patients with known or suspected COVID-19.</li><br>

                              <li>Updated guidance about recommended EPA-registered disinfectants to include reference to a list now posted on the EPA website.</li>
                        </ul>

                       
                    </div>  
                </div>

                <br><br> 
                </div>

            </div>
        </div>





	<!-- Start Align Area -->
	<div class="whole-wrap" id="res">
		<div class="container box_1170">
            
			
			             
                         <div class="card col-lg-12" style="padding: 25px;">
                                <h4 class="title-1 m-b-25">Police Services</h4>
                                <div class="table-responsive table--no-card m-b-40">
                                     <?php
                                                  $query = "SELECT * FROM police_emergency WHERE state = 'arunachal pradesh'";
                                                  $query_run = mysqli_query($connection, $query);
                                              ?>
                                    <table class="table table-borderless table-striped table-earning" >
                                                <thead>
                                                    <tr>
                                                        <th class="bg-name">Police Station Name</th>
                                                        <th class="bg-number" >Contact No.</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="state-wise">
                                                    
                                                     <?php
                                                  if(mysqli_num_rows($query_run) > 0)        
                                                  {
                                                      while($row = mysqli_fetch_assoc($query_run))
                                                      {
                                                         ?>
                                                        <tr>  
                                                            <td><?php  echo $row['police_stn_name']; ?></td>
                                                            
                                                            <td><?php  echo $row['police_no']; ?></td>
                                                        </tr>

                                                      <?php
                                                        } 
                                                    }
                                                    ?>
                                            

                                                </tbody>
                                          
                                    </table>
                                </div>
                            </div>

                           <div class="card col-lg-12"  style="padding: 25px;">
                                <h4 class="title-1 m-b-25">Ambulance Services</h4>
                                <div class="table-responsive table--no-card m-b-40">
                                     <?php
                                                  $query = "SELECT * FROM ambulance_emergency WHERE state = 'arunachal pradesh'";
                                                  $query_run = mysqli_query($connection, $query);
                                              ?>
                                    <table class="table table-borderless table-striped table-earning"  >
                                                <thead>
                                                    <tr>
                                                        <th class="bg-name">Ambulance Service Names</th>
                                                        <th class="bg-number">Contact No.</th>
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
                                                            <td><?php  echo $row['ambulance_name']; ?></td>
                                                            
                                                            <td><?php  echo $row['ambulance_no']; ?></td>
                                                      

                                                           </tr>

                                                      <?php
                                                        } 
                                                    }
                                                    ?>
                                                    
                                            

                                                </tbody>
                                          
                                    </table>
                                </div>
                            </div>


                         <div class="card col-lg-12" style="padding: 25px;">
                                <h4 class="title-1 m-b-25">Fire Brigade Services</h4>
                                <div class="table-responsive table--no-card m-b-40">
                                     <?php
                                                  $query = "SELECT * FROM fire_emergency WHERE state = 'arunachal pradesh'";
                                                  $query_run = mysqli_query($connection, $query);
                                              ?>
                                    <table class="table table-borderless table-striped table-earning"  id="state-wise">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-name">Fire Brigade Name</th>
                                                        <th class="bg-number">Contact No.</th>
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
                                                            <td><?php  echo $row['fire_service_name']; ?></td>
                                                            
                                                            <td><?php  echo $row['fire_no']; ?></td>
                                                      

                                                           </tr>

                                                      <?php
                                                        } 
                                                    }
                                                    ?>

                                                    

                                                </tbody>
                                          
                                    </table>
                                </div>
                            </div>
                       
		</div>
	</div>
	<!-- End Align Area -->
<!-- footer end  --><br><br><br>


<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>