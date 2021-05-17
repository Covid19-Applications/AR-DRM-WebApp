<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<link rel="stylesheet" type="text/css" href="css/doc.css">

<style type="text/css">

body{
    background-color:#028a0f;
}

</style>
    <!-- header-end -->
<br><br>

    <div class="container register" style=>
    <div class="row">
        <div class="col-md-3 register-left">
        </div>
        <div class="col-md-9 register-right" style="background-color: lightpink;">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="background-color: #E7717D;">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Employer</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Employee Registration </h3>

                    <form method="POST" action="code.php">
                    <div class="row register-form">
                        <div class="col-md-12">
                            <p>Fill the form below indicating the type of job you need. We will get back soon to you for more updates.</p>

                            <div class="form-group">
                                <input type="text" class="form-control" name="fullname" placeholder="Full Name" value="" required="" />
                            </div>

                           <!--  <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline" name="gender"> 
                                        <input type="radio" name="gender" value="male">
                                        <span> Male </span> 
                                    </label>
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="female">
                                        <span>Female </span> 
                                    </label>
                                </div>
                            </div> -->

                            <div class="col-md-6">

                            <div class="form-group">
                                <input type="text" class="form-control" name="age" placeholder="Age" value="" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" value="" />
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

                            <h3>Specialization Field</h3>


                            <p>In which of the fields you are specialized in ?</p>
                            <div class="form-group" name="field">
                                    <select class="form-control" id="exampleFormControlSelect1"  name="field">
                                      <option name="field" value="Engineering">Engineering</option>
                                      <option name="field" value="Medical">Medical</option>
                                      <option name="field" value="Business">Business</option>
                                      <option name="field" value="Digital Marketing">Digital Marketing</option>
                                      <option name="field" value="Arts">Arts</option>
                                    </select>
                                  </div>

                                    
                                   
                            </div>

                        <div class="col-md-12">
                    
                            <input type="submit" class="btnRegister" name="Employee_btn" value="Register" 
                            style="background-color: #E7717D; color: black;" />
                        </div>
                    </div>
                </form>
                </div>



                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Employer Registration</h3>
                    <div class="row register-form">

                    <form  action="code.php" method="POST">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="cfullname" placeholder="Full Name " value="" />
                            </div>
                            
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" name="phone" class="form-control" placeholder="Phone " value="" />
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
                                <input type="text" class="form-control" placeholder="Which field Employee you required" name="field" value="" />
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control" name="companyname" placeholder="Company Name" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="companyadd" placeholder=" Company Address" value="" />
                            </div>
                            
                            
                            <input type="submit" class="btnRegister" name="Employer_btn" value="Register" 
                            style="background-color: #E7717D; color: black;" />
                        </div>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>