<?php session_start(); ?>
<?php include("includes/header.php"); ?>

<link rel="stylesheet" type="text/css" href="css/login-style.css">
<!--===============================================================================================-->
</head>
<body>

<style type="text/css">
	

/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-image: url(./img/splashscreen/splash.PNG);
 	background-repeat: no-repeat;
 	background-size: 1150px;
}



body{
	background-image: url(img/login/back.jpg);
	min-height: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-size: cover;


}

#state {
    font-family: Poppins-Regular;
    color: #333333;
    line-height: 1.2;
    font-size: 18px;
    display: block;
    width: 100%;
    background: transparent;
    height: 60px;
    padding: 0 20px;


}


select {
    outline: none;
    border: none;
}




</style>

<br>


<!-- <div class="se-pre-con"></div> -->

   <header>
    <div class="ol-lg-4">
        <div class="logo">
            <a href="index.php">
                <h3 style="color: white; text-decoration: underline;"><strong>Apna Arunachal </strong></h3>
            </a>
        </div>
    </div>
    </header>

<br>
	
<div class="card col-lg-4">
<div class="card-body">
	<form class="login100-form validate-form flex-sb flex-w"  action="code.php" method="POST">
					<span class="login100-form-title p-b-53">
						Sign Up
					</span>
					 
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" class="form-control" placeholder="Enter Username" required="" >
						<span class="focus-input100"></span>
					</div>



					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100"  type="email" name="email" class="form-control" placeholder="Enter Email" required="" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" class="form-control" placeholder="Enter Password" required="" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Confirm Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100"type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required="">
						<span class="focus-input100"></span>
					</div>

					<?php
		                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
		                    {
		                        echo '<h6> '.$_SESSION['status'].' </h6>';
		                        unset($_SESSION['status']);
		                    }
		                ?>



					<input type="hidden" name="usertype" value="user">

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							State
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "State is required">
                   	
                   	<select name="state" class="input100" type="text" required="" id="state">
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
              		<br>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="user_registerbtn" class="btn btn-primary">
							Sign Up
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Already a member?
						</span>

						<a href="login.php" class="txt2 bo1">
							Sign in now
						</a>
					</div>
				</form>

</div>
</div>	

	   <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <script type="text/javascript">
    	
$(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut(3000);;
    });
    </script>


</body>
</html>