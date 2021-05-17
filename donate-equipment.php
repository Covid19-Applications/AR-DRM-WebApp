<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>


<style type="text/css">
        



.pm{
    background-color: lightpink;
    color: black;   
}

.cm:hover{
    border:2px solid black;
}

.pm:hover{
    border:2px solid black;
}

</style>

<br><br><br>

<img src="img/donate/donate1.jpg" style="height: auto; width: 100%; margin-top: 10px; ">


<br><br>
<div class="container" >
  <div class="jumbotron" style="background-color: #3ded97;">    
    <p>We are indeed thankful to you for considering donating for the fight against COVID 19. As we together ensure that we prevent the spread of Corona amongst people, Government has taken several measure including imposing a Lockdown to prevent community infection and ensuring that the Virus is contained. Government has also launched awareness campaign on Social Distancing and issued orders on Staying Home while ensuring essential supplies.
      <br>
<br>
We have also got inputs from many citizens and organisations regarding their desire to donate Medical equipment and other commodities.<br>
<br>
As per information made available by Ministry of Health and family Welfare, Hospitals are in need of Medical Supplies and equipment. Organizations are encouraged to come forward and donate medical equipment. The list of equipment is as follows:</p>
 
   <a href="pmdonate.php"><button class="pm"> Prime Minister National Releif Fund</button></a>
   
   <a href="https://smarthubgovernment.hdfcbank.com/SmartHubGovt/DirectLoadQuickPay.action;jsessionid=NFIOPMRfdEAYcLsV2bdXhkVD?uniqueSessionIdentifier=073675955786520623540123456789"><button class="pm">
   Chief Minister Releif Fund</button></a>

   <a href="orphan.php"><button class="pm">Orphanage Donations</button></a>

  </div>      



                                

                                      <div class="card-deck">
                                            <div class="card">
                                            <ul >

                                        <li>Digital Infrared Thermometer</li>
                                        <li>Digital Thermal Scanner - Full Body (with sensing to 3m and beyond)</li>
                                        <li>Examination Glove (Large Size)</li>
                                        <li>Examination Glove (Medium Size)</li>
                                        <li>Face Shield</li>
                                        <li>Hand Sanitizer (100 ml)</li>
                                        <li>Hand Sanitizer (500 ml)</li>
                                        <li>N95 face mask with expiratory valve mask</li>
                                        <li>Nitrile Gloves (Size 6.50)</li>

                                          </ul>

                                      </div>

                                       <div class="card">
                                      
                                        <ul >
                                        
                                        <li>Nitrile Gloves (Size 7.00)</li>
                                        <li>Nitrile Gloves (Size 7.50)</li>
                                        <li>Non Sterile Gloves (Disposable)</li>
                                        <li>Personal Protective Coverall (Garments Large Size)</li>
                                        <li>Personal Protective Coverall (Garments Medium Size)</li>
                                        <li>Personal Protective Goggles</li>
                                        <li>Sterile Gloves</li>
                                        <li>Triple Layer Surgical mask</li>
                                        <li>Others</li>

                                         </ul>

                                      </div> 

                                    </div>


<br>
<p>Organizations may choose to donate other items as well. Kindly submit the relevant information in the enclosed form which also has the specifications of items needed and we will get in touch with your authorized representative to facilitate the delivery of items.</p>


<!-- Default form register -->
<form class="text-center border border-light p-5" action="code.php" method="POST">

    <p class="h4 mb-4">Donate Medical Equipments</p>

    <div class="form-row mb-4">
        <div class="col">
            <input type="text"  name="Orgname" id="defaultRegisterFormOrgName"  class="form-control" placeholder="Organizations name" required="">
        </div>

        <div class="col">
        <select name="Orgtype" class="custom-select mb-3" id="defaultRegisterFormOrgType" required="">
              <option name="Orgtype" selected value="Private">Private</option>
              <option value="Public" name="Orgtype">Public</option>
              <option value="NGO" name="Orgtype">NGO</option>
        </select>
        </div>

    </div>



    <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" required="">


    <!-- Phone number -->
    <input type="text"  name="phone" id="defaultRegisterPhonePassword" class="form-control  mb-4 " placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" required="">


    <input type="address" name="address" id="defaultRegisterFormAddress" class="form-control mb-4" placeholder="Address" required="">

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


    <input type="text"   name="pincode" id="defaultRegisterPhonePincode" class="form-control  mb-4" placeholder="Pincode" aria-describedby="defaultRegisterFormPhoneHelpBlock" required="">

    <select name="EquipmentType" class="custom-select mb-4" id="defaultRegisterFormEtype" placeholder = "Item To Be Donated" required="">
                                            <option name=EquipmentType value="">Item To Be Donated</option>
                                            <option name=EquipmentType value="Digital Infrared Thermometer">Digital Infrared Thermometer</option>
                                            <option name=EquipmentType value="Digital Thermal Scanner">Digital Thermal Scanner - Full Body (with sensing to 3m and beyond)</option>
                                            <option name=EquipmentType value="Examination Glove (Large Size">Examination Glove (Large Size)</option>
                                            <option name=EquipmentType value="Examination Glove (Medium Size)">Examination Glove (Medium Size)</option>
                                            <option name=EquipmentType value="Face Shield">Face Shield</option>
                                            <option name=EquipmentType value="Hand Sanitizer (100 ml)">Hand Sanitizer (100 ml)</option>
                                            <option name=EquipmentType value="Hand Sanitizer (500 ml)">Hand Sanitizer (500 ml)</option>
                                            <option name=EquipmentType value="N95 face mask with expiratory valve mask">N95 face mask with expiratory valve mask</option>
                                            <option name=EquipmentType value="Nitrile Gloves (Size 6.50)">Nitrile Gloves (Size 6.50)</option>
                                            <option name=EquipmentType value="Nitrile Gloves (Size 7.00">Nitrile Gloves (Size 7.00)</option>
                                            <option name=EquipmentType value="Nitrile Gloves (Size 7.50)">Nitrile Gloves (Size 7.50)</option>
                                            <option name=EquipmentType value="Non Sterile Gloves (Disposable)">Non Sterile Gloves (Disposable)</option>
                                            <option name=EquipmentType value="Personal Protective Coverall (Garments Large Size)">Personal Protective Coverall (Garments Large Size)</option>
                                            <option name=EquipmentType value="Personal Protective Coverall (Garments Medium Size)">Personal Protective Coverall (Garments Medium Size)</option>
                                            <option name=EquipmentType value="Personal Protective Goggles">Personal Protective Goggles</option>
                                            <option name=EquipmentType value="Sterile Gloves">Sterile Gloves</option>
                                            <option name=EquipmentType value="Triple Layer Surgical mask">Triple Layer Surgical mask</option>
                                            <option name=EquipmentType value="Others">Others</option>
        </select>
    
        <input type="text"  name="quantity" id="defaultRegisterPhonePincode" class="form-control  mb-4" placeholder="Quantity To be Donated" aria-describedby="defaultRegisterFormPhoneHelpBlock" required="">

        <select name="shiptype" class="custom-select mb-3" id="defaultRegisterFormOrgType" required="">
              <option name="shiptype" selected>Delivery Method</option>
              <option name="shiptype" value="Pickup" id="Pickup" >Pickup</option>
              <option name="shiptype" value="Shipping" id="Shipping">Shipping</option>
        </select>




    <input type="address" name="district" id="defaultRegisterFormAddress" class="form-control mb-4" placeholder="District" required="">




     <select name="deltime" class="custom-select mb-3" id="defaultRegisterFormOrgType" required="">
              <option selected>Tentative timeline for delivery of item</option>
              <option value="Immediate"  >Immediate</option>
              <option value="Within 2 weeks">Within 2 weeks</option>
              <option value="Within 2 weeks">Within 4 weeks</option>
              <option value="Within 2 weeks">Within 6 weeks</option>
              <option value="Within 2 weeks">Within 8 weeks</option>
        </select>
    

  <textarea class="form-control" name="msg" rows="5" id="comment" placeholder="Comment"></textarea>

   

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" name="equip_btn" type="submit">Submit</button>

    <!-- Social register -->

    <hr>


    <!-- Terms of service -->
    <p>By clicking
        <em>Submit</em> you agree to our terms of service</a>

</form>
<!-- Default form register -->


</div>



<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>