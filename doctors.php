<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>




<style type="text/css">


#Appointment {

  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #000;
  background-color: lightblue;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

#Appointment:hover {background-color:#F7E967;}

#Appointment:active {
  background-color: lightblue;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

#Appontment:hover a{

   color: #62997A;    
}


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
  color: #fff;
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
  background-color: #F76C6C;
}
.bg-speciality{
 background-color: #A8D0E6; 
}
.bg-time{
  background-color: #F7E967; 
}
.bg-address{
  background-color: #62997A;
}
.bg-contact{
  background-color: gray;
}



</style>   


    <!-- bradcam_area_start  -->
    <br><br><br><br>
    <div class="bradcam_area breadcam_bg_2" style="background-image: url(img/doc/doc.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
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
                Apna Arunachal offers its patients to choose from a wide network of well-qualified and experienced doctos across Arunachal Pradesh to ensure that the right healthcare decision is made.
			</p>
		</div>
	</section>
	<!-- End Sample Area -->


	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">

			
			<div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Doctors In Arunachal Pradesh</h2>
                                <a href="doc-apt.php" style="color: black;"><button style="float: right; margin-right: 15px; " id="Appointment">Book An Appointment</button></a>
                                <br><br><br>
                                <div class="table-responsive table--no-card m-b-40">
                                     <?php
                                                  $query = "SELECT * FROM doctors WHERE state = 'arunachal pradesh'";
                                                  $query_run = mysqli_query($connection, $query);
                                              ?>
                                    <table class="table table-borderless table-striped table-earning"  id="state-wise">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-name">Doctor Name</th>
                                                        <th class="bg-speciality">Doctor's Speciality</th>
                                                        <th class="bg-time">Timings</th>
                                                        <th class="bg-address">Doctor's Address</th>
                                                        <th class="bg-contact">Doctor Contact No.</th>
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

                                                        <td><?php  echo $row['Doctorname']; ?></td>
                                                        <td><?php  echo $row['Speciality']; ?></td>
                                                        <td><?php  echo $row['Timings']; ?></td>
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


			


		</div>
	</div>
    <br><br><br><br>

 

<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>