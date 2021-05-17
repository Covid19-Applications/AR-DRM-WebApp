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
	background-repeat: no-repeat;
	background-position: top;
	background-size: cover;


}

</style>


<br>

    <header>
    <div class="ol-lg-4">
        <div class="logo">
            <a href="index.php">
                <h3 style="color: white; text-decoration: underline;"><strong>Apna Arunachal</strong></h3>
            </a>
        </div>
    </div>
    </header>

<br>
<div class="card col-lg-4">

<div class="card-body">

<form class="login100-form validate-form flex-sb flex-w"  action="code.php" method="POST">
					<span class="login100-form-title p-b-53">
						Sign In
					</span>
					
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100"  type="email" name="emaill" placeholder="Enter Email Address" required="">
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="passwordd" placeholder="Password" required="">
						<span class="focus-input100"></span>
					</div>

					<?php
		                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
		                    {
		                        echo '<h6> '.$_SESSION['status'].' </h6>';
		                        unset($_SESSION['status']);
		                    }
		                ?>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn"  type="submit" name="user_login_btn">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="register.php" class="txt2 bo1">
							Sign up now
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