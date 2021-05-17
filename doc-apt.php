<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<link rel="stylesheet" href="css/doc.css">

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<style type="text/css">
        
  

body{

background-color:  #EF6079;
}   


    </style>

    <!-- header-start -->
                <br><br><br><br>

                <div class="container register" >
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="img/icons/healthcare-and-medical (3).png" alt=""/>
                        <h3 style="color: black;">Doctor's Appointment</h3>
                    </div>
                    <div class="col-md-9 register-right" style="background-color: #3ded97;">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="background-color: #E7717D;">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: black;">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: black;">Doctor</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Patients Personal Details </h3>


                                <form  action="code-patients.php" action="POST">

                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <p>Fill the form below indicating the appoitment type you need. We will get back soon to you for more updates.</p>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name" value="" required=""  name="name" />
                                        </div>

                                        


                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address" name="address" value="" />
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Age" value="" name="age"/>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Phone Number" value=""  name="contact"/>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email" value="" name="email" />
                                            </div>

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

                                      

                                        <h3>Appointment Details</h3>


                                        <p>Which type of appointment you require </p>
                                        <div class="form-group">
                                            <div class="maxl">
                                                
                                                
                                            <input type="text" class="form-control"  placeholder="Type Of Appointment" value=""  name="apt" />

                                                 
                                            </div>
                                        </div>



                                        <div class="col-md-8">

                                        <p>Appoitnment Date</p>
                                        <div class="form-group">

                                            <input type="date" class="form-control"  placeholder="Date" value=""  name="date" />
                                        </div>

                                        </div>
                                        
                                    </div>
                                    <div class="col-md-12">
                                
                                        <button name="Patients_btn" type="submit" class="btnRegister" value="Register" style="background-color: #E7717D; color: black; ">Submit</button>
                                    </div>
                                </form>
                                </div>
                            </div>

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Doctor's Registration</h3>
                                 <form  action="code-doc-apt.php" action="POST">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name *" value="" name="fullname"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" name="email"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" name="phone"/>
                                        </div>

                                        <div class="form-group">
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Doctor's License No." value="" name="license"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address" value="" name="address"/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="timings">
                                                <option class="hidden"  selected disabled>Timings you will be able to serve</option>
                                                <option name="24 Hours">24 Hours</option>
                                                <option name="10AM-5PM">10 AM - 5 PM</option>
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btnRegister" name="doc_apt_btn" value="Register" style="background-color: #E7717D; color: black;">Submit</button>
                                        </div>
                                        </div>
                                    </form>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
<br><br><br><br>



<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>