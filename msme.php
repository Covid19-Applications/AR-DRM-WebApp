<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>


<style type="text/css">

  .portfolio .portfolio-wrap::before {
    content: "";
    background: rgba(0, 0, 0, 0.2);
    position: absolute;
    left: 30px;
    right: 30px;
    top: 30px;
    bottom: 30px;
    transition: all ease-in-out 0.3s;
    z-index: 2;
    opacity: 0;
}

</style>

<link rel="stylesheet" href="css/med-style.css">

    <!-- bradcam_area_start  -->
<div class="container-fluid gtco-feature" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="cover">
                    <div class="card">
                        <svg
                                class="back-bg"
                                width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
                            <defs>
                                <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                                </linearGradient>
                            </defs>
                            <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                  d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
                        </svg>
                        <!-- *************-->

                        <svg width="100%" viewBox="0 0 700 500">
                            <clipPath id="clip-path">
                                <path d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
                            </clipPath>
                            <!-- xlink:href for modern browsers, src for IE8- -->
                            <image clip-path="url(#clip-path)" xlink:href="img/msme/reg.png" width="100%"
                                   height="465" class="svg__image"></image>
                        </svg>
                    </div>
                </div>
            </div>

            
            <div class="col-md-5">
                <h2>What is MSME ?</h2>
                <p>
                  MSME stands for Micro, Small, and Medium Enterprises. In accordance with the Micro, Small, and Medium Enterprises Development (MSMED) Act in 2006, the enterprises are classified into two divisions.
                  <ul>
                      <li>Manufacturing enterprises – engaged in the manufacturing or production of goods in any industry</li>
                      <li>Service enterprises – engaged in providing or rendering services</li>
                  </ul>
                  <br>
                </p>
                <a href="https://msme.gov.in/"> Register for MSME 
                    <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>


    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="card">
                <div class="card-header">
                    Why the change ?
                </div>    
                <div class="card-body">
                  As Finance Minister Nirmala Sitharaman made the announcement about the change, she also addressed the reasons behind it. She said the new definition will bring about many benefits that will aid MSMEs to grow in size.<br><br>

This was made under <strong>Atma-nirbhar Bharat Abhiyaan Economic Package</strong> to assuage India’s economic predicament amidst the pandemic.<br><br>

Combined with all previous economic stimulus efforts, the total amount of the relief package comes to a whopping Rs. 20 lakh crore.
                </div>

                <div class="card-header">
                    Key announcements of Atma-nirbhar Bharat Abhiyaan
                </div>
                <div class="card-body">
                    <br>
                    <ul>
                        <li>Rs 3 lakh crore collateral free automatic loans for MSMEs</li>
                        <li>Rs 50,000 crore equity infusion through MSME Fund of Funds</li>
                        <li>Rs 20 crore subordinate debt for MSMEs</li>
                        <li>Extension of registration and completion date of real estate projects under RERA</li>
                        <li>Immediate pending refunds issuance to all non charitable trusts</li>
                        <li>Extension of the due date for ITR for FY’19-20 to November 30, 2020</li>
                    </ul>    
                </div>


                 

            </div>

        </div>
    </div>      


  
      <h1 style="text-align: center; text-decoration: underline;">MSME Products</h1> 

   <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-all">All</li>
              <li data-filter=".filter-covid">Medical Supplies</li>
              <li data-filter=".filter-auxilary">Auxillary</li>
            </ul>
          </div>
        </div>


          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
          
           <?php
              $query = "SELECT * FROM ecommerce WHERE type = 'covid' ";
              $query_run = mysqli_query($connection, $query);
          ?>

           <?php
            if(mysqli_num_rows($query_run) > 0)        
            {
              while($row = mysqli_fetch_assoc($query_run))
              {
            ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-covid" >
            <div class="portfolio-wrap text-center">
              <div class="card" style="height: 350px; background-color: white;"> <?php  echo $row['image']; ?></div>
              <div class="info">
                <h4 style="font-size: 18px;"><?php  echo $row['text']; ?></h4>
              </div>
              <br>
            </div>
          </div>
        <?php
                } 
            }
        ?> 
         
        </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
          
           <?php
              $query = "SELECT * FROM ecommerce WHERE type = 'auxilary' ";
              $query_run = mysqli_query($connection, $query);
          ?>

           <?php
            if(mysqli_num_rows($query_run) > 0)        
            {
              while($row = mysqli_fetch_assoc($query_run))
              {
            ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-auxilary" >
            <div class="portfolio-wrap text-center">
              <div class="card" style="height: 350px; background-color: white; "> <?php  echo $row['image']; ?></div>
              <div class="info">
                <h4 style="font-size: 18px;"><?php  echo $row['text']; ?></h4>
              </div>
              <br>
            </div>
          </div>
        <?php
                } 
            }
        ?> 
         
        </div>


      </div>
    </section><!-- End Portfolio Section -->  


<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>