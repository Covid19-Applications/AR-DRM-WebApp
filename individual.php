<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>
    
<br><br><br><br>

<img src="img/individual/bg.jpg" style="height: auto; width: 100%; margin-top: 5px;" id="icons">

<div class="jumbotron" style="background-color: white;">

<form action="code.php" method="POST">


  <div class="form-row ">
    <div class="form-group col-md-4">
      <label for="inputFullname">Full Name</label>
      <input type="name" class="form-control" id="inputFullname" placeholder="Full Name" name="name" required="">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Email Id</label>
      <input type="email" class="form-control" id="inputPassword4" placeholder="Email" name="email" required="">
    </div>
    <div class="form-group col-md-4">
      <label for="inputMobile">Mobile Number</label>
      <input type="text" class="form-control" id="inputMobile" placeholder="Mobile Number" name="no" required="">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputGender">Gender</label>
      <select id="inputGender" class="form-control" name="gen" required="">
        <option selected>--Select--</option>
        <option value="Male" name="gen">Male</option>
        <option value="Female" name="gen">Female</option>
         <option value="Other" name="gen">Other</option>
      </select>    
    </div>

    <div class="form-group col-md-4">
      <label for="inputDOB">Date Of Birth</label>
      <input type="date" class="form-control" id="inputDOB" placeholder="Date Of Birth" name="dob" required="">
    </div>

    <div class="form-group col-md-4">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="" name="add" required="">
  </div>
  </div>


<div class="form-row">
  
     <div class="form-group col-md-4">
      <label for="inputState">State</label>   <select name="state" class="form-control" required="" >
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
    <div class="form-group col-md-4">
      <label for="inputCity">District</label>
      <input type="text" class="form-control" id="inputCity" name="district" required="">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city" required="">
    </div>
</div>


  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputZip">PinCode</label>
      <input type="text" class="form-control" id="inputZip" name="pincode" required="">
    </div>
    <div class="form-group col-md-8">
      <label for="inputEdu">Availability</label>
      <select id="inputEdu" class="form-control" name="avail" required="">
        <option selected>--Select--</option>
        <option name="im">Immediate</option>
       <option name="24">24 Hour Notice</option>        
      </select>
    </div>
  </div>


  <div class="jumbotron">
     <div class="card ">
    <div class="card-header">Essential Services</div>
    <div class="card-body">
      
      <div class="form-check">

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Assisting District Administration in quarantine, home isolation and law and order arrangements
</label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Disinfection and cleaning services</label></div>

       

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          
Door to door information and service management</label></div>
     </div>     
    
    </div>
  </div> 

     <div class="card ">
    <div class="card-header">Communication</div>
    <div class="card-body">
      
      <div class="form-check">

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Public Awareness on Hygiene practices</label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Promote social distancing measures</label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Community level, RWA, Social Groups, Religious places awareness campaigns.</label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Manning of help lines</label></div>
     </div>     
    
    </div>
  </div> 

     <div class="card ">
    <div class="card-header">Health</div>
    <div class="card-body">
      
      <div class="form-check">

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Paramedic</label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Infection prevention and contro</label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
         Assisting primary healthcare workers</label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Helping elderly and those in need.</label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Dead body management</label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Transportation of patients</label></div>  
     </div>     
    
    </div>
  </div>

     <div class="card ">
    <div class="card-header">Entrepreneurial</div>
    <div class="card-body">
      
      <div class="form-check">

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          


          Assisting in production of PPE, masks, sanitizers etc.
        </label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
         IT based solutions Logistics</label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          Logistics</label></div>

       
     </div>     
    
    </div>
  </div>


  </div>

  <button type="submit" class="btn btn-primary" name="indi_btn" style="margin-left: 40px;">Register</button>
</form>

</div>
  
<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>